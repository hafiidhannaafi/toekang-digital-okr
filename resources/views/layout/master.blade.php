<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Jawara | {{ $title }}</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    @yield('plugin-css')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/vertical-layout-light/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
</head>

<body class=" ">
    <div class="container-scroller">
        <!-- Navigation bar -->
        @include('layout.partials.navbar')
        <!-- Navigation bar ends -->

        <!-- page-body-wrapper ends -->
        <div class="container-fluid page-body-wrapper">
            <!-- Settings-panel-->
            @include('layout.partials.settings-panel')
            <!-- Settings-panel ends -->

            <!-- Sidebar -->
            @include('layout.partials.sidebar')
            <!-- Sidebar ends -->

            <!-- main-panel -->
            @yield('content')
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->

    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->

    <!-- inject:js -->
    <script src="{{ asset('js/off-canvas.js') }}"></script>
    <script src="{{ asset('js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/template.js') }}"></script>
    <script src="{{ asset('js/settings.js') }}"></script>
    <script src="{{ asset('js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    @yield('plugin-js')
    <!-- End plugin js for this page-->

    <!-- Custom js for this page-->
    @yield('custom-js')
    <!-- End custom js this page-->

</body>

</html>
