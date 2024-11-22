<!-- latest jquery-->
<script src="{{ jsAdminFile('jquery-3.5.1.min.js') }}"></script>
<!-- feather icon js-->
<script src="{{ jsAdminFile('icons/feather-icon/feather.min.js') }}"></script>
<script src="{{ jsAdminFile('icons/feather-icon/feather-icon.js') }}"></script>
<!-- Sidebar jquery-->
<script src="{{ jsAdminFile('sidebar-menu.js') }}"></script>
<script src="{{ jsAdminFile('config.js') }}"></script>
<!-- Bootstrap js-->
<script src="{{ jsAdminFile('bootstrap/popper.min.js') }}"></script>
<script src="{{ jsAdminFile('bootstrap/bootstrap.min.js') }}"></script>
<!-- Plugins JS start-->

<script src="{{ jsAdminFile('prism/prism.min.js') }}"></script>
<script src="{{ jsAdminFile('clipboard/clipboard.min.js') }}"></script>
{{-- <script src="{{ jsAdminFile('counter/jquery.waypoints.min.js') }}"></script>
<script src="{{ jsAdminFile('counter/jquery.counterup.min.js') }}"></script> --}}
<script src="{{ jsAdminFile('counter/counter-custom.js') }}"></script>
<script src="{{ jsAdminFile('custom-card/custom-card.js') }}"></script>
{{-- <script src="{{ jsAdminFile('form-wizard/form-wizard.js') }}"></script>
<script src="{{ jsAdminFile('form-wizard/form-wizard-three.js') }}"></script>
<script src="{{ jsAdminFile('form-wizard/jquery.backstretch.min.js') }}"></script> --}}
{{-- <script src="{{ jsAdminFile('vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
<script src="{{ jsAdminFile('vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script> --}}
{{-- <script src="{{ jsAdminFile('dashboard/default.js') }}"></script> --}}
<script src="{{ jsAdminFile('datepicker/date-picker/datepicker.js') }}"></script>
<script src="{{ jsAdminFile('datepicker/date-picker/datepicker.en.js') }}"></script>
<script src="{{ jsAdminFile('datepicker/date-picker/datepicker.custom.js') }}"></script>
<script src="{{ jsAdminFile('owlcarousel/owl.carousel.js') }}"></script>
<script src="{{ jsAdminFile('owlcarousel/owl-custom.js') }}"></script>
{{-- <script src="{{ jsAdminFile('jquery-3.5.1.min.js') }}"></script> --}}
{{-- <script src="{{ jsAdminFile('datatable/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatables/datatable.custom.js') }}"></script> --}}


<script src="{{ jsAdminFile('datatable/datatables/jquery.dataTables.min.js') }}"></script>
{{-- <script src="{{ jsAdminFile('datatable/datatables/  datatable.custom.js') }}"></script> --}}
{{-- 
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.autoFill.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.select.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.responsive.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.keyTable.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.colReorder.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.fixedHeader.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.rowReorder.min.js') }}"></script>
<script src="{{ jsAdminFile('datatable/datatable-extension/dataTables.scroller.min.js') }}"></script> --}}
{{-- <script src="{{ jsAdminFile('datatable/datatable-extension/custom.js') }}"></script> --}}

{{-- <script src="{{ jsAdminFile('sidebar-menu.js') }}"></script> --}}

<!-- Plugins JS start-->
<script src="{{ jsAdminFile('editor/ckeditor/ckeditor.js') }}"></script>
<script src="{{ jsAdminFile('editor/ckeditor/adapters/jquery.js') }}"></script>
<script src="{{ jsAdminFile('editor/ckeditor/styles.js') }}"></script>
{{-- <script src="{{ jsAdminFile('editor/ckeditor/ckeditor.custom.js') }}"></script> --}}
<!-- Plugins JS Ends-->
<!-- Plugins JS start-->
{{-- <script src="{{ jsAdminFile('time-picker/jquery-clockpicker.min.js') }}"></script>
<script src="{{ jsAdminFile('time-picker/highlight.min.js') }}"></script>
<script src="{{ jsAdminFile('time-picker/clockpicker.js') }}"></script> --}}
<!-- Plugins JS Ends-->
<!-- calender -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>




<script src="{{ jsAdminFile('script.js') }}"></script>

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
