<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\WishList;
use Livewire\WithPagination;

class WishLists extends Component
{
    // paginating here
    use WithPagination;

    // allow pagination styles with bootstrap here
    protected $paginationTheme = 'bootstrap';

    // delete from wishlist
    public function deleteWish(){

    }

    public function render()
    {
        $user_id = session()->get('user')['id'];

        $my_wishlist = WishList::where('user_id', $user_id)->orderBy('id','DESC')->paginate(8);
        return view('livewire.wish-lists',['my_wishlist'=>$my_wishlist]);
    }
}
