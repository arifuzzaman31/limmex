<div class="body">
    @include('admin._partial.message')
    <form action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
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
                <textarea id="tinymce" name="description"></textarea>
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
        <button type="submit" class="btn btn-primary m-t-15 waves-effect">Add</button>
    </form>
</div>
<script type="text/javascript">
        tinymce.init({
            selector: "#tinymce"

        });
</script>