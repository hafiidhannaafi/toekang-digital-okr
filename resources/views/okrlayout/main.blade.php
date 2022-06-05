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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
        @include('okrlayout.okrpartial.okrnavbar')
        <!-- Navigation bar ends -->

        <!-- page-body-wrapper ends -->
        <div class="container-fluid page-body-wrapper">
            <!-- Settings-panel-->
            @include('okrlayout.okrpartial.okrsettings-panel')
            <!-- Settings-panel ends -->

            <!-- Sidebar -->
            @include('okrlayout.okrpartial.okrsidebar')
            <!-- Sidebar ends -->

            <!-- main-panel -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('container')
                </div>
            </div>
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