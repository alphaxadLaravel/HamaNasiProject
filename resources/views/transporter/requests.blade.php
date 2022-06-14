@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0"><i class="mdi mdi-led-on text-danger"></i> Arrived Requests!</h1>
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
                            <th class="cell">Starting Point</th>
                            <th class="cell">Destination</th>
                            <th class="cell">User</th>
                            <th class="cell"></th>
                            <th class="cell">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 5; $i++) { ?>
                          <tr>
                          <td class="cell"><img src="{{asset('images/pick1.jpg')}}" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                          <td class="cell"><span class="truncate">AXF 645 TZ Canter</span></td>
                          <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate">kibada, Dar-es-Salaam</span></td>
                          <td class="cell"><img src="{{asset('images/mbuto.jpg')}}" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                          <td class="cell"><span class="truncate">Alpha Jozee</span></td>
                          <td class="cell d-inline-flex">
                          <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i class="mdi mdi-delete text-danger d-none d-md-inline"></i>Decline</a>
                          <a class="btn-sm btn app-btn-secondary" href="/update"><i class="mdi mdi-check-all text-primary d-none d-md-inline"></i>Accept</a>
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
