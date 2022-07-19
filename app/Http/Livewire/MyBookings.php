<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Booking;
use Livewire\WithPagination;

class MyBookings extends Component
{
        // paginating here
        use WithPagination;

        // allow pagination styles with bootstrap here
        protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $user_id = session()->get('user')['id'];

        $my_bookings = Booking::where('user_id', $user_id)->orderBy('id','DESC')->paginate(8);
        return view('livewire.my-bookings',['my_bookings'=>$my_bookings]);
    }
}
