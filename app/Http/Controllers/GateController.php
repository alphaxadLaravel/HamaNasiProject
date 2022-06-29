<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GateController extends Controller
{
    public function agents(){

        request()->validate([
            'fullname' => 'required|string|min:5|max:30',
            'username' => 'required|string|min:5|max:10',
            'phone' => 'required|string|min:5|max:10',
      ]); 


    }
}
