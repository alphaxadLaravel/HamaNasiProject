<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\House;

class MyHouses extends Component
{
    public function render()
    {
        $user_id = session()->get('user')['id'];

        $myHouses = House::where('user_id', $user_id)->get();
        return view('livewire.my-houses',['myHouses'=>$myHouses]);
    }
}
