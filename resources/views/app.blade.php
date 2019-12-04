@include ('_partial/top')
@include ('_partial/header')

    <main id="app">
        
         @yield('content')
        <!-- Contact area end -->
    </main>
    <!-- Footer area Start -->
@include('_partial/footer')
    <!-- Footer area end -->
    <!-- JavaScript -->
@include('_partial/bottom')

