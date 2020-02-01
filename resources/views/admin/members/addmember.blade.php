<div class="body">
    <form action="{{route('member.store')}}" method="post" enctype="multipart/form-data">
       @csrf
        <label for="title">Name</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="name" name="name" class="form-control" required="">
            </div>
        </div>
        <label for="designation">Designation</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="designation" name="designation" class="form-control" required="">
            </div>
        </div>
        <label for="title">Facebook Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="fb_link" name="fb_link" class="form-control">
            </div>
        </div>
        <label for="description">Twiter Link</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="tw_link" name="tw_link" class="form-control">
            </div>
        </div>
        <label for="description">Linked-In</label>
        <div class="form-group">
            <div class="form-line">
                <input type="text" id="in_link" name="in_link" class="form-control">
            </div>
        </div>
         <div class="form-group">
            <div class="form-line">
                <input type="file" name="image" class="form-control">
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