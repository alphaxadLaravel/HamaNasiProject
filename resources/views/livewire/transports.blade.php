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
        @for ($i = 0; $i < 8; $i++)
            @component('components.reusable-transport',
                [
                    'type' => 'Lory',
                    'price' => '200,000',
                    'location' => 'Dar-es-Salaam',
                    'image' => 'images/truck1.jpg',
                ])
            @endcomponent
        @endfor
        <div class="d-flex justify-content-center">
            <nav class="app-pagination my-3">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i
                                class="mdi mdi-chevron-double-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="mdi mdi-chevron-double-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
</div>
