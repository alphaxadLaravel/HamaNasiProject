<?php

namespace App\Http\Livewire;

use App\Models\House;
use Livewire\WithPagination;

use Livewire\Component;

class AdminHouses extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $all_houses = House::orderBy('id', 'DESC')->paginate(8);
        return view('livewire.admin-houses',['all_houses'=>$all_houses]);
    }
}
