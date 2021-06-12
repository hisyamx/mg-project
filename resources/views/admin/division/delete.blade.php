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
                            <li class="breadcrumb-item">{{ $division->name }}</li>
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
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Nama Divisi: {{ $division->name }}</h5>
                    <h5>Kepala Divisi: {{ $division->head_user_id }}</h5>
                    <h5>Status Divisi: {{ $division->status }}</h5>
                    <h5>Last Updated: {{ $division->updated_at }}</h5><br>
                    <form class="" action="{{ route('admin.division.delete',$division->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection;
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('admin.division.delete',$args->id) }}"
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
                        <h5>Nama Divisi: {{ $division->name }}</h5>
                        <h5>Kepala Divisi: {{ $division->headof }}</h5>
                        <h5>Status Divisi: {{ $division->status }}</h5>
                        <h5>Last Updated: {{ $division->updated_at }}</h5><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form class="" action="{{ route('admin.admin.division.edit',$division->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}
