@extends('layouts.donapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Students
        <small>List of all loan applications granted</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Students</h3>
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
                  <th>CGPA</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($loans->unique('user_id')->where('donor_id',null)->where('bank_id', null) as $loan)
                <tr>
                  <td>{{ $loan->user->id }}</td>
                  <td>{{ $loan->user->firstname. ' '. $loan->user->lastname }}</td>
                  <td>{{ $loan->user->university->universityname }}</td>
                  <td> {{ $loan->user->yearofgraduation }}</td>
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
