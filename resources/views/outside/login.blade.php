@extends('layouts.outside')

@section('outside')
    <div class="row g-0 app-auth-wrapper">
        <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
            <div class="d-flex flex-column align-content-center">
                <div class="app-auth-body mx-auto mt-5">
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="/"><img class="logo-icon me-2"
                                src="{{ asset('images/icon-deal.png') }}" alt="logo"></a></div>
                    <h2 class="auth-heading text-center mb-4 text-success"><span class="d-none d-md-inline">👋 Welcome!
                            -</span> HamaNasi</h2>

                    <div class="auth-form-container text-start mx-auto">
                        <form method="POST" action="/login_users" class="auth-form auth-signup-form">
                            @csrf
                            @if (Session::has('success_signup'))
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <small>Successfully registered!, Please Login!</small>
                                </div>
                            @endif
                            @if (Session::has('login_error'))
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <small>Wrong Username or Password!</small>
                                </div>
                            @endif
                            @if (Session::has('approove'))
                                <div class="alert alert-warning alert-dismissible" role="alert">
                                    <small>Please Wait for Account Approoval!</small>
                                </div>
                            @endif
                            <div class="email mb-2">
                                <small class="text-muted">Username</small>
                                <input name="username" type="text" class="form-control">
                                <small class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>

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
                            <div class="extra mt-3 row justify-content-between">
                                <div class="col-6">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="RememberPassword">
                                        <label class="form-check-label" for="RememberPassword">
                                            Remember me
                                        </label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="forgot-password text-end">
                                        <a href="/forgot">Forgot password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Ingia</button>
                                {{-- <a href="/home" class="btn app-btn-primary w-100 theme-btn mx-auto">Login</a> --}}
                            </div>

                        </form>

                        <div class="auth-option text-center pt-5">Have an Account? <a class="text-link"
                                href="/signup">Signup Here! </a>| Signup as <a href="/agent_signup">Agent!</a></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-12 col-md-5 col-lg-6 100vh auth-background-col"
            style="background-image: url('{{ asset('images/carousel-1.jpg') }}'); background-repeat: no-repeat; background-size: cover">
            <div class="auth-background-holder">
            </div>
        </div>
    </div>
@endsection
