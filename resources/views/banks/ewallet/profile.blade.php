@extends('layouts.bankapp')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ $res->username }}'s Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ route('donor.index')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>

              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <table class="table">
                    <tr>
                      <td><h5>Firstname:</h5></td>
                      <td><h5>{{ $res->firstname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Lastname:</h5></td>
                      <td><h5>{{ $res->surname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Username:</h5></td>
                      <td><h5>{{ $res->username }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Token:</h5></td>
                      <td><h5>{{ $res->uniquetoken }}</h5></td>
                    </tr>
                    @foreach($res->accounts as $account)
                    <tr>
                      <td><h5>Account Name:</h5></td>
                      <td><h5>{{ $account->accountname }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Account Number:</h5></td>
                      <td><h5>{{ $account->accountnumber }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>BVN:</h5></td>
                      <td><h5>{{ $account->bvn }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>Financial Institution Code:</h5></td>
                      <td><h5>{{ $account->financialinstitutioncode }}</h5></td>
                    </tr>
                    <tr>
                      <td><h5>KYC Level:</h5></td>
                      <td><h5>{{ $account->kyclevel }}</h5></td>
                    </tr>
                    @endforeach
                  </table>
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
