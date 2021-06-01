@extends('layouts.master')
@section('title', 'Magang - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route ('admin.magang.index')}}">Magang</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                                @if ($magang->cover_image != null)
                                <img alt="Image placeholder"
                                    src="{{asset('storage/cover_images/'.$magang->cover_image)}}">
                                @else
                                <img alt="Image placeholder" src="{{asset('/assets')}}/img/user.png">
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body pt-7">
                    <div class="text-center">
                        <h5 class="h3">{{ $magang->name }}<span class="font-weight-light"></span>
                        </h5>
                        @if ($magang->role == 3)
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>Magang
                        </div>
                        @else
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>Karyawan
                        </div>
                        @endif
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>{{ $magang->username }}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{ $magang->address }}
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
                            <h3 class="mb-0">Edit {{ $magang->name }}</h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.magang.edit',$magang->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Fullname</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    value="{{ $magang->name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nim">Nomor Induk</label>
                                <input required type="text" class="form-control" id="nim" name="nim"
                                    placeholder="Nomor Induk" value="{{ $magang->nim }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="role">Role</label>
                                <input required type="text" class="form-control" id="role" name="role"
                                    value="{{ $magang->role }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Division</label>
                                <select required id="division" class="form-control" name="division">
                                    <option selected disabled>Divisi</option>
                                    @foreach($division AS $args)
                                    <option value="{{$args->name}}" <?php
                                if($args->name == $magang->division){
                                    print "selected";
                                }
                                ?>>{{$args->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>

                        <hr class="my-4" />
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" required type="number" class="form-control" id="telephone"
                                    value="{{ $magang->telephone}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                    value="{{ $magang->status }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="start">Mulai Magang</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="start" id="start" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ $magang->start }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="finish">Selesai Magang</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="finish" id="finish" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ $magang->finish }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" class="form-control" id="address" name="address"
                                value="{{ $magang->address }}">
                        </div>
                        <div class="form-row">
                            <label> Tambahkan Foto (Optional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                <label class="custom-file-label" for="customFile">Pilih</label>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('admin.magang.edit',$args->id) }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $magang->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="mb-5" action="{{ route('admin.magang.edit',$magang->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label for="name">Nama Divisi</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $magang->name }}">
                                    <label for="division">Kepala Divisi</label>
                                    <input type="text" class="form-control" id="head0f" name="division"
                                        value="{{ $magang->division }}">
                                    <label for="status">Status Divisi</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ $magang->status }}">
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
