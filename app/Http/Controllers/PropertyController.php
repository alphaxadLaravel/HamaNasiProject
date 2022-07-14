<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\WishList;

class PropertyController extends Controller
{

    // Show the wish list here
    public function myWishList($house_id){

        $user_id = session()->get('user')['id'];
        $check = WishList::where('user_id',$user_id)->where('house_id',$house_id)->first();

        if($check){

            session()->flash('exist','');
    
            return redirect('/my_wishlist');

        }else{

            WishList::Create([
                'user_id' => $user_id,
                'house_id' => $house_id,
            ]);
    
            session()->flash('wish','');
    
            return redirect('/my_wishlist');
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
