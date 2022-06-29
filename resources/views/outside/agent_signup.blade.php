@extends('layouts.outside')

@section('outside')
<div class="row g-0 app-auth-wrapper">
	<div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		<div class="d-flex flex-column align-content-end">
			<div class="app-auth-body mx-auto mt-2">
				<div class="app-auth-branding mb-2"><a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{asset('images/icon-deal.png')}}" alt="logo"></a></div>
				<h2 class="auth-heading text-center mb-2 text-success"><span class=" d-md-inline">Agent -</span> HamaNasi</h2>

				<div  class="auth-form-container text-start mx-auto">
					<form action="/agent" method="POST" class="auth-form auth-signup-form">
						<div class="email mb-2">
							<small class="text-muted">Full Name</small>
							<input name="signup-name" type="text" class="form-control signup-name" required="required">
						</div>
						<div class="email mb-2">
							<small class="text-muted">Username</small>
							<input name="signup-email" type="text" class="form-control signup-email" required="required">
						</div>
                        <div class="email mb-2">
                            <small class="text-muted">Agent Type</small>
                            <select class="form-select ">
                                <option value=""> </option>
                                <option value="option">House Agent</option>
                                <option value="option">Transport Agent</option>
                            </select>
                        </div>
						<div class="row">
							<div class="col-md-6">
								<div class="password mb-2">
									<small class="text-muted"> Password</small>
									<input id="signup-password" name="signup-password" type="password" class="form-control signup-password" required="required">
								</div>
							</div>
							<div class="col-md-6">
								<div class="password mb-2">
									<small class="text-muted">Confirm Password</small>
									<input id="signup-password" name="signup-password" type="password" class="form-control signup-password" required="required">
								</div>
							</div>
							<div class="email mb-2">
								<small class="text-muted">Phone Number</small>
								<input name="signup-name" type="text" class="form-control signup-name" required="required">
							</div>
						</div>
						<div class="text-center">
							<button type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Jisajili</button>
							{{-- <a href="/home" type="submit" class="btn app-btn-primary w-100 theme-btn mx-auto">Signup</a> --}}
						</div>
					</form>
					<div class="auth-option text-center pt-5">Have an Account? <a class="text-link" href="/login">Login Here! </a>| Signup as an <a href="/agent_signup">Agent!</a></div>
				</div>
			</div>

		</div>
	</div>

	<div class="col-12 col-md-5 col-lg-6 100vh auth-background-col" style="background-image: url('{{asset('images/carousel-2.jpg')}}'); background-repeat: no-repeat; background-size: cover">
		<div class="auth-background-holder">
		</div>
	</div>

</div>
@endsection
