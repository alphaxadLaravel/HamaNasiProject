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

// Transport Details route here
Route::get('/transport_details', function () {
    return view('users.transport_details');
});


// Admin Dahbosrd route hree
Route::get('/admin_dashboard', function () {
    return view('admin.dashboard');
});

// Admin Users route here
Route::get('/users', function () {
    return view('admin.users');
});

// Admin manage Transports
Route::get('/admin_transport', function () {
    return view('admin.transports');
});

// Admin houses
Route::get('/admin_houses', function () {
    return view('admin.houses');
});

// All transactions here
Route::get('/transactions', function () {
    return view('admin.transactions');
});

// Transporter Requests
Route::get('/transporter_requests', function () {
    return view('transporter.requests');
});

// Transport routes
Route::get('/transporter_routes', function () {
    return view('transporter.routes');
});

// My service sroute here
Route::get('/transporter_services', function () {
    return view('transporter.my_vehicles');
});

// Bookings recived by house Agent
Route::get('/house_agent_bookings', function () {
    return view('house_agent.bookings');
});

// House agent Houses here
Route::get('/house_agent_houses', function () {
    return view('house_agent.my_houses');
});

// Add houses here
Route::get('/house_agent_add_house', function () {
    return view('house_agent.new_house');
});

