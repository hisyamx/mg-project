@extends('users.master')
@section('title', 'Division - Dashboard Management')

@section("content")
<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> Division </h3>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <form class="mb-5" action="{{ route('division.add',$division->id) }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <label for="name">Nama Divisi</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $division->name }}">
                            <label for="name">Kepala Divisi</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $division->headof }}">
                            <label for="name">Status Divisi</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $division->status }}">
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

@endsection;
