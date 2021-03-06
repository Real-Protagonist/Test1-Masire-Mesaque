@extends('layouts.app')

@section('styles')

@endsection

@section('content')

		<!-- Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content tx-size-sm">
					<div class="modal-body text-center">
						<i class="fe fe-alert-triangle fs-50"></i>
						<h4 class="text-primary fs-20 font-weight-semibold mt-2">Session Timeout</h4>
						<progress id="custom-bar" class="custom-progress mb-4 wd-70p mt-3" max="100" value="0">0%</progress>
						<p class="mb-4 mx-4">You're being timed out due to inactivity. Please choose to stay signed in or to logoff. Otherwise, you will logged off automatically..</p>
						<a class="btn btn-danger px-5" href="login-1.html">Log Out</a>
						<a aria-label="Close" class="btn btn-primary px-5 text-white" data-bs-dismiss="modal">Stay Loggedin</a>
					</div>
				</div>
			</div>
		</div>
		<!-- /Modal -->

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Page Session Timeout</h4>
							</div>
							<div class="page-rightheader">
								<div class="btn-list">
									<button class="btn btn-outline-primary"><i class="fe fe-download"></i>
										Import</button>
									<a href="javascript:void(0);"  class="btn btn-primary btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-calendar me-2 fs-14"></i> Search By Date</a>
									<div class="dropdown-menu border-0">
											<a class="dropdown-item" href="javascript:void(0);">Today</a>
											<a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
											<a class="dropdown-item active bg-primary text-white" href="javascript:void(0);">Last 7 days</a>
											<a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
											<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
											<a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
											<a class="dropdown-item" href="javascript:void(0);">Last year</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Page header-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-12">
								<div class="card">
									<div class="card-header">
										<div class="card-title">
											Session Time Out Demo
										</div>
									</div>
									<div class="card-body">
										<p class="mg-b-20">The Basic Collapse Accordion Styles of Nixlot template</p>
										<p class="mg-b-10">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- INTERNAL Session js -->
		<script src="{{asset('assets/js/session.js')}}"></script>

@endsection
