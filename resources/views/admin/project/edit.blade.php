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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                        class="fas fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.project.index') }}">Project</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit {{ $project->name }}</li>
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
                    <form action="{{ route('admin.project.edit', $project->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="name">Project Name</label>
                                <input required type="text" class="form-control" id="name" name="name"
                                    value="{{ $project->name }}">
                            </div>

                            <div class="form-group col-md-4">
                                <label for="status">Status</label>
                                <input name="status" required type="text" class="form-control" id="status"
                                    value="{{ $project->status }}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="division">Division</label>
                                <select required id="division" class="form-control" name="division">
                                    <option selected disabled>Divisi</option>
                                    @foreach($divisions AS $division)
                                    <option value="{{$division->name}}">{{$division->name}}</option>
                                    @endforeach;
                                </select>
                            </div>
                            <div class="form-group col-md-8">
                                <label for="pj">Users</label>
                                <select required id="pj" class="form-control" name="pj">
                                    <option selected disabled>Pilih Users</option>
                                    @foreach($divisions AS $division)
                                    <option value="{{$division->headof}}">{{$division->headof}}</option>
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
                                            placeholder="Select date" type="text" value="{{ $project->start }}">
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
                                            placeholder="Select date" type="text" value="{{ $project->finish }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea required class="form-control" name="description" id="description" rows="3"
                                resize="none">{{ $project->description }}</textarea>
                        </div>
                        <div class="form-row">
                            <label> Tambahkan Foto (Optional)</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="cover_image">
                                <label class="custom-file-label" for="customFile">Pilih</label>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-warning">Edit</button>
                    </form>

                    <hr>
                    <div class="row mb-3">
                        <div class="col-6">
                            <h1>Anggota Project</h1>
                        </div>
                        <div class="col-lg-6 col-5 text-right">
                            <a href="{{ route('admin.project.add.user', $project->id)}}"
                                class="btn btn-sm btn-neutral">Tambah Anggota
                                Project</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="name">ID</th>
                                    <th scope="col" class="sort" data-sort="name">Nama</th>
                                    <th scope="col" class="sort" data-sort="name">Bidang</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>

                            @foreach($project->users AS $args)
                            <tbody class="list">
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div class="media-body">
                                                <span class="name mb-0 text-sm">{{$args->id}}</span>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="budget">
                                        {{$args->name}}
                                    </td>
                                    <td class="budget">
                                        {{$args->division->name}}
                                    </td>
                                    <td class="text-right">
                                        <a href="{{ route('admin.project.drop.user', ['project_id' => $project->id, 'user_id' => $args->id]) }}"
                                            type="button" class="btn btn-sm btn-danger">Drop</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    @endsection
