@extends('layouts.admapp')

@section('content')
<div class="content-wrapper">
<!-- START CUSTOM TABS -->
<!-- Main content -->
    <section class="content">
      <h2 class="page-header">University Details</h2>

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">University Information</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td><h5>University name:</h5></td>
                        <td><h5>{{ $uni->universityname }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Username:</h5></td>
                        <td><h5>{{ $uni->username }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Email</h5></td>
                        <td><h5>{{ $uni->email }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Phone:</h5></td>
                        <td><h5>{{ $uni->phone }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>State:</h5></td>
                        <td><h5>{{ $uni->addressstate }}</h5></td>
                      </tr>

                    </table>
                  </div>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>


          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
    </section>

</div>
<!-- /.content-wrapper -->
@endsection
