<!DOCTYPE html>
<html lang="en"> 
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<title>Laravel</title>
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet"> 
	<link href="{{ asset('/css/rating.css') }}" rel="stylesheet">   
	<!-- Fonts --> 
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' \ 13 type='text/css'> 
	<link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">  
	<link rel="stylesheet" href="/css/desktop.css">  
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
</head>  
<body>  
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">  
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"\ 28 data-target="#bs-example-navbar-collapse-1"> 
					<span class="sr-only">Toggle Navigation</span>  
					<span class="icon-bar"></span>  
					<span class="icon-bar"></span>  
					<span class="icon-bar"></span>  
				</button>  
				<a class="navbar-brand" href="#">Laravel</a> 
			</div> 
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> 
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">Home</a></li> 
				</ul> 
				<ul class="nav navbar-nav navbar-right"> 
					@if (Auth::guest())
					<li><a href="{{ url('/login') }}">Login</a></li>  
					<li><a href="{{ url('/register') }}">Register</a></li>  
					@else 
					<li class="dropdown"> 
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" \ 49 aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a> 
						<ul class="dropdown-menu" role="menu"> 
							<li><a href="{{ url('/logout') }}">Logout</a></li>
						</ul>
					</li> 
					@endif
				</ul> 
			</div>  
		</div>  
	</nav> 

	@yield('content') 

	<!-- Scripts --> 

</body>