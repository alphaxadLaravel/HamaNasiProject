@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"> 💸 All Transactions!</h5>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Transactions</option>
                            <option value="option-2">House Payments</option>
                            <option value="option-3">Transport Transactions</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @livewire('transactions')
@endsection
