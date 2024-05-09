<!DOCTYPE html>
<html lang="en" style="--theme-deafult: #7951aa; --theme-secondary: #72757D;">

<head>
    @yield('meta')

    @include('admin.layouts.partials.head')
</head>

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    @yield('content')
    @include('admin.layouts.partials.scripts')
    @yield('js')

</body>

</html>
