<!-- Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </div>
               @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <div class="modal-body">
                  
            </div>
        </div>
    </div>
</div>

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

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('admin/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
<!-- Ckeditor -->
<script src="{{asset('admin/plugins/ckeditor/ckeditor.js')}}"></script>
  <!-- TinyMCE -->
    <!-- <script src="{{asset('admin/plugins/tinymce/tinymce.js')}}"></script> -->
<!-- Custom Js -->
<script src="{{asset('admin/js/admin.js')}}"></script>
<script src="{{asset('admin/js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('admin/js/demo.js')}}"></script>
<!-- <script src="{{asset('admin/js/custom.js')}}"></script> -->

<script src="{{asset('admin/plugins/jquery-datatable/jquery.dataTables.js')}}"></script>
<script src="{{asset('admin/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('admin/js/pages/tables/jquery-datatable.js')}}"></script>
<script src="{{asset('admin/css/toastr/toastr.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
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
<script>
    function getModal(url,text)
    {
        $('#defaultModal').modal();
        $('.modal-title').text(text).css('font-weight', 'bold');
        $('.modal-body').load(url);
    }

</script>

</body>

</html>