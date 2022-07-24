<?php

namespace App\Http\Livewire;

use App\Models\Booking;
use App\Models\House;
use Carbon\Carbon;
use Livewire\WithPagination;

use Livewire\Component;

class Houses extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap hereZZ
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
        $booked = "Booked";
        $Available = "Available";
        // ;
        $all_houses = House::where('status',$booked)->orWhere('status',$Available)->orderBy('id','DESC')->paginate(8);

        return view('livewire.houses',['all_houses'=>$all_houses]);
    }
}
