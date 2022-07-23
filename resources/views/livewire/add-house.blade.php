<div>
    <div class="app-card app-card-settings shadow-sm p-4">

        <div class="app-card-body">
            <form action="" wire:submit.prevent="addHouse" method="POST" enctype="multipart/form-data"
                class="settings-form">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Property Reg.Number <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" wire:model="regNo" value=""
                                placeholder="Enter Property Reg.Number">
                            <small class="text-danger">
                                @error('regNo')
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
                                <option value="Dar">Dar</option>
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
                    <div class="{{ $column ? 'col-md-4' : 'col-md-6' }}">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Property Category <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="category">
                                <option value="">Select category...</option>
                                <option value="Office">Office</option>
                                <option value="Home">Home</option>
                                <option value="Appartment">Appartment</option>
                                <option value="Frame">Frame</option>
                                <option value="Room">Room</option>
                            </select>
                            <small class="text-danger">
                                @error('category')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="{{ $column ? 'col-md-4' : 'col-md-6' }}">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Purpose <span
                                    class="text-danger">*</span></label>
                            <select class="form-select " wire:model="purpose">
                                <option value="">Select Purpose...</option>
                                <option value="For Rent">For Rent</option>
                                <option value="For Sell">For Sell</option>
                            </select>
                            <small class="text-danger">
                                @error('purpose')
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>
                    <div class="{{ $column ? 'col-md-4' : 'd-none' }}">
                        <label for="setting-input-1" class="form-label">Renting Period <span
                                class="text-danger">*</span></label>
                        <div class="row">
                            <div class="col-md-7">
                                <div class="mb-3">
                                    <input type="number" class="form-control" wire:model="period" value=""
                                        placeholder="e.g 12">
                                    <small class="text-danger">
                                        @error('period')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <select class="form-select " wire:model="rent_measure">
                                        <option value="">period..</option>
                                        <option value="month">Month</option>
                                        <option value="year">Year</option>
                                        <option value="week">Week</option>
                                        <option value="day">day</option>
                                        <option value="hour">hours</option>
                                    </select>
                                    <small class="text-danger">
                                        @error('rent_measure')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($category == 'Office')
                    {{-- Fo offices here --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Meeting Hall <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="meeting">
                                    <option value="">Select Meeting hall details...</option>
                                    <option value="Available">Available</option>
                                    <option value="No">No Meeting hall</option>
                                </select>
                                <small class="text-danger">
                                    @error('meeting')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Number of Rooms <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" wire:model="office_rooms" value=""
                                    placeholder="Enter rooms available..">
                                <small class="text-danger">
                                    @error('office_rooms')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    {{-- Office end --}}
                @endif

                @if ($category == 'Home' || $category == 'Appartment')
                    {{-- Home all Appartment --}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Single rooms <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" wire:model="single_rooms" value=""
                                    placeholder="Enter number of single rooms">
                                <small class="text-danger">
                                    @error('single_rooms')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Public toilet <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="toilet">
                                    <option value="">Select Toilet details...</option>
                                    <option value="Avilable">Available</option>
                                    <option value="No">No public toilet</option>
                                </select>
                                <small class="text-danger">
                                    @error('toilet')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Sitting rooms <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" wire:model="sitting_rooms" value=""
                                    placeholder="Enter Sitting rooms..">
                                <small class="text-danger">
                                    @error('sitting_rooms')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        
                        
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="" class="form-label">Self-Contained rooms <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" wire:model="self" value=""
                                    placeholder="Number of self rooms...">
                                <small class="text-danger">
                                    @error('self')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Garden <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="garden">
                                    <option value="">Select Garden details...</option>
                                    <option value="Avilable">Available</option>
                                    <option value="No">No Garden</option>
                                </select>
                                <small class="text-danger">
                                    @error('garden')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Parking <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="parking">
                                    <option value="">Select Parking details...</option>
                                    <option value="Avilable">Available</option>
                                    <option value="No">No Parking</option>
                                </select>
                                <small class="text-danger">
                                    @error('parking')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    {{-- Home / Appertment end --}}
                @endif

                @if ($category == 'Room')
                    {{-- Rooms here --}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Type of room <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="room_type">
                                    <option value="">Select Room Type...</option>
                                    <option value="single">Single Room</option>
                                    <option value="Self">Single Contained</option>
                                </select>
                                <small class="text-danger">
                                    @error('room_type')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Parking <span
                                        class="text-danger">*</span></label>
                                <select class="form-select " wire:model="room_parking">
                                    <option value="">Select Parking details...</option>
                                    <option value="Available">Available</option>
                                    <option value="No">No</option>
                                </select>
                                <small class="text-danger">
                                    @error('room_parking')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    {{-- Rooms details here --}}
                @endif

                @if ($category == 'Frame')
                    {{-- Frames deatils Here --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="setting-input-1" class="form-label">Frame Width <span
                                        class="text-danger">*</span></label>
                                <input type="number" class="form-control" wire:model="frames" value=""
                                    placeholder="Width in Meters eg 4 ">
                                <small class="text-danger">
                                    @error('frames')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                        </div>
                    </div>
                    {{-- Frame details --}}
                @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="setting-input-1" class="form-label">Price <span
                                    class="text-danger">*</span></label>
                            <input type="number" class="form-control" wire:model="price" value=""
                                placeholder="e.g 200000">
                            <small class="text-danger">
                                @error('price')
                                    {{ $message }}
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
                                    {{ $message }}
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
                                    {{ $message }}
                                @enderror
                            </small>
                        </div>
                    </div>

                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" wire:click="addHouse" class="btn app-btn-primary">Post Property</button>
                </div>
            </form>
        </div>

    </div>
</div>
