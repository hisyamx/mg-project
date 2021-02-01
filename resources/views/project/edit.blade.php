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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/project">Project</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{ $project->name }</li>
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
                    <form action="{{ route('project.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Fullname</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nim">NIM</label>
                                <input required type="text" class="form-control" id="nim" name="nim"
                                    placeholder="Nomor Induk" value="{{ old('nim') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="role">Role</label>
                                <input required type="text" class="form-control" id="role" name="role"
                                    value="{{ old('role') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Division</label>
                                <select required id="division" class="form-control" name="division">
                                    <option selected disabled>Divisi</option>
                                    @foreach($division AS $div)
                                    <option value="{{$div->name}}">{{$div->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sekolah">Sekolah</label>
                                <input name="sekolah" required type="text" class="form-control" id="sekolah"
                                    value="{{ old('sekolah') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" required type="number" class="form-control" id="telephone"
                                    value="{{ old('telephone') }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                    value="{{ old('status') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" class="form-control" id="address" placeholder="Alamat"
                                name="address" value="{{ old('address') }}">
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

    @endsection;
