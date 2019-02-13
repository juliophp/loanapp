@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">NIN Report</h3>
            </div>
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="data:image/jpg;base64,{{ $nin->photo }}" height="220px" alt="User profile picture">

              <table class="table">
                <tr>
                  <td><h5>Title:</h5></td>
                  <td><h5>{{ $nin->title }}</h5></td>
                </tr>
                <tr>
                  <td><h5>Firstname:</h5></td>
                  <td><h5>{{ $nin->firstname }}</h5></td>
                </tr>
                <tr>
                  <td><h5>Middlename:</h5></td>
                  <td><h5>{{ $nin->middlename }}</h5></td>
                </tr>
                <tr>
                  <td><h5>Lastname:</h5></td>
                  <td><h5>{{ $nin->lastname }}</h5></td>
                </tr>
                <tr>
                  <td><h5>Birthdate:</h5></td>
                  <td><h5>{{ $nin->birthdate }}</h5></td>
                </tr>
                <tr>
                  <td><h5>Birth Lga:</h5></td>
                  <td><h5>{{ $nin->birthlga }}</h5></td>
                </tr>
              </table>
              <a href="#" class="btn btn-primary btn-block"><b>Print</b></a>
            </div>
            <!-- /.box-header -->

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
