@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $bank->bankname }} Profile
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
              <img class="profile-user-img img-responsive img-circle" src="{{ asset('storage/photos/'.$bank->photo)}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $bank->bankname }}</h3>

              <p class="text-muted text-center">Lender</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Granted Loans</b> <a class="pull-right">0</a>
                </li>
                <li class="list-group-item">
                  <b>Denied Loans</b> <a class="pull-right">0</a>
                </li>

              </ul>

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
                <li><a href="#editprofile" data-toggle="tab">Edit Profile</a></li>
                <li><a href="#timeline" data-toggle="tab">Change Password</a></li>
                <li><a href="#profile" data-toggle="tab">Change Avatar</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <table class="table">
                    <tr>
                      <td><h5>Lender Name:</h5></td>
                      <td><h5>{{ $bank->bankname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Username:</h5></td>
                      <td><h5>{{ $bank->username }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Phone number:</h5></td>
                      <td><h5>{{ $bank->phone }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>E-mail Address:</h5></td>
                      <td><h5>{{ $bank->email }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Address:</h5></td>
                      <td><h5>{{ $bank->address }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>City:</h5></td>
                      <td><h5>{{ $bank->addresscity }}</h5></td>

                    </tr>
                    <tr>
                      <td><h5>State:</h5></td>
                      <td><h5>{{ $bank->addressstate }}</h5></td>

                    </tr>
                  </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="editprofile">
                  <form class="form-horizontal" method="post" action="{{ route('bank.banks.update', Auth::user()->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                      <label for="bankname" class="col-sm-3 control-label">Bank Name</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="bankname" placeholder="bankname" value="{{ $bank->bankname }}">
                        @if ($errors->has('bankname'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('bankname') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="username" class="col-sm-3 control-label">Username</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="username" placeholder="username" value="{{ $bank->username }}" readonly>
                        @if ($errors->has('username'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>


                    <div class="form-group">
                      <label for="phone" class="col-sm-3 control-label">Phone</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="phone" placeholder="phone number" value="{{ $bank->phone }}">
                        @if ($errors->has('phone'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('phone') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="email" class="col-sm-3 control-label">Email</label>

                      <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" placeholder="email" value="{{ $bank->email }}">
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="address" class="col-sm-3 control-label">Address</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="address" placeholder="address" value="{{ $bank->address }}">
                        @if ($errors->has('address'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="addresscity" class="col-sm-3 control-label">Address City</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="addresscity" placeholder="address city" value="{{ $bank->addresscity }}">
                        @if ($errors->has('addresscity'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('addresscity') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>

                    <div class="form-group">
                      <label for="addressstate" class="col-sm-3 control-label">Address State</label>

                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="addressstate" placeholder="address state" value="{{ $bank->addressstate}}">
                        @if ($errors->has('addressstate'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('addresscity') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="timeline">
                  <form class="form-horizontal" method="post" action="{{ route('bank.banks.update', Auth::user()->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                      <label for="inputName" class="col-sm-3 control-label">Password</label>

                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password" placeholder="">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>

                      <div class="col-sm-9">
                        <input type="password" class="form-control" name="password-confirm" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Change Password</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane" id="profile">
                  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="{{ route('bank.banks.update', Auth::user()->id)}}">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                      <label for="avatar" class="col-sm-2 control-label">Photo:</label>

                      <div class="col-sm-10">
                        <input type="file" name="avatar" class="form-control" id="avatar" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Upload Photo</button>
                      </div>
                    </div>
                  </form>
                </div>

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
@endsection
