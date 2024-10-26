<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Character Set and Responsive Meta Tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title>@yield('title', 'CMM Online Store')</title>
    <!-- Title -->


    <!-- Meta Tags -->
    <meta name="description" content="@yield('description', 'CMM Online Store')">
    <meta name="keywords" content="@yield('keywords', 'CMM Online Store')">
    <link rel="canonical" href="{{ url()->current() }}">
    <!-- Meta Tags -->

    <!-- Open Graph Tags -->
    <meta property="og:title" content="@yield('title', 'CMM Online Store')">
    <meta property="og:description" content="@yield('description', 'CMM Online Store.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('assets/images/CMM-banner.jpg') }}">
    <meta property="og:type" content="website">

    <!-- Bootstrap 5.3 CDN -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="d-flex flex-column min-vh-100">

    <!-- Header -->
    @include('layout.partials.header')
    <!-- End Header -->

    <!-- Main Content -->
    @yield('content')
    <!-- End Main Content -->

    <!-- Footer -->
    @include('layout.partials.footer')
    <!-- End Footer -->

    <!-- Bootstrap 5.3 JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
