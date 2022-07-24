<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Booking;
use App\Models\House;
use Carbon\Carbon;
use Livewire\WithPagination;

class MyBookings extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    public $check_bookings;
    protected $paginationTheme = 'bootstrap';

    public function mount(){

        $books = Booking::where('created_at', '<', Carbon::now()->subMinute(1))->update([
            'status'=>'Time Out'
        ]);

        $this->check_bookings = Booking::where('status','Time Out')->get();

        for ($i = 0; $i < count($this->check_bookings); $i++) {
            House::where('id', $this->check_bookings[$i]->house_id)->update([
                'status'=>'Available'
            ]);

            $books = Booking::where('created_at', '<', Carbon::now()->subMinute(1))->delete();
        }
        
    }

    public function render()
    {
        $user_id = session()->get('user')['id'];



        $my_bookings = Booking::where('user_id', $user_id)->where('status','Booked')->orderBy('id', 'DESC')->paginate(8);
        return view('livewire.my-bookings', ['my_bookings' => $my_bookings]);
    }
}
