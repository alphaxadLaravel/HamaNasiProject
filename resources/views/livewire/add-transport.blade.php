<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-plus text-danger"></i> Add New Vehicle!!</h1>
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
                                    <label for="setting-input-1" class="form-label">Region Located <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" wire:model="region" id="">
                                        <option>Select the region...</option>
                                        <option value="Mwanza">Mwanza</option>
                                        <option value="Dodma">Dodoma</option>
                                        <option value="Kigoma">Kigoma</option>
                                        <option>Dar</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('region')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">District located <span
                                            class="text-danger">*</span></label>
                                    <select class="form-select " wire:model="district">
                                        <option value="">Selct District...</option>
                                        <option value="Ilala">Ilala</option>
                                        <option value="Kigamboni">kigamboni</option>
                                        <option value="Temeke">Temeke</option>
                                        <option value="kinondoni">Kinondoni</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('district')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
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
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="setting-input-1" class="form-label">Price <span
                                            class="text-danger">*</span></label>
                                    <input type="number" class="form-control" id="setting-input-1" value=""
                                        placeholder="e.g 200000" wire:model="price">
                                    <small class="text-danger">
                                        @error('price')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>

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
