@extends('app')
@section('title')
{{ $blog->title }}
@endsection
@section('meta')
    <meta property="og:url"          
        content="{{ route('get-specific-blog',['slug' => $blog->slug]) }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image"        
         content="{{asset('images/blog-image/'.$blog->blog_image)}}" />

    <meta property="og:title" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->title }}" />
    <meta property="og:description" content="{{ $blog->sort_description }}" />
@endsection
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="single-blog-content">
                            <div class="single-blo-feature-image mb-45" data-background="{{asset('images/blog-image/'.$blog->blog_image)}}">
                                <div class="blog-meta-date">
                                    <div class="blog-post-date-content">
                                        <span class="posted-on"><a href="#" >{{$blog->created_at->toFormattedDateString()}}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta ppst-meta-content mb-15">
                                <ul>
                                    <li>by <a href="#">Admin</a></li>
                                    <li>at {{date('d F Y', strtotime($blog->created_at))}}</li>
                                </ul>
                            </div>
                            <div class="blog-post-inner-content">
                                <h2 class="post-title">{{ $blog->title }}</h2>
                                <p class="mt-15">{{$blog->description}}</p>

                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4">
                <div class="widget sidebar_content widget_search mb-35">
                    <form role="search" method="get" class="search-form" action="#">
                        <label>
                            <span class="screen-reader-text">Search for:</span>
                            <input type="search" class="search-field" placeholder="Search …" value="" name="s">
                        </label>
                        <input type="submit" class="search-submit" value="Search">
                    </form>
                </div>
                <div class="widget sidebar_content widget_recent_entries mb-35">
                    <h2 class="widget-title">Recent Posts</h2>
                    <ul>
                        @if(count($allblogs) > 0)
                            @foreach($allblogs as $blog)
                                <li><a href="#">{!! substr($blog->sort_description,0,20) !!}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <div class="widget sidebar_content widget_categories mb-30">
                    <h2 class="widget-title">Categories</h2>
                    <ul>
                        
                        @if(count($allservices) > 0)
                            @foreach($allservices as $service)
                                <li><a href="#">{!! substr($service->sort_description,0,20) !!}</a><span class="cat-ribon">3</span></li>
                            @endforeach
                        @endif
                    </ul>
                </div> 
            </div>
        </div>
    </div>
</section>
<!-- Blog post area End -->
@endsection