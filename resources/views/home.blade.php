<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Education</title>
	<link rel="icon" type="text/css" href="{{ asset('assets/img/apple.png') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/font-awesome/css/font-awesome.css') }}">
</head>
<body>
	<div class="heading">
		<h1>education</h1>
		<p>“Education is the most powerful weapon which <br>
			you can use to change the world.”</p>
	</div>
	<div class="coba">
		<div class="content">
			@if(Session::has('status'))
			<div class="error">
				{{ Session::get('status') }}
			</div>
			@elseif(Session::has('success'))
			<div class="success">
				{{ Session::get('success') }}
			</div>
			@else
			<form role="form" action="{{ url('validation') }}" method="post">
				{{ csrf_field() }}
				<input autocomplete="off" type="text" name="password" placeholder="Enter the code">
				<br>
				<button type="submit">Sign In</button>
			</form>
			@endif
		</div>
	</div>
	<!-- <img class="img-1" src="assets/img/computer.png" width="100%">
	<img class="img-2" src="assets/img/computer-2.png" width="100%">
	<div class="footer">
		<input type="password" name="password" placeholder="Enter the code">
		<button><i class="fa fa-arrow-right"></i></button>
	</div> -->
</body>
</html>
