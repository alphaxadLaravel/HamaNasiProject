<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;


class Users extends Component
{

    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    // Approve Account Here
    function approove($id){
        User::where('id',$id)->update([
            'status'=>'Allowed..'
        ]);
         
        session()->flash('allowed','');
        
    }

    // Block the User here
    function block($id){
        User::where('id',$id)->update([
            'status'=>'Blocked...'
        ]);
         
        session()->flash('blocked','');
        
    }

    public function render()
    {
        $users = User::where('role', '!=', 'admin')->orderBy('id','DESC')->paginate(10);
        return view('livewire.users', ['users' => $users]);
    }
}
