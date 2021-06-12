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
                            <li class="breadcrumb-item"><a href="{{ route('admin.karyawan.index')}}">Karyawan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.karyawan.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="name">Nama</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" required type="number" class="form-control" id="telephone"
                                    value="{{ old('telephone') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="code">Kode</label>
                                <input required type="text" class="form-control" id="code" name="code"
                                    value="{{ old('code') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="email">Email</label>
                                <input required type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="password">Password</label>
                                <input required type="password" class="form-control" id="password" name="password"
                                    value="{{ old('password') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="role">Role</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="role" name="role" title="Pilih Role">
                                    <option value="2">Karyawan</option>
                                    <option value="3">Magang</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Divisi</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="division" name="division" title="Pilih Divisi">
                                    @foreach($division AS $div)
                                    <option value="{{$div->id}}">{{$div->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="status" name="status" title="Pilih status">
                                    <option value="active">Aktif</option>
                                    <option value="nonactive">Tidak Aktif</option>
                                </select>
                            </div> --}}
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="start">Mulai</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="start" id="start" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ old('start') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="finish">Selesai</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="finish" id="finish" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ old('finish') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea required type="text" class="form-control" id="address" placeholder="Alamat"
                                name="address" value="{{ old('address') }}"></textarea>
                        </div>
                        <div class="form-row">
                            <label> Tambahkan Foto (Optional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                <label class="custom-file-label" for="customFile">Pilih</label>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('page-css')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    @endsection

    @section('page-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js">
    </script>
    <script>
    </script>
    @endsection
