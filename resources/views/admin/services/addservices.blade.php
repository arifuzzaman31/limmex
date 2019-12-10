<div class="body">
    <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="Sort-Description">Sort Description</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="Sort-Description" name="sort_description" class="form-control">
            </div>
        </div>
        <label for="description">Description</label>
        <div class="form-group">
            <div class="form-line">
                <textarea class="form-control" id="description" rows="6" cols="16" name="description"></textarea>
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