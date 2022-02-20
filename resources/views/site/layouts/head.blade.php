<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="HTML5 Template" />
	<meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template" />
	<meta name="author" content="https://www.themetechmount.com/" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Administrativo</title>

	<!-- favicon icon -->
	<link rel="shortcut icon" href="{{ asset('or_favicon.png') }}" />
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />

    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">


	<!-- bootstrap -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}"/>

	<!-- animate -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}"/>
	  <link
	    rel="stylesheet"
	    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
	  />
	<!-- owl-carousel -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">

	<!-- fontawesome -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}"/>

	<!-- themify -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify-icons.css') }}"/>

	<!-- flaticon -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flaticon.css') }}"/>


	<!-- REVOLUTION LAYERS STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/revolution/css/settings.css') }}">

	<!-- prettyphoto -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prettyPhoto.css') }}">

	<!-- shortcodes -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes.css') }}"/>

	<!-- main -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}"/>

	<!-- responsive -->
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}"/>

</head>

@yield('styles')
@section('scripts')

    <!-- Javascript -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/tether.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('assets/js/jquery.easing.js') }}"></script>    
    <script src="{{ asset('assets/js/jquery-waypoints.js') }}"></script>    
    <script src="{{ asset('assets/js/jquery-validate.js') }}"></script> 
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('assets/js/numinate.min.js?ver=4.9.3') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- Revolution Slider -->
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/slider.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->    

    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <!-- Javascript end-->
    
@stop
