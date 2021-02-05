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
                            <li class="breadcrumb-item">{{ $project->name }}</li>
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
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="name">Project Name</label>
                            <input required type="text" class="form-control" id="name" name="name"
                                value="{{ $project->name }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="status">Status</label>
                            <input required type="text" class="form-control" id="status" name="status"
                                placeholder="Nomor Induk" value="{{ $project->status }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="division">Division Responsible</label>
                            <input required type="text" class="form-control" id="division" name="division"
                            value="{{ $project->division }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="pj">Users Responsible</label>
                            <input required type="text" class="form-control" id="pj" name="pj"
                                value="{{ $project->pj }}">
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
                                    <input name="start" id="start" class="date form-control datepicker" placeholder="Select date" type="text" value="{{ $project->start }}">
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
                                    <input name="finish" id="finish" class="date form-control datepicker" placeholder="Select date" type="text" value="{{ $project->finish }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea required type="text" class="form-control" id="description" placeholder="Alamat"
                            name="description" rows="3" resize="none"> {{ $project->description }}</textarea>
                    </div>
                    <form class="" action="{{ route('project.delete',$project->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection;
    <!-- Modal -->
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="{{ route('project.delete',$args->id) }}"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ $project->name }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h5>Nama Divisi: {{ $project->name }}</h5>
                        <h5>Kepala Divisi: {{ $project->headof }}</h5>
                        <h5>Status Divisi: {{ $project->status }}</h5>
                        <h5>Last Updated: {{ $project->updated_at }}</h5><br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form class="" action="{{ route('project.edit',$project->id) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}

