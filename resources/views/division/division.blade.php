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
                    <a href="#" class="btn btn-sm btn-neutral">Add New Division</a>
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
                <!-- Card header -->
                <div class="card-header border-0">
                    <h3 class="mb-0">Botika Division</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Nama Divisi</th>
                                <th scope="col" class="sort" data-sort="name">Kepala Divisi</th>
                                <th scope="col">Users</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/bootstrap.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Argon Design System</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $2500 USD
                                </td>
                                <td>
                                    <div class="avatar-group">
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                            data-original-title="Ryan Tompson">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-1.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                            data-original-title="Romina Hadid">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-2.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                            data-original-title="Alexander Smith">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-3.jpg">
                                        </a>
                                        <a href="#" class="avatar avatar-sm rounded-circle" data-toggle="tooltip"
                                            data-original-title="Jessica Doe">
                                            <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="/division/edit">Edit</a>
                                            <a class="dropdown-item" href="/division/delete">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
 