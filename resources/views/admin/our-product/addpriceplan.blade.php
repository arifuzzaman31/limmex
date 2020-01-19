<div class="body">
    <form action="{{route('priceplan.store')}}" method="post" enctype="multipart/form-data">
       @csrf
       
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
        <label for="price">Price</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="price" name="price" class="form-control" required="">
            </div>
        </div>
        <label for="product_link">Product Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="product_link" name="product_link" class="form-control">
            </div>
        </div>
         <div class="form-group">
            <div class="form-line">
                <input type="file" id="icon" name="image" class="form-control">
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