@extends('layouts.master')
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
                            <li class="breadcrumb-item"><a href="{{ route('user.dashboard.index') }}"><i
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('user.user.index') }}">User</a></li>
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
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Data Karyawan dan Karyawan Magang</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Kode</th>
                                <th scope="col" class="sort" data-sort="name">Nama</th>
                                <th scope="col" class="sort" data-sort="budget">Divisi</th>
                                <th scope="col" class="sort" data-sort="budget">Instansi</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                            </tr>
                        </thead>
                        @foreach($users AS $args)
                        <tbody class="list">
                            <tr data-entry-id="{{ $args->id }}">
                                <td class="budget">
                                    {{$args->code}}
                                </td>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="avatar rounded-circle
                                            @php
                                                $array = ['bg-primary', '', 'bg-warning', 'bg-danger'];
                                                echo $array[array_rand($array, 1)];
                                            @endphp
                                            mr-3">
                                            @if ($args->cover_image != null)
                                            <img alt="Image placeholder"
                                                src="{{asset('storage/cover_images/'.$args->cover_image)}}">
                                            @endif
                                    </div>
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
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
