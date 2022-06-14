@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-book-plus text-danger"></i> Add New Property!!</h1>
        </div>
        <div class="row g-4">
            <div class="app-card app-card-settings shadow-sm p-4">

                <div class="app-card-body">
                    <form class="settings-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Property ID <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
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
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Main display Photo <span class="text-danger">*</span></label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                </div>

                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Side Photo</label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">inner Photo</label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Front Photo</label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1" value="" placeholder="Enter Property ID" required="">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Property Category <span class="text-danger">*</span></label>
                                    <select class="form-select ">
                                        <option value="">Select category...</option>
                                        <option value="option-1">Office</option>
                                        <option value="option-1">Home</option>
                                        <option value="option-1">Appartment</option>
                                        <option value="option-1">Shop</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Little Description</label>
                                    <textarea class="form-control" name="" id=""></textarea>
                                </div>
                            </div>
                        </div>
                       
                        <button type="submit" class="btn app-btn-primary">Post Property</button>
                    </form>
                </div>

            </div>
        </div>

    </div>

    </div>
@endsection
