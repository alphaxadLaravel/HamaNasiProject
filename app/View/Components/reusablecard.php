<?php

namespace App\View\Components;

use Illuminate\View\Component;

class reusablecard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $image;
    public $price;
    public $status;
    public $type;
    public $location;
     public function __construct($image, $price, $status, $type, $location)
    {
        $this->image = $image;
        $this->price = $price;
        $this->status = $status;
        $this->type = $type;
        $this->location = $location;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reusablecard');
    }
}
