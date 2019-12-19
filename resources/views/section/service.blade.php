<section id="services" class="service position-relative pt-125 pb-120 theme-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">Services</h4>
                    <h1>Ready Software</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services-item owl-carousel">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            @if($service->type == 'Ready Software')
                                <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                                    <img src="{{asset('images/service-image/'.$service->image)}}" alt="Service Picture">
                                    <h4 class="mb-10 mt-20 pb-10">{!! substr($service->sort_description,0,30) !!}</h4>
                                    <p>{!! substr($service->description,0,80) !!}</p>
                                    <a href="{{route('get-specific-service',$service->slug)}}" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                                </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section-title mb-45">
                    <h1>Ready Website</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services-item owl-carousel">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            @if($service->type == 'Ready WS')
                            <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                                <img src="{{asset('images/service-image/'.$service->image)}}" alt="Service Picture">
                                <h4 class="mb-10 mt-20 pb-10">{!! substr($service->sort_description,0,30) !!}</h4>
                                <p>{!! substr($service->description,0,80) !!}</p>
                                <a href="{{route('get-specific-service',$service->slug)}}" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section-title mb-45">
                    <h1>On demand service</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services-item owl-carousel">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            @if($service->type == 'On demand service')
                            <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                                <img src="{{asset('images/service-image/'.$service->image)}}" alt="Service Picture">
                                <h4 class="mb-10 mt-20 pb-10">{!! substr($service->sort_description,0,30) !!}</h4>
                                <p>{!! substr($service->description,0,80) !!}</p>
                                <a href="{{route('get-specific-service',$service->slug)}}" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-5">
                <div class="section-title mb-45">
                    <h1>Own Service</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="services-item owl-carousel">
                    @if(count($services) > 0)
                        @foreach($services as $service)
                            @if($service->type == 'Own Service')
                            <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                                <img src="{{asset('images/service-image/'.$service->image)}}" alt="Service Picture">
                                <h4 class="mb-10 mt-20 pb-10">{!! substr($service->sort_description,0,30) !!}</h4>
                                <p>{!! substr($service->description,0,80) !!}</p>
                                <a href="{{route('get-specific-service',$service->slug)}}" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                            </div>
                            @endif
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
  </div>
</section>