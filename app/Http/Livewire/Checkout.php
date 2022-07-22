<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $step1 = true;
    public $step2;
    public $step3;
    public $branch;

    // Function ya kwenda step 2 wakati wa malipo
    public function goStep2()
    {

        $this->validate([
            'branch' => 'required',
        ]);

        $this->step1 = false;
        $this->step2 = true;
    }

    // Function ya kwenda step3 wakati wa malipo
    public function goStep3(){
        $this->step2 = false;
        $this->step3 = true;
    }

    // Function to go back to step 2
    public function goBackStep2(){
        $this->step3 = false;
        $this->step2 = true;

    }

    // Function to go back to step 1
    public function goBackStep1(){
        $this->step2 = false;
        $this->step1 = true;
    }

    public function mount($id){
        // dd("here");
    }

    public function render()
    {
        
        return view('livewire.checkout');
    }
}
