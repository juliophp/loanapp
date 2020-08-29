<?php $__env->startSection('content'); ?>
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
              <img class="profile-user-img img-responsive img-circle" src="data:image/jpg;base64,<?php echo e($bvn->imagebase64); ?>" height="220px" alt="User profile picture">

              <img src="data:image/jpg;base64,<?php echo e($bvn->basicdetailsbase64); ?>" height="250px">

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bankapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>