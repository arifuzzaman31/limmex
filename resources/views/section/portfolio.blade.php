<section id="portfolio" class="portfolio position-relative pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-5  col-lg-5">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">Portfolio</h4>
                    <h1>Our Recent Projects</h1>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 text-right">
                <div class="heuse-hero-btn portfolio-btn mt-45">
                    <a href="# " class="btn btn-filled btn-grad-color">More Projects</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <div class="row">
            <div class="col-xl-12 no-padding">
                <div class="portfolio-item owl-carousel">
                    @if(count($portfolios) > 0)
                        @foreach($portfolios as $portfolio)
                            <div class="single-portfolio-item item" data-background="{{asset('images/portfolio-image/'.$portfolio->image)}}">
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>