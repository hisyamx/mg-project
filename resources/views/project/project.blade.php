@extends('users.master')
@section('title', 'Project - Dashboard Management')

@section('content')
<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Project</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="/dashboard"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="/project">Project</a></li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <a href="/project/add" class="btn btn-sm btn-neutral">Tambah Project</a>
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
                    <h3 class="mb-0">Manage Project</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">Project</th>
                                <th scope="col" class="sort" data-sort="budget">Budget</th>
                                <th scope="col" class="sort" data-sort="status">Status</th>
                                <th scope="col">Users</th>
                                <th scope="col" class="sort" data-sort="completion">Completion</th>
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
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-warning"></i>
                                        <span class="status">pending</span>
                                    </span>
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
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">60%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-warning" role="progressbar"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/angular.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Angular Now UI Kit PRO</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $1800 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">completed</span>
                                    </span>
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
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/sketch.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Black Dashboard</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $3150 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-danger"></i>
                                        <span class="status">delayed</span>
                                    </span>
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
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">72%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 72%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/react.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">React Material Dashboard</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $4400 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-info"></i>
                                        <span class="status">on schedule</span>
                                    </span>
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
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">90%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="90"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <a href="#" class="avatar rounded-circle mr-3">
                                            <img alt="Image placeholder" src="../assets/img/theme/vue.jpg">
                                        </a>
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">Vue Paper UI Kit PRO</span>
                                        </div>
                                    </div>
                                </th>
                                <td class="budget">
                                    $2200 USD
                                </td>
                                <td>
                                    <span class="badge badge-dot mr-4">
                                        <i class="bg-success"></i>
                                        <span class="status">completed</span>
                                    </span>
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
                                    <div class="d-flex align-items-center">
                                        <span class="completion mr-2">100%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-success" role="progressbar"
                                                    aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Members list group card -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <!-- Title -->
                                <h5 class="h3 mb-0">Team members</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list my--3">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-1.jpg">
                                                </a>
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0">
                                                    <a href="#!">John Michael</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-2.jpg">
                                                </a>
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0">
                                                    <a href="#!">Alex Smith</a>
                                                </h4>
                                                <span class="text-warning">●</span>
                                                <small>In a meeting</small>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-3.jpg">
                                                </a>
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0">
                                                    <a href="#!">Samantha Ivy</a>
                                                </h4>
                                                <span class="text-danger">●</span>
                                                <small>Offline</small>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/team-4.jpg">
                                                </a>
                                            </div>
                                            <div class="col ml--2">
                                                <h4 class="mb-0">
                                                    <a href="#!">John Michael</a>
                                                </h4>
                                                <span class="text-success">●</span>
                                                <small>Online</small>
                                            </div>
                                            <div class="col-auto">
                                                <button type="button" class="btn btn-sm btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- Checklist -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <!-- Title -->
                                <h5 class="h3 mb-0">To do list</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body p-0">
                                <!-- List group -->
                                <ul class="list-group list-group-flush" data-toggle="checklist">
                                    <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                                        <div class="checklist-item checklist-item-success checklist-item-checked">
                                            <div class="checklist-info">
                                                <h5 class="checklist-title mb-0">Call with Dave</h5>
                                                <small>10:30 AM</small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox custom-checkbox-success">
                                                    <input class="custom-control-input" id="chk-todo-task-1"
                                                        type="checkbox" checked="">
                                                    <label class="custom-control-label" for="chk-todo-task-1"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                                        <div class="checklist-item checklist-item-warning">
                                            <div class="checklist-info">
                                                <h5 class="checklist-title mb-0">Lunch meeting</h5>
                                                <small>10:30 AM</small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox custom-checkbox-warning">
                                                    <input class="custom-control-input" id="chk-todo-task-2"
                                                        type="checkbox">
                                                    <label class="custom-control-label" for="chk-todo-task-2"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                                        <div class="checklist-item checklist-item-info">
                                            <div class="checklist-info">
                                                <h5 class="checklist-title mb-0">Argon Dashboard Launch</h5>
                                                <small>10:30 AM</small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox custom-checkbox-info">
                                                    <input class="custom-control-input" id="chk-todo-task-3"
                                                        type="checkbox">
                                                    <label class="custom-control-label" for="chk-todo-task-3"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="checklist-entry list-group-item flex-column align-items-start py-4 px-4">
                                        <div class="checklist-item checklist-item-danger checklist-item-checked">
                                            <div class="checklist-info">
                                                <h5 class="checklist-title mb-0">Winter Hackaton</h5>
                                                <small>10:30 AM</small>
                                            </div>
                                            <div>
                                                <div class="custom-control custom-checkbox custom-checkbox-danger">
                                                    <input class="custom-control-input" id="chk-todo-task-4"
                                                        type="checkbox" checked="">
                                                    <label class="custom-control-label" for="chk-todo-task-4"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <!-- Progress track -->
                        <div class="card">
                            <!-- Card header -->
                            <div class="card-header">
                                <!-- Title -->
                                <h5 class="h3 mb-0">Progress track</h5>
                            </div>
                            <!-- Card body -->
                            <div class="card-body">
                                <!-- List group -->
                                <ul class="list-group list-group-flush list my--3">
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/bootstrap.jpg">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h5>Argon Design System</h5>
                                                <div class="progress progress-xs mb-0">
                                                    <div class="progress-bar bg-orange" role="progressbar"
                                                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/angular.jpg">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h5>Angular Now UI Kit PRO</h5>
                                                <div class="progress progress-xs mb-0">
                                                    <div class="progress-bar bg-green" role="progressbar"
                                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 100%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder"
                                                        src="../../assets/img/theme/sketch.jpg">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h5>Black Dashboard</h5>
                                                <div class="progress progress-xs mb-0">
                                                    <div class="progress-bar bg-red" role="progressbar"
                                                        aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 72%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <a href="#" class="avatar rounded-circle">
                                                    <img alt="Image placeholder" src="../../assets/img/theme/react.jpg">
                                                </a>
                                            </div>
                                            <div class="col">
                                                <h5>React Material Dashboard</h5>
                                                <div class="progress progress-xs mb-0">
                                                    <div class="progress-bar bg-teal" role="progressbar"
                                                        aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                                        style="width: 90%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Card footer -->
                {{-- <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> --}}
            </div>
        </div>
    </div>
    @endsection
