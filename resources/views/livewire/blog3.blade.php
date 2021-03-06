@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Blog 3</h4>
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
							<div class="col-xl-12 col-lg-12 col-md-12">
								<div class="card overflow-hidden">
									<div class="item7-card-img px-4 pt-4">
										<a href="javascript:void(0);"></a>
										<img src="{{asset('assets/images/photos/blog.jpg')}}" alt="img" class="cover-image br-7 w-100">
									</div>
									<div class="card-body">
										<div class="item7-card-desc d-md-flex mb-5">
											<a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary brround border-secondary"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">Jan-18-2021</div></a>
											<a href="javascript:void(0);" class="d-flex mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-success-transparent text-success brround border-success"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">Anna Ogden</div></a>
											<div class="ms-auto mb-2">
												<a class="me-0 d-flex" href="javascript:void(0);"><i class="fe fe-message-square fs-16 me-1 p-3 bg-warning-transparent text-warning brround border-warning"></i><div class="mt-0 mt-3 ms-1 text-muted font-weight-semibold">12 Comments</div></a>
											</div>
										</div>
										<a href="javascript:void(0);" class="mt-4"><h5 class="font-weight-semibold">Excepteur  occaecat cupidatat</h5></a>
										<p class="">I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure.</p>
										<p>but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example</p>
										<div class="media py-3 mt-0 border-top">
											<div class="media-user me-2">
												<div class="avatar-list avatar-list-stacked">
													<span class="avatar brround" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{asset('assets/images/users/9.jpg')}})"></span>
													<span class="avatar brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
												</div>
											</div>
											<div class="ms-auto">
												<div class="d-flex">
													<a href="javascript:void(0)" class="new ms-3 mt-2"><i class="p-3 text-danger br-7 bg-danger-transparent fe fe-heart  fs-16 text-icon"></i></a>
													<a href="javascript:void(0)" class="new ms-3 mt-2"><i class="p-3 text-success br-7 bg-success-transparent fe fe-thumbs-up  fs-16 text-icon"></i></a>
													<a href="javascript:void(0)" class="new ms-3 mt-2"><i class="p-3 text-secondary br-7 bg-secondary-transparent fe fe-share-2  fs-16 text-icon"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<!--Comments-->
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">3 Comments</h3>
									</div>
									<div class="card-body">
										<div class="d-sm-flex mt-0 p-5 sub-review-section border border-bottom-0 br-bl-0 br-br-0">
											<div class="d-flex me-3">
												<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/images/users/1.jpg')}}"> </a>
											</div>
											<div class="media-body Comments1">
												<h5 class="mt-0 mb-1 font-weight-semibold">Joanne Scott
													<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
													<span class="fs-14 ms-2"> 4.5 <i class="fa fa-star text-yellow"></i></span>
												</h5>
												<p class="font-13  mb-2 mt-2">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-primary">Helpful</span></a>
												<a href="" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge bg-info">Comment</span></a>
												<a href="" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#report"><span class="badge bg-danger">Report</span></a>
												<div class="d-flex float-md-end mb-2">
													<a href="javascript:void(0)" class="new ms-lg-3 mt-5 mt-md-2"><i class="p-3 text-success br-7 bg-success-transparent fe fe-thumbs-up  fs-16 text-icon"></i></a>
													<a href="javascript:void(0)" class="new ms-3 mt-5 mt-md-2"><i class="p-3 text-danger br-7 bg-danger-transparent fe fe-thumbs-down  fs-16 text-icon"></i></a>
												</div>
											</div>
										</div>
										<div class="d-sm-flex p-5 sub-review-section border subsection-color br-tl-0 br-tr-0">
											<div class="d-flex me-3">
												<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/images/users/2.jpg')}}"> </a>
											</div>
											<div class="media-body Comments1">
												<h5 class="mt-0 mb-1 font-weight-semibold">Rose Slater <span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span></h5>
												<p class="font-13  mb-2 mt-2">
													Lorem ipsum dolor sit amet nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="" data-bs-toggle="modal" data-bs-target="#Comment" class="mt-1"><span class="badge bg-info">Comment</span></a>
												<div class="d-flex float-md-end mb-2">
													<a href="javascript:void(0)" class="new ms-lg-3 mt-5 mt-md-2"><i class="p-3 text-success br-7 bg-success-transparent fe fe-thumbs-up  fs-16 text-icon"></i></a>
													<a href="javascript:void(0)" class="new ms-3 mt-5 mt-md-2"><i class="p-3 text-danger br-7 bg-danger-transparent fe fe-thumbs-down  fs-16 text-icon"></i></a>
												</div>
											</div>
										</div>
										<div class="d-sm-flex p-5 mt-4 border sub-review-section">
											<div class="d-flex me-3">
												<a href="javascript:void(0);"><img class="media-object brround avatar-md" alt="64x64" src="{{asset('assets/images/users/3.jpg')}}"> </a>
											</div>
											<div class="media-body Comments1">
												<h5 class="mt-0 mb-1 font-weight-semibold">Edward
												<span class="fs-14 ms-0" data-bs-toggle="tooltip" data-placement="top" title="" data-original-title="verified"><i class="fa fa-check-circle-o text-success"></i></span>
												<span class="fs-14 ms-2"> 4 <i class="fa fa-star text-yellow"></i></span>
												</h5>
												<p class="font-13  mb-2 mt-2">
												   Lorem ipsum dolor sit amet, quis Neque porro quisquam est, nostrud exercitation ullamco laboris   commodo consequat.
												</p>
												<a href="javascript:void(0);" class="me-2 mt-1"><span class="badge bg-primary">Helpful</span></a>
												<a href="javascript:void(0)" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#Comment"><span class="badge bg-info">Comment</span></a>
												<a href="javascript:void(0)" class="me-2 mt-1" data-bs-toggle="modal" data-bs-target="#report"><span class="badge bg-danger">Report</span></a>
												<div class="d-flex float-md-end mb-2">
													<a href="javascript:void(0)" class="new ms-lg-3 mt-5 mt-md-2"><i class="p-3 text-success br-7 bg-success-transparent fe fe-thumbs-up  fs-16 text-icon"></i></a>
													<a href="javascript:void(0)" class="new ms-3 mt-5 mt-md-2"><i class="p-3 text-danger br-7 bg-danger-transparent fe fe-thumbs-down  fs-16 text-icon"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--/Comments-->

								<div class="card mb-lg-0">
									<div class="card-header">
										<h3 class="card-title">Add a Comment</h3>
									</div>
									<div class="card-body">
										<div class="mt-2">
											<div class="form-group">
												<input type="text" class="form-control" id="name1" placeholder="Your Name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" id="email" placeholder="Email Address">
											</div>
											<div class="form-group">
												<textarea class="form-control" name="example-textarea-input" rows="6" placeholder="Write Review"></textarea>
											</div>
											<a href="javascript:void(0);" class="btn btn-primary">Send Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

@endsection('content')

@section('scripts')

@endsection