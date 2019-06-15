<!DOCTYPE html>
<html>
<head>
    
    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.css') }}">
    

</head>
<body>
	<div class="container">
	    <ul>
	    	<li><a href="/">Home</a></li>
	        <li><a href="/register">Register</a></li>
	        <li><a href="/fees">Fees</a></li>
	    </ul>
    </div>

    @yield('content')

</body>
</html>