<?php
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\VenueController;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users/create', [UsersController::class, 'store']);
Route::get('/users/{user}', [UsersController::class, 'edit']);
Route::post('/users/{user}', [UsersController::class, 'update']);
Route::delete('/users/delete/{user}', [UsersController::class, 'delete']);


Route::get('/bookings', [BookingController::class, 'index'])->name('bookings');
Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings');
Route::post('/bookings/create', [BookingController::class, 'store'])->name('bookings');
Route::get('/bookings/{booking}', [BookingController::class, 'edit']);
Route::post('/bookings/{booking}', [BookingController::class, 'update']);
Route::delete('/bookings/delete/{booking}', [BookingController::class, 'delete']);



Route::get('/venues', [VenueController::class, 'index'])->name('venues');
Route::get('/venues/create', [VenueController::class, 'create'])->name('venues');
Route::post('/venues/create', [VenueController::class, 'store'])->name('venues');
Route::get('/venues/{venue}', [VenueController::class, 'edit']);
Route::post('/venues/{venue}', [VenueController::class, 'update']);
Route::delete('/venues/delete/{venue}', [VenueController::class, 'delete']);
