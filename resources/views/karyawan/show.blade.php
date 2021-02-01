@extends('users.master')
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
                            <li class="breadcrumb-item">{{ $karyawan->name }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <a class="avatar">
                        <img alt="Image placeholder" src="{{asset('storage/cover_images/'.$karyawan->cover_image)}}">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>Kode: {{ $karyawan->kode }}</h5>
                    <h5>Nama Karyawan: {{ $karyawan->name }}</h5>
                    <h5>Divisi: {{ $karyawan->division }}</h5>
                    <h5>Role: {{ $karyawan->role }}</h5>
                    <h5>Status: {{ $karyawan->status }}</h5>
                    <h5>Alamat: {{ $karyawan->address }}</h5>
                    <h5>Date Created: {{ $karyawan->created_at }}</h5>  
                    <h5>Last Updated: {{ $karyawan->updated_at }}</h5><br>
                    <form class="" action="{{ route('karyawan.delete',$karyawan->id) }}" method="POST">
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
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('karyawan.delete',$args->id) }}"
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
                        <h5>Nama Divisi: {{ $karyawan->name }}</h5>
                        <h5>Kepala Divisi: {{ $karyawan->headof }}</h5>
                        <h5>Status Divisi: {{ $karyawan->status }}</h5>
                        <h5>Last Updated: {{ $karyawan->updated_at }}</h5><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form class="" action="{{ route('karyawan.edit',$karyawan->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

