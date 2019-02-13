@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Submit naira.com username</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{ route('bank.username.submit') }}" method="post" role="form">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="file">Username:</label>
                  <input class="form-control" type="text" name="username" id="username" @isset($res) value="{{ $res->username }}" {{ 'disabled'}} @endisset>

                </div>
              </div>
              @isset($res)
                <div class="box-body">
                  <div class="form-group">
                    <label for="file">Password:</label>
                    <input class="form-control" type="password" name="password" id="password">

                  </div>
                </div>

                <div class="box-body">
                  <div class="form-group">
                    <input class="form-control" type="hidden" name="token" value="{{ $res->uniquetoken }}">
                  </div>
                </div>
              @endisset
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
