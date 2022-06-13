@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0"><i class="mdi mdi-led-on text-danger"></i> My Requests!</h1>
    </div>
    <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <a class="btn app-btn-primary" href="/transport"> <i class="mdi mdi-truck-fast"></i>
                        Transport services</a>
                    </div>
                </div>
            </div>
    </div>
<div class="row g-4">
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">Car</th>
                            <th class="cell"></th>
                            <th class="cell">From</th>
                            <th class="cell">Destination</th>
                            <th class="cell">Price</th>
                            <th class="cell">Change</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 5; $i++) { ?>
                          <tr>
                          <td class="cell"><img src="{{asset('images/pick1.jpg')}}" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                          <td class="cell"><span class="truncate">AXF 645 TZ Canter</span></td>
                          <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate">kibada, Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate">Tsh 150,000</span></td>
                          <td class="cell d-flex">
                          <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i class="mdi mdi-delete text-danger"></i></a>
                          <a class="btn-sm btn app-btn-secondary" href="/update"><i class="mdi mdi-lead-pencil text-primary"></i></a>
                          </td>
                      </tr>
                       <?php }?>

                    </tbody>
                </table>
            </div><!--//table-responsive-->
            
        </div>	
    </div>
</div>

</div>

</div>

@endsection
