<div>
    <div class="row g-1 my-3 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-heart-pulse text-danger"></i> My WishList</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <a class="btn app-btn-primary" href="/checkout"> <i class="mdi mdi-book-plus"></i>
                            Book All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-1 my-4">
            @if (Session::has('wish'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <small>Successfully Added one property to Wishlist!</small>
                </div>
            @endif

            @if (Session::has('exist'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <small>Property Already exist in Wish list!</small>
                </div>
            @endif
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">Property</th>
                                    <th class="cell">Property ID</th>
                                    <th class="cell">Location</th>
                                    <th class="cell">Category</th>
                                    <th class="cell">Price</th>
                                    <th class="cell">Manage</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($my_wishlist as $wish)
                                    <tr>
                                        <td class="cell"><img src="{{ asset('storage/'.$wish->house->photos) }}"
                                                class="img-fluid rounded" height="45px" width="45px" alt="">
                                        </td>
                                        <td class="cell"><span class="truncate">{{ $wish->house->regNumber }}</span>
                                        </td>
                                        <td class="cell"><span
                                                class="truncate">{{ $wish->house->district . ', ' . $wish->house->region }}</span>
                                        </td>
                                        <td class="cell"><span
                                                class="truncate text-success">{{ $wish->house->category }}</span></td>
                                        <td class="cell"><span class="truncate">Tsh
                                                {{ number_format($wish->house->price) }}</span></td>
                                        <td class="">
                                            <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i
                                                    class="mdi mdi-delete text-danger"></i>Remove</a>
                                            <a class="btn-sm btn app-btn-secondary" href="#"><i
                                                    class="mdi mdi-book-plus text-success"></i>Book Now</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
