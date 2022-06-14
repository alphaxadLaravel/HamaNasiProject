@extends('layouts.app')

@section('pages')
<div class="row g-3 mb-4 align-items-center justify-content-between">
    <div class="col-auto">
        <h1 class="app-page-title mb-0"><i class="mdi mdi-home-modern text-danger"></i> My Houses!</h1>
    </div>
    
<div class="row g-4">
    <div class="app-card app-card-orders-table shadow-sm mb-5">
        <div class="app-card-body">
            <div class="table-responsive">
                <table class="table app-table-hover mb-0 text-left">
                    <thead>
                        <tr>
                            <th class="cell">House</th>
                            <th class="cell"></th>
                            <th class="cell">Descriprion</th>
                            <th class="cell">location</th>
                            <th class="cell">General Price</th>
                            <th class="cell">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i=0; $i < 10; $i++) { ?>
                          <tr>
                          <td class="cell"><img src="{{asset('images/property-1.jpg')}}" class="img-fluid rounded" height="45px" width="45px" alt=""></td>
                          <td class="cell"><span class="truncate">MYU-432432-L</span></td>
                          <td class="cell"><span class="truncate">Its my own house with two rooms and kitchen</span></td>
                          <td class="cell"><span class="truncate">kibada, Dar-es-Salaam</span></td>
                          <td class="cell"><span class="truncate text-success">200,0000/=</span></td>
                          <td class="cell d-inline-flex">
                          <a class="mx-2 btn-sm btn app-btn-secondary" href="#"><i class="mdi mdi-delete text-danger "></i></a>
                          <a class="btn-sm btn app-btn-secondary" href="/update"><i class="mdi mdi-pencil text-primary "></i></a>
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
