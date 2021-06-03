@extends('layouts.master')
@section('title', 'Division - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard.index')}}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.division.index')}}">Division</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="mb-0" action="{{ route('admin.division.index') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label for="name">Nama Divisi</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label for="head_user_id">Kepala Divisi</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="head_user_id" name="head_user_id"
                                    title="Pilih Kepala Divisi">
                                    @foreach($users AS $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="status" name="status" title="Pilih status">
                                    <option value="true">Aktif</option>
                                    <option value="false">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-neutral" type="submit">Tambah Divisi</button>
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
