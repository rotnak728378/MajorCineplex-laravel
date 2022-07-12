<?php

namespace App\Http\Controllers;

use App\Models\BookedTickets;
use App\Models\MovieInfo;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login() {
        return view('admin.admin');
    }
    public function loginUser(Request $request) {
        $request->validate([
            'name'=>'required',
            'password'=>'required|min:8'
        ]);
        $user = User::where('name', '=', $request->name)->first();

        if($user) {
            if(Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else {
                return back()->with('fail', "Password is not matches.");
            }
        }
        else {
            return back()->with('fail', 'This email is not registered.');
        }
    }
    public function dashboard() {
        $movies = DB::select('select * from table_movie where display=true order by movie_title');
        $cinemas = DB::select('select * from cinemas');
        $customers = DB::select('select * from table_booked');
        $paid_seat = DB::select('select * from table_booked where payment="paid"');
        $msg = DB::select('select * from table_message');
        $staffs = DB::select('select * from users where role="staff"');
        $seats_count = 0;
        foreach($paid_seat as $p) {
            $seats_count += count(explode(',',$p->seats));
        }
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        if($data->role == 'admin')
            return view('admin.dashboard', ['data'=>$data, 'movies'=>$movies, 'cinemas'=>$cinemas, 'customers'=>$customers, 'seats_amount'=>$seats_count, 'msg'=>$msg, 'staffs'=>$staffs]);
        else return view('admin.staff_dashboard', ['data'=>$data, 'movies'=>$movies]);
    }
    public function addStaff() {
        return view('admin.add_staff');
    }
    public function addMovie() {
        return view('admin.add_movie');
    }
    public function edit(Request $req) {
        $input = $req->all();
        if($req->file('image')) {
            $fileName = time().$req->file('image')->getClientOriginalName();
            $path = $req->file('image')->storeAs('images', $fileName, 'public');
            $input["poster"] = '/storage/'.$path;
            $path_dir = '/storage/'.$path;
        } 
        else {
            $path_dir = $req->posterhidden;
        }
       
        DB::table('table_movie')->where('movie_id', $req->mId)->update(
            [
                'poster' => $path_dir,
                'movie_title' => $req->movie_title,
                'release_date' => $req->release_date,
                'due_date' => $req->due_date,
                'duration' => $req->duration,
                'genre' => $req->genre,
                'trailer' => $req->trailer,
                'description' => $req->description,
                'showing' => $req->showing,
                'cinema_id1' => $req->cinema_id1,
                'cinema_id2' => $req->cinema_id2,
                'cinema_id3' => $req->cinema_id3,
                'cinema_id4' => $req->cinema_id4,
                'cinema_id5' => $req->cinema_id5,
                'show_time' => $req->show_time
            ]
        );
        return redirect('edit/'.$req->mId)->with('success', 'Record has been updated');
    }
    public function editMovie(Request $req) {
        $m_id = $req->id;
        $data = DB::select('select * from table_movie where display=true and movie_id=?', [$m_id]);
        return view('admin.edit_movie', ['data'=>$data]);
    }
    public function remove(Request $req) {
        $m_id = $req->id;
        DB::table('table_movie')->where('movie_id', $m_id)->update(['display'=>false]);
        return redirect('/dashboard')->with('success', 'Record has been remove');
    }
    public function postMovie(Request $req) {
        $input = $req->all();
        $fileName = time().$req->file('image')->getClientOriginalName();
        $path = $req->file('image')->storeAs('images', $fileName, 'public');
        $input["poster"] = '/storage/'.$path;
        
        // MovieInfo::create($input);

        $data = new MovieInfo();
        $data->poster = '/storage/'.$path;
        $data->movie_title = $req->movie_title;
        $data->release_date = $req->release_date;
        $data->due_date = $req->due_date;
        $data->duration = $req->duration;
        $data->genre = $req->genre;
        $data->trailer = $req->trailer;
        $data->description = $req->description;
        $data->showing = $req->showing;
        $data->cinema_id1 = $req->cinema_id1;
        $data->cinema_id2 = $req->cinema_id2;
        $data->cinema_id3 = $req->cinema_id3;
        $data->cinema_id4 = $req->cinema_id4;
        $data->cinema_id5 = $req->cinema_id5;
        $data->show_time = $req->show_time;

        $status = $data->save();
        if($status) {
            return back()->with('success', 'This movie has been uploaded');
        }
        else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
    public function ticketLibrary() {
        $data = DB::select('select movie_title, poster, name, cinema_name, seats, ticket_checkin,watch_time, table_booked.created_at from table_booked inner join table_movie inner join cinemas on table_booked.movie_id=table_movie.movie_id and table_booked.cinema_id=cinemas.cinema_id where display=true and payment="paid" order by movie_title');
        $data_reserved = DB::select('select movie_title, poster, name, cinema_name, seats, ticket_checkin,watch_time, table_booked.created_at from table_booked inner join table_movie inner join cinemas on table_booked.movie_id=table_movie.movie_id and table_booked.cinema_id=cinemas.cinema_id where display=true and payment="reserved" order by movie_title');
        return view('admin.ticket_library', ['data'=>$data, 'data_reserved'=>$data_reserved]);
    }
    public function userFeedback() {
        $msg = DB::select('select * from table_message order by message_id desc');
        return view('admin.user_feedback', ['msg'=>$msg]);
    }
    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('admin-side');
        }
    }

    public function searchAdmin() {
        $search_text = $_GET['query'];
        $movies = MovieInfo::where('movie_title', 'like', '%'.$search_text.'%')->get();
        
        $temp_pur = 'select movie_title, poster, name, cinema_name, seats, ticket_checkin,watch_time, table_booked.created_at from table_booked inner join table_movie inner join cinemas on table_booked.movie_id=table_movie.movie_id and table_booked.cinema_id=cinemas.cinema_id where display=true and (movie_title like "%'.$search_text.'%" or name like "%'.$search_text.'%") and payment="paid"';
        $pur_user = DB::select($temp_pur);

        $temp_res = 'select movie_title, poster, name, cinema_name, seats, ticket_checkin, watch_time, table_booked.created_at from table_booked inner join table_movie inner join cinemas on table_booked.movie_id=table_movie.movie_id and table_booked.cinema_id=cinemas.cinema_id where display=true and (movie_title like "%'.$search_text.'%" or name like "%'.$search_text.'%") and payment="reserved"';
        $res_user = DB::select($temp_res);
        return view('admin.search', ['movies'=>$movies, 'search_text'=>$search_text, 'data'=>$pur_user, 'data_reserved'=>$res_user]);
    }
}
