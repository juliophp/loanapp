@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $balance->username}}'s Wallet
        <small>List of all transactions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Tranasctions</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped primary">
                <thead>
                <tr>
                  <th>Amount</th>
                  <th>Transaction Type</th>
                  <th>Narration</th>
                  <th>Date Time</th>
                  <th>From</th>
                  <th>To</th>
                </tr>
                </thead>
                <tbody>
                @foreach($balance->statements as $balance)
                <tr>
                  <td>{{ $balance->amount }}</td>
                  <td>{{ $balance->creditordebit }}</td>
                  <td>{{ $balance->narration }}</td>
                  <td>{{ $balance->datetime }}</td>
                  <td>{{ $balance->from}}</td>
                  <td> {{ $balance->to }}</td>

                </tr>
                @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                    <th>Narration</th>
                    <th>Date Time</th>
                    <th>From</th>
                    <th>To</th>
                  </tr>
                </tfoot>
              </table>
              <a href="{{ route('bank.balance.export')}}" class="btn btn-primary">Export to CSV</a>

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
