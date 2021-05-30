@extends('users.master')
@section('title', 'Magang - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.magang.index') }}">Magang</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.magang.create') }}" class="btn btn-sm btn-neutral">Tambah Data Magang</a>
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
                    <h3 class="mb-0">Data Magang</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">ID</th>
                                <th scope="col" class="sort" data-sort="name">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Divisi</th>
                                <th scope="col" class="sort" data-sort="completion">Instansi</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        @foreach($magang AS $args)
                        <tbody class="list">
                            <tr>
                                <td class="budget">
                                    {{$args->code}}
                                </td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="{{ route('admin.magang.edit',$args->id) }}" class="avatar rounded-circle
                                            @php
                                                $array = ['bg-primary', '', 'bg-warning', 'bg-danger'];
                                                echo $array[array_rand($array, 1)];
                                            @endphp
                                            mr-3">
                                            @if ($args->cover_image != null)
                                            <img alt="Image placeholder"
                                                src="{{asset('storage/cover_images/'.$args->cover_image)}}">
                                            @endif
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$args->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$args->division->name}}
                                </td>
                                <td class="budget">
                                    {{$args->instansi}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->finish == null)
                                        <i class="bg-success"></i>
                                        <span class="status">Aktif</span>
                                        @else
                                        <i class="bg-danger"></i>
                                        <span class="status">Tidak Aktif</span>
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
                                                href="{{ route('admin.magang.edit',$args->id) }}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{ route('admin.magang.show',$args->id) }}">Hapus</a>
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
