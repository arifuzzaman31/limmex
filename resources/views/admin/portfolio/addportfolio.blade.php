<div class="body">
    <form action="{{route('portfolio.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="link">Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="link" name="link" class="form-control" required="">
            </div>
        </div>
        <label for="tinymce">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea id="description" name="description" rows="6" class="form-control ckeditor" placeholder="Write your message.."></textarea>
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
    CKEDITOR.replace( 'description',
         {
          customConfig : 'config.js',
          toolbar : 'simple'
          })
</script>