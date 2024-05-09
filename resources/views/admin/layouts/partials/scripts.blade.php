<!-- latest jquery-->
<script src="{{ jsFile('jquery-3.5.1.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ jsFile('icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ jsFile('icons/feather-icon/feather-icon.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ jsFile('sidebar-menu.js') }}"></script>
<script src="{{ jsFile('config.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ jsFile('bootstrap/popper.min.js') }}"></script>
<script src="{{ jsFile('bootstrap/bootstrap.min.js') }}"></script>
<!-- Plugins JS start-->

<script src="{{ jsFile('prism/prism.min.js') }}"></script>
<script src="{{ jsFile('clipboard/clipboard.min.js') }}"></script>
<script src="{{ jsFile('counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ jsFile('counter/jquery.counterup.min.js') }}"></script>
<script src="{{ jsFile('counter/counter-custom.js') }}"></script>
<script src="{{ jsFile('custom-card/custom-card.js') }}"></script>
<script src="{{ jsFile('form-wizard/form-wizard.js') }}"></script>
<script src="{{ jsFile('form-wizard/form-wizard-three.js') }}"></script>
<script src="{{ jsFile('form-wizard/jquery.backstretch.min.js') }}"></script>
<script src="{{ jsFile('vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ jsFile('vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
<script src="{{ jsFile('dashboard/default.js') }}"></script>
<script src="{{ jsFile('datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ jsFile('datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ jsFile('datepicker/date-picker/datepicker.custom.js') }}"></script>
<script src="{{ jsFile('owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ jsFile('owlcarousel/owl-custom.js') }}"></script>
<script src="{{ jsFile('jquery-3.5.1.min.js') }}"></script>
{{-- <script src="{{ jsFile('datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatables/datatable.custom.js') }}"></script> --}}


<script src="{{ jsFile('datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatables/datatable.custom.js') }}"></script>

<script src="{{ jsFile('datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.select.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/dataTables.scroller.min.js') }}"></script>
<script src="{{ jsFile('datatable/datatable-extension/custom.js') }}"></script>

{{-- <script src="{{ jsFile('sidebar-menu.js') }}"></script> --}}

<!-- Plugins JS start-->
<script src="{{ jsFile('editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ jsFile('editor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ jsFile('editor/ckeditor/styles.js') }}"></script>
<script src="{{ jsFile('editor/ckeditor/ckeditor.custom.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- Plugins JS start-->
<script src="{{ jsFile('time-picker/jquery-clockpicker.min.js') }}"></script>
<script src="{{ jsFile('time-picker/highlight.min.js') }}"></script>
<script src="{{ jsFile('time-picker/clockpicker.js') }}"></script>
<!-- Plugins JS Ends-->
<!-- calender -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




<script src="{{ jsFile('script.js') }}"></script>

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
