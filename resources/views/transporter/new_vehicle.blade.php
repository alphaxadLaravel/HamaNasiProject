@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-danger"></i> Add New Vehicle!!</h1>
        </div>
        <div class="row g-4">
            <div class="app-card app-card-settings shadow-sm p-4">

                
                <div class="app-card-body">
                    <form class="settings-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Plate Number <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="setting-input-1" value="" placeholder="Enter Plate number" required="">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Region Located <span class="text-danger">*</span></label>
                                    <select class="form-select" name="" id="">
                                        <option>Select the region...</option>
                                        <option value="Mwanza">Mwanza</option>
                                        <option value="">Dodoma</option>
                                        <option value="">Kigoma</option>
                                        <option>Dar</option>
                                      </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">District located <span class="text-danger">*</span></label>
                                    <select class="form-select ">
                                        <option value="">Selct District...</option>
                                        <option value="option-1">Ilala</option>
                                        <option value="option-1">kigamboni</option>
                                        <option value="option-1">Temeke</option>
                                        <option value="option-1">Kinondoni</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Main display Photo <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Transport type <span class="text-danger">*</span></label>
                                    <select class="form-select ">
                                        <option value="">Select type...</option>
                                        <option value="option-1">pickup</option>
                                        <option value="option-1">Lorly</option>
                                        <option value="option-1">bajaji</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Price <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="setting-input-1" value=""
                                        placeholder="e.g 200000" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Little Description</label>
                                    <textarea class="form-control" name="" id=""></textarea>
                                </div>
                            </div>
                        </div>
                       <div class="d-flex justify-content-end">
                        
                        <button type="submit" class="btn app-btn-primary">Post Vehicle</button>
                       </div>
                    </form>
                </div>

            </div>
        </div>

    </div>

    </div>
@endsection
