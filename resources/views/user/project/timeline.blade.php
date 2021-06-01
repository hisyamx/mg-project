@extends('layouts.master')
@section('title', 'Project - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4"></div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-transparent">
                    <h3 class="mb-0">Your Projects Timeline</h3>
                </div>
                <div class="card-body">
                    <div class="timeline timeline-one-side" data-timeline-content="axis"
                        data-timeline-axis-style="dashed">
                        <div class="timeline-block">
                            @foreach($projects AS $project)
                            @if ($project->postponed)
                            <span class="timeline-step badge-warning">
                                <i class="ni ni-bell-55"></i>
                            </span>
                            @else
                            @if ($project->finish == null || $project->finish->greaterThan(Carbon\Carbon::now()))
                            <span class="timeline-step badge-danger">
                                <i class="ni ni-bell-55"></i>
                            </span>
                            @else
                            <span class="timeline-step badge-success">
                                <i class="ni ni-bell-55"></i>
                            </span>
                            @endif
                            @endif
                            <div class="timeline-content">
                                <small class="text-muted font-weight-bold">Start :
                                    {{ $project->start != null ? $project->start->isoFormat('D MMMM Y') : '' }}
                                    | </small>
                                <small class="text-muted font-weight-bold">Target :
                                    {{ $project->finish != null ? $project->finish->isoFormat('D MMMM Y') : '' }}
                                </small>
                                <h5 class=" mt-3 mb-0">{{$project->name}}</h5>
                                <p class=" text-sm mt-1 mb-0">{{$project->description}}</p>
                                <div class="mt-3">
                                    <span class="badge badge-pill badge-success">Penanggungjawab:
                                        {{$project->pj_user->name}}</span>
                                        @foreach ($project->users as $user)
                                        <span class="badge badge-pill badge-primary"> 
                                            {{ $user->name }}
                                        </span>
                                        @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
