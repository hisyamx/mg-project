@extends('users.master')
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
                            <li class="breadcrumb-item">{{ $magang->name }}</li>
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
        <div class="col-4 grid-margin">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('magang.edit',$args->id) }}" class="avatar">
                        <img alt="Image placeholder" src="{{asset('storage/cover_images/'.$args->cover_image)}}">
                    </a>
                </div>
            </div>
        </div>
        <div class="col-8 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h5>NIM: {{ $magang->nim }}</h5>
                    <h5>Nama magang: {{ $magang->name }}</h5>
                    <h5>Divisi: {{ $magang->division }}</h5>
                    <h5>Role: {{ $magang->role }}</h5>
                    <h5>Status: {{ $magang->status }}</h5>
                    <h5>Sekolah: {{ $magang->sekolah }}</h5>
                    <h5>Alamat: {{ $magang->address }}</h5>
                    <h5>Date Created: {{ $magang->created_at }}</h5>  
                    <h5>Last Updated: {{ $magang->updated_at }}</h5><br>
                </div>
            </div>
        </div>
        <form class="" action="{{ route('magang.edit',$magang->id) }}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
    </div>

    @endsection;
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('magang.delete',$args->id) }}"
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
                        <h5>Nama Divisi: {{ $magang->name }}</h5>
                        <h5>Kepala Divisi: {{ $magang->headof }}</h5>
                        <h5>Status Divisi: {{ $magang->status }}</h5>
                        <h5>Last Updated: {{ $magang->updated_at }}</h5><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form class="" action="{{ route('magang.edit',$magang->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

