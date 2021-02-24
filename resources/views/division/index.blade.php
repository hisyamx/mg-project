@extends('users.master')
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
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/division">Division</a></li>
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
                <div class="card-body">
                    <form class="mb-0" action="{{ route('division.index') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-sm-4 col-12">
                        <label for="name">Nama Divisi</label>
                        <input type="text" class="form-control" id="name" name="name" required value="{{ old('name') }}">
                        </div>
                        <div class="col-sm-5 col-12">
                        <label for="headof">Kepala Divisi</label>
                        <input type="text" class="form-control" id="headof" name="headof" required value="{{ old('headof') }}">
                        </div>
                        <div class="col-sm-3 col-12">
                        <label for="status">Status Divisi</label>
                        <input type="text" class="form-control" id="status" name="status" required value="{{ old('status') }}">
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
                                            <span class="name mb-0 text-sm">{{$args->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$args->headof}}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($args->status == "Active")
                                        <i class="bg-success"></i>
                                        <span class="status">{{$args->status}}</span>
                                        @else
                                        <i class="bg-danger"></i>
                                        <span class="status">{{$args->status}}</span>
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
                                            <a class="dropdown-item" href="{{ route('division.edit',$args->id) }}">Edit</a>
                                            <a class="dropdown-item" href="{{ route('division.show',$args->id) }}">Delete</a>
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
                {{-- <h4>No Result Found</h4> --}}
                <div class="col-md mb-5">
                    <button class="btn btn-disabled btn-block"> No Result Found </button>
                </div>
                @endif
            </div>
        </div>
    </div>
    <script>
        if ($status == Active) {
            <i class="bg-warning"></i>
        }
        else {
            <i class="bg-green"></i>
        }
    </script>


    @endsection
