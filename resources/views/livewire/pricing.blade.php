@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Pricing</h4>
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
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-primary text-white p-0 pb-0 text-center">
										<h3>Personal</h3>
									</div>
									<div class="bg-primary-transparent">
										<div class="panel-body text-center mb-3">
											<p class="lead text-primary"><strong class="">$15 </strong>/  month</p>
										</div>
										<ul class="text-center">
											<li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
											<li class="mb-4"><strong>3 </strong> One-Click Apps</li>
											<li class="mb-4"><strong> 1 </strong> Databases</li>
											<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
											<li class="mb-6"><strong> 24/7</strong> support</li>
										</ul>
										<div class="panel-footer  bg-primary-transparent text-center border-top-0">
											<a class="btn btn-lg btn-primary" href="javascript:void(0);">Purchase Now!</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color">
										<div class="panel-heading bg-danger text-white p-0 text-center">
											<h3>Team</h3>
										</div>
									<div class="bg-danger-transparent">
										<div class="panel-body text-center mb-3">
											<p class="lead text-danger"><strong class="">$25</strong>/  month</p>
										</div>
										<ul class="text-center">
											<li class="mb-4"><strong> 3 Free</strong> Domain Name</li>
											<li class="mb-4"> <strong>4 </strong> One-Click Apps</li>
											<li class="mb-4"><strong> 2 </strong> Databases</li>
											<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
											<li class="mb-6"> <strong> 24/7</strong> support</li>
										</ul>
										<div class="panel-footer bg-danger-transparent text-center border-top-0">
											<a class="btn btn-lg btn-danger" href="javascript:void(0);">Purchase Now!</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-warning text-white p-0 text-center">
										<h3>Corporate</h3>
									</div>
									<div class="bg-warning-transparent">
										<div class="panel-body text-center mb-3">
											<p class="lead text-warning"><strong class="">$99</strong>/  month</p>
										</div>
										<ul class="text-center">
											<li class="mb-4"><strong> 5 Free</strong> Domain Name</li>
											<li class="mb-4"><strong>8 </strong> One-Click Apps</li>
											<li class="mb-4"><strong> 2 </strong> Databases</li>
											<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
											<li class="mb-6"><strong> 24/7</strong> support</li>
										</ul>
										<div class="panel-footer bg-warning-transparent text-center border-top-0 mb-0">
											<a class="btn btn-lg btn-warning" href="javascript:void(0);">Purchase Now!</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color">
									<div class="panel-heading bg-success text-white p-0 text-center">
										<h3>Business</h3>
									</div>
									<div class="bg-success-transparent">
										<div class="panel-body text-center mb-3">
											<p class="lead text-success"><strong class="">$35 </strong>/  month</p>
										</div>
										<ul class="text-center">
											<li class="mb-4"><strong> 4 Free</strong> Domain Name</li>
											<li class="mb-4"> <strong>6 </strong> One-Click Apps</li>
											<li class="mb-4"><strong> 2 </strong> Databases</li>
											<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
											<li class="mb-6"><strong> 24/7</strong> support</li>
										</ul>
										<div class="panel-footer text-center bg-success-transparent border-top-0 mb-0">
											<a class="btn btn-lg btn-success" href="javascript:void(0);">Purchase Now!</a>
										</div>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- End Row -->

						<!-- Row -->
						<div class="card px-5 pt-5">
							<div class="row">
								<div class="col-sm-6 col-lg-3">
									<div class="card shadow-none bg-white border">
										<div class="card-header bg-primary text-white align-items-center">
											<div class="card-title mx-auto text-center">
												<h3 class=" font-weight-semibold mt-3 mb-2">Team</h3>
												<div class="mb fs-13">$159 PER USER/MONTH</div>
												<p class="fs-12">billed anually</p>
											</div>
										</div>
										<div class="card-body text-center  pricing">
											<ul class="list-unstyled leading-loose">
												<li class="text-muted border-bottom"><strong>20 </strong> FreeDomain Name</li>
												<li class="text-muted border-bottom"><span class="text-primary fs-16 font-weight-bold">New!</span>  <strong>16</strong> One-Click Apps</li>
												<li class="text-muted border-bottom"><strong>6</strong>  Databases</li>
												<li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee</li>
												<li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="javascript:void(0);" class="btn btn-lg btn-outline-primary d-grid">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="card shadow-none bg-white border">
										<div class="card-header bg-success text-white align-items-center">
											<div class="card-title mx-auto text-center">
												<h3 class=" font-weight-semibold mt-3 mb-2">Personal</h3>
												<div class="mb fs-13">$29 PER USER/MONTH</div>
												<p class="fs-12">billed anually</p>
											</div>
										</div>
										<div class="card-body text-center  pricing">
											<ul class="list-unstyled leading-loose">
												<li class="text-muted border-bottom"><strong>5 </strong> FreeDomain Name</li>
												<li class="text-muted border-bottom"><strong>7</strong> One-Click Apps</li>
												<li class="text-muted border-bottom"><strong>6</strong>  Databases</li>
												<li class="text-muted border-bottom"><span class="text-success fs-16 font-weight-bold">New!</span>  <strong>Money</strong> BackGuarntee</li>
												<li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="javascript:void(0);" class="btn btn-lg btn-outline-success d-grid">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="card shadow-none bg-white border">
										<div class="card-header bg-secondary text-white align-items-center">
											<div class="card-title mx-auto text-center">
												<h3 class=" font-weight-semibold mt-3 mb-2">Corporate</h3>
												<div class="mb fs-13">$49 PER USER/MONTH</div>
												<p class="fs-12">billed anually</p>
											</div>
										</div>
										<div class="card-body text-center  pricing">
											<ul class="list-unstyled leading-loose">
												<li class="text-muted border-bottom"><strong>12 </strong> FreeDomain Name</li>
												<li class="text-muted border-bottom"><strong>10</strong> One-Click Apps</li>
												<li class="text-muted border-bottom"><strong>6</strong>  Databases</li>
												<li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee</li>
												<li class="text-muted border-bottom"><span class="text-secondary fs-16 font-weight-bold">New!</span>  <strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="javascript:void(0);" class="btn btn-lg btn-outline-secondary d-grid">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3">
									<div class="card shadow-none bg-white border">
										<div class="card-header bg-danger text-white align-items-center">
											<div class="card-title mx-auto text-center">
												<h3 class=" font-weight-semibold mt-3 mb-2">Unlimited</h3>
												<div class="mb fs-13">$249 PER USER/MONTH</div>
												<p class="fs-12">billed anually</p>
											</div>
										</div>
										<div class="card-body text-center  pricing">
											<ul class="list-unstyled leading-loose">
												<li class="text-muted border-bottom"><strong>12 </strong> FreeDomain Name</li>
												<li class="text-muted border-bottom"><strong>10</strong> One-Click Apps</li>
												<li class="text-muted border-bottom"><span class="text-danger fs-16 font-weight-bold">New!</span>  <strong>6</strong>  Databases</li>
												<li class="text-muted border-bottom"><strong>Money</strong> BackGuarntee</li>
												<li class="text-muted border-bottom"><strong>24/7</strong> Support</li>
											</ul>
											<div class="text-center mt-5">
												<a href="javascript:void(0);" class="btn btn-lg btn-outline-danger d-grid">Buy Now</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
							<!-- End Row -->

						<!-- Row -->
						<div class="row">
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color bg-white">
									<div class="panel-heading p-0 pb-0 fs-30 text-center mt-5 mb-3">
										<div class="bg-primary-transparent pricing-svg">
											<svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#664dc9"><path d="M0 0h24v24H0z" fill="none"/><path d="M21 3H3c-1.11 0-2 .89-2 2v12c0 1.1.89 2 2 2h5v2h8v-2h5c1.1 0 1.99-.9 1.99-2L23 5c0-1.11-.9-2-2-2zm0 14H3V5h18v12z"/></svg>
										</div>
									</div>
									<div class="panel-heading p-0 pb-0 text-center">
										<h4>Personal</h4>
									</div>
									<div class="panel-body text-center mb-6">
										<p class="lead text-primary"><strong class="">$15 </strong>/  month</p>
									</div>
									<ul class="text-center">
										<li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
										<li class="mb-4"><strong>3 </strong> One-Click Apps</li>
										<li class="mb-4"><strong> 1 </strong> Databases</li>
										<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
										<li class="mb-6"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer   text-center border-top-0 mb-4">
										<a class="btn btn-lg btn-primary" href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color bg-white">
									<div class="panel-heading p-0 pb-0 text-center mt-5 mb-3">
										<div class="bg-danger-transparent pricing-svg">
											<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="30px" viewBox="0 0 24 24" width="30px" fill="#ef4b4b"><g><rect fill="none" height="24" width="24"/></g><g><g/><g><g><path d="M16.67,13.13C18.04,14.06,19,15.32,19,17v3h4v-3 C23,14.82,19.43,13.53,16.67,13.13z" fill-rule="evenodd"/></g><g><circle cx="9" cy="8" fill-rule="evenodd" r="4"/></g><g><path d="M15,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4c-0.47,0-0.91,0.1-1.33,0.24 C14.5,5.27,15,6.58,15,8s-0.5,2.73-1.33,3.76C14.09,11.9,14.53,12,15,12z" fill-rule="evenodd"/></g><g><path d="M9,13c-2.67,0-8,1.34-8,4v3h16v-3C17,14.34,11.67,13,9,13z" fill-rule="evenodd"/></g></g></g></svg>
										</div>
									</div>
									<div class="panel-heading p-0 pb-0 text-center">
										<h4>Team</h4>
									</div>
									<div class="panel-body text-center mb-6">
										<p class="lead text-danger"><strong class="">$15 </strong>/  month</p>
									</div>
									<ul class="text-center">
										<li class="mb-4 "> <strong> 2 Free</strong> Domain Name</li>
										<li class="mb-4"><strong>3 </strong> One-Click Apps</li>
										<li class="mb-4"><strong> 1 </strong> Databases</li>
										<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
										<li class="mb-6"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer   text-center border-top-0 mb-4">
										<a class="btn btn-lg btn-danger" href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color bg-white">
									<div class="panel-heading p-0 pb-0 text-center mt-5 mb-3">
										<div class="bg-success-transparent pricing-svg">
											<svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#38cb89"><path d="M0 0h24v24H0zm10 5h4v2h-4zm0 0h4v2h-4z" fill="none"/><path d="M10 16v-1H3.01L3 19c0 1.11.89 2 2 2h14c1.11 0 2-.89 2-2v-4h-7v1h-4zm10-9h-4.01V5l-2-2h-4l-2 2v2H4c-1.1 0-2 .9-2 2v3c0 1.11.89 2 2 2h6v-2h4v2h6c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2zm-6 0h-4V5h4v2z"/></svg>
										</div>
									</div>
									<div class="panel-heading p-0 pb-0 text-center">
										<h4>Corporate</h4>
									</div>
									<div class="panel-body text-center mb-6">
										<p class="lead text-success"><strong class="">$15 </strong>/  month</p>
									</div>
									<ul class="text-center">
										<li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
										<li class="mb-4"><strong>3 </strong> One-Click Apps</li>
										<li class="mb-4"><strong> 1 </strong> Databases</li>
										<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
										<li class="mb-6"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer  text-center border-top-0 mb-4">
										<a class="btn btn-lg btn-success" href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
							<div class="col-sm-6 col-xl-3">
								<div class="panel price panel-color bg-white">
									<div class="panel-heading p-0 pb-0 text-center mt-5 mb-3">
										<div class="bg-warning-transparent pricing-svg">
											<svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#ffab00"><path d="M0 0h24v24H0z" fill="none"/><path d="M19 6h-2c0-2.76-2.24-5-5-5S7 3.24 7 6H5c-1.1 0-1.99.9-1.99 2L3 20c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-7-3c1.66 0 3 1.34 3 3H9c0-1.66 1.34-3 3-3zm0 10c-2.76 0-5-2.24-5-5h2c0 1.66 1.34 3 3 3s3-1.34 3-3h2c0 2.76-2.24 5-5 5z"/></svg>
										</div>
									</div>
									<div class="panel-heading p-0 pb-0 text-center">
										<h4>Business</h4>
									</div>
									<div class="panel-body text-center mb-6">
										<p class="lead text-warning"><strong class="">$15 </strong>/  month</p>
									</div>
									<ul class="text-center">
										<li class="mb-4"> <strong> 2 Free</strong> Domain Name</li>
										<li class="mb-4"><strong>3 </strong> One-Click Apps</li>
										<li class="mb-4"><strong> 1 </strong> Databases</li>
										<li class="mb-4"><strong> Money </strong> BackGuarantee</li>
										<li class="mb-6"><strong> 24/7</strong> support</li>
									</ul>
									<div class="panel-footer   text-center border-top-0 mb-4">
										<a class="btn btn-lg btn-warning" href="javascript:void(0);">Purchase Now!</a>
									</div>
								</div>
							</div><!-- COL-END -->
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

@endsection
