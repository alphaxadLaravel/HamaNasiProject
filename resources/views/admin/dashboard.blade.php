@extends('layouts.app')

@section('pages')
    <h1 class="app-page-title text-muted">👋 Hi, <span
            class="text-success">{{ ucfirst(session()->get('user')['username']) }}!</span></h1>
    <div class="row g-4 mb-5">

        @if (session()->get('user')['role'] == 'admin')
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total users</h4>
                        <div class="stats-figure">{{ $user_count }}</div>
                    </div>
                    <a class="app-card-link-mask" href="/users"></a>
                </div>
            </div>

            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total Houses</h4>
                        <div class="stats-figure">{{ $all_houses }}</div>
                    </div>
                    <a class="app-card-link-mask" href="/admin_houses"></a>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total Transports</h4>
                        <div class="stats-figure">{{ $all_transports }}</div>
                    </div>
                    <a class="app-card-link-mask" href="/admin_transport"></a>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Transactions</h4>
                        <div class="stats-figure">0</div>
                    </div>
                    <a class="app-card-link-mask" href="/admin_transaction"></a>
                </div>
            </div>
        @endif

        @if (session()->get('user')['role'] == 'house_agent')
            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total Bookings</h4>
                        <div class="stats-figure">0</div>
                    </div>
                    <a class="app-card-link-mask" href="/house_agent_bookings"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">My Houses</h4>
                        <div class="stats-figure">{{ $my_houses }}</div>
                    </div>
                    <a class="app-card-link-mask" href="/house_agent_houses"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Transactions</h4>
                        <div class="stats-figure">0</div>
                    </div>
                    <a class="app-card-link-mask" href="/transactions"></a>
                </div>
            </div>
        @endif

        @if (session()->get('user')['role'] == 'transport_agent')
            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Total Requests</h4>
                        <div class="stats-figure">0</div>
                    </div>
                    <a class="app-card-link-mask" href="/house_agent_bookings"></a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">My Vehicles</h4>
                        <div class="stats-figure">{{ $my_vehicles }}</div>
                    </div>
                    <a class="app-card-link-mask" href="/house_agent_houses"></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="app-card app-card-stat shadow-sm h-100">
                    <div class="app-card-body p-3 p-lg-4">
                        <h4 class="stats-type mb-1">Transactions</h4>
                        <div class="stats-figure">0</div>
                    </div>
                    <a class="app-card-link-mask" href="/transactions"></a>
                </div>
            </div>
        @endif
    </div>
@endsection
