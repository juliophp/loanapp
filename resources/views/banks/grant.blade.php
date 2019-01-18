@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Granted Loan Applications
        <small>List of all loan applications granted</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Granted Loans</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Granted Loans</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Loan Applicant</th>
                  <th>Loan Amount</th>
                  <th>Loan purpose</th>
                  <th>University</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($loans as $loan)
                <tr>
                  <td>{{ $loan->user->firstname . ' '. $loan->user->lastname }}</td>
                  <td>{{ number_format($loan->loanamount, 2) }}</td>
                  <td>{{ $loan->loanpurpose }}</td>
                  <td> {{ $loan->user->university->universityname }}</td>
                  <td>
                    <a href="{{route('bank.loans.show', $loan->id)}}" class="btn btn-sm btn-success">View Record</a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Loan Applicant</th>
                  <th>Loan Amount</th>
                  <th>Loan purpose</th>
                  <th>University</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
