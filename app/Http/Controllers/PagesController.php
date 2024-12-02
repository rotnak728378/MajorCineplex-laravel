<?php

namespace App\Http\Controllers;

use App\Mail\CustomerFeedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Message;
use App\Models\BookedTickets;
use App\Models\MovieInfo;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class PagesController extends Controller
{
    public function home() {
        $movies = DB::table('table_movie')
        ->where('display', true)
        ->where('showing', 'Now Showing')
        ->orderBy('release_date', 'desc')
        ->get();
        $movies_soon = DB::table('table_movie')
        ->where('display', true)
        ->where('showing', 'Coming Soon')
        ->orderBy('release_date', 'desc')
        ->get();

        return view('pages.home', ['movies'=>$movies, 'movies_soon'=>$movies_soon]);
    }
    public function search() {
        $searchInput = $_GET['search'];
        $data = MovieInfo::where('movie_title', 'like', '%'.$searchInput.'%')->get();
        return view('pages.search', ['movies'=>$data, 'searchInput'=>$searchInput]);
    }
    public function autocomplete(Request $request)
    {
        $data = MovieInfo::select("movie_title")
                ->where("movie_title","LIKE","%{$request->query}%")
                ->get();
        return response()->json($data);
    }
    public function movieBookingInfo(Request $request) {
        $m_id = $request->id;
        $movies = DB::select('select * from table_movie where display=true and movie_id = ?', [$m_id ]);
        return view('pages.movie-booking-info', ['movies'=>$movies]);
    }
    // cinema/{id}
    public function movieCinema(Request $req) {
        $c_id = $req->id;
        if($c_id==1) {
            $movies = DB::select('select * from table_movie where display=true and cinema_id1=?', [$c_id]);
            return view('pages.movie_each_cinema', ['movies'=>$movies]);
        }
        else if($c_id==2) {
            $movies = DB::select('select * from table_movie where display=true and cinema_id2=?', [$c_id]);
            return view('pages.movie_each_cinema', ['movies'=>$movies]);
        }
        else if($c_id==3) {
            $movies = DB::select('select * from table_movie where display=true and cinema_id3=?', [$c_id]);
            return view('pages.movie_each_cinema', ['movies'=>$movies]);
        }
        else if($c_id==4) {
            $movies = DB::select('select * from table_movie where display=true and cinema_id4=?', [$c_id]);
            return view('pages.movie_each_cinema', ['movies'=>$movies]);
        }
        else if($c_id==5) {
            $movies = DB::select('select * from table_movie where display=true and cinema_id5=?', [$c_id]);
            return view('pages.movie_each_cinema', ['movies'=>$movies]);
        }
    }
    public function ticketBooking(Request $request) {
        $m_id = $request->id;
        $movies = DB::select('select * from table_movie where display=true and movie_id = ?', [$m_id ]);
        $cinemas = DB::select('select cinemas.cinema_id, cinemas.cinema_name, cinemas.cinema_location, cinemas.cinema_contact, table_movie.movie_id from cinemas INNER join table_movie on cinema_id=cinema_id1 or cinema_id=cinema_id2 or cinema_id=cinema_id3 or cinema_id=cinema_id4 or cinema_id=cinema_id5 where table_movie.display=true and movie_id=?', [$m_id]);

        foreach($movies as $movie) {
            $temp = $movie->show_time;
        }
        $times = explode('|', $temp);

        $seats = DB::select('select seats from table_booked where movie_id=?', [$m_id]);
        $temp_str = "";
        $test ="";
        foreach($seats as $seat) {
            $temp_str = $seat->seats;
            $test = $test ? $test.",".$temp_str : $temp_str;

        }
        $arr_seats = explode(',', $test);
        $occupied = [];

        foreach(range(1, 10) as $y) {
            foreach(range(1, 16) as $x) {
                foreach($arr_seats as $z) {
                    if($z == chr(75-$y).$x) {
                        $occupied[chr(75-$y).$x] = "occupied";
                        break;
                    }
                    else {
                        $occupied[chr(75-$y).$x] = null;
                    }
                }
            }
        }
        // return implode(' - ', $occupied);
        return view('pages.seat-booking', ['movies'=>$movies, 'cinemas'=>$cinemas, 'times'=>$times, 'occupied'=>$occupied]);
    }
    public function fetchCinema() {
        $cinemas = DB::select('select * from cinemas');
        return view('pages.cinema', ['cinemas'=>$cinemas]);
    }
    public function contact() {
        return view('pages.contact');
    }
    public function sent(Request $req) {
        $details=[
            'title'=>"Username: ".$req->firstname." ".$req->surname." | Email: ".$req->email." | Phone number: ".$req->phone,
            'body'=>$req->message
        ];
        Mail::to("hangrotnak8@gmail.com")->send(new CustomerFeedback($details));
        $msg = new Message();
        $msg->first_name = $req->firstname;
        $msg->last_name = $req->surname;
        $msg->email = $req->email;
        $msg->phone = $req->phone;
        $msg->message = $req->message;
        $msg->save();
        $status = $msg->save();
        if($status) {
            return redirect('contact/sent');
        }
        else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
    public function sendContact() {
        return view('pages.thanks');
    }
    public function storeBooked(Request $request) {
        $request->validate([
            'Name'=>'required',
            'phoneNo'=> 'required',
            'email'=>'required|email',
            'cinema'=>'required',
            'time'=>'required'
        ]);
        $user = new BookedTickets();
        $user->name = $request->Name;
        $user->phone = $request->phoneNo;
        $user->email = $request->email;
        $user->gender = $request->Gender;
        if($request->submit == 'payment') {
            $user->payment = "paid";
        }
        else{
            $user->payment = "reserved";
        }

        $watchDate = Carbon::parse($request->date);
        $watchTime = $request->time;
        $split = explode(":", $watchTime);
        $watchDate->addHours($split[0]);
        $watchDate->addMinutes($split[1]);

        $user->watch_time = $watchDate;
        $user->cinema_id = $request->cinema;
        $user->movie_id = $request->movieid;
        //convert array to string
        $user->seats = implode(",", $request->seats);
        $user->ticket_checkin = 'progress';
        $status = $user->save();

        $info = ["user"=>$request->Name, "time"=>$request->time, "cinema"=>$request->cinemaName, "seat"=>implode(",", $request->seats), "title"=>$request->movieTitle, "poster"=>$request->moviePoster];


        if($status) {
            switch ($request->submit) {
                case 'payment':
                    // payment
                    return view('pages.paid-thank', ['info'=>$info]);

                case 'reserve':
                    // reserve
                    return view('pages.reserve-thank', ['info'=>$info]);
            }
        }
        else {
            return back()->with('fail', 'Something went wrong!');
        }
    }
}
