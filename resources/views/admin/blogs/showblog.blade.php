<div class="row clearfix">
    <div class="col-md-12">
        <p class="align-left font-24">
            <b>{!! $data->title !!}</b>
        </p>
        <div class="align-left">
            {!! $data->description !!}
        </div>
        <img src="{{URL::to('images/blog-image/'.$data->blog_image)}}" class="img-fluid">
    </div>
</div>

