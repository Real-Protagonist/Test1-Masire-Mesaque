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
                                            <div class="row mt-xl-5">
                                                <div class="col-9 d-block mx-auto">
                                                    <div class="text-center mb-4 ">
                                                        <span class="avatar avatar-xxl  brround" style="background-image: url({{asset('assets/images/users/2.jpg')}})"></span>
                                                    </div>
                                                    <span class="m-4 d-none d-lg-block text-center">
                                                        <span class="fs-20"><strong>Patrenna</strong></span>
                                                    </span>
                                                    <div class="input-group mb-4">
                                                        <div class="input-group" id="Password-toggle">
                                                            <a href="" class="input-group-text">
                                                            <i class="fe fe-eye" aria-hidden="true"></i>
                                                            </a>
                                                            <input class="form-control" type="password" placeholder="Confirm Password">
                                                        </div>
                                                    </div>
                                                    <a href="{{url('login2')}}" class="btn btn-primary w-100"><i class="fe fe-lock"></i> Unlock</a>
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