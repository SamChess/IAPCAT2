<!DOCTYPE html>
<html>
<head>
    
    <title>@yield('title')</title>

   <!--  <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-grid.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-reboot.css') }}"> -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    

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