<template>
	<div class="container">
        <div class="row">
            <div v-for="value in blogs" :key="value.id" class="col-xl-6 col-lg-6">
                <div class="section-title mb-45">
                    <h1>{{value.title}}</h1>
                </div>
                <div class="card-text">
                    <p v-html="value.sort_description"></p>
                   <!--  <ul class="mt-25">
                        
                        <li>{{ value.description }}</li>
                    </ul> -->
                    <div class="heuse-hero-btn  mt-30">
                        <a :href="url+'blog/'+value.id" class="btn btn-filled btn-grad-color">Read More</a>
                    </div>
                </div>
            </div>     
        </div>
    </div>
</template>

<script>
	export default{
		props : ['blogs'],
		data(){
			return {
				url : base_url,

			}
		},

		methods: {

		},
	}
</script>