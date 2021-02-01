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
                            <li class="breadcrumb-item"><a href="/karyawan">Karyawan</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{ $karyawan->name }</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page Content --><div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('karyawan.edit',$karyawan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Fullname</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                value="{{ $karyawan->name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="kode">Kode</label>
                                <input required type="text" class="form-control" id="kode" name="kode"
                                    placeholder="Nomor Induk" value="{{ $karyawan->kode }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="role">Role</label>
                                <input required type="text" class="form-control" id="role" name="role"
                                    value="{{ $karyawan->role }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="division">Division</label>
                                <select required id="division" class="form-control" name="division">
                                  <option selected disabled>Divisi</option>
                                  @foreach($division AS $args)
                                  <option value="{{$args->name}}" <?php 
                                  if($args->name == $karyawan->division){
                                      print "selected";
                                  }
                                  ?>>{{$args->name}}</option>
                                  @endforeach;
                              </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="telephone">Telephone</label>
                                <input name="telephone" required type="number" class="form-control" id="telephone"
                                value="{{ $karyawan->telephone}}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                value="{{ $karyawan->status }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" class="form-control" id="address" placeholder="Alamat"
                                name="address" value="{{ $karyawan->address }}">
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

    @endsection

    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('karyawan.edit',$args->id) }}"
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
                        <form class="mb-5" action="{{ route('karyawan.edit',$karyawan->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <label for="name">Nama Divisi</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $karyawan->name }}">
                                    <label for="division">Kepala Divisi</label>
                                    <input type="text" class="form-control" id="head0f" name="division"
                                        value="{{ $karyawan->division }}">
                                    <label for="status">Status Divisi</label>
                                    <input type="text" class="form-control" id="status" name="status"
                                        value="{{ $karyawan->status }}">
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
