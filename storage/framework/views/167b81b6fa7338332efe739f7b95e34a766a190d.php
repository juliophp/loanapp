<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($bank->bankname); ?> Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('bank.index')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
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
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo e($bank->bankname); ?></h3>

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
                <li><a href="#timeline" data-toggle="tab">Change Password</a></li>
                <li><a href="#profile" data-toggle="tab">Change Avatar</a></li>
              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <table class="table">
                    <tr>
                      <td><h5>Lender Name:</h5></td>
                      <td><h5><?php echo e($bank->bankname); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Username:</h5></td>
                      <td><h5><?php echo e($bank->username); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Phone number:</h5></td>
                      <td><h5><?php echo e($bank->phone); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>E-mail Address:</h5></td>
                      <td><h5><?php echo e($bank->email); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Address:</h5></td>
                      <td><h5><?php echo e($bank->address); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>City:</h5></td>
                      <td><h5><?php echo e($bank->addresscity); ?></h5></td>

                    </tr>
                    <tr>
                      <td><h5>State:</h5></td>
                      <td><h5><?php echo e($bank->addressstate); ?></h5></td>

                    </tr>
                  </table>
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <form class="form-horizontal" method="post" action="<?php echo e(route('bank.banks.update', Auth::user()->id)); ?>">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-3 control-label">Password</label>

                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="password" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password-confirm" class="col-sm-3 control-label">Confirm Password</label>

                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="password-confirm" placeholder="">
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
                  <form class="form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo e(route('bank.banks.update', Auth::user()->id)); ?>">
                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Photo:</label>

                      <div class="col-sm-10">
                        <input type="file" name="photo" class="form-control" id="password" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Upload Photo</button>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bankapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>