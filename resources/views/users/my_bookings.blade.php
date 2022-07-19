@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"><i class="mdi mdi-book-plus text-danger"></i> My Bookings!!</h5>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <a class="btn app-btn-primary" href="/all_houses"> <i class="mdi mdi-home-modern"></i>
                            Book More Houses</a>
                    </div>
                </div>
            </div>
        </div>
        @livewire('my-bookings')
    </div>

    </div>
@endsection
