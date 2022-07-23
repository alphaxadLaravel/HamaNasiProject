<?php

namespace App\Http\Livewire;

use App\Models\Routes;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\Transport;

class AddTransport extends Component
{
    use WithFileUploads;
    public $plate;
    public $photo;
    public $type;
    public $place_from1;
    public $price_1;
    public $place_t01;
    public $place_from2;
    public $place_t02;
    public $price_2;
    public $description;

    // add new Transport hre
    public function addTransport()
    {

        $this->validate([
            'plate' => 'required',
            'type' => 'required',
            'place_from1' => 'required',
            'price_1' => 'required',
            'place_t01' => 'required',
            'place_from2' => 'required',
            'place_t02' => 'required',
            'price_2' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
            'description' => 'required',
        ]);

        $data['photo'] = $this->photo->store('transports', 'public');

        $user_id = session()->get('user')['id'];

        $transport = Transport::Create([
            'plate' => $this->plate,
            'user_id' => $user_id,
            'type' => $this->type,
            'photo' => $data['photo'],
            'description' => $this->description,
        ]);

        Routes::Create([
            'user_id' => $user_id,
            'transport_id' => $transport->id,
            'from' => $this->place_from1,
            'to' => $this->place_t01,
            'price' => $this->price_1,
        ]);

        Routes::Create([
            'user_id' => $user_id,
            'from' => $this->place_from2,
            'transport_id' => $transport->id,
            'to' => $this->place_t02,
            'price' => $this->price_2,
        ]);

        session()->flash('added_transport', '');

        return redirect('/transporter_services');
    }
    public function render()
    {
        return view('livewire.add-transport');
    }
}
