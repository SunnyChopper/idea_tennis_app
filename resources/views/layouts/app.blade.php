<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		@if(isset($page_title))
		<title>{{ $page_title }} - {{ config('app.name') }}</title>
		@else
		<title>{{ config('app.name') }}</title>
		@endif

		<!-- Bootstrap CSS -->
		<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<!-- Google Fonts API -->
		<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700|Roboto:300,400,700&display=swap" rel="stylesheet">

		<!-- Custom CSS -->
		<link href="{{ URL::asset('css/layouts.css') }}" rel="stylesheet">
		<link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
	</head>
	<body>
		@include('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.js')
	</body>
</html>