<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\House;
use App\Models\Transport;


class DashboardController extends Controller
{
    function adminDashboard(){
        // get the user idhere
        $user_id = session()->get('user')['id'];

        // Count Users Available
        $user_count = User::all()->where('role', '!=', 'admin')->count();

        // Count my houses here
        $my_houses = House::all()->where('user_id', $user_id)->count();

        // count the Transports
        $my_vehicles = Transport::all()->where('user_id', $user_id)->count();

        // Count All houses here
        $all_houses = House::all()->count();

        return view('admin.dashboard',[
            'user_count'=>$user_count, 
            'my_houses'=>$my_houses,
            'all_houses'=>$all_houses,
            'my_vehicles'=>$my_vehicles,
        ]);
    }
}
