<div>
    <div class="app-card app-card-settings shadow-sm p-4">

        <div class="app-card-body">
            <form action="" wire:submit.prevent="addHouse" method="POST" enctype="multipart/form-data" class="settings-form">
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
                                <option value="Dodma">Dodoma</option>
                                <option value="Kigoma">Kigoma</option>
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
                                <option value="Ilala">Ilala</option>
                                <option value="Kigamboni">kigamboni</option>
                                <option value="Temeke">Temeke</option>
                                <option value="kinondoni">Kinondoni</option>
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
                    <div class="{{ ($column) ? 'col-md-4' : 'col-md-6' }}">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Property Category <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="category">
                                <option value="">Select category...</option>
                                <option value="Office">Office</option>
                                <option value="Home">Home</option>
                                <option value="Appartment">Appartment</option>
                                <option value="Shop">Shop</option>
                            </select>
                            <small  class="text-danger">
                                @error('category')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="{{ ($column) ? 'col-md-4' : 'col-md-6' }}">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Purpose <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="purpose">
                                <option value="">Select Purpose...</option>
                                <option value="For Rent">For Rent</option>
                                <option value="For Sell">For Sell</option>
                            </select>
                            <small  class="text-danger">
                                @error('purpose')
                                    {{$message}}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="{{ ($column) ? 'col-md-4' : 'd-none' }}">
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
                                        <option value="month">Month</option>
                                        <option value="year">Year</option>
                                        <option value="week">Week</option>
                                        <option value="day">day</option>
                                        <option value="hour">hours</option>
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
