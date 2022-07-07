<div>
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"> 🏘 All Houses!</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Houses</option>
                            <option value="option-2">For Rent</option>
                            <option value="option-3">For Sell</option>
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
                                <th class="cell">House</th>
                                <th class="cell"></th>
                                <th class="cell">Agent Name</th>
                                <th class="cell">Category</th>
                                <th class="cell">Purpose</th>
                                <th class="cell">Location</th>
                                <th class="cell">Price</th>
                                {{-- <th class="cell">Block</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            
                            @foreach ($all_houses as $house)
                            <tr>
                                <td class="cell"><img src="{{ asset('storage/'.$house->photos) }}"
                                        class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                <td class="cell"><span class="truncate">{{ucfirst($house->regNumber)}} </span></td>
                                <td class="cell"><span class="truncate">{{ucwords($house->user->fullname)}}</span></td>
                                <td class="cell"><span class="truncate text-success">{{ucwords($house->category)}}</span>
                                    <td class="cell"><span class="truncate text-success">{{ucwords($house->purpose)}}</span>
                                    <td class="cell"><span class="truncate">{{ucwords($house->district.", ".$house->region)}}</span>
                                <td class="cell"><span class="truncate">{{number_format($house->price)}}/=</span>
                                </td>
                                {{-- <td class="cell d-flex">
                                    <a class="mx-2 btn-sm btn app-btn-secondary" href="#">🚫</a>
                                </td> --}}
                            </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center">
            <nav class="app-pagination my-3">
               {{$all_houses->links()}}
            </nav>
        </div>

    </div>
</div>
