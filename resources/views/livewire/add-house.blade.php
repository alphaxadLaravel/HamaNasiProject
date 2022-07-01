<div>
    <div class="app-card app-card-settings shadow-sm p-4">

        <div class="app-card-body">
            <form action="" wire:submit.prevent="addHouse" method="POST" class="settings-form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Property Reg.Number <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="regNo" value=""
                                placeholder="Enter Property Reg.Number">
                                <small  class="text-danger">
                                    @error('regNo')
                                        {{$message}}
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
                                <option value="">Dodoma</option>
                                <option value="">Kigoma</option>
                                <option>Dar</option>
                            </select>
                            <small  class="text-danger">
                                @error('region')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">District located <span
                                    class="text-danger">*</span></label>
                            <select class="form-select "  wire:model="district">
                                <option value="">Selct District...</option>
                                <option value="option-1">Ilala</option>
                                <option value="option-1">kigamboni</option>
                                <option value="option-1">Temeke</option>
                                <option value="option-1">Kinondoni</option>
                            </select>
                            <small  class="text-danger">
                                @error('district')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Property Category <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="category">
                                <option value="">Select category...</option>
                                <option value="option-1">Office</option>
                                <option value="option-1">Home</option>
                                <option value="option-1">Appartment</option>
                                <option value="option-1">Shop</option>
                            </select>
                            <small  class="text-danger">
                                @error('category')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Purpose <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="purpose">
                                <option value="">Select Purpose...</option>
                                <option value="option-1">For Rent</option>
                                <option value="option-1">For Sell</option>
                            </select>
                            <small  class="text-danger">
                                @error('purpose')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="setting-input-1" class="form-label">Renting Period <span
                            class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <input type="number" class="form-control" wire:model="period" value=""
                                        placeholder="e.g 12">
                                        <small  class="text-danger">
                                            @error('period')
                                                {{$message}}
                                            @enderror
                                        </small>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <select class="form-select " wire:model="rent_measure">
                                        <option value="option-1">Month</option>
                                        <option value="option-1">Year</option>
                                        <option value="option-1">Week</option>
                                        <option value="option-1">day</option>
                                        <option value="option-1">hours</option>
                                    </select>
                                    <small  class="text-danger">
                                        @error('rent_measure')
                                            {{$message}}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Price <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" wire:model="price" value=""
                                placeholder="e.g 200000">
                                <small class="text-danger">
                                    @error('price')
                                        {{$message}}
                                    @enderror
                                </small>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Display Photo <span
                                    class="text-danger">*</span></label>
                            <input type="file" class="form-control file-selector-button" wire:model="photo"
                                value="" placeholder="Enter Property ID">
                                <small class="text-danger">
                                    @error('photo')
                                        {{$message}}
                                    @enderror
                                </small>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Little Description <span
                                class="text-danger">*</span></label>
                            <textarea class="form-control" wire:model="description" id=""></textarea>
                            <small class="text-danger">
                                @error('description')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn app-btn-primary">Post Property</button>
                </div>
            </form>
        </div>

    </div>
</div>
