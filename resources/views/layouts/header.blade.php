<body>
    <!-- Sidenav -->
    <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
        <div class="scrollbar-inner">
            <!-- Brand -->
            <div class="sidenav-header d-flex align-items-center">
                <a class="navbar-brand" href="{{ route('admin.dashboard.index') }}">
                    <img src="{{asset('assets/img/botika.webp')}}" class="navbar-brand-img" alt="...">
                </a>
                <div class=" ml-auto ">
                    <!-- Sidenav toggler -->
                    <div class="sidenav-toggler d-none d-xl-block active" data-action="sidenav-unpin"
                        data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                            <i class="sidenav-toggler-line"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-inner">
                <!-- Collapse -->
                <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Heading -->

                    @if (Auth::user()->isAdmin())
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Admin Menu</span>
                    </h6>
                    <!-- Nav items -->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.dashboard.index') ? 'active' : ''}}"
                                href="{{ route('admin.dashboard.index')}}">
                                <i class="ni ni-shop text-blue"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.division.index') ? 'active' : ''}}"
                                href="{{ route('admin.division.index')}}">
                                <i class="ni ni-ui-04 text-pink"></i>
                                <span class="nav-link-text">Division</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.karyawan.index') ? 'active' : ''}}"
                                href="{{ route('admin.karyawan.index')}}">
                                <i class="ni ni-bullet-list-67 text-primary"></i>
                                <span class="nav-link-text">Karyawan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.magang.index') ? 'active' : ''}}"
                                href="{{ route('admin.magang.index')}}">
                                <i class="ni ni-bullet-list-67 text-success"></i>
                                <span class="nav-link-text">Magang</span>
                            </a>
                        </li>
                    </ul>
                    <!-- Divider -->
                    <hr class="my-3">

                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">Manage</span>
                    </h6>
                    <!-- Navigation -->
                    <ul class="navbar-nav md-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.profile.index') ? 'active' : ''}}"
                                href="{{ route('admin.profile.index') }}">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Profile</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#project" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="project">
                                <i class="ni ni-spaceship text-red"></i>
                                <span class="nav-link-text">Manage Project</span>
                            </a>
                            <div class="collapse" id="project">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->route()->named('admin.project.index') ? 'active' : ''}}"
                                            href="{{ route('admin.project.index') }}">
                                            <span class="sidenav-mini-icon"></span>
                                            <span class="sidenav-normal"> Project </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->route()->named('admin.project.timeline') ? 'active' : ''}}"
                                            href="{{ route('admin.project.timeline')}}">
                                            <span class="sidenav-mini-icon"></span>
                                            <span class="sidenav-normal"> Timeline </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('admin.profile.index') ? 'active' : ''}}"
                        href="{{ route('admin.profile.index') }}" data-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="profile">
                        <i class="ni ni-single-02 text-yellow"></i>
                        <span class="nav-link-text">Manage Account</span>
                        </a>
                        <div class="collapse" id="profile">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->route()->named('admin.profile.index') ? 'active' : ''}}"
                                        href="{{ route('admin.profile.index') }}">
                                        <span class="sidenav-mini-icon"></span>
                                        <span class="sidenav-normal"> Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->route()->named('admin.profile.edit') ? 'active' : ''}}"
                                        href="{{ route('admin.profile.edit') }}">
                                        <span class="sidenav-mini-icon"></span>
                                        <span class="sidenav-normal"> Change Profile </span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->route()->named('admin.account.index') ? 'active' : ''}}"
                                        href="{{ route('admin.account.index') }}">
                                        <span class="sidenav-mini-icon"></span>
                                        <span class="sidenav-normal"> Permission </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        </li> --}}
                    </ul>
                    @elseif(Auth::user()->isNotAdmin())

                    <!-- Heading -->
                    <h6 class="navbar-heading p-0 text-muted">
                        <span class="docs-normal">User Menu</span>
                    </h6>
                    <!-- Nav items -->
                    <ul class="navbar-nav md-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('user.dashboard.index') ? 'active' : ''}}"
                                href="{{ route('user.dashboard.index')}}">
                                <i class="ni ni-shop text-blue"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('user.division.index') ? 'active' : ''}}"
                                href="{{ route('user.division.index')}}">
                                <i class="ni ni-ui-04 text-pink"></i>
                                <span class="nav-link-text">Division</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->route()->named('user.user.index') ? 'active' : ''}}"
                                href="{{ route('user.user.index')}}">
                                <i class="ni ni-bullet-list-67 text-info"></i>
                                <span class="nav-link-text">Karyawan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#userproject" data-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="project">
                                <i class="ni ni-spaceship text-red"></i>
                                <span class="nav-link-text">Project</span>
                            </a>
                            <div class="collapse" id="userproject">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->route()->named('user.project.index') ? 'active' : ''}}"
                                            href="{{ route('user.project.index') }}">
                                            <span class="sidenav-mini-icon"></span>
                                            <span class="sidenav-normal"> Project </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ request()->is('account') ? 'active' : ''}}"
                                            href="{{ route('user.project.timeline')}}">
                                            <span class="sidenav-mini-icon"></span>
                                            <span class="sidenav-normal"> Timeline </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    @endif
                    <!-- Divider -->
                    <hr class="my-3">
                    <!-- Navigation -->
                    <ul class="navbar-nav mb-md-3">
                        <li class="nav-item">
                            <a class="nav-link" target="_blank" href="https://platform.botika.online/docs/">
                                <i class="ni ni-books text-gray-500"></i>
                                <span class="nav-link-text">Documentation</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    {{-- header content  --}}
    <!-- Main content -->
    <div class="main-content" id="panel">
        <!-- Topnav -->
        <nav class="navbar navbar-top navbar-expand navbar-dark bg-default border-bottom">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Search form -->
                    <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
                        {{-- <div class="form-group mb-0">
                            <div class="input-group input-group-alternative input-group-merge">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-search"></i></span>
                                </div>
                                <input class="form-control" placeholder="Search" type="text">
                            </div>
                        </div> --}}
                        <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main"
                            aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </form>
                    <!-- Navbar links -->
                    <ul class="navbar-nav align-items-center  ml-md-auto ">
                        <li class="nav-item d-xl-none">
                            <!-- Sidenav toggler -->
                            <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin"
                                data-target="#sidenav-main">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                                <i class="ni ni-zoom-split-in"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <i class="ni ni-bell-55"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                                <!-- Dropdown header -->
                                <div class="px-3 py-3">
                                    <h6 class="text-sm text-muted m-0">You have <strong class="text-primary"> list
                                            add.</strong>
                                        notifications.
                                    </h6>
                                </div>
                                <!-- List group -->
                                <div class="list-group list-group-flush">
                                    <a href="#!" class="list-group-item list-group-item-action">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <!-- Avatar -->
                                                <img alt="Image placeholder"
                                                    src="{{asset('assets/img/botika_icon2.svg')}}"
                                                    class="avatar rounded-circle">
                                            </div>
                                            <div class="col ml--2">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="mb-0 text-sm">{{ Auth::user()->name }}</h4>
                                                    </div>
                                                    <div class="text-right text-muted">
                                                        <small>{{ Auth::user()->name }}</small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                        <li class="nav-item dropdown">
                            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <div class="media align-items-center">
                                    <span class="avatar avatar-sm rounded-circle bg-default">
                                        <img alt="image" src="{{asset('assets/img/botika_icon2.svg')}}">
                                    </span>
                                    <div class="media-body  ml-2  d-none d-lg-block">
                                        <span class="mb-0 text-sm  font-weight-bold">{{ Auth::user()->name }}</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu  dropdown-menu-right ">
                                <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                                    <i class="ni ni-single-02"></i>
                                    <span>Profile</span>
                                </a>
                                <a href="{{ route('admin.account.index') }}" class="dropdown-item">
                                    <i class="ni ni-settings-gear-65"></i>
                                    <span>Manage Account</span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="ni ni-user-run"></i>
                                    <span>Logout</span>
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header -->
