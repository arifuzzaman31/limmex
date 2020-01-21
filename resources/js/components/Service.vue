<template>
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
                    @foreach($RSservices as $service)
                        <div class="single-service text-center item pt-60 pb-60 pl-30 pr-30">
                            <img src="{{asset('images/service-image/'.$service->image)}}" alt="Service Picture">
                            <h4 class="mb-10 mt-20 pb-10">{!! $service->title !!}</h4>
                            <p>{!! $service->sort_description !!}</p>
                            <a href="{{route('get-specific-service',$service->id)}}" class="btn-service"><i class="fa fa-arrow-right"></i> </a>
                        </div>
                    @endforeach 
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {
		data(){
			return {
				url : base_url,
			}
		},

		mounted(){

		},

		methods : {
			getReadySoft(){
				axios.get(base_url+)
			}
		}
	}
</script>