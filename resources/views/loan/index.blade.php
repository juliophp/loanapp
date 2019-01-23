@extends('layouts.ui')


@section('content')
<div class="container padd-80">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Loan id</th>
                <th scope="col">Loan Purpose</th>
                <th scope="col">Amount Requested</th>
                <th scope="col">Loan Status</th>
                <th scope="col">Application Fee</th>
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
                <td>1,500</td>
                <td>
                  <form action="{{ route('make.payment', Auth::user()->id)}}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-blue btn-sm">Pay</button>
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
