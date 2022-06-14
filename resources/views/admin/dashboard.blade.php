@extends('layouts.app')

@section('pages')
    <h1 class="app-page-title text-muted">👋 Hi, <span class="text-success">Admin!</span></h1>
    <div class="row g-4 mb-4">
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total users</h4>
                    <div class="stats-figure">200</div>
                </div>
                <a class="app-card-link-mask" href="/admin_users"></a>
            </div>
        </div>

        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Total Houses</h4>
                    <div class="stats-figure">100</div>
                </div>
                <a class="app-card-link-mask" href="/admin_houses"></a>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Transport Services</h4>
                    <div class="stats-figure">23</div>
                </div>
                <a class="app-card-link-mask" href="/admin_transport"></a>
            </div>
        </div>
        <div class="col-6 col-lg-3">
            <div class="app-card app-card-stat shadow-sm h-100">
                <div class="app-card-body p-3 p-lg-4">
                    <h4 class="stats-type mb-1">Transactions</h4>
                    <div class="stats-figure">6</div>
                </div>
                <a class="app-card-link-mask" href="/admin_transaction"></a>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row g-4 mb-4">
            <div class="col-md-8">
                <span class="text-muted fw-bold my-2">🏘 Houses</span>
                <div class="app-card app-card-orders-table shadow-sm mb-3">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Property</th>
                                        <th class="cell">Property ID</th>
                                        <th class="cell">Location</th>
                                        <th class="cell">Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < 5; $i++) { ?>
                                    <tr>
                                        <td class="cell"><img src="{{ asset('images/property-2.jpg') }}"
                                                class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                        <td class="cell"><span class="truncate">MYU-3546-L</span></td>
                                        <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span>
                                        </td>
                                        <td class="cell"><span class="truncate">Tsh 150,000</span></td>
                                        
                                    </tr>
                                    <?php }?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <span class="text-muted fw-bold my-2">😎 Agents</span>
                <div class="app-card app-card-orders-table shadow-sm mb-5">
                    <div class="app-card-body">
                        <div class="table-responsive">
                            <table class="table app-table-hover mb-0 text-left">
                                <thead>
                                    <tr>
                                        <th class="cell">Agent</th>
                                        <th class="cell"></th>
                                        <th class="cell">Location</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php for ($i=0; $i < 5; $i++) { ?>
                                    <tr>
                                        <td class="cell"><img src="{{ asset('images/property-2.jpg') }}"
                                                class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                        <td class="cell"><span class="truncate">Alpha jozee</span></td>
                                        <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span>
                                        </td>
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
