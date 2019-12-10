@extends('app')
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
                            <div class="single-blo-feature-image mb-45" data-background="assets/img/Blog/blog-1.jpg">
                                <div class="blog-meta-date">
                                    <div class="blog-post-date-content">
                                        <span class="posted-on"><a href="#">{{date('d F Y', strtotime($blog->created_at))}}</a></span>
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
                                <h2 class="post-title"><a href="single-blog.html">{{$blog->title}}</a></h2>
                                <p class="mt-15">{{$blog->description}}</p>
                            </div>
                            <div class="blog-readmore-btn">
                                <a href="{{route('get-specific-blog',$blog->slug)}}">read-more <i class="fa fa-angle-right"></i></a>
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