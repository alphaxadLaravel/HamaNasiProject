<?php

namespace App\View\Components;

use Illuminate\View\Component;

class reusableTransport extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $image;
    public $price;
    public $type;
    public $location;
    public function __construct($image, $price, $type, $location)
    {
        $this->image = $image;
        $this->price = $price;
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
        return view('components.reusable-transport');
    }
}
