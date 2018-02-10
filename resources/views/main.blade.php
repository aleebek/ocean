<!doctype html>
<html lang="en">

<head>
	@include('partials._head')
</head>

<body>

	@include('partials._navs')
	@yield('slider')
	<div class="container">
		
		@yield('content') 
		
		

	</div>
	<!-- End of .container -->
	@include('partials._footer')

	@include('partials._javascript')
	
	@yield('scripts')
	
</body>

</html>