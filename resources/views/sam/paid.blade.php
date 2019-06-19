@extends('sam.layout')

@section('title')

    Paid

@endsection

@section('content')

<div class="container">
	<br>
  <h4>Fees Already Paid Amount to: <b> {{ $total}}</b> </h4> 
  <br>         
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Student Number</th>
        <th>Payment</th>
        <th>Amount</th>
      </tr>
    </thead>
    <tbody>
       </tr>
         @foreach ($paid as $row)
         <tr>
            <td>{{ $row['student_number']}}</td>
            <td>{{ $row['payment_date']}}</td>
            <td>{{ $row['amount']}}</td>
         </tr>
        @endforeach
    </tbody>
  </table>
</div>

@endsection