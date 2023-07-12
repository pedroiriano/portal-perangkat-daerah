<!-- Javascripts -->
<script src="{{ asset('assets/datatables/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('assets/libs/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('assets/libs/tobii/js/tobii.min.js') }}"></script>
<script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js') }}"></script>
<script src="{{ asset('assets/libs/swiper/js/swiper.min.js') }}"></script>
<script src="{{ asset('assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins.init.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
<script src="assets/datatables/DataTables-1.13.5/js/jquery.dataTables.min.js"></script>
<script src="assets/datatables/DataTables-1.13.5/js/dataTables.jqueryui.min.js"></script>
<script src="assets/datatables/Responsive-2.5.0/js/dataTables.responsive.min.js"></script>
<script src="assets/datatables/Responsive-2.5.0/js/responsive.jqueryui.min.js"></script>
<script src="assets/datatables/Buttons-2.4.0/js/dataTables.buttons.min.js"></script>
<script src="assets/datatables/Buttons-2.4.0/js/buttons.jqueryui.min.js"></script>
<script src="assets/datatables/Buttons-2.4.0/js/buttons.html5.min.js"></script>
<script src="assets/datatables/Buttons-2.4.0/js/buttons.print.min.js"></script>
<script src="assets/datatables/Buttons-2.4.0/js/buttons.colVis.min.js"></script>
<script src="assets/datatables/JSZip-3.10.1/jszip.min.js"></script>
<script src="assets/datatables/pdfmake-0.2.7/pdfmake.min.js"></script>
<script src="assets/datatables/pdfmake-0.2.7/vfs_fonts.js"></script>
<script>
    $(document).ready(function() {
        var table = $('#example').DataTable( {
            responsive: true,
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
        } );
    
        table.buttons().container()
            .insertBefore( '#example_filter' );

        $('.dataTables_wrapper .ui-widget-header').addClass('ui-state-default');
        $('.dataTables_wrapper .ui-widget-content').addClass('ui-state-default');
    } );
</script>
<!-- Javascripts -->
