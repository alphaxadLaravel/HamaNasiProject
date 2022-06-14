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
    <div class="row g-4">
        <div class="app-card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/property-1.jpg')}}" alt="Trendy Pants and Shoes" class="img-fluid rounded-start h-100 w-100" />
                </div>
                <div class="col-md-8 px-4">
                    <div class="d-flex justify-content-between py-3 align-items-center">
                    <span class=" fw-bold">House NO: <span class="text-danger">MYU-7568-K</span> </span>
                        <div class="">
                            <img src="{{asset('images/mbuto.jpg')}}" width="30px" height="30px" alt="" class="rounded-circle">
                        </div>
                    </div>
                    <p>
                        This House has 2 room, 1 kitchen and two toilets inside and outsid the house, Its nice to live with your family, Book now !
                    </p>
                    <span class="text-muted fw-bold">Price: <span class="text-danger">1,0000,0000/= </span>For Rent</span> <br>
                    <span class="text-muted fw-bold">Rent Duration: <span class="text-danger">6 Month </span></span> <br>
                   
                    <span class="fw-bold">Location: <span class="text-danger"> Kigamboni, Dar-es-Salaam</span></span>
                    <br><span class="fw-bold">Other Photos: 👇</span> <br>
                    
                    <div class="row mt-3 d-flex align-items-center justify-content-between">
                        <div class="">
                            <img src="{{asset('images/property-1.jpg')}}" width="60px" height="60px" class="rounded" style="cursor: pointer;">
                            <img src="{{asset('images/property-1.jpg')}}" width="60px" height="60px" class="rounded" style="cursor: pointer;">
                            <img src="{{asset('images/property-1.jpg')}}" width="60px" height="60px" class="rounded" style="cursor: pointer;">
                            <img src="{{asset('images/property-1.jpg')}}" width="60px" height="60px" class="rounded" style="cursor: pointer;">
                        </div>
                        <div class="col-md-4 my-4">
                            <a class="app-btn-secondary btn w-100" href="/my_wishlist">❤ Add to whishlist</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
