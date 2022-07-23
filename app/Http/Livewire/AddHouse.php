<?php

namespace App\Http\Livewire;

use App\Models\Frame;
use App\Models\Home;
use Livewire\WithFileUploads;

use Livewire\Component;
use App\Models\House;
use App\Models\Office;
use App\Models\Room;

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
    public $meeting;
    public $office_rooms;
    public $single_rooms;
    public $self;
    public $sitting_rooms;
    public $toilet;
    public $garden;
    public $parking;
    public $room_type;
    public $room_parking;
    public $frames;

    // image path
    public $path;

    public function addHouse()
    {
        $user_id = session()->get('user')['id'];

        if ($this->purpose == "For Rent") {

            if ($this->category == 'Office') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'period' => 'required',
                    'meeting' => 'required',
                    'office_rooms' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Office::Create([

                    'house_id' => $new_house->id,
                    'rooms' => $this->office_rooms,
                    'hall' => $this->meeting,
                ]);
            }

            if ($this->category == 'Home' || $this->category == 'Appartment') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'period' => 'required',
                    'single_rooms' => 'required',
                    'sitting_rooms' => 'required',
                    'self' => 'required',
                    'toilet' => 'required',
                    'garden' => 'required',
                    'parking' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Home::Create([
                    'house_id' => $new_house->id,
                    'single' => $this->single_rooms,
                    'self' => $this->self,
                    'sitting' => $this->sitting_rooms,
                    'toilet' => $this->toilet,
                    'garden' => $this->garden,
                    'parking' => $this->parking,
                ]);
            }

            if ($this->category == 'Room') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'period' => 'required',
                    'room_type' => 'required',
                    'room_parking' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Room::Create([
                    'house_id' => $new_house->id,
                    'type' => $this->room_type,
                    'parking' => $this->room_parking,
                ]);
            }

            if ($this->category == 'Frame') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'period' => 'required',
                    'frames' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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
                Frame::Create([

                    'house_id' => $new_house->id,
                    'width' => $this->frames,
                ]);
            }
        } elseif ($this->purpose == "For Sell") {

            if ($this->category == 'Office') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'meeting' => 'required',
                    'office_rooms' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Office::Create([

                    'house_id' => $new_house->id,
                    'rooms' => $this->office_rooms,
                    'hall' => $this->meeting,
                ]);
            }

            if ($this->category == 'Home' || $this->category == 'Appartment') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'single_rooms' => 'required',
                    'sitting_rooms' => 'required',
                    'self' => 'required',
                    'toilet' => 'required',
                    'garden' => 'required',
                    'parking' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Home::Create([
                    'house_id' => $new_house->id,
                    'single' => $this->single_rooms,
                    'self' => $this->self,
                    'sitting' => $this->sitting_rooms,
                    'toilet' => $this->toilet,
                    'garden' => $this->garden,
                    'parking' => $this->parking,
                ]);
            }
            
            if ($this->category == 'Room') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'room_type' => 'required',
                    'room_parking' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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

                Room::Create([
                    'house_id' => $new_house->id,
                    'type' => $this->room_type,
                    'parking' => $this->room_parking,
                ]);
            }

            if ($this->category == 'Frame') {
                $this->validate([
                    'regNo' => 'required',
                    'region' => 'required',
                    'district' => 'required',
                    'category' => 'required',
                    'purpose' => 'required',
                    'frames' => 'required',
                    'rent_measure' => 'required',
                    'price' => 'required',
                    'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                    'description' => 'required',
                ]);

                $data['photo'] = $this->photo->store('houses', 'public');

                $new_house = House::Create([
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
                Frame::Create([
                    'house_id' => $new_house->id,
                    'width' => $this->frames,
                ]);
            }

        } else {
            $this->validate([
                'regNo' => 'required',
                'region' => 'required',
                'district' => 'required',
                'category' => 'required',
                'purpose' => 'required',
                'period' => 'required',
                'meeting' => 'required',
                'office_rooms' => 'required',
                'rent_measure' => 'required',
                'price' => 'required',
                'photo' => 'required|mimes:jpg,jpeg,png,webp,gif|max:5048',
                'description' => 'required',
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
