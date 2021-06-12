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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.division.index') }}">Division
                                    {{ $division->name }}</a></li>
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
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form class="mb-5" action="{{ route('admin.division.edit',$division->id) }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <label for="name">Nama Divisi</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $division->name }}">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="form-group col-md-6">
                                <label for="head_user_id">Kepala Divisi</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="head_user_id" name="head_user_id"
                                    value="{{ $division->head_user_id }}">
                                    @foreach($users AS $user)
                                    <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status Divisi</label>
                                <select class="selectpicker d-block w-100" data-style="btn-outline-primary"
                                    data-live-search="true" required id="status" name="status"
                                    title="{{ $division->status }}">
                                    <option value="true">Aktif</option>
                                    <option value="false">Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-warning" type="submit">Edit</button>
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

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('admin.admin.division.edit',$args->id) }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $division->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="mb-5" action="{{ route('admin.admin.division.edit',$division->id) }}"
                            method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label for="name">Nama Divisi</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $division->name }}">
                                    <label for="headof">Kepala Divisi</label>
                                    <input type="text" class="form-control" id="head0f" name="headof"
                                        value="{{ $division->headof }}">
                                    <label for="status">Status Divisi</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ $division->status }}">
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
