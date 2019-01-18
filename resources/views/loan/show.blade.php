@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="{{ route('home')}}" class="list-group-item list-group-item-action">Home</a>
          <a href="{{ route('students.edit', Auth::user()->id)}}" class="list-group-item list-group-item-action">Update Profile</a>
          <a href="{{ route('loans.create')}}" class="list-group-item list-group-item-action">Apply for a Loan</a>
          <a href="{{ route('students.loans')}}" class="list-group-item list-group-item-action">View Loan Applications</a>

        </div>
      </div>
      <div class="col-md-9">
        <table class="table table-md">
            <tbody>
              <tr>
                <td>Loan id: </td>
                <td>{{ $loan->id }}</td>
              </tr>
              <tr>
                <td>Loan Amount:</td>
                <td>{{ $loan->loanamount }}</td>
              </tr>
              <tr>
                <td>Loan Year:</td>
                <td>{{ $loan->loanyear }}</td>
              </tr>
              <tr>
                <td>Purpose:</td>
                <td>{{ $loan->loanpurpose }}</td>
              </tr>
              <tr>
                <td>Account Number:</td>
                <td>{{ $loan->accountnumber }}</td>
              </tr>
              <tr>
                <td>Bank:</td>
                <td>{{ $loan->bank }}</td>
              </tr>
              <tr>
                <td>Paid Status:</td>
                <td>@if($loan->ispaid == 0) {{ 'Not Paid'}} @else {{ 'Paid' }} @endif</td>
              </tr>
              <tr>
                <td>Loan Status:</td>
                <td>{{ $loan->loanstatus }}</td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
@endsection
