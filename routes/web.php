<?php

use Illuminate\Support\Facades\Route;

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
    return view('common.dashboard');
});

// Houses for rent here
Route::get('/house_rent', function () {
    return view('users.house_rent');
});

// House for sell
Route::get('/house_sell', function () {
    return view('users.house_sell');
});

// Transport Route
Route::get('/transport', function () {
    return view('users.transport');
});

// My Requests
Route::get('/my_requests', function () {
    return view('users.my_requests');
});

// My Bookings
Route::get('/my_bookings', function () {
    return view('users.my_bookings');
});

// The checkoutr route here
Route::get('/checkout', function () {
    return view('users.checkout');
});

// House details
Route::get('/property', function () {
    return view('users.house_details');
});

// My wish list here
Route::get('/my_wishlist', function () {
    return view('users.my_wishlist');
});

// profile route here
Route::get('/profile', function () {
    return view('users.profile');
});
