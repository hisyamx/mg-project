@extends('users.master')
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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/division">Division</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content -->
<div class="container-fluid mt--6">
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form class="mb-5" action="{{ route('division.edit',$division->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="nama_division">Nama Divisi</label>
                            <input type="text" class="form-control" id="nama_division" name="nama_division" value="{{ $division->nama_division }}">
                            <label for="headof_division">Kepala Divisi</label>
                            <input type="text" class="form-control" id="head0f_division" name="headof_division" value="{{ $division->headof_division }}">
                            <label for="status_division">Status Divisi</label>
                            <input type="text" class="form-control" id="status_division" name="status_division" value="{{ $division->status_division }}">
                        </div>
                    </div>
                    <br>

                    <button class="btn btn-danger" type="submit">Edit</button>
                </form>

                <caption style="caption-side:top" class="text-success">Semua Divisi</caption>
            </div>
        </div>
    </div>
</div>

@endsection
