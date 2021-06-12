@extends('layouts.master')
@section('title', 'Profil - Dashboard Management')

@section('content')

<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <div class="row justify-content-center pt-7">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="{{asset('assets/img/botika_icon2.svg')}}" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">{{ Auth::user()->name }}<span class="font-weight-light"></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ Auth::user()->address }}
                        </div>
                        <div>
                            <i class="ni business_briefcase-24 mr-2"></i>{{ Auth::user()->email}}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{ Auth::user()->password }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit profile </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-first-name">Nama</label>
                                        <input type="text" id="input-first-name" class="form-control" value="{{ Auth::user()->name }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Email</label>
                                        <input type="email" id="input-email" class="form-control" value="{{ Auth::user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Password</label>
                                        <input type="password" id="password" class="form-control" value=" {{ Auth::user()->password }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Address -->
                        <h6 class="heading-small text-muted mb-4">Contact information</h6>
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-address">Address</label>
                                        <input id="input-address" class="form-control" value="{{ Auth::user()->address }}" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <!-- Description -->
                        <h6 class="heading-small text-muted mb-4">About me</h6>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">About Me</label>
                                <textarea rows="4" class="form-control">{{ Auth::user()->address }}</textarea>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection
