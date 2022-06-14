@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">

    <div class="col-auto">
        <h1 class="app-page-title mb-0"><i class="mdi mdi-cash-usd text-primary"></i> checkout</h1>
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
    @livewire('checkout')

</div>

@endsection
