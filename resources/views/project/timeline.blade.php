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
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Timeline Project</h3>
                </div>
                <div class="card-body">
                    <div class="timeline timeline-one-side" data-timeline-content="axis" data-timeline-axis-style="dashed">
                        <div class="timeline-block">
                            <span class="timeline-step badge-success">
                                <i class="ni ni-bell-55"></i>
                            </span>
                            <div class="timeline-content">                                
                                <?php $i = 1; ?>
                                @foreach($project AS $args)
                                <small class="text-muted font-weight-bold">Start : {{ $project->start}}</small>
                                <small class="text-muted font-weight-bold">Target : {{ $project->target}}</small>
                                <h5 class=" mt-3 mb-0">{{$project->name}}</h5>
                                <p class=" text-sm mt-1 mb-0">{{$project->description}}</p>
                                <div class="mt-3">
                                    <span class="badge badge-pill badge-success">{{$project->pj}}</span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
