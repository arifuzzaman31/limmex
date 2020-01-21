<template>
	<div class="container">
        <div class="feature-row">
            <div class="row ">
                <div v-for="value in feature" :key="value.id" class="col-xl-4 col-lg-4 text-center ">
                    <div class="feature-inner-content ">
                        <img :src="url+'images/feature-image/'+value.feature_icon" alt=" feature_icon not found">
                        <h4 v-html="value.title"></h4>
                        <p v-html="value.description"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default{
		props: ['feature'],
		data(){
			return {
				url: base_url,
			}
		}
	}
</script>