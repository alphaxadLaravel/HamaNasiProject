<div class="col-md-3 wow fadeInUp" data-wow-delay="0.1s"
    style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="card border-0 shadow-sm rounded overflow-hidden">

        <div class="position-relative overflow-hidden">
            <a href="/property"><img class="img-fluid w-100" style="height: 180px" src="{{ asset('storage/' . $image) }}"
                    alt=""></a>
            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                {{ $type }}</div>
        </div>

        <div class="p-4 pb-0">
            <h5 class="text-primary mb-3"><sub>Tsh</sub> {{ $price }} <sub>/=</sub></h5>
            <p><i class="fa fa-map-marker-alt text-primary me-2"></i>{{ $location }}</p>
        </div>

    </div>
</div>
