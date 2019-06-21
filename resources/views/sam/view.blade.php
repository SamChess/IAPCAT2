@extends('sam.layout')

@section('title')

    View

@endsection

@section('content')
<br>

<div class="container">
  <form action="/search" method="POST" role="search">
    {{ csrf_field() }}
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search Student Admission Number"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">Search
            </button>
        </span>
    </div>
</form>

    @if(isset($details))
        <p> The Search results for your Student Admission <b> {{ $query }} </b> are :</p>
    <h2>Student details</h2>

<table class="table table-striped">
        <thead>
            <tr>
                <th>Student_number</th>
                <th>Date of Payment</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $user)
            <tr>
                <td>{{$user->student_number}}</td>
                <td>{{$user->payment_date}}</td>
                <td>{{$user->amount}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>


@endsection


