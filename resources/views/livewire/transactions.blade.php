
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
                                <th class="cell">Amount</th>
                                <th class="cell">Branch</th>
                                <th class="cell">invoice</th>
                            </tr>
                        </thead>
                        <tbody>

                                {{-- @foreach ($my_transaction as $transaction)
                                <tr>
                                    <td class="cell"><span class="truncate">{{$transaction->From}}</span></td>
                                    <td class="cell"><span class="truncate">{{$transaction->To}}</span></td>
                                    <td class="cell"><span class="truncate text-success">{{$transaction->purpose}}</span>
                                        <td class="cell"><span class="truncate ">{{number_format($transaction->amount)}}</span>
                                            <td class="cell"><span class="truncate ">{{$transaction->Branch}}</span>
                                                <td class="cell"><span class="truncate ">{{$transaction->invoice}}</span>
                                    </td>
                                </tr>
                                @endforeach --}}
                                

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