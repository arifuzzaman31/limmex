<section id="blog" class="blog-area position-relative pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-5">
                <div class="section-title pb-30 blog-title">
                    <h4 class="text-uppercase pb-20">Blog posts</h4>
                    <h1 class="pb-35">Latest News</h1>
                </div>
                <div class="form-area">
                    <h4 class="mb-30">Subscribe for the latest news and stay updated for the offers</h4>
                    <form action="#" class="form">
                        <input type="email" placeholder="Enter Your Email" required>
                        <button type="submit"><i class="fa fa-arrow-right"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-xl-8  col-lg-7">
                <div class="blog-list owl-carousel">
                    @if(count($blogs) > 0)
                    @foreach($blogs as $blog)
                        <div class="single-blog-list pt-60 pb-60 pl-40 pr-40">
                            <div class="blog-after"></div>
                            <div class="blog-before"></div>
                            <h3 class="pb-20">
                                <a href="single-blog.html">{{$blog->title}}</a>
                            </h3>
                            <h5 class="pb-20">Posted at {{$blog->created_at->toFormattedDateString()}}</h5>
                            <p class="pb-20">{{$blog->sort_description}}</p>
                            <div class="blog-readmore-btn">
                                <a href="single-blog.html">Read More <i class="ml-10 fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>