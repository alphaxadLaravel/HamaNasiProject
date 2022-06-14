@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-book-plus text-danger"></i> Recived Bookings!!</h1>
        </div>
        <div class="row g-4">
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">Property</th>
                                    <th class="cell"></th>
                                    <th class="cell">From</th>
                                    <th class="cell"></th>
                                    <th class="cell">Price</th>
                                    <th class="cell">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < 5; $i++) { ?>
                                <tr>
                                    <td class="cell"><img src="{{ asset('images/property-2.jpg') }}"
                                            class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                    <td class="cell"><span class="truncate">MYU-3546-L</span></td>
                                    <td class="cell"><img src="{{ asset('images/mbuto.jpg') }}"
                                            class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                    <td class="cell"><span class="truncate">Alpha Jozee Kakulu</span></td>
                                    <td class="cell"><span class="truncate">Tsh 150,000</span></td>
                                    <td class="cell"><span class="truncate text-success">Payed</span></td>

                                </tr>
                                <?php }?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>
@endsection
