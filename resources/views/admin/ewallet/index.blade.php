@extends('layouts.admapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Wallet
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
                  <th>Bank</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Approved by</th>
                  <th>Balance</th>
                  <th>Time Created</th>
                </tr>
                </thead>
                <tbody>
                @foreach($balances as $balance)
                <tr>
                  <td>{{ $balance->bank->bankname }}</td>
                  <td>{{ $balance->debit }}</td>
                  <td>{{ $balance->credit }}</td>
                  <td>@if($balance->admin){{ $balance->admin->firstname }}@endif</td>
                  <td>{{ $balance->balance }}</td>
                  <td> {{ $balance->created_at }}</td>

                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Bank</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Approved by</th>
                  <th>Balance</th>
                  <th>Time Created</th>
                </tr>
                </tfoot>
              </table>
              <a href="{{ route('admin.wallet.create')}}" class="btn btn-primary btn-md">Add Wallet Value </a>
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
