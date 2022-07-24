<?php

namespace App\Http\Controllers;

use App\Models\Routes;
use Illuminate\Http\Request;

class TransportController extends Controller
{
    // go to add route
    public function gotoAddRoute($id){
        return view('transporter.add_route',['id'=>$id]);
    }
    //Add transport
    public function addRoute($id){

        request()->validate([
            'place_from'=> 'required',
            'place_t0'=> 'required',
            'price'=> 'required',
        ]);

        $agent_id = session()->get('user')['id'];

        Routes::Create([

            'user_id' =>$agent_id,
            'transport_id' => $id,
            'from'=> request('place_from'),
            'price'=> request('price'),
            'to'=> request('place_t0'),
        ]);

        session()->flash('added', '');
        return redirect('/transporter_routes');

    }
}
