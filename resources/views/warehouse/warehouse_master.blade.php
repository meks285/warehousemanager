<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('logo/logo.png') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>AWM - Warehouse Manager</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}" />
        <!-- BEGIN: JS Assets-->
        <link rel="stylesheet" href="{{ asset('backend/assets/js/app.js') }}" />

        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="app">
        <!-- BEGIN: Mobile Menu -->
        @include('warehouse.mobilemenu')
        <!-- END: Mobile Menu -->
        <!-- BEGIN: Top Bar -->
        @include('warehouse.header')
        <!-- END: Top Bar -->
        <!-- BEGIN: Top Menu -->
        @include('warehouse.topmenu')
        <!-- END: Top Menu -->
        <!-- BEGIN: Content -->
        @yield('warehouse-section');
        <!-- END: Content -->
        <!-- BEGIN: Dark Mode Switcher-->
        <!-- <div data-url="top-menu-dark-dashboard.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box dark:bg-dark-2 border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-gray-700 dark:text-gray-300">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div> -->
        <!-- END: Dark Mode Switcher-->
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>        
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <!-- END: JS Assets-->
    </body>
</html>