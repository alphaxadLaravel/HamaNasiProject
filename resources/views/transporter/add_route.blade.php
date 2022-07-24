@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">

        <div class="col-auto">
            <h5 class="mb-0"><i class="mdi mdi-plus text-danger"></i> Add New Route!</h5>
        </div>
        <div class="app-card app-card-settings shadow-sm p-4">
            <div class="app-card-body">
                <form class="settings-form" action="/new_route/{{$id}}" method="POST"
                    >
                    @csrf 
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Place from <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="setting-input-1" value=""
                                    placeholder="Place from.." name="place_from">
                                <small class="text-danger">
                                    @error('place_from')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Place to <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="setting-input-1" value=""
                                    placeholder="Place .." name="place_t0">
                                <small class="text-danger">
                                    @error('place_t0')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Price <span
                                        class="text-danger">*</span></label>
                                <input type="price" class="form-control" id="setting-input-1" value=""
                                    placeholder="e.g 200000" name="price">
                                <small class="text-danger">
                                    @error('price')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn app-btn-primary">Add Route</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
