<div class="body">
    <form action="{{route('priceplan.store')}}" method="post" enctype="multipart/form-data">
       @csrf
       
        <label for="title">Title</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="title" name="title" class="form-control">
            </div>
        </div>
        <label for="description">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea class="form-control" rows="6" cols="16" name="description"></textarea>
            </div>
        </div>
        <label for="price">Price</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="price" name="price" class="form-control">
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
        <input type="checkbox" id="remember_me" name="status" value="1" class="filled-in">
        <label for="remember_me">Status</label>
        <br>
        <button type="submit" class="btn btn-primary waves-effect">Add</button>
    </form>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>