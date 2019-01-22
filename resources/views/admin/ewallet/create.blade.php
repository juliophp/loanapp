@extends('layouts.admapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add wallet value</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Load Wallet Value</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('admin.wallet.store') }}" method="post" enctype="multipart/form-data" role="form">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label for="value">Amount Value: </label>
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                    <input type="text" class="form-control" name="amount">
                  </div>
                  <p class="help-block">Input amount value for bank</p>
                </div>

                <div class="form-group">
                  <label for="file">Bank:</label>
                  <select  name="bank" class="form-control">
                    @foreach(App\Bank::all() as $bank)
                    <option value="{{ $bank->id }}">{{ $bank->bankname }}</option>
                    @endforeach
                  </select>
                  <p class="help-block">Select bank to be credited with e-value</p>
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
