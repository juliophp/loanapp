<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Accepted Students
        <small>List of all student whose application have been accepted</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Accepted Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Accepted Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Student ID</th>
                  <th>Student Name</th>
                  <th>University</th>
                  <th>Graduation Year</th>
                  <th>Loan Amount</th>
                  <th>CGPA</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($loan->user->id); ?></td>
                  <td><?php echo e($loan->user->firstname . ' '. $loan->user->lastname); ?></td>
                  <td><?php echo e(str_limit($loan->user->university->universityname, 31)); ?></td>
                  <td> <?php echo e($loan->user->yearofgraduation); ?></td>
                  <td> <?php echo e(number_format($loan->loanamount,2)); ?></td>
                  <td> <?php echo e($loan->user->cgpa); ?></td>
                  <td><a href="<?php echo e(route('donor.students.show', $loan->user->id)); ?>" class="btn btn-primary btn-md">View Student</a></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
              <tfoot>
              <tr>
                <th>Student ID</th>
                <th>Student Name</th>
                <th>University</th>
                <th>Graduation Year</th>
                <th>Loan Amount</th>
                <th>CGPA</th>
                <th>Action</th>
              </tr>
              </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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