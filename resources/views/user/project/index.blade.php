@extends('layouts.master')
@section('title', 'Project - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @include('layouts.message')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Your Projects</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Project</th>
                                <th scope="col" class="sort" data-sort="status">Responsible Division</th>
                                <th scope="col" class="sort" data-sort="status">Responsible Person</th>
                                <th scope="col" class="sort" data-sort="status">Member Count</th>
                                <th scope="col" class="sort" data-sort="status">Started</th>
                                <th scope="col" class="sort" data-sort="status">Target Finisih</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                            </tr>
                        </thead>
                        @foreach($projects AS $project)
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">{{$project->name}}</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    {{$project->division->name}}
                                </td>
                                <td class="budget">
                                    {{$project->pj_user->name}}
                                </td>
                                <td class="budget">
                                    {{$project->users->count()}}
                                </td>
                                <td class="budget">
                                    {{ $project->start != null ? $project->start->isoFormat('D MMMM Y') : '' }}
                                </td>
                                <td class="budget">
                                    {{ $project->finish != null ? $project->finish->isoFormat('D MMMM Y') : '' }}
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        @if ($project->postponed)
                                        <i class="bg-warning"></i>
                                        <span class="status">Postponed</span>
                                        @else
                                        @if ($project->finish == null || $project->finish->greaterThan(Carbon\Carbon::now()))
                                        <i class="bg-danger"></i>
                                        <span class="status">On going</span>
                                        @else
                                        <i class="bg-success"></i>
                                        <span class="status">Finished</span>
                                        @endif
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
