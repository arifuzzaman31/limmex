<template>
	<div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center">
                <div class="section-title mb-45">
                    <h4 class="text-uppercase mb-20">team member</h4>
                    <h1>Our Expert Team <br> Member </h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div v-for="member in team" :key="member.id" class="col-xl-4 col-lg-4">
                <div class="single-team text-center pb-10 pt-10 pl-10 pr-10 bg-white">
                    <div class="team-bg position-relative" :style="{backgroundImage:`url(${'images/team-member-image/'+member.image})`}">
                        <div class="member-social-link">
                            <ul>
                                <li><a :href="member.fb_link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li> <a :href="member.tw_link" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li> <a :href="member.in_link" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="team-meta pt-40 pb-40">
                        <h4>{{ member.name }}<span>{{ member.designation }}</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
	export default {
		props : ['team'],
		data(){
			return {
				url : base_url,
			}
		},

		methods : {

		}
	}
</script>