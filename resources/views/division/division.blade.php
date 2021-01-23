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
                            <li class="breadcrumb-item"><a href="/division">Division</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="/division/" class="btn btn-sm btn-neutral">Add New Division</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <form class="mb-0" action="{{ route('division.division') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 col-12">
                        <label for="nama_division">Nama Divisi</label>
                        <input type="text" class="form-control" id="nama_division" name="nama_division" required 
                        value="{{ old('nama_division') }}">
                        </div>
                        <div class="col-md-4 col-12">
                        <label for="head0f_division">Kepala Divisi</label>
                        <input type="text" class="form-control" id="headof_division" name="headof_division" required 
                        value="{{ old('head0f_division') }}">
                        </div>
                        <div class="col-md-4 col-12">
                        <label for="status_division">Status Divisi</label>
                        <input type="text" class="form-control" id="status_division" name="status_division" required 
                        value="{{ old('status_division') }}">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-neutral" type="submit">Tambah</button>
                    </form>
                </div>
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
                                <th scope="col" class="sort" data-sort="status">Status Divisi</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <?php $i = 1; ?>
                        @foreach($division AS $args)
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$args->nama_division}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$args->headof_division}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        {{-- <i class="bg-warning"></i> --}}
                                        <span class="status">{{$args->status_division}}</span>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{ route('division.add',$args->id) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('division.edit',$args->id) }}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                {{ $division->links() }}
                @else
                <h4>No Result Found</h4>
                @endif
            </div>
        </div>
    </div>

    @endsection