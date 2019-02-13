<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo e($balance->username); ?>'s Wallet
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
                  <th>Amount</th>
                  <th>Transaction Type</th>
                  <th>Narration</th>
                  <th>Date Time</th>
                  <th>From</th>
                  <th>To</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $balance->statements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($balance->amount); ?></td>
                  <td><?php echo e($balance->creditordebit); ?></td>
                  <td><?php echo e($balance->narration); ?></td>
                  <td><?php echo e($balance->datetime); ?></td>
                  <td><?php echo e($balance->from); ?></td>
                  <td> <?php echo e($balance->to); ?></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Amount</th>
                    <th>Transaction Type</th>
                    <th>Narration</th>
                    <th>Date Time</th>
                    <th>From</th>
                    <th>To</th>
                  </tr>
                </tfoot>
              </table>
              <a href="<?php echo e(route('bank.balance.export')); ?>" class="btn btn-primary">Export to CSV</a>

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

<?php echo $__env->make('layouts.bankapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>