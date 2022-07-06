<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transport;
class MyVehicles extends Component
{
    public function render()
    {
        $user_id = session()->get('user')['id'];

        $myVehicles = Transport::where('user_id', $user_id)->get();
        return view('livewire.my-vehicles',['myVehicles'=>$myVehicles]);
    }
}
