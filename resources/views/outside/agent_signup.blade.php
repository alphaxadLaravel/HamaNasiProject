@extends('layouts.outside')

@section('outside')
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-end">
                <div class="app-auth-body mx-auto mt-2">
                    <div class="app-auth-branding mb-2"><a class="app-logo" href="/"><img class="logo-icon me-2"
                                src="{{ asset('images/icon-deal.png') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-2 text-success"><span class=" d-md-inline">Agent -</span>
                        HamaNasi</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form action="/agent_auth" method="POST" class="auth-form auth-signup-form">
                            @csrf
							@if (Session::has('agent_error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <small>Something went Wrong!</small>
                                </div>
                            @endif
                            <div class="email mb-2">
                                <small class="text-muted">Full Name</small>
                                <input name="fullname" type="text" class="form-control signup-name">
                                <small class="text-danger">
                                    @error('fullname')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="email mb-2">
                                <small class="text-muted">Username</small>
                                <input name="username" type="text" class="form-control">
                                <small class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="email mb-2">
                                <small class="text-muted">Agent Type</small>
                                <select class="form-select " name="agent_type">
                                    <option value="">Select Type of Agent...</option>
                                    <option value="house_agent">House Agent</option>
                                    <option value="transport_agent">Transport Agent</option>
                                </select>
                                <small class="text-danger">
                                    @error('agent_type')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="password mb-2">
                                        <small class="text-muted"> Password</small>
                                        <input id="signup-password" name="password" type="password"
                                            class="form-control signup-password">
                                        <small class="text-danger">
                                            @error('password')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="password mb-2">
                                        <small class="text-muted">Confirm Password</small>
                                        <input id="signup-password" name="confirm" type="password"
                                            class="form-control signup-password">
                                        <small class="text-danger">
                                            @error('confirm')
                                                {{ $message }}
                                            @enderror
                                        </small>
                                    </div>
                                </div>
                                <div class="email mb-2">
                                    <small class="text-muted">Phone Number</small>
                                    <input name="phone" type="text" class="form-control signup-name">
                                    <small class="text-danger">
                                        @error('phone')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Jisajili</button>
                            </div>
                        </form>
                        <div class="auth-option text-center pt-5">Have an Account? <a class="text-link" href="/login">Login
                                Here! </a>| Signup as a <a href="/signup">Member!</a></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12 col-md-5 col-lg-6 100vh auth-background-col"
            style="background-image: url('{{ asset('images/carousel-2.jpg') }}'); background-repeat: no-repeat; background-size: cover">
            <div class="auth-background-holder">
            </div>
        </div>

    </div>
@endsection
