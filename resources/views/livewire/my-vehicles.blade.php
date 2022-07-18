<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class="mb-0"><i class="mdi mdi-truck-fast text-danger"></i> My Vehicles!</h5>
        </div>

        <div class="row g-4">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    @if (Session::has('added_transport'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <small>You have Added New Vehicle Successfully!!</small>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">Vehicle</th>
                                    <th class="cell"></th>
                                    <th class="cell">Vehicle Type</th>
                                    <th class="cell">Descriprion</th>
                                    <th class="cell">location</th>
                                    <th class="cell">General Price</th>
                                    <th class="cell">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($myVehicles as $vehicle)
                                    <tr>
                                        <td class="cell"><img src="{{ asset('storage/'.$vehicle->photo) }}"
                                                class="img-fluid rounded" height="40px" width="40px" alt="">
                                        </td>
                                        <td class="cell"><span class="truncate">{{ucwords($vehicle->plate)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucwords($vehicle->type)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucwords($vehicle->description)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucwords($vehicle->district.", ".$vehicle->region)}}</span></td>
                                        <td class="cell"><span class="truncate text-success">{{number_format($vehicle->price)}}/=</span></td>
                                        <td class="">
                                            <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i class="mdi mdi-delete text-danger "></i></a>
                                            <a class="btn-sm btn app-btn-secondary" href="/update"><i class="mdi mdi-pencil text-primary "></i></a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!--//table-responsive-->

                </div>
            </div>
        </div>

    </div>

</div>
</div>
