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
                                    <div class="card-group mb-0">
                                        <div class="card bg-primary text-white br-7 p-2">
                                            <div class="card-body">
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
                                                        <input class="form-control" type="password" placeholder="Password">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a href="{{url('login3')}}" type="button" class="btn text-primary w-100 btn-white"><i class="fe fe-lock"></i> Unlock</a>
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
        </div>

@endsection('content')

@section('scripts')

@endsection