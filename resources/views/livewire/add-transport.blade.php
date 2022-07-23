<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"><i class="mdi mdi-plus text-danger"></i> Add New Vehicle!!</h5>
        </div>
        <div class="row g-4">
            <div class="app-card app-card-settings shadow-sm p-4">


                <div class="app-card-body">
                    <form class="settings-form" action="" wire:submit.prevent="addTransport" method="POST"
                        enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Plate Number <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" wire:model="plate" id="setting-input-1"
                                        value="" placeholder="Enter Plate number">
                                    <small class="text-danger">
                                        @error('plate')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Main display Photo <span
                                            class="text-danger">*</span></label>
                                    <input type="file" class="form-control file-selector-button" id="setting-input-1"
                                        wire:model="photo" value="" placeholder="Enter Property ID">
                                    <small class="text-danger">
                                        @error('photo')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Transport type <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select " wire:model="type">
                                        <option value="">Select type...</option>
                                        <option value="pickup">pickup</option>
                                        <option value="lorly">Lorly</option>
                                        <option value="bajaji">bajaji</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('type')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                        <span class="my-4">Add Innitial routes:</span>
                        {{-- Another route here --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Place from <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="setting-input-1" value=""
                                        placeholder="Place from.." wire:model="place_from1">
                                    <small class="text-danger">
                                        @error('place_from1')
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
                                        placeholder="Place .." wire:model="place_t01">
                                    <small class="text-danger">
                                        @error('place_t01')
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
                                        placeholder="e.g 200000" wire:model="price_1">
                                    <small class="text-danger">
                                        @error('price_1')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>
                        {{-- anoite --}}
                        {{-- Another route here --}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Place from <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="setting-input-1" value=""
                                        placeholder="Place from.." wire:model="place_from2">
                                    <small class="text-danger">
                                        @error('place_from2')
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
                                        placeholder="Place .." wire:model="place_t02">
                                    <small class="text-danger">
                                        @error('place_t02')
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
                                        placeholder="e.g 200000" wire:model="price_2">
                                    <small class="text-danger">
                                        @error('price_2')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>
                        {{-- anoite --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Little Description</label>
                                    <textarea class="form-control" name="" id="" wire:model="description"></textarea>
                                    <small class="text-danger">
                                        @error('description')
                                            {{ $message }}
                                        @enderror
                                    </small>
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
</div>
