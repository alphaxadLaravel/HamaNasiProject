<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Transport;
class AddTransport extends Component
{
    use WithFileUploads;
    public $plate;
    public $region;
    public $district;
    public $photo;
    public $type;
    public $price;
    public $description;

    // add new Transport hre
    public function addTransport(){

        $this->validate([
            'plate' => 'required',
            'type' => 'required',
            'region' => 'required',
            'district' => 'required',
            'price' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
            'description' => 'required',
        ]);

        $data['photo'] = $this->photo->store('transports', 'public');

        $user_id = session()->get('user')['id'];

        Transport::Create([
            'plate' => $this->plate,
            'user_id' => $user_id,
            'type' => $this->type,
            'region' => $this->region,
            'district' => $this->district,
            'price' => $this->price,
            'photo' => $data['photo'],
            'description' => $this->description,
        ]);

        session()->flash('added_transport', '');
        
        return redirect('/transporter_services');

    }
    public function render()
    {
        return view('livewire.add-transport');
    }
}
