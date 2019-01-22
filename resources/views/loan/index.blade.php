@extends('layouts.ui')


@section('content')
<div class="container padd-80">
    <div class="row justify-content-center">
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
                    <button type="submit" class="btn btn-blue btn-sm">Pay Application</button>
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
