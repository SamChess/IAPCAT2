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

         <div class="topnav">

	    	<a href="/">Home</a>
	        <a href="/register">Register</a>
	        <a href="/fees">Fees</a>
            <a href="/paid">Total Paid</a>
            <a href="/view">View Payment</a>

            @yield('search')
            
        </div>

    </div>

    @yield('content')

</body>
</html>