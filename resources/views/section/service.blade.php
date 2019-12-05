<section id="services" class="service position-relative pt-125 pb-120 theme-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">Services</h4>
                    <h1>Services we are provided</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services-item owl-carousel">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                                <img src="assets/img/service/service-icon-01.png" alt="">
                                <h4 class="mb-10 mt-20 pb-10">{!! substr($service->sort_description,0,30) !!}</h4>
                                <p>{!! substr($service->description,0,90) !!}</p>
                                <a href="#" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>