<section id="blog" class="plan-area position-relative theme-bg  pt-125 pb-125">
    <div class="container">
        <div class="row">
            @if(count($blogs) > 0)
                @foreach($blogs as $blog)
                <div class="col-xl-6 col-lg-6">
                    <div class="section-title mb-45">
                    
                        <h1>{{$blog->title}}</h1>
                    </div>
                    <div class="card-text">
                        <p>{!! $blog->sort_description !!}</p>
                        <ul class="mt-25">
                            
                            <li>{!! $blog->description !!}</li>
                        </ul>
                        <div class="heuse-hero-btn  mt-30">
                            <a href="{{route('get-specific-blog',$blog->slug)}}" class="btn btn-filled btn-grad-color">Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif     
        </div>
    </div>
</section>