@extends('layouts.uniapp')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $user->firstname }}'s Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('bank.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/photos/'.$user->photo)}}" alt="{{ $user->firstname }}'s Picture'">

              <h3 class="profile-username text-center">{{ $user->firstname }}</h3>

              <p class="text-muted text-center">Student</p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
                <li><a href="#confirm" data-toggle="tab">Confirm Profile</a></li>

              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <table class="table">
                    <tr>
                      <td><h5>Student ID:</h5></td>
                      <td><h5>{{ $user->matricno }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Firstname:</h5></td>
                      <td><h5>{{ $user->firstname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Middlename:</h5></td>
                      <td><h5>{{ $user->middlename }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Lastname:</h5></td>
                      <td><h5>{{ $user->lastname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>University:</h5></td>
                      <td><h5>{{ $user->university->universityname }}</h5></td>
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
                    <tr>
                      <td><h5>State of Origin:</h5></td>
                      <td><h5>{{ $user->stateoforigin }}</h5></td>
                    </tr>
                  </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="confirm">
                  <form class="form-horizontal" action="{{ route('uni.students.update', $user->id)}}" method="post">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <label for="desc" class="col-md-2 col-form-label">{{ __('Note:') }}</label>

                        <div class="col-md-8">
                            <textarea id="desc" type="text" class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}" name="desc" required autofocus></textarea>

                            @if ($errors->has('desc'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('desc') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Confirm Student</button>
                      </div>
                    </div>

                  </form>
                </div>
                <!-- /.tab-pane -->



                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>

<!-- /.content-wrapper -->
@endsection
