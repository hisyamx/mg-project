<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Botika Dashboard Management.">
    <meta name="author" content="Botika">
    <title>Login</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('/assets')}}/img/botika.webp" type="image/webp">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/assets')}}/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-default">
    <!-- Navbar -->
    <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse"
                aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="division.index">
                                <img src="{{asset('/assets')}}/img/botika.webp">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                                aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Header -->
        <div class="container mt-5">
            <div class="header-body text-center mb-0">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <a href="division.index">
                            <img src="{{asset('/assets')}}/img/botika.webp" width="50px" height="50px">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container mt-5 pb-5">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="card bg-secondary border-0 mb-0">

                        <div class="card-body px-lg-5 py-lg-3">
                            <form action="{{ route('login') }}" method="post" name="login_form" role="form">
                                @csrf
                                <div class="form-group mt-3 mb-3">
                                    <label for="email" class="label">Email</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"></i></span>
                                        </div>
                                        <input class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" name="email" type="email" value="{{ old('email') }}"
                                            required autocomplete="email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text check-value" id="email_error"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="label">Password</label>
                                    <div class="input-group input-group-merge input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"></i></span>
                                        </div>
                                        <input class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Password" name="password" type="password" required
                                            autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                        <div class="input-group-append">
                                            <span class="input-group-text check-value" id="password_error"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" id="remember" name="remember" type="checkbox"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="remember">
                                        <span class="text-muted">Remember me</span>
                                    </label>
                                </div>
                                <div class="text-center form-group">
                                    <button type="submit"
                                        class="btn btn-primary mt-4 submit-btn btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-6">
                            @if (Route::has('password.request'))
                            <a class="text-light" href="{{ route('password.request') }}">
                                <small>Forgot password?</small>
                            </a>
                            @endif
                        </div>

                        <div class="col-6 text-right">
                            <a href="{{ route('register') }}" class="text-light"><small>Create new account</small></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="mb-5" id="footer-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="copyright text-center text-muted">
                        &copy; 2020 Powered By <a href="https://www.botika.online" class="font-weight-bold ml-1"
                            target="_blank">Botika</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{asset('/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
    <script src="{{asset('/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
    <!-- Argon JS -->
    <script src="{{asset('/assets/js/argon.js?v=1.2.0')}}"></script>
    <script src="{{asset('/js/login/script.js')}}"></script>
    <script>
        @if($message = Session::get('create_success'))
        swal(
            "Berhasil!",
            "{{ $message }}",
            "success"
        );
        @endif

        @if($message = Session::get('login_failed'))
        swal(
            "Gagal!",
            "{{ $message }}",
            "error"
        );
        @endif

    </script>
</body>

</html>
