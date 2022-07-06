<?php

namespace App\Http\Livewire;

use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\House;

class AddHouse extends Component
{
    use WithFileUploads;

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

    // image path
    public $path;

    public function addHouse()
    {
        $user_id = session()->get('user')['id'];

        if ($this->purpose == "For Rent") {

            $this->validate([
                'regNo' => 'required',
                'region' => 'required',
                'district' => 'required',
                'category' => 'required',
                'purpose' => 'required',
                'period' => 'required',
                'rent_measure' => 'required',
                'price' => 'required',
                'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                'description' => 'required',
            ]);

            $data['photo'] = $this->photo->store('houses', 'public');

            House::Create([
                'regNumber' => $this->regNo,
                'region' => $this->region,
                'district' => $this->district,
                'category' => $this->category,
                'purpose' => $this->purpose,
                'rent_period' => $this->period . " " . $this->rent_measure,
                'price' => $this->price,
                'photos' => $data['photo'],
                'description' => $this->description,
                'user_id' => $user_id,
            ]);
        } elseif ($this->purpose == "For Sell") {
            $this->validate([
                'regNo' => 'required',
                'region' => 'required',
                'district' => 'required',
                'category' => 'required',
                'purpose' => 'required',
                'price' => 'required',
                'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                'description' => 'required',
            ]);

            $data['photo'] = $this->photo->store('houses', 'public');

            House::Create([
                'regNumber' => $this->regNo,
                'region' => $this->region,
                'district' => $this->district,
                'category' => $this->category,
                'purpose' => $this->purpose,
                'price' => $this->price,
                'photos' => $data['photo'],
                'description' => $this->description,
                'user_id' => $user_id,
            ]);
        }


        $this->regNo = "";
        $this->region = "";
        $this->district = "";
        $this->category = "";
        $this->purpose = "";
        $this->period = "";
        $this->rent_measure = "";
        $this->price = "";
        $this->photo = "";
        $this->description = "";

        session()->flash('added_house', '');
        return redirect('/house_agent_houses');
    }

    public function mount()
    {
    }
    // togle the form here
    public $column = "";

    public function render()
    {
        if ($this->purpose == "For Rent") {

            $this->column = true;
        } else {

            $this->column = false;
        }

        return view('livewire.add-house', ['column' => $this->column]);
    }
}
