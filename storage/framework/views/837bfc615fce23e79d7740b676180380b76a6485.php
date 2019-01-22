<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Wallet
        <small>List of all transactions</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Tranasctions</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped primary">
                <thead>
                <tr>
                  <th>Bank</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Approved by</th>
                  <th>Balance</th>
                  <th>Time Created</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $balances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($balance->bank->bankname); ?></td>
                  <td><?php echo e($balance->debit); ?></td>
                  <td><?php echo e($balance->credit); ?></td>
                  <td><?php if($balance->admin): ?><?php echo e($balance->admin->firstname); ?><?php endif; ?></td>
                  <td><?php echo e($balance->balance); ?></td>
                  <td> <?php echo e($balance->created_at); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Bank</th>
                  <th>Debit</th>
                  <th>Credit</th>
                  <th>Approved by</th>
                  <th>Balance</th>
                  <th>Time Created</th>
                </tr>
                </tfoot>
              </table>
              <a href="<?php echo e(route('admin.wallet.create')); ?>" class="btn btn-primary btn-md">Add Wallet Value </a>
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