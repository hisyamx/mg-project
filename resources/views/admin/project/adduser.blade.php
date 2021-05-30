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
                            <li class="breadcrumb-item active" aria-current="page">Add User Project of
                                {{ $project->name }}</li>
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
                    @foreach ($users as $user)
                    <div class="card">
                        <!-- Card body -->
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="{{ route('admin.magang.edit',$user->id) }}" class="avatar rounded-circle
                                            @php
                                                $array = ['bg-primary', '', 'bg-warning', 'bg-danger'];
                                                echo $array[array_rand($array, 1)];
                                            @endphp
                                            mr-3">
                                        @if ($user->cover_image != null)
                                        <img alt="Image placeholder"
                                            src="{{asset('storage/cover_images/'.$user->cover_image)}}">
                                        @endif
                                    </a>
                                </div>
                                <div class="col ml--2">
                                    <h4 class="mb-0">
                                        <a href="#!">{{ $user->name }}</a>
                                    </h4>
                                    <p class="text-sm text-muted mb-0">{{ $user->getRole() }}</p>
                                    @if ($user->finish == null)
                                    <i class="text-success"></i>
                                    <span class="status">Aktif</span>
                                    @else
                                    <i class="text-danger"></i>
                                    <span class="status">Tidak Aktif</span>
                                    @endif

                                    {{-- <span class="text-success">●</span>
                                    <small>Active</small> --}}
                                </div>
                                <div class="col-auto">
                                    <a href="{{ route('admin.project.store.user', [$project->id, $user->id]) }}"
                                        type="button" class="btn btn-sm btn-primary">Add</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    @endsection
