@extends('layouts.admapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Banks
        <small>List of all Banks or Lender</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Banks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Banks</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Bank name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Logo</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($banks as $bank)
                <tr>
                  <td>{{ $bank->bankname }}</td>
                  <td>{{ $bank->username }}</td>
                  <td>{{ $bank->email }}</td>
                  <td></td>
                  <td> {{ $bank->phone }}</td>
                  <td>
                    <a href="{{route('admin.banks.show', $bank->id)}}" class="btn btn-sm btn-success">View </a>
                    <a href="{{route('admin.banks.show', $bank->id)}}" class="btn btn-sm btn-danger">Delete </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>University</th>
                  <th>State</th>
                  <th>Programe</th>
                  <th>DOB</th>
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
