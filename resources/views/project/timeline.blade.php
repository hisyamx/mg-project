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
                            <?php $i = 1; ?>
                            @foreach($project AS $args)
                            <span class="timeline-step badge-success">
                                <i class="ni ni-bell-55"></i>
                            </span>
                            <div class="timeline-content">                                
                                <small class="text-muted font-weight-bold">Start : {{ $args->start}} | </small>
                                <small class="text-muted font-weight-bold">Target : {{ $args->finish}}</small>
                                <h5 class=" mt-3 mb-0">{{$args->name}}</h5>
                                <p class=" text-sm mt-1 mb-0">{{$args->description}}</p>
                                <div class="mt-3">
                                    <span class="badge badge-pill badge-success">{{$args->pj}}</span>
                                </div>
                            </div>
                            <hr class="my-2" />
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
