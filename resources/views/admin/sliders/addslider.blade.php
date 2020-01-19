<div class="body">
    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
       @csrf
       <label for="name">Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="name" name="name" class="form-control" required="">
            </div>
        </div>
        <label for="title">Title</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="title" name="title" class="form-control" required="">
            </div>
        </div>
        <label for="tinymce">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="tinymce" name="description" required=""></textarea>
            </div>
        </div>
         <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control" required="">
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
</script>