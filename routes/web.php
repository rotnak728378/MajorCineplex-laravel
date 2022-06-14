<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/cinema', function() {
    return view('pages.cinema');
});

Route::get('/movie-booking-info', function() {
    return view('pages.movie-booking-info');
});

Route::get('/promotion', function() {
    return view('pages.promotion');
});

Route::get('/new-activity', function() {
    return view('pages/new-activity');
});

Route::get('/contact', function() {
    return view('pages.contact');
});

Route::get('/admin1111', function() {
    return view('pages.admin');
});
Route::get('/book-ticket', function() {
    return view('pages.seat-booking');
});
Route::get('/book-ticket', [PagesController::class, 'ticketBooking']);

Route::get('/pages/', [PagesController::class, 'home']);
Route::get('/pages/home', [PagesController::class, 'home']);