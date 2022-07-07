<?php

namespace App\Http\Livewire;

use App\Models\Transport;
use Livewire\WithPagination;

use Livewire\Component;

class AdminTransports extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $all_transports = Transport::orderBy('id', 'DESC')->paginate(8);
        return view('livewire.admin-transports',['all_transports'=>$all_transports]);
    }
}
