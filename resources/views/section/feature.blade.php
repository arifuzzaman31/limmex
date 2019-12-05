<section class="about-area position-relative pt-125">
    <div class="container">
        <div class="feature-row">
            <div class="row ">
                @if(count($features) > 0)
                    @foreach($features as $feature)
                        <div class="col-xl-4 col-lg-4 text-center ">
                            <div class="feature-inner-content ">
                                <img src="{{asset('images/feature-image/'.$feature->feature_icon)}}" alt=" ">
                                <h4>{{$feature->title}}</h4>
                                <p>{{$feature->description}}</p>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>