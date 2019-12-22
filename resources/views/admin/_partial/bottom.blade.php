<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
               

            </div>
        </div>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{asset('admin/plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('admin/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('admin/plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('admin/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{ asset('admin/plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{ asset('admin/plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('admin/plugins/morrisjs/morris.js')}}"></script>

    

<!-- ChartJs -->
<script src="{{asset('admin/plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('admin/plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('admin/plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('admin/plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('admin/plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('admin/plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
<!-- TinyMCE -->
    <script src="{{asset('admin/plugins/tinymce/tinymce.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('admin/js/admin.js')}}"></script>
<script src="{{asset('admin/js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('admin/js/demo.js')}}"></script>
<script src="{{asset('admin/js/custom.js')}}"></script>

<script src="{{asset('admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<script>
     @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
      @endif
</script>
</body>

</html>