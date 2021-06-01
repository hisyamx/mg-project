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
                            <div class="col-sm-4 col-12">
                                <label for="name">Nama Divisi</label>
                                <input type="text" class="form-control" id="name" name="name" required
                                    value="{{ old('name') }}">
                            </div>
                            <div class="col-sm-5 col-12">
                                <label for="head_user_id">Kepala Divisi</label>
                                <input type="text" class="form-control" id="head_user_id" name="head_user_id" required
                                    value="{{ old('head_user_id') }}">
                            </div>
                            <div class="col-sm-3 col-12">
                                <label for="status">Status Divisi</label>
                                <input type="text" class="form-control" id="status" name="status" required
                                    value="{{ old('status') }}">
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
