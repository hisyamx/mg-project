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
    @include('layouts.header')

    <section class="banner-part">

        @yield('content')

        @include('layouts.footer')

    </section>
    </body>

</html>
