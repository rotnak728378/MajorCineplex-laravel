<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
    }
    public function movieCinema() {
        return view('pages.movie_each_cinema');
    }
    public function ticketBooking() {
        return view('pages.seat-booking');
    }
}
