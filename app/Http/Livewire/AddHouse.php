<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddHouse extends Component
{
    public $regNo;
    public $region;
    public $district;
    public $category;
    public $purpose;
    public $period;
    public $rent_measure;
    public $price;
    public $photo;
    public $description;

    public function addHouse(){
        $this->validate([
            'regNo'=>'required',
            'region'=>'required',
            'district'=>'required',
            'category'=>'required',
            'purpose'=>'required',
        ]);
    }

    public function render()
    {
        return view('livewire.add-house');
    }
}
