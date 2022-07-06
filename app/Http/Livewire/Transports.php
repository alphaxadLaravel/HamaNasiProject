<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Transport;
use Livewire\WithPagination;

class Transports extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $all_transports = Transport::orderBy('id','DESC')->paginate(8);
        return view('livewire.transports',['all_transports'=>$all_transports]);
    }
}
