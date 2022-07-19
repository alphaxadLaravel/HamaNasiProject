@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-clipboard-outline text-danger"></i> Property!</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <a class="btn app-btn-primary" href="/checkout"> <i class="mdi mdi-check-all"></i>
                            Checkout Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-1">

            <div class="card  border-0 shadow-sm  my-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('storage/'.$single_house->photos) }}" alt="Picha ilikua hapa"
                            class="img-fluid rounded-start h-100 w-100" />
                    </div>
                    <div class="col-md-8 px-4">
                        <div class="d-flex justify-content-between py-3 align-items-center">

                            <span class=" fw-bold">House NO: <span
                                    class="text-danger">{{ ucwords($single_house->regNumber) }}</span> </span>
                            <div class="">
                                <img src="{{ asset($single_house->user->profile) }}" width="30px" height="30px" alt=""
                                    class="rounded-circle">
                            </div>
                        </div>
                        <p>
                            {{ ucfirst($single_house->description) }}
                        </p>
                        <div class="row mb-2">
                            <div class="col-4">
                                <span class="text-muted fw-bold">Price: 
                            </span> 
                            </div>
                            <div class="col-8">
                                <span class=""> <span
                                    class="text-success">{{ number_format($single_house->price) }}/= </span> 
                            </span><span>
                                @if ($single_house->purpose == "For Rent")
                                    @ {{$single_house->rent_period}}
                                @endif
                            </span> <br>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-4">
                                <span class="text-muted fw-bold">Purpose: 
                            </span> 
                            </div>
                            <div class="col-8">
                                <span class=" "> <span
                                    class="text-success">{{ ucwords($single_house->purpose) }} </span>
                            </span> <br>
                            </div>
                        </div>
                        <div class="row mb-2">
                            <div class="col-4">
                                <span class="text-muted fw-bold">Location: 
                            </span> 
                            </div>
                            <div class="col-8">
                                <span class=""> <span
                                    class="text-success">{{ ucwords($single_house->district.", ".$single_house->region) }} </span>
                            </span> <br>
                            </div>
                        </div>
                       
                        {{-- <span class="text-muted fw-bold">Rent Duration: <span class="text-danger">6 Month </span></span> --}}

                        {{-- <br><span class="fw-bold">Other Photos: 👇</span> <br> --}}
                        <div class="row gy-3 my-2">
                            <div class="col-md-6 px-3">
                                <a class="app-btn-secondary btn w-100" href="/book/{{$single_house->id}}"><i class="mdi mdi-book-plus"></i> Book this house Now</a>
                            </div>
                        </div>

                        <div class="row mt-3 d-flex align-items-center justify-content-between">
                            {{-- <div class="">
                                <img src="{{ asset('images/property-1.jpg') }}" width="60px" height="60px"
                                    class="rounded" style="cursor: pointer;">
                                <img src="{{ asset('images/property-1.jpg') }}" width="60px" height="60px"
                                    class="rounded" style="cursor: pointer;">
                                <img src="{{ asset('images/property-1.jpg') }}" width="60px" height="60px"
                                    class="rounded" style="cursor: pointer;">
                                <img src="{{ asset('images/property-1.jpg') }}" width="60px" height="60px"
                                    class="rounded" style="cursor: pointer;">
                            </div> --}}
                            {{-- <div class="col-md-4 my-4 d-flex ">
                                <a class="app-btn-secondary btn w-100" href="/my_wishlist/{{$single_house->id}}">❤ Add to whishlist</a>
                                <a class="app-btn-secondary btn w-100" href="/my_wishlist/{{$single_house->id}}">❤ Add to whishlist</a>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
