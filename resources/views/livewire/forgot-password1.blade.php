@extends('layouts.custom-app')

@section('styles')

@endsection

@section('class')

        <div class="register1">

@endsection

@section('content')

        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-12">
                                    <div class="row p-0 m-0">
                                        <div class="col-lg-6 p-0">
                                            <div class="text-justified text-white p-5 register-1  overflow-hidden">
                                                <div class="custom-content">
                                                    <div class="mb-5 br-7">
                                                        <img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                                    </div>
                                                    <div class="ms-5">
                                                        <div class="fs-16 mb-6 font-weight-bold text-white">Welcome Back To Azea !</div>
                                                        <div class="mb-6 text-white-50">
                                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem deleniti facilis quo!
                                                        </div>
                                                        <h6 class="text-white-50">Subscribe For More .</h6>
                                                        <a href="{{url('login1')}}" class="btn btn-white text-primary font-weight-bold ">Visit Page</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6 p-0 mx-auto">
                                        <div class="bg-white text-dark br-7 br-tl-0 br-bl-0">
                                            <div class="card-body">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Forget Password</h1>
                                                    <a href="javascript:void(0);" class="">OOps....</a>
                                                </div>
                                                <form class="mt-5">
                                                    <div class="input-group mb-4">
                                                            <div class="input-group-text">
                                                                <i class="fe fe-mail"></i>
                                                            </div>
                                                        <input type="text" class="form-control" placeholder="Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" />
                                                            <span class="custom-control-label">Send recovery mail</span>
                                                        </label>
                                                    </div>
                                                    <div class="form-group text-center mb-3">
                                                        <a href="{{url('register1')}}" class="btn btn-primary btn-lg w-100 br-7">Send</a>
                                                    </div>
                                                    <div class="form-group fs-12 text-center">
                                                        By Clicking Send,You agree to our  <a href="javascript:void(0);" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="javascript:void(0);" class="font-weight-bold">Privacy & Services.</a>
                                                    </div>
                                                </form>
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

@endsection('content')

@section('scripts')

@endsection
