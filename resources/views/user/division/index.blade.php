@extends('layouts.master')
@section('title', 'Division - Dashboard Management')

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
                                        class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.division.index') }}">Division</a></li>
                        </ol>
                    </nav>
                </div>
                {{-- <div class="col-lg-6 col-5 text-right">
                    <a href="{{ route('admin.division.create') }}" class="btn btn-sm btn-neutral">Tambah Data
                Divisi</a>
            </div> --}}
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
                    <h3 class="mb-0">Botika Division</h3>
                </div>
                <!-- Light table -->
                @if(count($division) >= 1)
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Divisi</th>
                                <th scope="col" class="sort" data-sort="name">Kepala Divisi</th>
                                <th scope="col" class="sort" data-sort="name">Members</th>
                                <th scope="col" class="sort" data-sort="status">Status Divisi</th>
                                {{-- <th scope="col"></th> --}}
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        @foreach($division AS $args)
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
                                    {{$args->user->name}}
                                </td>
                                <td class="budget">
                                    {{ $args->users->count() }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->active)
                                        <i class="bg-success"></i>
                                        <span class="status">Aktif</span>
                                        @else
                                        <i class="bg-danger"></i>
                                        <span class="status">Tidak Aktif</span>
                                        @endif
                                    </span>
                                </td>
                                {{-- <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item"
                                                href="{{ route('admin.division.edit',$args->id) }}">Edit</a>
                                <a class="dropdown-item" href="{{ route('admin.division.show',$args->id) }}">Delete</a>
                </div>
            </div>
            </td> --}}
            </tr>
            </tbody>
            @endforeach
            </table>
        </div>
        @else
        <div class="col-md mb-5">
            <button class="btn btn-disabled btn-block"> No Result Found </button>
        </div>
        @endif
    </div>
</div>
</div>
@endsection
