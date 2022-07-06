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
Route::get('/', [PagesController::class, 'home']);
Route::get('/search-result/{id}', [PagesController::class, 'searchResult']);
Route::post('/search', [PagesController::class, 'search'])->name('search');
Route::get('autocomplete', [PagesController::class, 'autocomplete'])->name('autocomplete');
Route::get('/cinema', [PagesController::class, 'fetchCinema']);

Route::get('/movie-booking-info/{id}', [PagesController::class, "movieBookingInfo"]);

Route::get('/promotion', function() {
    return view('pages.promotion');
});

Route::get('/new-activity', function() {
    return view('pages/new-activity');
});
Route::get('/contact', [PagesController::class, 'contact']);
Route::post('/sent', [PagesController::class, 'sent'])->name('sent');
Route::get('/contact/sent', [PagesController::class, 'sendContact']);
Route::get('/cinema/{id}', [PagesController::class, 'movieCinema']);
Route::get('/movie-booking-info/{id}/book-ticket', [PagesController::class, 'ticketBooking']);
Route::post('/booking-process', [PagesController::class, 'storeBooked']);

// Admin side
Route::get('/admin-side', [AdminController::class, 'login']);
Route::post('/login-user', [AdminController::class, 'loginUser'])->name('login-user');
Route::get('/dashboard', [AdminController::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/add-staff', [AdminController::class, 'addStaff'])->middleware('isLoggedIn');
Route::get('/add-movie', [AdminController::class, 'addMovie'])->middleware('isLoggedIn');
Route::post('/add-movie', [AdminController::class, 'postMovie'])->middleware('isLoggedIn');
Route::get('/edit/{id}', [AdminController::class, 'editMovie'])->middleware('isLoggedIn');
Route::post('/edit', [AdminController::class, 'edit'])->middleware('isLoggedIn')->name('edit');
Route::get('/remove/{id}', [AdminController::class, 'remove'])->middleware('isLoggedIn');
Route::get('/ticket-library', [AdminController::class, 'ticketLibrary'])->middleware('isLoggedIn');
Route::get('/feedback', [AdminController::class, 'userFeedback'])->middleware('isLoggedIn');
Route::get('/logout', [AdminController::class, 'logout']);

