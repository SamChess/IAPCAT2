@extends('sam.layout')
    
    @section('title') 

Register 

    @endsection

@section('content')

	<div class="container">
		<h2>Register Student</h2>
		<form action="/create" method="post">
			
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<!-- <div class="form-group">
				<label for="student_number">Student Number:</label>
				<input type="text" class="form-control" id="student_number" placeholder="Enter Student Number" name="student_number" required="">
			</div> -->
			<div class="form-group">
				<label for="full_name">Student Fullname:</label>
				<input type="text" class="form-control" id="full_name" placeholder="Student Fullname" name="full_name">
			</div>
			<div class="form-group">
				<label for="dob">Date of Birth:</label>
				<input type="Date" class="form-control" id="dob" placeholder="Enter Date of Birth" name="dob">
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<input type="text" class="form-control" id="address" placeholder="Enter your Address" name="address">
			</div>
			
			<button type="submit" class="btn btn-primary">Register</button>
			<br>
			<br>
			
			@if ($errors->any())
			

			<div class="alert alert-danger">
				<strong>
			
					@foreach($errors->all() as $error)

					 	{{$error}}

					@endforeach

				</strong>
			</div>

			@endif

			@if(session()->has('message'))

      			<div class="alert alert-success">

       				 {{ session()->get('message') }}

    			</div>
    			
			@endif
			

		</form>
	</div>
</div>

@endsection