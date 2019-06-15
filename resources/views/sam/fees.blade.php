@extends('sam.layout')

@section('title')

    Fees

@endsection

@section('content')

	<div class="container">
		<h2>Record Payment</h2>
		<form action="/record" method="post">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<div class="form-group">
				<label for="student_number">Student Number:</label>
				<input type="text" class="form-control" id="student_number" placeholder="Enter Student Number" name="student_number">
			</div>
			<div class="form-group">
				<label for="payment_date">Date of Payment:</label>
				<input type="Date" class="form-control" id="payment_date" placeholder="Date of Payment" name="payment_date">
			</div>
			<div class="form-group">
				<label for="amount">Amount:</label>
				<input type="text" class="form-control" id="dob" placeholder="Amount" name="amount">
			</div>
			<button type="submit" class="btn btn-primary">Record</button>
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
			
		</form>
	</div>
</div>

@endsection