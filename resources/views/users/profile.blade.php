@extends('layouts.app')

@section('pages')
<h5 class=""><i class="mdi mdi-account text-success"></i> My Profile</h5>
<div class="row gy-4">
    <div class="col-12 col-lg-6">
        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
                <div class="row align-items-center gx-3">
                    <div class="col-auto">
                        <div class="app-icon-holder">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
                            </svg>
                        </div>

                    </div>
                    <div class="col-auto">
                        <h4 class="app-card-title">Profile</h4>
                    </div>
                </div>
            </div>
            <div class="app-card-body px-4 w-100">
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label mb-2"><strong>Photo</strong></div>
                            <div class="item-data">
                                <img class="profile-image rounded" src="{{asset('images/mbuto.jpg')}}" alt="">
                            </div>
                        </div>
                        <div class="col text-end">
                            <a class="btn-sm app-btn-secondary" href="#"><i class="mdi mdi-pencil"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Full Name</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">Cannute Hamisi</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Phone Number</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">+255-743-196-599</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Email</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">cannhamis@gmail.com</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Agent Number</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">AGT/12345</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Location</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">Kigamboni, Dar-es-Salaam</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Username</strong></div>
                        </div>
                        <div class="col text-end">
                            <div class="item-data">cannuhamis</div>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong>Password</strong></div>
                            <div class="item-data">••••••••</div>

                        </div>
                        <div class="col text-end">
                            <a class="btn-sm app-btn-secondary" href="#"><i class="mdi mdi-pencil"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-card-footer p-4 mt-auto">
                <a class="btn app-btn-secondary" href="#">Change Profile</a>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-6">
        <div class="app-card app-card-account shadow-sm d-flex flex-column align-items-start">
            <div class="app-card-header p-3 border-bottom-0">
                <div class="row align-items-center gx-3">
                    <div class="col-auto">
                        <div class="app-icon-holder">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"></path>
                                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"></path>
                            </svg>
                        </div>

                    </div>
                    <div class="col-auto">
                        <h4 class="app-card-title">Payment Number</h4>
                    </div>
                </div>
            </div>
            <div class="app-card-body px-4 w-100">

                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label">
                            <strong><i class="mdi mdi-phone"></i> current Number </strong>
                            <div class="item-data">+255-743-196-599</div>
                            </div>
                        </div>
                        <div class="col text-end">
                            <a class="btn-sm app-btn-secondary" href="#"><i class="mdi mdi-pencil"></i></a>
                        </div>
                    </div>
                </div>
                <div class="item border-bottom py-3">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="item-label"><strong><i class="mdi mdi-lock"></i> Password</strong></div>
                        </div>
                        <div class="col text-end">
                        <div class="item-data">••••••••</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
