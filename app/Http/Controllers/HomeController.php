<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\House;
use App\Models\Transport;

class HomeController extends Controller
{
    public function homeSamples(){
        $sample_houses = House::limit(4)->orderby('id','DESC')->get();
        $sample_transports = Transport::limit(4)->orderby('id','DESC')->get();
        return view('common.dashboard',['sample_houses'=>$sample_houses, 'sample_transports'=>$sample_transports]);
    }
}
