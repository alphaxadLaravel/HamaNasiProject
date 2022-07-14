<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GateController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;


// Welcome Page here
Route::get('/', function () {
    return view('common.index');
});

// Signup page here
Route::get('/signup', function () {
    return view('outside.signup');
});

// Agent signup
Route::get('/agent_signup', function () {
    return view('outside.agent_signup');
});

// Rogin route here
Route::get('/login', function () {
    return view('outside.login');
});

// Users Dashboard Home Page
Route::get('/home',[HomeController::class,'homeSamples']);


// Show all houses here
Route::get('/all_houses', function () {
    return view('users.houses');
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

// My payments i made
Route::get('/my_payments', function () {
    return view('users.my_payments');
});


// The checkoutr route here
Route::get('/checkout', function () {
    return view('users.checkout');
});


// get single house here
Route::get('/property/{id}',[PropertyController::class,'showProduct']);


// add wish list here
Route::get('/my_wishlist/{id}',[PropertyController::class,'myWishList']);

// go to wish list age here
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
Route::get('/dashboard',[DashboardController::class,'adminDashboard']);

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

// Add new vehicle
Route::get('/transporter_new_vehicle', function () {
    return view('transporter.new_vehicle');
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


// Register an Agent here
Route::post('/agent_auth',[GateController::class,'agents']);

// Register normal user hapa
Route::post('/user_signup',[GateController::class,'normalUser']);

// Login all users here
Route::post('/login_users',[GateController::class,'login']);

// Addd new house routr here
Route::post('/login_users',[GateController::class,'login']);



