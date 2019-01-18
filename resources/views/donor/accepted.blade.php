@extends('layouts.donapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Accepted Students
        <small>List of all student whose application have been accepted</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Accepted Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Accepted Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>University</th>
                  <th>Graduation Year</th>
                  <th>Loan Amount</th>
                  <th>CGPA</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($loans as $loan)
                <tr>
                  <td>{{ $loan->user->id }}</td>
                  <td>{{ $loan->user->firstname . ' '. $loan->user->lastname }}</td>
                  <td>{{ str_limit($loan->user->university->universityname, 31) }}</td>
                  <td> {{ $loan->user->yearofgraduation }}</td>
                  <td> {{ number_format($loan->loanamount,2) }}</td>
                  <td> {{ $loan->user->cgpa }}</td>
                  <td><a href="{{ route('donor.students.show', $loan->user->id)}}" class="btn btn-primary btn-md">View Student</a></td>
                </tr>
                @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>University</th>
                <th>Graduation Year</th>
                <th>Loan Amount</th>
                <th>CGPA</th>
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
