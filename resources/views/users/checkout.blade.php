@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">

        <div class="col-auto">
            <h5 class="mb-0"><i class="mdi mdi-cash-usd text-primary"></i> checkout</h5>
        </div>

        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <a class="btn app-btn-primary" href="/transport"> <i class="mdi mdi-truck-fast"></i>
                            Request Transport</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- steps ziko hapa -->
        <div class="row g-1 my-4 align-items-center justify-content-between">
            <div class="row g-2">

                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm rounded overflow-hidden">
                            <div class="position-relative d-flex justify-content-center overflow-hidden">
                                <a href="/property/{{$booked_house->id}}"><img class="img-fluid w-100" height="250px"
                                        src="{{ asset('storage/' . $booked_house->photos) }}" alt=""></a>
                                <div class="bg-primary rounded text-white position-absolute w-75   bottom-0 m-4 py-1 px-3">
                                    <small>{{$booked_house->regNumber}} - {{$booked_house->purpose}}</small>
                                    <p class="p-2"> Price: {{$booked_house->price}} | {{$booked_house->district.", ".$booked_house->region}} </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-6">
                        @livewire('checkout', ['id' => $booked_house->id])
                    </div>
            </div>
        </div>

    </div>
@endsection
