<div>
        
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"> 🏘 Houses Available!</h5>
        </div>
        <div class="col-auto">
                <div class="page-utilities">
                    <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                        <div class="col-auto">
                            
                            <select class="form-select w-auto">
                                <option selected="" value="option-1">All Houses</option>
                                <option value="option-2">For Sale</option>
                                <option value="option-2">For Rent</option>
                                <option value="option-2">Latest Posts</option>
                            </select>
                        </div>
                    </div>
                </div>
        </div>
    </div>

    <div class="row g-4 mt-4">

        @foreach ($all_houses as $house)
            @component('components.reusablecard',[
                'type'=>ucfirst($house->category),
                'price'=>number_format($house->price),
                'location'=>ucwords($house->district.", ".$house->region),
                'status'=>ucwords($house->purpose),
                'image'=>$house->photos,
                'id'=>$house->id,
            ]);
            @endcomponent
        @endforeach

        <div class="d-flex justify-content-center">
            <nav class="app-pagination my-3">
               {{$all_houses->links()}}
            </nav>
        </div>
        
    </div>

</div>
