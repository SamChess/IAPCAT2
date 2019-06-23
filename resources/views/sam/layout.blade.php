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
         <nav class="navbar navbar-expand-md navbar-light bg-light">
            <a href="#" class="navbar-brand">IAP CAT 2</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/register" class="nav-item nav-link">Register</a>
                    <a href="/fees" class="nav-item nav-link">Fees</a>
                    <a href="/paid" class="nav-item nav-link">Total Paid</a>
                    <a href="/view" class="nav-item nav-link">View Payment</a>
                </div>
               
            </div>
        </nav>


            @yield('search')
            
    </div>

    @yield('content')

</body>
</html>