<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Students
        <small>List of all students registered</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Students</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">All Students</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>University</th>
                  <th>State</th>
                  <th>Programe</th>
                  <th>DOB</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $stds; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $std): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($std->firstname . ' '. $std->lastname); ?></td>
                  <td><?php echo e($std->university->universityname); ?></td>
                  <td><?php echo e($std->stateoforigin); ?></td>
                  <td><?php echo e($std->program); ?></td>
                  <td> <?php echo e($std->dob); ?></td>
                  <td>
                    <a href="<?php echo e(route('admin.students.show', $std->id)); ?>" class="btn btn-sm btn-success">View </a>
                    <a href="<?php echo e(route('admin.students.show', $std->id)); ?>" class="btn btn-sm btn-danger">Delete </a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Name</th>
                  <th>University</th>
                  <th>State</th>
                  <th>Programe</th>
                  <th>DOB</th>
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

<?php echo $__env->make('layouts.admapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>