<!DOCTYPE html>

<html lang="en">

	@include('site/layouts.head')

	<body>
		
        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

	    @include('site/layouts.header')
	 	
	    @yield('content')
	    
	   	@include('site/layouts.footer')

	   	@yield('styles') 	

	   	@yield('scripts')

   	</body>
</html> 