@extends('layouts.master')
@section('title', 'Karyawan - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('admin.division.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.karyawan.index') }}">Karyawan</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Delete {{ $karyawan->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <div class="row justify-content-center pt-7">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                @if ($karyawan->cover_image != null)
                                <img alt="Image placeholder"
                                    src="{{asset('storage/cover_images/'.$karyawan->cover_image)}}">
                                @else
                                <img alt="Image placeholder" src="{{asset('/assets')}}/img/user.png">
                                @endif
                            </a>

                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">{{ $karyawan->name }}<span class="font-weight-light"></span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $karyawan->email }}
                        </div>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $karyawan->getRole() }}
                        </div>
                        <div class="h5 mt-2">
                            <i class="ni business_briefcase-24 mr-2"></i>{{ $karyawan->division->name }}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{ $karyawan->address }}
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
                            <h3 class="mb-0">{{ $karyawan->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Fullname</label>
                            <input disabled type="text" class="form-control" id="name" name="name"
                                value="{{ $karyawan->name }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="code">Kode</label>
                            <input disabled type="text" class="form-control" id="code" name="code"
                                placeholder="Nomor Induk" value="{{ $karyawan->code }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="role">Role</label>
                            <input disabled type="text" class="form-control" id="role" name="role"
                                value="{{ $karyawan->getRole() }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="division">Division</label>
                            <input disabled type="text" class="form-control" id="division" name="division"
                                value="{{ $karyawan->division->name }}">
                        </div>
                    </div>

                    <hr class="my-4" />
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="telephone">Telephone</label>
                            <input disabled name="telephone" type="text" class="form-control" id="telephone"
                                value="{{ $karyawan->telephone }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea disabled type="text" class="form-control" id="address" placeholder="Alamat"
                            name="address">{{ $karyawan->address }}</textarea>
                    </div>
                    <form class="" action="{{ route('admin.karyawan.delete',$karyawan->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('admin.karyawan.edit',$args->id) }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $karyawan->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="mb-5" action="{{ route('admin.karyawan.edit',$karyawan->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label for="name">Nama Divisi</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $karyawan->name }}">
                                    <label for="division">Kepala Divisi</label>
                                    <input type="text" class="form-control" id="head0f" name="division"
                                        value="{{ $karyawan->division }}">
                                    <label for="status">Status Divisi</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ $karyawan->status }}">
                                </div>
                            </div>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
