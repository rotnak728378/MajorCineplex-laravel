<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
// use Hash;
// use Session;
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
        $data = array();
        if(Session::has('loginId')) {
            $data = User::where('id', '=', Session::get('loginId'))->first();
        }
        if($data->role == 'admin')
            return view('admin.dashboard', compact('data'));
        else return view('admin.staff_dashboard', compact('data'));
    }
    public function addStaff() {
        return view('admin.add_staff');
    }
    public function addMovie() {
        return view('admin.add_movie');
    }
    public function editMovie() {
        return view('admin.edit_movie');
    }
    public function userFeedback() {
        return view('admin.user_feedback');
    }
    public function logout() {
        if(Session::has('loginId')) {
            Session::pull('loginId');
            return redirect('admin-side');
        }
    }
}
