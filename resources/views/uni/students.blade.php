@extends('layouts.uniapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Students
        <small>List of all students who claim to be from your university applying for a loan</small>
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
              <h3 class="box-title">Students with pending verification</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Department</th>
                  <th>Graduation Year</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($loans->unique('user_id') as $loan)
                @if($loan->user->degreeverified == 0 && $loan->user->university_id == Auth::user()->id)
                <tr>
                  <td>{{ $loan->user->id }}</td>
                  <td>{{ $loan->user->firstname . ' '. $loan->user->lastname }}</td>
                  <td>{{ $loan->user->department }}</td>
                  <td> {{ $loan->user->yearofgraduation }}</td>
                  <td>
                    <a href="{{route('uni.students.show', $loan->user->id)}}" class="btn btn-sm btn-success">View Student</a>
                  </td>
                </tr>
                @endif
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>Department</th>
                  <th>Graduation Year</th>
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
