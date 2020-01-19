@extends('app')
@section('title','Limmex Automation | Blogs')
@section('meta')
    <meta property="og:url"          
        content="{{ route('get-all-blog') }}" />
    <meta property="og:type" content="website" />
            <meta property="og:image"        
         content="{{ asset('images/logo_seo.png') }}" />

    <meta property="og:title" content="Limmex Automation | Blogs" />
    <meta property="og:description" content="IT,ITES,IOT Service Provider" />
@endsection
@section('content')
<!-- Blog post area Start -->
<section class="blog-post-area pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 ">
                <div class="row">
                    <div class="col-xl-12 mb-35">
                    @if(count($allblogs) > 0)
                        @foreach($allblogs as $blog)
                        <div class="single-blog-content">
                            <div class="single-blo-feature-image mb-45" data-background="{{asset('images/blog-image/'.$blog->blog_image)}}">
                                <div class="blog-meta-date">
                                    <div class="blog-post-date-content">
                                        <span class="posted-on"><a href="#">{{date('d F Y', strtotime($blog->created_at))}}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta ppst-meta-content mb-15">
                                <ul>  
                                    <li><i class="fa fa-clock-o" aria-hidden="true"></i> {{$blog->created_at->diffForHumans()}}</li>
                                </ul>
                            </div>
                            <div class="blog-post-inner-content">
                                <h2 class="post-title"><a href="single-blog.html">{!! $blog->title !!}</a></h2>
                                <p class="mt-15">{!! $blog->description !!}</p>
                            </div>
                            <div class="blog-readmore-btn">
                                <a href="{{route('get-specific-blog',$blog->id)}}">read-more <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    </div>
                </div>

                <div class="row">
                    {{ $allblogs->links() }}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog post area End -->
@endsection

@push('style')
<style>
    
    header.header-area {
    
    background-color: #1a32b7;
    top : 0 !important;

    }
</style>
@endpush