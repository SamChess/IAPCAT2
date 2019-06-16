@extends('sam.layout')

@section('title')

    Fees

@endsection

@section('search')

<input type="text" placeholder="Search..">


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
			
		</form>

		<table>
         <tr>
            <td>student_number</td>
            <td>payment</td>
            <td>amount</td>
         </tr>
         @foreach ($fees as $row)
         <tr>
            <td>{{ $row['student_number']}}</td>
            <td>{{ $row['payment_date']}}</td>
            <td>{{ $row['amount']}}</td>
         </tr>
         sum({{ $row['amount']}})
         @endforeach
      </table>


	</div>

@endsection