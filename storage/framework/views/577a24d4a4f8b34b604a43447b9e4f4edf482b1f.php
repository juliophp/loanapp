<?php $__env->startSection('content'); ?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($profile->donorname); ?>'s Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('donor.index')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Donor profile</li>
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

              <h3 class="profile-username text-center"><?php echo e($profile->donorname); ?></h3>

              <p class="text-muted text-center">Donor</p>

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

              </ul>
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <table class="table">
                    <tr>
                      <td><h5>University Name:</h5></td>
                      <td><h5><?php echo e($profile->donorname); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Username:</h5></td>
                      <td><h5><?php echo e($profile->username); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Phone:</h5></td>
                      <td><h5><?php echo e($profile->phone); ?></h5></td>
                    </tr>
                    <tr>
                      <td><h5>Email:</h5></td>
                      <td><h5><?php echo e($profile->email); ?></h5></td>
                    </tr>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.donapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>