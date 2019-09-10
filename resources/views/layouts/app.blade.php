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

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131372255-5"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-131372255-5');
		</script>


		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '1225441154310154');
			fbq('track', 'PageView');
		</script>
		<noscript>
			<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1225441154310154&ev=PageView&noscript=1"/>
		</noscript>
		<!-- End Facebook Pixel Code -->
	</head>
	<body>
		@include('layouts.navbar')
		@yield('content')
		@include('layouts.footer')
		@include('layouts.js')
	</body>
</html>