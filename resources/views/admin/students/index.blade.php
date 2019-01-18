@extends('layouts.admapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Students
        <small>List of all students registered</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>University</th>
                  <th>Nationality</th>
                  <th>Programe</th>
                  <th width="11%">DOB</th>
                  <th width="15%">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($stds as $std)
                <tr>
                  <td>{{ $std->firstname . ' '. $std->lastname }}</td>
                  <td>@if($std->university){{ str_limit($std->university->universityname, 31) }}@endif</td>
                  <td>{{ $std->nationality }}</td>
                  <td>{{ $std->program }}</td>
                  <td> {{ $std->dob }}</td>
                  <td>
                    <a href="{{route('admin.students.show', $std->id)}}" class="btn btn-sm btn-success">View </a>
                    <a href="{{route('admin.students.show', $std->id)}}" class="btn btn-sm btn-danger">Delete </a>
                  </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>University</th>
                  <th>Nationality</th>
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
