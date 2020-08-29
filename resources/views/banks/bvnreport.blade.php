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
              <h3 class="box-title">BVN Report</h3>
            </div>
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="data:image/jpg;base64,{{ $bvn->imagebase64 }}" height="220px" alt="User profile picture">

              <img src="data:image/jpg;base64,{{ $bvn->basicdetailsbase64 }}" height="250px">

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
