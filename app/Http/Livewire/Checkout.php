<?php

namespace App\Http\Livewire;

use App\Models\Bank;
use App\Models\Branches;
use App\Models\House;
use Livewire\Component;

class Checkout extends Component
{
    public $step1 = true;
    public $step2;
    public $step3;
    public $branch;
    public $vat;

    public $phone;
    public $pin;
    public $house_id;

    public $credit = false;
    public $money = false;


    // Function ya kwenda step 2 wakati wa malipo
    public function goStep2()
    {

        $this->validate([
            'branch' => 'required',
        ]);

        $this->step1 = false;
        $this->step2 = true;
        if ($this->branch == "Bank") {
            $this->credit = true;
            $this->money = "";
        } else if ($this->branch == "Airtel Money" || $this->branch == "M-Pesa" || $this->branch == "Tigo Pesa") {
            $this->money = true;
            $this->credit = "";
        }
    }

    // Function ya kwenda step3 wakati wa malipo
    public function goStep3()
    {
        $this->step2 = false;
        $this->step3 = true;
    }

    // Function to go back to step 2
    public function goBackStep2()
    {
        $this->step3 = false;
        $this->step2 = true;
    }

    // Function to go back to step 1
    public function goBackStep1()
    {
        $this->step2 = false;
        $this->step1 = true;
    }

    public function mount($id)
    {
        // dd($id);
        $this->house_id = $id;
    }

    public function checkout()
    {
        if ($this->branch == "Airtel Money" || $this->branch == "M-Pesa" || $this->branch == "Tigo Pesa") {
            $this->validate([
                'phone' => 'required',
                'pin' => 'required',
            ]);

            $phone = Branches::where('phone', $this->phone)->where('pin', $this->pin)->first();

            if ($phone) {
                $house = House::where('id', $this->house_id)->first();

                if ($phone->branch == $this->branch) {

                    if ($phone->amount > $house->price) {
                        $new_amount = $phone->amount - $house->price;

                        if ($house->purpose == "For Rent") {
                            $this->vat = 0.4 * $house->price;

                        } else {
                            $this->vat = 0.1 * $house->price;
                        }

                        Branches::where('phone', $phone)->update([
                            'amount' => $new_amount
                        ]);

                        $bank = Bank::where('account', '00001')->first();
                        $profit = $bank->amount + $this->vat;

                        Bank::where('account', '00001')->update([
                            'amount' =>$profit
                        ]);

                        session()->flash('payed');
                        return redirect('/my_payments');
                        
                    } else {
                        session()->flash('amount');
                    }
                } else {
                    session()->flash('branch');
                }
            } else {
                session()->flash('account');
            }
        }
    }

    public function render()
    {

        return view('livewire.checkout');
    }
}
