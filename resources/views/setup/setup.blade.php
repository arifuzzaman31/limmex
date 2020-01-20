@extends('app')
        @section('meta')
        <meta property="og:url"          
         content="{{ url('/') }}" />
        <meta property="og:type"         
         content="website" />

        <meta property="og:title"        
         content="Limmex Automation | IT,ITES,IOT Service Provider" />
        <meta property="og:description"   
        content="Can you avoid technology in modern life? If ‘NO’ then we find you as our speaker, our walk finder. You’ll tell us your suggestion, fascination, need, everything! Trust us, we’ll listen to you like a first grade student.
        We regularly monitor global changes. Thus, our motto is ‘Be Bird’. We fly to embrace best one from any part of the globe. What do you guess? We bring it for only us? ‘NO’ we bring it for you first.
        Again ‘Be Bird’ leads to think you like a Bird. You can have a Birds Eye View to deal with your home and work. So, let’s fly together and bring the best for rest of the world." />
        <meta property="og:image"        
         content="{{ asset('images/logo_seo.png') }}" />
        @endsection

	@section('content')
        <!-- Hero area start -->
        @include('section.hero_area')
        <!-- Hero area end -->
        <!-- Feature area start -->
        @include('section.feature')
        <!-- Feature area end -->
        <!-- About area start -->
        
        <!-- About area end -->
        <!-- Service area start -->
        @include('section.service')
        <!-- Service area end -->
        <!-- Portfolio area start -->
        @include('section.portfolio')
        <!-- Portfolio area end -->
        <!-- Team area start -->
        @include('section.team_area')
        <!-- Team area end -->
        <!-- Video area Start -->
        @include('section.video')
        <!-- Video area end -->
        <!-- Price area start -->
        @include('section.price_area')
        <!-- Price area end -->
        <!-- Plan area Start -->
        @include('section.blog')
        <!-- Plan area end -->
        <!-- Testinonial area Start -->
 
        <!-- Testinonial area end -->
        <!-- Blog area satrt -->

        <!-- Blog area end -->
        <!-- Contact area Start -->
        @include('section.contact')
        <!-- Contact area end -->
 	@endsection

        @push('script')

        <script src="{{ asset('js/app.js') }}" ></script>

        @endpush