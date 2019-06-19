@extends('sam.layout')

@section('title')

    Fees

@endsection

@section('search')

<!-- <input type="text" placeholder="Search.."> -->


@endsection

@section('content')

	<div class="container">
		<h2>Record Payment</h2>
		<form action="/record" method="post">

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
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<div class="form-group">
				<select class="form-control" id="student_number" name="student_number">
                    @foreach ($students as $student)

                        <option value="{{ $student->student_number }}">{{ $student->full_name}}</option>

                    @endforeach
                </select>
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
			
		</form>

	</div>

@endsection