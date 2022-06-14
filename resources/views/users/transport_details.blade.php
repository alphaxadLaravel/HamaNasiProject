@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0"><i class="mdi mdi-truck-fast text-danger"></i> Request Transport</h1>
    </div>
    
    <div class="row g-4">
        <div class="app-card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('images/pick1.jpg')}}" alt="Trendy Pants and Shoes" class="img-fluid rounded-start h-100 w-100" />
                </div>
                <div class="col-md-8 px-4">
                    <div class="row g-3 mb-2 align-items-center justify-content-between">
                        <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4" role="tablist">
                            <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">Generat Details</a>
                            <a class="flex-sm-fill text-sm-center nav-link" id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false" tabindex="-1">Routes Costs</a>
                        </nav>
                        <div class="tab-content" id="orders-table-tab-content">
                            <div class="tab-pane fade active show" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                                <div class="d-flex justify-content-between py-3 align-items-center">
                                    <span class=" fw-bold">Plate No: <span class="text-danger">AKY 345 TZ </span> Pickup</span>
                                        <div class="">
                                            <img src="{{asset('images/mbuto.jpg')}}" width="30px" height="30px" alt="" class="rounded-circle">
                                        </div>
                                    </div>
                                    <p>
                                        This Truck is there to take you from place to place thet you like by your own!
                                    </p>
                
                                    <span class="text-muted fw-bold">General Price: <span class="text-danger">1,0000,0000/= </span></span> <br>
                                   
                                    <span class="fw-bold">Location: <span class="text-danger"> Kigamboni, Dar-es-Salaam</span></span>
                            </div>
    
                            <div class="tab-pane fade" id="orders-paid" role="tabpanel" aria-labelledby="orders-paid-tab">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr>
                                                <th class="cell">From</th>
                                                <th class="cell">Destination</th>
                                                <th class="cell">Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for ($i=0; $i < 5; $i++) { ?>
                                              <tr>
                                                <td class="cell"><span class="truncate">Kigamboni</span></td>
                                                <td class="cell"><span class="truncate">Kimara</span></td>
                                                <td class="cell"><span class="truncate">Tsh 200,000</span></td>
                                              </tr>
                                           <?php }?>
                    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
    
                        </div>
                        <div class="row mt-3 d-flex align-items-center justify-content-end">
                            <div class="col-md-4 my-4">
                                <a class="app-btn-secondary btn w-100" href="/checkout"> Request Now</a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>

</div>

@endsection
