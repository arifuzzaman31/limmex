   
    <script type="text/javascript">
    	
    	var base_url = "{{ url('/') }}"+'/';

    </script>
  
    <script src="{{asset('assets/js/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}} "></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}} "></script>
    <script src="{{asset('assets/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}} "></script>
    <script src="{{asset('assets/js/custom.js')}} "></script>

    @stack('script')

</body>

</html>