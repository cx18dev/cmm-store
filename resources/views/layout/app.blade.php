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
    <meta name="csrf-token" content="{{ csrf_token() }}">
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

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    @yield('style')
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.min.js"></script>

    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    
    <!-- Sweetalert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $("#leftside-navigation .parent > p > .arrow-icon").click(function(e) {
            e.preventDefault();
            var toClose = $("#leftside-navigation ul").not($(this).parents("ul"));
            toClose.slideUp();
            toClose.parent().removeClass("open");
            if (!$(this).parent().next().is(":visible")) {
                var toOpen = $(this).parent().next()
                toOpen.slideDown();
                toOpen.parent().not(".open").addClass("open");
            }
            e.stopPropagation();
        });
    </script>
    @yield('script')
</body>

</html>
