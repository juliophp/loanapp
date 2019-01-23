@extends('layouts.ui')


@section('content')
<div class="container padd-40">
    <div class="row">
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
