@extends('users.master')
@section('title', 'Dashboard Management')

@section('content')
<!-- Main content -->
<!-- Header -->
<div class="header bg-default pb-6">
    @include('layouts.message')
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href=""><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('project.create') }}" class="btn btn-sm btn-neutral">Tambah Project</a>
                </div>
            </div>
            <!-- Card stats -->
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Divisi</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ count($division) }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                                        <i class="ni ni-ui-04"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Karyawan</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $karyawan_count }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-blue text-white rounded-circle shadow">
                                        <i class="ni ni-bullet-list-67"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Magang</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $magang_count }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                                        <i class="ni ni-bullet-list-67"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title text-uppercase text-muted mb-0">Project</h5>
                                    <span class="h2 font-weight-bold mb-0">{{ $project_count }}</span>
                                </div>
                                <div class="col-auto">
                                    <div class="icon icon-shape bg-gradient-red text-white rounded-circle shadow">
                                        <i class="ni ni-spaceship"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-xl-8">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Project</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('project.index')}}" class="btn btn-sm btn-primary">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Nama Project</th>
                                <th scope="col">Division Responsible</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        @foreach($latest_project AS $args)
                        <tbody>
                            <tr>
                                <th scope="row">
                                    {{$args->name}}
                                </th>
                                <td>
                                    {{$args->name}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->active)
                                        <i class="bg-success"></i>
                                        <span class="status">{{$args->active ? "Aktif" : "Tidak Aktif"}}</span>
                                        @else
                                        <i class="bg-danger"></i>
                                        <span class="status">{{$args->active ? "Aktif" : "Tidak Aktif"}}</span>
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Division</h3>
                        </div>
                        <div class="col text-right">
                            <a href="{{route('division.index')}}" class="btn btn-sm btn-primary">Lihat semua</a>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <!-- Projects table -->
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">Division</th>
                                <th scope="col">Head of Division</th>
                                <th scope="col">Members</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        @foreach($division AS $args)
                        <tbody>
                            <tr>
                                <th scope="row">
                                    {{$args->name}}
                                </th>
                                <td>
                                    {{ $args->user->name }}
                                </td>
                                <td>
                                    {{ $args->users->count() }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->active)
                                        <i class="bg-success"></i>
                                        <span class="status">{{$args->active ? "Aktif" : "Tidak Aktif"}}</span>
                                        @else
                                        <i class="bg-danger"></i>
                                        <span class="status">{{$args->active ? "Aktif" : "Tidak Aktif"}}</span>
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                {{-- @endif --}}
            </div>
        </div>
    </div>


    @endsection
