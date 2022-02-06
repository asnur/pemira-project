<?php
  function urlContains($contains) {
    return str_contains(url()->current(), $contains);
  }
?>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}" />

	<title>{{ config('app.name', 'Laravel') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />
	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/materialdesign.min.css') }}" />
</head>
<body class="min-vh-100">
	<div id="app">
		@if (!urlContains('auth'))
			@include('../partials/navbar')
		@endif

		<main>
			@yield('content')
		</main>

		@if (!urlContains('auth'))
			@include('../partials/footer')
		@endif
	</div>

	<script src="{{ asset('js/app.js') }}" defer></script>
	@stack('scripts')
</body>
</html>
