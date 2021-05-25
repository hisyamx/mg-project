@extends('users.master')
@section('title', 'Project - Dashboard Management')

@section('content')

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="dasboard.index"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/project">Project</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create</li>
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
                    <form action="{{ route('admin.project.create') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Project Name</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name') }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                    value="{{ old('status') }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="division">Division</label>
                                <select required id="division" class="form-control" name="division">
                                    <option selected disabled>Divisi</option>
                                    @foreach($division AS $div)
                                    <option value="{{$div->name}}">{{$div->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="pj">Users</label>
                                <select required id="pj" class="form-control" name="pj">
                                    <option selected disabled>Pilih Users</option>
                                    @foreach($division AS $div)
                                    <option value="{{$div->headof}}">{{$div->headof}}</option>
                                    @endforeach;
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="start">Mulai project</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="start" id="start" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ old('start') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="finish">Selesai project</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input name="finish" id="finish" class="date form-control datepicker"
                                            placeholder="Select date" type="text" value="{{ old('finish') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea required class="form-control" name="description" id="description" rows="3"
                                resize="none" placeholder="Project Description"
                                value="{{ old('description') }}"></textarea>
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
