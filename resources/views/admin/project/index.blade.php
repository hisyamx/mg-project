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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index')}}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.project.index')}}">Project</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.project.create')}}" class="btn btn-sm btn-neutral">Tambah Project</a>
                    <a href="{{ route('admin.project.timeline')}}" class="btn btn-sm btn-neutral">Project Timeline</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col-lg-12">
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
                                <th scope="col" class="sort" data-sort="status">Responsible Division</th>
                                <th scope="col" class="sort" data-sort="status">Responsible Person</th>
                                <th scope="col" class="sort" data-sort="status">Member Count</th>
                                <th scope="col" class="sort" data-sort="status">Started</th>
                                <th scope="col" class="sort" data-sort="status">Target Finisih</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
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
                                    {{$args->division->name}}
                                </td>
                                <td class="budget">
                                    {{$args->pj_user->name}}
                                </td>
                                <td class="budget">
                                    {{$args->users->count()}}
                                </td>
                                <td class="budget">
                                    {{ $args->start != null ? $args->start->isoFormat('D MMMM Y') : '' }}
                                </td>
                                <td class="budget">
                                    {{ $args->finish != null ? $args->finish->isoFormat('D MMMM Y') : '' }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->postponed)
                                        <i class="bg-warning"></i>
                                        <span class="status">Postponed</span>
                                        @else
                                        @if ($args->finish == null || $args->finish->greaterThan(Carbon\Carbon::now()))
                                        <i class="bg-danger"></i>
                                        <span class="status">On going</span>
                                        @else
                                        <i class="bg-success"></i>
                                        <span class="status">Finished</span>
                                        @endif
                                        @endif
                                    </span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.project.edit',$args->id) }}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.project.show',$args->id) }}">Hapus</a>
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

    @endsection
