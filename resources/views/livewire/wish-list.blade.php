<div>
    <div class="row g-1 my-3 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0"><i class="mdi mdi-heart text-danger"></i> My WishList</h1>
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
            <div class="app-card app-card-orders-table shadow-sm mb-5">
                <div class="app-card-body">
                    <div class="table-responsive">
                        <table class="table app-table-hover mb-0 text-left">
                            <thead>
                                <tr>
                                    <th class="cell">Property</th>
                                    <th class="cell">Property ID</th>
                                    <th class="cell">Location</th>
                                    <th class="cell">Price</th>
                                    <th class="cell">Change</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i=0; $i < 5; $i++) { ?>
                                <tr>
                                    <td class="cell"><img src="{{ asset('images/property-2.jpg') }}"
                                            class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                                    <td class="cell"><span class="truncate">MYU-3546-L</span></td>
                                    <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span></td>
                                    <td class="cell"><span class="truncate">Tsh 150,000</span></td>
                                    <td class="cell d-flex">
                                        <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i
                                                class="mdi mdi-delete text-danger"></i></a>
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
