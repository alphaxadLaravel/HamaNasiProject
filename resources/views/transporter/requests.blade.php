@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h5 class=" mb-0"><i class="mdi mdi-led-on text-danger"></i> Arrived Requests!</h5>
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
                            <th class="cell">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 5; $i++) { ?>
                          <tr>
                          <td class="cell"><img src="{{asset('images/pick1.jpg')}}" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                          <td class="cell"><span class="truncate">AXF 645 TZ Canter</span></td>
                          <td class="cell"><span class="truncate">Manzese,Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate">kibada, Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate">Payed..</span></td>
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
