<!-- main jQuery -->
<script src="{{ jsFile('jquery-1.11.1.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ jsFile('bootstrap.min.js') }}"></script>
<!-- bx slider -->
<script src="{{ jsFile('jquery.bxslider.min.js') }}"></script>
<!-- count to -->
<script src="{{ jsFile('jquery.countTo.js') }}"></script>
<script src="{{ jsFile('jquery.appear.js') }}"></script>
<!-- owl carousel -->
<script src="{{ jsFile('owl.carousel.min.js') }}"></script>
<!-- validate -->
<script src="{{ jsFile('validate.js') }}"></script>
<!-- mixit up -->
<script src="{{ jsFile('jquery.mixitup.min.js') }}"></script>
<!-- easing -->
<script src="{{ jsFile('jquery.easing.min.js') }}"></script>
<!-- gmap helper -->
<script src="http://maps.google.com/maps/api/js?sensor=true')}}"></script>
<!--gmap script-->
<script src="{{ jsFile('gmaps.js') }}"></script>
<script src="{{ jsFile('map-helper.js') }}"></script>
<!-- video responsive script -->
<script src="{{ jsFile('jquery.fitvids.js') }}"></script>



<!-- fancy box -->
<script src="{{ asset('assets/user/fancyapps-fancyBox/source/jquery.fancybox.pack.js') }}"></script>
<!-- revolution slider js -->
<script src="{{ asset('assets/user/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('assets/user/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- thm custom script -->
<script src="{{ jsFile('custom.js') }}"></script>



<script>
    toastr.options = {
        "closeButton": true,
        "progressBar": false,
        "positionClass": "toast-top-right",
        "preventDuplicates": true,
        "showDuration": "3000",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut",
        "closeButton": true,
        "progressBar": true
    }
    @if (Session::has('success'))

        toastr.success("{{ session('success') }}");
    @endif

    @if (!empty($errors->all()))
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}")
        @endforeach
    @endif

    @if (Session::has('error'))

        toastr.error("{{ session('error') }}");
    @endif

    @if (Session::has('info'))

        toastr.info("{{ session('info') }}");
    @endif

    @if (Session::has('warning'))

        toastr.warning("{{ session('warning') }}");
    @endif
</script>
@yield('js')
