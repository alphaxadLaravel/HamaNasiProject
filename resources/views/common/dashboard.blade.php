@extends('layouts.app')

@section('pages')
    <h1 class="app-page-title text-muted">👋 Hi, <span class="text-success">{{ucfirst(session()->get('user')['username'])}}!</span></h1>

    <div class="row g-4">

        <div class="col-12 col-md-6">
            <div class="app-card  d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono">
                                <i class="mdi mdi-home-modern fs-4"></i>
                            </div>
                        </div>
                        <div class="col-auto">
                            <h4 class="app-card-title">In Need of a Houses ?</h4>
                        </div>
                    </div>
                </div>

                <div class="app-card-body px-4">

                    <div class="intro mb-3">HamaNasi we have the best houses for you to live with your family!.</div>
                    <ul class="list-unstyled">
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            You are allowed to Rent the House
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            You can Also purchase the house an make it Yours
                        </li>
                    </ul>
                </div>

                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-secondary" href="/house_rent">Browse for Houses</a>
                </div>

            </div>

        </div>

        <div class="col-12 col-md-6">
            <div class="app-card app-card-basic d-flex flex-column align-items-start shadow-sm">
                <div class="app-card-header p-3 border-bottom-0">
                    <div class="row align-items-center gx-3">
                        <div class="col-auto">
                            <div class="app-icon-holder icon-holder-mono">
                                <i class="mdi mdi-truck-fast fs-4"></i>
                            </div>


                        </div>

                        <div class="col-auto">
                            <h4 class="app-card-title">In Need of Transport ?</h4>
                        </div>

                    </div>

                </div>

                <div class="app-card-body px-4">

                    <div class="intro mb-3">Hama nasi we have the Best Transport services to take your location</div>
                    <ul class="list-unstyled">
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            Request for transport service from our platform
                        </li>
                        <li>
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check2 text-primary me-2"
                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            Choose your Route to minimize costs
                        </li>

                    </ul>
                </div>

                <div class="app-card-footer p-4 mt-auto">
                    <a class="btn app-btn-primary" href="/transport">Browse Transport</a>
                </div>

            </div>

        </div>

    </div>
    <h1 class="app-page-title text-muted my-4"><i class="mdi mdi-home-modern"></i> Explore <span class="text-primary">Houses</span></h1>

    <div class="row g-4">
        @for ($i = 0; $i < 4; $i++)
            @component('components.reusablecard',[
                'type'=>'Office',
                'price'=>'200,000',
                'location'=>'Dar-es-Salaam',
                'status'=>'For Sale',
                'image'=>'images/property-3.jpg',
            ]);
            @endcomponent
        @endfor
        
        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; animation-delay: 0.1s; animation-name: none;">
            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
        </div>
    </div>

    <h1 class="app-page-title text-muted "><i class="mdi mdi-home-modern"></i> Explore <span class="text-primary">Transports</span></h1>

    <div class="row g-4">
        @for ($i = 0; $i < 4; $i++)
            @component('components.reusable-transport',
                [
                    'type' => 'Lory',
                    'price' => '200,000',
                    'location' => 'Dar-es-Salaam',
                    'image' => 'images/truck1.jpg',
                ])
            @endcomponent
        @endfor
    </div>

@endsection
