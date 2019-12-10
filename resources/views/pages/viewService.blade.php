@extends('app')
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-blog-content">
                            <div class="single-blo-feature-image mb-45" data-background="{{asset('assets/service-image/'.$services->image)}}">
                                <div class="blog-meta-date">
                                    <div class="blog-post-date-content">
                                        <span class="posted-on"><a href="#" >{{$services->created_at->toFormattedDateString()}}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta ppst-meta-content mb-15">
                                <ul>
                                    <li>by <a href="#">Admin</a></li>
                                    <li>at {{date('d F Y', strtotime($services->created_at))}}</li>
                                </ul>
                            </div>
                            <div class="blog-post-inner-content">
                                <h2 class="post-title">{!! substr($services->sort_description,0,25 )!!}</h2>
                                <p class="mt-15">{{$services->description}}</p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog post area End -->
@endsection