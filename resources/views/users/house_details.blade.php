@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        @if (session()->get('user')['role'] == 'house_agent')
            <div class="col-auto">
                <h5 class=" mb-0"><i class="mdi mdi-clipboard-outline text-danger"></i> My House!</h5>
            </div>
        @endif

        @if (session()->get('user')['role'] == 'normal_user')
            <div class="col-auto">
                <h5 class=" mb-0"><i class="mdi mdi-clipboard-outline text-danger"></i> Property!</h5>
            </div>
            @if ($single_house->status != "Booked")
            <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            <a class="btn app-btn-primary" href="/go_pay/{{ $single_house->id }}"> <i
                                    class="mdi mdi-check-all"></i>
                                Checkout Now</a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
        @endif
        <div class="row g-1">

            <div class="card  border-0 shadow-sm  my-3">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="{{ asset('storage/' . $single_house->photos) }}" alt="Picha ilikua hapa"
                            class="img-fluid rounded-start h-100 w-100" />
                    </div>
                    <div class="col-md-7 px-4">
                        <div class="d-flex justify-content-between py-3 align-items-center">

                            <span class=" fw-bold">Price: <span class="text-danger"> Tsh
                                    {{ number_format($single_house->price) }} /=</span> </span>
                            <div class="">
                                <img src="{{ asset($single_house->user->profile) }}" width="30px" height="30px"
                                    alt="" class="rounded-circle">
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-md-4">
                                <div class="col-12">
                                    <small class="text-muted fw-bold">Address:
                                    </small>
                                </div>
                                <div class="col-12">
                                    <small class=""> <small
                                            class="text-success">{{ ucwords($single_house->regNumber) }}
                                        </small>
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-12">
                                    <small class="text-muted fw-bold">Purpose:
                                    </small>
                                </div>
                                <div class="col-12">
                                    <small class=" "> <small class="text-success">{{ ucwords($single_house->purpose) }}
                                        </small>
                                    </small> <small class="text-success">
                                        @if ($single_house->purpose == 'For Rent')
                                            @ {{ $single_house->rent_period }}
                                        @endif
                                    </small><br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-12">
                                    <small class="text-muted fw-bold">Location:
                                    </small>
                                </div>
                                <div class="col-12">
                                    <small class=""> <small
                                            class="text-success">{{ ucwords($single_house->district . ', ' . $single_house->region) }}
                                        </small>
                                    </small> <br>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-12">
                                    <small class="text-muted fw-bold">Category:
                                    </small>
                                </div>
                                <div class="col-12">
                                    <small class=""> <small
                                            class="text-success">{{ ucwords($single_house->category) }}
                                        </small>
                                    </small>
                                </div>
                            </div>

                            {{-- If home --}}
                            @if ($single_house->category == 'Home')
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Single Rooms:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->home->single) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Self Contained Rooms:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->home->self) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Sitting Rooms:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->home->sitting) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Garden:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->home->garden) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Parking:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->home->parking) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                            @endif
                            {{-- end home --}}


                            {{-- If home --}}
                            @if ($single_house->category == 'Office')
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Rooms:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->office->rooms) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Conference Hall:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->office->hall) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                            @endif
                            {{-- end home --}}


                            {{-- If home --}}
                            @if ($single_house->category == 'Frame')
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Width:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->frame->width) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                            @endif
                            {{-- end home --}}

                            {{-- If home --}}
                            @if ($single_house->category == 'Room')
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Room type:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->room->type) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-12">
                                        <small class="text-muted fw-bold">Parking:
                                        </small>
                                    </div>
                                    <div class="col-12">
                                        <small class=" "> <small
                                                class="text-success">{{ ucwords($single_house->room->parking) }}
                                            </small>
                                        </small> <br>
                                    </div>
                                </div>
                            @endif
                            {{-- end home --}}



                        </div>

                        <p>
                            {{ ucfirst($single_house->description) }}
                        </p>

                        {{-- <span class="text-muted fw-bold">Rent Duration: <span class="text-danger">6 Month </span></span> --}}

                        {{-- <br><span class="fw-bold">Other Photos: 👇</span> <br> --}}
                        <div class="row gy-3 my-2">
                            @if (session()->get('user')['role'] == 'normal_user')
                                @if ($single_house->status == 'Booked')
                                    <div class="alert alert-primary" role="alert">
                                        <small>Booking will terminate After : <span class="text-danger"> 1 minutes</span></small>
                                    </div>
                                @endif
                                @if($single_house->status == 'Available')
                                    <div class="col-md-6 px-3">
                                        <a class="app-btn-secondary btn w-100" href="/book/{{ $single_house->id }}"><i
                                                class="mdi mdi-book-plus"></i> Book this house Now</a>
                                    </div>
                                @endif
                            @endif

                            @if (session()->get('user')['role'] == 'house_agent')
                                @if ($single_house->status == 'Booked')
                                    <div class="alert alert-primary" role="alert">
                                        <small>Booked By: <span> Hamis </span> - Booking will terminate After: <span class="text-danger"> 2 Minutes </span></small>
                                    </div>
                                @endif
                                @if ($single_house->status == 'Payed')
                                    <div class="alert alert-primary" role="alert">
                                        <small>The Property is Sold Out..</small>
                                    </div>
                                @endif
                            @endif
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
