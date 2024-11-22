<!DOCTYPE html>
<html lang="en">

<head>
    @yield('meta')

    @include('admin.layouts.partials.head')

</head>

<body class="dark-only">
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start       -->
    <div class="page-wrapper " id="pageWrapper">
        <!-- Page Header Start-->
        @include('admin.layouts.partials.navbar')

        <!-- Page Header Ends-->
        <!-- Page Body Start-->
        <div class="page-body-wrapper sidebar-icon">
            <!-- Page Sidebar Start-->
            @include('admin.layouts.partials.sidebar')


            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Container-fluid starts-->
                @yield('content')
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->
            @include('admin.layouts.partials.footer')

        </div>
    </div>
    
    @include('admin.layouts.partials.scripts')
    
    @yield('js')
</body>

</html>
