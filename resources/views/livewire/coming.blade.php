@extends('layouts.custom-app')

@section('styles')

@endsection

@section('class')

		<div class="register-2">

@endsection

@section('content')

		<!-- Page -->
		<div class="page relative">
			<div class="page-content">
				<div class="container text-center">
					<div class="mb-5 br-7">
						<img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
					</div>
					<div class="display-2 text-white mb-5 font-weight-normal1 error-text">Coming soon</div>
					<p class="h5 font-weight-normal mb-5 leading-normal text-white-50">Our website is under construction and we are working on it will be available soon.</p>
					<div class="row">
						<div class="col-md-6 d-block mx-auto">
							<div class="input-group  mb-8">
								<input class="form-control" placeholder="Enter Your Email" type="text">
									<button class="btn btn-notify br-tl-0 br-bl-0" type="button">
										<span class="input-group-btn">Notify Me</span>
									</button>
							</div>
							<div class="text-center register-icons">
								<button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 google me-2" type="button"><i class="fa fa-google"></i></button>
								<button class="btn bg-white-50  text-white-50 font-weight-semibold  w-12 facebook me-2" type="button"><i class="fa fa-facebook-f"></i></button>
								<button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 twitter me-2" type="button"><i class="fa fa-twitter"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Page -->

@endsection('content')

@section('scripts')

@endsection