<section class="price-area position-relative pt-125 pb-125">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">pricing plan</h4>
                    <h1>Buy Our Product</h1>
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 text-right">
                <div class="price-tab-btn  mt-20">
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="Yearly" role="tabpanel" aria-labelledby="Yearly-tab">
                        <div class="row">
                            @if(count($priceplans) > 0)
                                @foreach($priceplans as $priceplan)
                                    <div class="col-xl-4 col-lg-4  text-center">
                                        <div class="single-price pt-60 pb-60 pl-35 pr-35">
                                            <div class="price-head mb-30">
                                                <img src="{{asset('images/product-image/'.$priceplan->image)}}" alt="">
                                            </div>
                                            <div class="price-value">
                                                <h1>${{$priceplan->price}}<span>/ Yr</span> </h1>
                                                <p class="text-uppercase mt-20 mb-20">{{$priceplan->title}}</p>
                                            </div>
                                            <div class="price-boady">
                                                <p>
                                                   {!! substr($priceplan->description,0,60) !!}
                                                </p>
                                            </div>
                                            <div class="price-btn">
                                                <div class="heuse-hero-btn  mt-30">
                                                    <a href="#" class="btn btn-filled btn-grad-color">Buy Now</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>