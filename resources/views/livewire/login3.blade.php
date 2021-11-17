@extends('layouts.custom-app')

@section('styles')

@endsection

@section('class')

        <div class="register-3">

@endsection

@section('content')

        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-lg-6 col-xl-4 col-md-7 col-sm-12 col-xs-12 ">
                                    <div class="text-center mb-5 mt-0">
                                        <img src="{{asset('assets/images/brand/logo.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                    </div>
                                    <div class="card-group mb-0">
                                        <div class="card bg-primary text-white br-7 p-2">
                                            <div class="card-body mb-0">
                                                <div class="text-center mb-3">
                                                    <h1 class="mb-2">Log In</h1>
                                                    <a href="javascript:void(0);" class="text-white">Welcome Back !</a>
                                                </div>
                                            <hr class="hrregister3">
                                            <div class="text-center small mt-3">Sign in with</div>
                                            <div class="btn-list text-center mb-3 mt-2">
                                                <a href="javascript:void(0);" class="btn   m-0 me-2 p-2 mb-2"><i class="fa fa-google"></i> Google</a>
                                                <a href="javascript:void(0);" class="btn  m-0 me-2 p-2 mb-2"><i class="fa fa-twitter"></i> twitter</a>
                                                <a href="javascript:void(0);" class="btn  m-0 p-2 mb-2"><i class="fa fa-facebook"></i> facebook</a>
                                            </div>
                                            <hr class="divider my-6 text-primary">
                                            <form>
                                                <div class="input-group mb-4">
                                                        <div class="input-group-text">
                                                            <i class="fe fe-user"></i>
                                                        </div>
                                                    <input type="text" class="form-control" placeholder="Username">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle">
                                                            <a href="" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                            </a>
                                                        <input class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label text-white-50">Remember Me <a href="{{url('forgot-password3')}}" class="btn-link text-white float-end">Forget password ?</a></span>

                                                    </label>
                                                </div>
                                            </form>
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="{{url('index')}}" type="button" class="btn btn-white text-primary btn-block d-grid px-4 font-weight-bold">Log In</a>
                                                </div>
                                            </div>
                                            <div class="text-center pt-4">
                                                <div class="font-weight-normal fs-14 text-white-50">Don't have an account ?  <a class="btn-link font-weight-bold anchors text-white" href="{{url('register3')}}">Sign Up</a></div>
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
