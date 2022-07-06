<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-home-modern text-danger"></i> My Houses!</h1>
        </div>

        <div class="row g-4">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    @if (Session::has('added_house'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <small>You have Added New House!</small>
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">House</th>
                                    <th class="cell"></th>
                                    <th class="cell">Cartegory</th>
                                    <th class="cell">Purpose</th>
                                    <th class="cell">Descriprion</th>
                                    <th class="cell">location</th>
                                    <th class="cell">General Price</th>
                                    <th class="cell">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($myHouses as $house)
                                    <tr>
                                        <td class="cell"><img src="{{asset('storage/'.$house->photos)}}"
                                                class="img-fluid rounded" height="45px" width="45px" alt="">
                                        </td>
                                        <td class="cell"><span class="truncate">{{ucwords($house->regNumber)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucfirst($house->category)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucfirst($house->purpose)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucfirst($house->description)}}</span></td>
                                        <td class="cell"><span class="truncate">{{ucwords($house->district.", ".$house->region)}}</span></td>
                                        <td class="cell"><span class="truncate text-success">{{number_format($house->price)}} /=</span></td>
                                        <td class="">
                                            <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i
                                                    class="mdi mdi-delete text-danger "></i></a>
                                            <a class="btn-sm btn app-btn-secondary" href="/update"><i
                                                    class="mdi mdi-pencil text-primary "></i></a>
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
