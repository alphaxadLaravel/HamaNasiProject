<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Booking;

class PropertyController extends Controller
{

    // Show the wish list here
    public function bookProperty($house_id){

        $user_id = session()->get('user')['id'];
        $check = Booking::where('user_id',$user_id)->where('house_id',$house_id)->first();

        if($check){

            session()->flash('ipo','');
    
            return redirect('/my_bookings');

        }else{

            Booking::Create([
                'user_id' => $user_id,
                'house_id' => $house_id,
            ]);
    
            session()->flash('booked','');
    
            return redirect('/my_bookings');
        }

    }

    // Book the single property here
    public function goToBookNow(){
        dd("Going to Book Now...");
    }

    


    // show single property here
    public function showProduct($id)
    {

        $single_house = House::where('id', $id)->first();
 

        return view('users.house_details',['single_house'=>$single_house]);
    }

}
