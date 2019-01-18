@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="{{ route('home')}}" class="list-group-item list-group-item-action">Home</a>
          <a href="{{ route('students.edit', Auth::user()->id)}}" class="list-group-item list-group-item-action">Update Profile</a>
          <a href="{{ route('loans.create')}}" class="list-group-item list-group-item-action">Apply for a Loan</a>
          <a href="{{ route('students.loans')}}" class="list-group-item list-group-item-action active">View Loan Applications</a>

        </div>
      </div>
      <div class="col-md-9">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Loan id</th>
                <th scope="col">Loan Purpose</th>
                <th scope="col">Amount Requested</th>
                <th scope="col">Loan Status</th>
                <th scope="col">Bank</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($loans as $loan)
              <tr>
                <td>{{$loan->id}}</td>
                <td>{{$loan->loanpurpose}}</td>
                <td>{{number_format($loan->loanamount, 2)}}</td>
                <td>{{$loan->loanstatus}}</td>
                <td>{{$loan->bank}}</td>
                <td>
                  <form action="{{ route('make.payment', Auth::user()->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-outline-primary btn-md">Pay Application</button>
                  </form>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
      </div>
    </div>
  </div>
@endsection
