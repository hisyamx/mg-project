<!doctype html>
<html lang="En">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Future Conversational Artifical Intelligence.">
    <meta name="author" content="Botika">
    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{asset('/assets')}}/img/botika.webp" type="image/webp">
    {{-- <link rel="icon" href="{{asset('/assets')}}/img/logo.svg"> --}}
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="{{asset('/assets')}}/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="{{asset('/assets')}}/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">

    <!-- Page CSS -->
    @yield('page-css')

    <!-- Argon CSS -->
    <link rel="stylesheet" href="{{asset('/assets')}}/css/argon.css" type="text/css">


    <style>
        @media print {
            #ghostery-tracker-tally {
                display: none !important
            }
        }
    </style>
</head>

@include('layouts.header')

<section class="banner-part">

    @yield('content')
    @include('layouts.footer')
</section>
@yield('page-js')
</body>

</html>
