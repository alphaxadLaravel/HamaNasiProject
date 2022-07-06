<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h4 class="app-page-title mb-0"><i class="mdi mdi-truck-fast text-success"></i> Transport Services</h4>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Vehicles</option>
                            <option value="option-2">Truck</option>
                            <option value="option-3">lory</option>
                            <option value="option-3">Pickup</option>
                            <option value="option-3">Bajaji</option>
                            <option value="option-3">Semi Trailler</option>
                            <option value="option-4">Low Price</option>
                            <option value="option-5">High Price</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        @foreach ($all_transports as $transport)
            @component('components.reusable-transport',
                [
                    'type' => ucwords($transport->type),
                    'price' => number_format($transport->price),
                    'location' => ucwords($transport->district.", ".$transport->region),
                    'image' => $transport->photo,
                ])
            @endcomponent
        @endforeach

        <div class="d-flex justify-content-center">
            <nav class="app-pagination my-3">
               {{$all_transports->links()}}
            </nav>
        </div>

    </div>
</div>
