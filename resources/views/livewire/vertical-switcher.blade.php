@extends('layouts.app')

@section('styles')

	    <!-- INTERNAL Switcher css -->
		<link href="{{asset('assets/switcher/css/switcher.css')}}" rel="stylesheet"/>
		<link href="{{asset('assets/switcher/demo.css')}}" rel="stylesheet"/>

@endsection

@section('content')

						<!--Page header-->
						<div class="page-header">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Switcher</h4>
							</div>
							<div class="page-rightheader">
							</div>
						</div>
						<!--End Page header-->
						<!-- Switcher -->
						<!-- Row -->
						<div class="row">
                            <div class="col-md-4"></div>
							<div class="col-md-4">
								<div class="card custom-switcher">
                                    <div class="card-header">
                                            <div class="card-title">
                                                Theme settings
                                            </div>
                                        </div>
									<div class="card-body">
										<div class="switcher-wrapper">
                                            <div class="container">
                                                <div class="form_holder sidebar-right1">
                                                    <div class="row">
                                                        <div class="">
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold fs-13">LTR AND RTL VERSIONS</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">LTR</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch54" class="onoffswitch2-checkbox" checked>
                                                                            <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">RTL</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch25" id="myonoffswitch55" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">THEME STYLE</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Light Theme</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Dark Theme</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch1" id="myonoffswitch2" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">LEFTMENU STYLES</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Light Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch3" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Color Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch4" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Dark Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch5" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Gradient Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch2" id="myonoffswitch25" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch25" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">HEADER STYLES</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Light Header</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch6" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Color Header</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch7" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Dark Header</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch8" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Gradient Header</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch3" id="myonoffswitch26" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch26" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">LAYOUT WIDTH STYLES</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Full Width</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Boxed</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch4" id="myonoffswitch10" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">LAYOUT POSITION STYLES</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Fixed</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Scrollable</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch5" id="myonoffswitch12" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="swichermainleft mt-2">
                                                                <span class="font-weight-semibold">SIDEMENU LAYOUT STYLES</span>
                                                                <div class="switch_section p-3">
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Default Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Closed Menu</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch30" class="onoffswitch2-checkbox default-menu">
                                                                            <label for="myonoffswitch30" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Icon with Text</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch14" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                    <div class="switch-toggle d-flex mt-2">
                                                                        <span class="me-auto">Icon Overlay</span>
                                                                        <a class="onoffswitch2"><input type="radio" name="onoffswitch6" id="myonoffswitch15" class="onoffswitch2-checkbox">
                                                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
                            <div class="col-md-4"></div>
						</div>
						<!-- End Row -->

@endsection('content')

@section('scripts')

		<!-- Switcher js -->
		<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>

		<!-- Custom js-->
		<script src="{{asset('assets/js/custom1.js')}}"></script>

@endsection