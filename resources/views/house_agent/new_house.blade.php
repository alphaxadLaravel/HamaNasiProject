@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"><i class="mdi mdi-plus text-danger"></i> Add New Property!!</h5>
        </div>
        <div class="row g-4">
            @livewire('add-house')
        </div>

    </div>

    </div>
@endsection
