@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Wallet</li>
        <li class="active">Transfer Funds</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Disburse Funds</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('bank.wallet.transfer') }}" method="post" role="form">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="file">Destination Bank:</label>
                  <select class="form-control" type="text" name="fininst" id="fininst">
                    @foreach($banks as $bank)
                    <option value="{{ $bank->code }}">{{ $bank->name }}</option>
                    @endforeach
                  </select>

                </div>
              </div>
                <div class="box-body">
                  <div class="form-group">
                    <label for="file">Account Number:</label>
                    <input class="form-control" type="text" name="accountnumber" id="accountnumber">

                  </div>
                </div>

                <div class="box-body">
                  <div class="form-group">
                    <label for="file">Amount:</label>
                    <input class="form-control" type="text" name="amount">
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
