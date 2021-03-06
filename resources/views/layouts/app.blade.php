<?php
function urlContains($contains)
{
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

	<title>PEMIRA STTT NF 2021 - 2022</title>
	<link rel="icon" href="{{ asset('/img/favicon.ico') }}" />

	<!---- Data Table  --->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.css" />

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" />

	<!-- Styles -->
	<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	{{-- <link rel="stylesheet" href="{{ asset('css/materialdesign.min.css') }}" /> --}}

	<!-- JQuery --->
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
		integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
		integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="sweetalert2.min.css">
</head>

<body class="min-vh-100">
	<div id="app">
		@include('../partials/preloader')

		@if (!Request::is('login') && !Request::is('register'))
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js"
		integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA=="
		crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	@stack('scripts')
	@stack('kandidat')
	@include('sweetalert::alert')
</body>

</html>
