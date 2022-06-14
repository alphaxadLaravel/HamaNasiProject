@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"> <i class="mdi mdi-truck-fast"></i> Transport Services!</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Transports</option>
                            <option value="option-2">Pickup</option>
                            <option value="option-3">Bajaji</option>
                            <option value="option-4">Lory</option>
                            <option value="option-4">By Agent</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-4">
        <div class="app-card app-card-orders-table shadow-sm mb-5">
            <div class="app-card-body">
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">Vehicle</th>
                                <th class="cell"></th>
                                <th class="cell">Agent Name</th>
                                <th class="cell">Category</th>
                                <th class="cell">Location</th>
                                <th class="cell">Routes</th>
                                <th class="cell">Block</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr>
                                    <td class="cell"><img src="{{ asset('images/pick1.jpg') }}"
                                            class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                    <td class="cell"><span class="truncate">TZK 346 TZ </span></td>
                                    <td class="cell"><span class="truncate">Alpha Jozee Kakulu</span></td>
                                    <td class="cell"><span class="truncate">Pickup</span>
                                        <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span>
                                    <td class="cell"><span class="truncate">5</span>
                                    </td>
                                    <td class="cell d-flex">
                                        <a class="mx-2 btn-sm btn app-btn-secondary" href="#">🚫</a>
                                    </td>
                                </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

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
@endsection