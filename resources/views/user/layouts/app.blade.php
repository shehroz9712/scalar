<!DOCTYPE html>
<html lang="en">




@yield('meta')

@include('user.layouts.partials.head')

<body>

    <!--Start navbar area-->
    @include('user.layouts.partials.navbar')
    <!--End navbar  area-->



    @yield('content')

    <!--Start footer area-->
    @include('user.layouts.partials.footer')

    <!--End footer  area-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>


    @include('user.layouts.partials.script')


</body>


</html>
