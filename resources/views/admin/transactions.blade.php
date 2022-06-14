@extends('layouts.app')

@section('pages')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"> 💸 All Transactions!</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Transactions</option>
                            <option value="option-2">House Payments</option>
                            <option value="option-3">Transport Transactions</option>
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
                                
                                <th class="cell">From</th>
                                <th class="cell">To</th>
                                <th class="cell">Purpose</th>
                                <th class="cell">Price</th>
                                <th class="cell">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i=0; $i < 10; $i++) { ?>
                                <tr>
                                    <td class="cell"><span class="truncate">Alpha Jozee Kakulu</span></td>
                                    <td class="cell"><span class="truncate">Cannute Hamisi Cannute</span></td>
                                    <td class="cell"><span class="truncate text-success">House Renting</span>
                                        <td class="cell"><span class="truncate ">200,0000</span>
                                    <td class="cell"><span class="truncate">2-02-2022</span>
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
