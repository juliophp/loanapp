<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload Beneficiaries
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Upload Beneficiaries</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="<?php echo e(route('donor.students.submit')); ?>" method="post" enctype="multipart/form-data" role="form">
              <?php echo csrf_field(); ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="file">File input</label>
                  <input type="file" name="file" id="file">

                  <p class="help-block">Upload all beneficiaries</p>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      <div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-success">
          <div class="box-header with-border">
            <h3 class="box-title">Upload Grant Details</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action="<?php echo e(route('donor.students.submit')); ?>" method="post" enctype="multipart/form-data" role="form">
            <?php echo csrf_field(); ?>
            <div class="box-body">
              <div class="form-group">
                <label for="file">File input</label>
                <input type="file" name="loanfile" id="file">

                <p class="help-block">Upload Loan Details</p>
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-success">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.box -->
    </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.donapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>