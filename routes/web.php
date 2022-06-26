<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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
//User side
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
Route::get('/movie-cinema', [PagesController::class, 'movieCinema']);
Route::get('/book-ticket', function() {
    return view('pages.seat-booking');
});
Route::get('/book-ticket', [PagesController::class, 'ticketBooking']);

Route::get('/pages/', [PagesController::class, 'home']);
Route::get('/pages/home', [PagesController::class, 'home']);

// Admin side
Route::get('/admin-side', [AdminController::class, 'login']);
Route::post('/login-user', [AdminController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/add-staff', [AdminController::class, 'addStaff'])->middleware('isLoggedIn');
Route::get('/add-movie', [AdminController::class, 'addMovie'])->middleware('isLoggedIn');
Route::get('/edit-movie', [AdminController::class, 'editMovie'])->middleware('isLoggedIn');
Route::get('/feedback', [AdminController::class, 'userFeedback'])->middleware('isLoggedIn');
Route::get('/logout', [AdminController::class, 'logout']);
