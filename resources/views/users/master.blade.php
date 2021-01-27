<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('/assets')}}/img/botika.webp" type="image/webp">
    {{-- <link rel="icon" href="{{asset('/assets')}}/img/logo.svg"> --}}
    @include('users/header')

    <section class="banner-part">

        @include('layouts.message')
        @yield('content')
        @include('users/footer')
        
    </section>

    
</body>
</html>