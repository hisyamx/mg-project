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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/karyawan">Magang</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{ $magang->name }}</li>
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
                    <form action="{{ route('magang.edit',$magang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Fullname</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                value="{{ $magang->name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="nim">NIM</label>
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
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="sekolah">Sekolah</label>
                                <input name="sekolah" required type="text" class="form-control" id="sekolah"
                                value="{{ $magang->sekolah }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" required type="number" class="form-control" id="telephone"
                                value="{{ $magang->telephone}}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                value="{{ $magang->status }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" class="form-control" id="address" placeholder="Alamat"
                                name="address" value="{{ $magang->address }}">
                        </div>
                        <div class="form-row">
                            <label> Tambahkan Foto (Optional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                <label class="custom-file-label" for="customFile">Pilih</label>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-danger">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection;
