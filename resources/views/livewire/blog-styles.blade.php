@extends('layouts.app')

@section('styles')

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Blog Styles</h4>
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

						<!-- Row-->
						<div class="row">
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="javascript:void(0);" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{asset('assets/images/photos/7.jpg')}})"></a>
									<div class="card-body  flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/6.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Thomos Scott</a>
												<small class="d-block text-muted">1 day ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
										<h4><a href="javascript:void(0);">Publishing packages</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body  flex-column">
										<div class="d-flex align-items-center mb-5">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
										<h4><a href="javascript:void(0);">Nihil molestaturrgt.</a></h4>
										<div class="text-muted ">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div><a href="" class=" mt-3 btn btn-sm btn-primary">Read more</a></div>
									</div>
									<a href="javascript:void(0);" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{asset('assets/images/photos/8.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<a href="javascript:void(0);" class="card-aside-column br-tl-7 br-bl-7" style="background-image: url({{asset('assets/images/photos/2.jpg')}})"></a>
									<div class="card-body  flex-column">
										<h4><a href="javascript:void(0);">Generator on the Internet..</a></h4>
										<div class="text-muted">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum....</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/12.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="card card-aside">
									<div class="card-body  flex-column">
										<h4><a href="javascript:void(0);">Nihil Molestiae.</a></h4>
										<div class="text-muted">Many desktop publishing packages and web page editors now use  default model text, and a search for will uncover...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/3.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Irene	Scott</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);" class="card-aside-column br-br-7 br-tr-7" style="background-image: url({{asset('assets/images/photos/16.jpg')}})"></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some </div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/15.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">MeganPeters</a>
												<small class="d-block text-muted">1 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);"><img class="card-img-top br-bl-7 br-br-7" src="{{asset('assets/images/photos/13.jpg')}}" alt="And this isn&#39;t my nose. This is a false one."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);"><img class="card-img-top br-bl-7 br-br-7" src="{{asset('assets/images/photos/14.jpg')}}" alt="Well, I didn&#39;t vote for you."></a>
								</div>
							</div>
							<div class="col-lg-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
										<div class="d-flex align-items-center pt-5 mt-auto">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
									<a href="javascript:void(0);"><img class="card-img-top br-bl-7 br-br-7" src="{{asset('assets/images/photos/15.jpg')}}" alt="How do you know she is a witch?"></a>
								</div>
							</div>
						</div>
						<!-- End row-->

						<!-- Row -->
						<div class="row">
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<div class="card-body d-flex flex-column ">
										<h4 class=""><a href="javascript:void(0);"> annoying consequences</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column ">
										<h4 class=""><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">Who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces.</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/16.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Anna Ogden</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card">
									<div class="card-body d-flex flex-column ">
										<h4 class=""><a href="javascript:void(0);">voluptatem quia voluptas</a></h4>
										<div class="text-muted">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque...</div>
									</div>
									<div class="card-body">
										<div class="d-flex align-items-center mt-auto">
											<div class="avatar  brround avatar-md me-3" style="background-image: url({{asset('assets/images/users/14.jpg')}})"></div>
											<div>
												<a href="{{url('profile-1')}}" class="font-weight-semibold">Carol Paige</a>
												<small class="d-block text-muted">2 days ago</small>
											</div>
											<div class="ms-auto text-muted">
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-danger-transparent text-danger border-danger fe fe-heart  fs-16 text-icon"></i></a>
												<a href="javascript:void(0)" class="icon d-none d-md-inline-block ms-3"><i class="p-2 brround bg-success-transparent border-success text-success fe fe-thumbs-up  fs-16 text-icon"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top  " src="{{asset('assets/images/photos/8.jpg')}}" alt="img" ></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-md btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top " src="{{asset('assets/images/photos/9.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-md btn-primary">Read more</a>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-xl-4">
								<div class="card overflow-hidden">
									<a href="javascript:void(0);"><img class="card-img-top " src="{{asset('assets/images/photos/10.jpg')}}" alt="img"></a>
									<div class="card-body d-flex flex-column">
										<h4><a href="javascript:void(0);">voluptatem quia voluptas.</a></h4>
										<div class="text-muted">To take a trivial example, which of us ever undertakes laborious physical exerciser , except to obtain some advantage from it...</div>
										<a href="" class="mt-3 btn btn-md btn-primary">Read more</a>
									</div>
								</div>
							</div>
						</div>
						<!--End Row-->

@endsection('content')

@section('scripts')

@endsection