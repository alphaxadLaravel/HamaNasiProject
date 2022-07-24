<?php

namespace App\Http\Livewire;

use App\Models\Transport;
use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        $fullname = session()->get('user')['fullname'];

        $my_transaction = Transport::where('from', $fullname)->get();

        return view('livewire.transaction',);
    }
}
