@extends('layouts.custom-app')

@section('styles')

@endsection

@section('class')

        <div class="register-2">

@endsection

@section('content')

        <div class="page">
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="text-center mb-6">
                                        <img src="{{asset('assets/images/brand/logo1.png')}}" class="header-brand-img desktop-lgo" alt="Azea logo">
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="text-center mb-3">
                                                <h1 class="mb-2">Password</h1>
                                                <a href="javascript:void(0);" class="">Create New Password</a>
                                            </div>
                                            <form class="mt-5">
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle">
                                                        <a href="" class="input-group-text">
                                                        <i class="fe fe-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="form-control" type="password" placeholder="Old Password">
                                                    </div>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle1">
                                                        <a href="" class="input-group-text">
                                                        <i class="fe fe-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="form-control" type="password" placeholder="New Password">
                                                    </div>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group" id="Password-toggle2">
                                                        <a href="" class="input-group-text">
                                                        <i class="fe fe-eye" aria-hidden="true"></i>
                                                        </a>
                                                        <input class="form-control" type="password" placeholder="Confirm Password">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" />
                                                        <span class="custom-control-label">Remember Me</span>
                                                    </label>
                                                </div>
                                                <div class="form-group text-center mb-3">
                                                    <a href="{{url('login2')}}" class="btn btn-primary btn-lg w-100 br-7">Reset</a>
                                                </div>
                                                <div class="form-group fs-12 text-center">
                                                    By Clicking Reset, New Password Your agree to our  <a href="javascript:void(0);" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="javascript:void(0);" class="font-weight-bold">Privacy & Services.</a>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="text-center register-icons">
                                        <div class="small text-white mb-4">Login using with</div>
                                        <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 google me-2" type="button"><i class="fa fa-google"></i></button>
                                        <button class="btn bg-white-50  text-white-50 font-weight-semibold  w-12 facebook me-2" type="button"><i class="fa fa-facebook-f"></i></button>
                                        <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 twitter me-2" type="button"><i class="fa fa-twitter"></i></button>
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
