<!DOCTYPE html>
<html lang="en">
<head>
    <title> @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="icon" href="/jp.ico">
    <style>
    </style>
</head>
<body>
	@include('layouts.partials.navbar')
	@include('layouts.partials.header')
	<div class="container">
		@if(session()->has('SUCCESS_MESSAGE'))
			<div class="alert alert-success">
				<p>{{ session('SUCCESS_MESSAGE') }}</p>
			</div>
		@endif
		@if(session()->has('ERROR_MESSAGE'))
		    <div class="alert alert-danger">
		        <p>{{ session('ERROR_MESSAGE') }}</p>
		    </div>
		@endif

    @yield('content')
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
