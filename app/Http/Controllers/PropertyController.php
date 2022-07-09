<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;

class PropertyController extends Controller
{

    // Show the wish list here
    public function myWishList(){
        return view('users.my_wishlist');
    }
    // show single property here
    public function showProduct($id)
    {

        $single_house = House::where('id', $id)->first();
 
        // dd($single_house);

        return view('users.house_details',['single_house'=>$single_house]);
    }
}
