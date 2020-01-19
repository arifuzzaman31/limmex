<div class="body">
    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="title">Title</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="title" name="title" class="form-control" required="">
            </div>
        </div>
        <label for="Sort-Description">Sort Description</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="Sort-Description" name="sort_description" class="form-control" required="">
            </div>
        </div>
        <label for="tinymce">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="tinymce" name="description" required=""></textarea>
            </div>
        </div>
        <label for="type">Type :</label>
        <div class="row clearfix">
            <div class="col-sm-12">
                <select class="form-control show-tick" name="type" id="type" required="">
                    <option>Select One</option>
                    <option value="Ready Software">Ready Software</option>
                    <option value="Ready WS">Ready WS</option>
                    <option value="Own Service">Own Service</option>
                    <option value="On demand service">On demand service</option>
                </select>
            </div>
        </div></br>
        <label for="icon">Service Icon :</label>
        <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control" required="">
            </div>
        </div>
        <label for="service_link">Service FB link (Optional)</label>
        <div class="form-group">
            <div class="form-line">
                <input class="form-control" id="service_link" name="service_link" required="">
            </div>
        </div>
        <div class="demo-switch-title">Status</div>
            <div class="switch">
                <label><input type="checkbox" name="status" value="1" checked><span class="lever switch-col-green"></span></label>
            </div>
        <br>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });

$('input, select, textarea').each(
    function(index){  
        var input = $(this);
            if (input == '') {
                $('button[type="submit"]').addClass('disable');
            }
    }
);
</script>