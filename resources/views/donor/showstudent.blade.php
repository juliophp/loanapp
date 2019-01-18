@extends('layouts.donapp')


@section('content')
<div class="content-wrapper">
<!-- START CUSTOM TABS -->
<!-- Main content -->
    <section class="content">
      <h2 class="page-header">{{$user->firstname}}'s Details</h2>

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Basic Information</a></li>
              <li><a href="#tab_2" data-toggle="tab">Applicant's Academic Information</a></li>
              <li><a href="#tab_3" data-toggle="tab">Applicant's Residential Information</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td><h5>Loan Applicant:</h5></td>
                        <td><h5>{{ $user->firstname . ' '. $user->lastname }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Apllicant's DOB:</h5></td>
                        <td><h5>{{ $user->dob }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's Gender:</h5></td>
                        <td><h5>{{ $user->gender }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's State of Origin:</h5></td>
                        <td><h5>{{ $user->stateoforigin }}</h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's Nationality:</h5></td>
                        <td><h5>{{ $user->nationality }}</h5></td>
                      </tr>

                      <tr>
                        <td><h5>Application Date:</h5></td>
                        <td><h5>{{ $user->created_at }}</h5></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table">
                  <tr>
                    <td><h5>University:</h5></td>
                    <td><h5>@if($user->university){{ $user->university->universityname }}@endif</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Program:</h5></td>
                    <td><h5>{{ $user->program }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Expected Year of Graduation:</h5></td>
                    <td><h5>{{ $user->yearofgraduation }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Department:</h5></td>
                    <td><h5>{{ $user->department }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Current GPA:</h5></td>
                    <td><h5>{{ $user->currentgpa }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>CGPA:</h5></td>
                    <td><h5>{{ $user->cgpa }}</h5></td>
                  </tr>
                </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table">
                  <tr>
                    <td><h5>Address Line One:</h5></td>
                    <td><h5>{{ $user->addresslineone }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Address Line Two:</h5></td>
                    <td><h5>{{ $user->addresslinetwo }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>City:</h5></td>
                    <td><h5>{{ $user->addresscity}}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>State:</h5></td>
                    <td><h5>{{ $user->addressstate }}</h5></td>
                  </tr>
                  <tr>
                    <td><h5>Country:</h5></td>
                    <td><h5>{{ $user->addresscountry }}</h5></td>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <form action="{{ route('bank.loans.update', Auth::user()->id)}}" method="post">
            @csrf
            @method('patch')
            <button name="unclaim" type="submit" value="grant" class="btn btn-md btn-success">Accept Application</button>
            <button class="btn btn-md btn-success">Request More Info</button>
          </form>

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
