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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/project">Project</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="/project/create" class="btn btn-sm btn-neutral">Tambah Project</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Manage Project</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Project</th>
                                <th scope="col" class="sort" data-sort="status">Division Responsible</th>
                                <th scope="col" class="sort" data-sort="status">Started</th>
                                <th scope="col" class="sort" data-sort="status">Target Finisih</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        @foreach($project AS $args)
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$args->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$division->name}}
                                </td>
                                <td class="budget">
                                    {{ $args->created_at }}
                                </td>
                                <td class="budget">
                                    {{ $args->target }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        {{-- <i class="bg-info"></i> //blue --}}
                                        {{-- <i class="bg-success"></i> //green  --}}
                                        <span class="status">{{$args->status}}</span>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('project.edit',$args->id) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('porject.show',$args->id) }}">Hapus</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xl-4">
            <!-- Checklist -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">To do list</h5>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                    <!-- List group -->
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-info checklist-item-checked">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Call with Dave</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-info">
                                        <input class="custom-control-input" id="chk-todo-task-1"
                                            type="checkbox" checked="">
                                        <label class="custom-control-label" for="chk-todo-task-1"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Checklist -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Doing list</h5>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                    <!-- List group -->
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-danger checklist-item-checked">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Call with Dave</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-danger">
                                        <input class="custom-control-input" id="chk-todo-task-1"
                                            type="checkbox" checked="">
                                        <label class="custom-control-label" for="chk-todo-task-1"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <!-- Checklist -->
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <!-- Title -->
                    <h5 class="h3 mb-0">Done list</h5>
                </div>
                <!-- Card body -->
                <div class="card-body p-0">
                    <!-- List group -->
                    <ul class="list-group list-group-flush" data-toggle="checklist">
                        <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                            <div class="checklist-item checklist-item-success checklist-item-checked">
                                <div class="checklist-info">
                                    <h5 class="checklist-title mb-0">Call with Dave</h5>
                                    <small>10:30 AM</small>
                                </div>
                                <div>
                                    <div class="custom-control custom-checkbox custom-checkbox-success">
                                        <input class="custom-control-input" id="chk-todo-task-1"
                                            type="checkbox" checked="">
                                        <label class="custom-control-label" for="chk-todo-task-1"></label>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection
