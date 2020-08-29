<?php $__env->startSection('content'); ?>
<div class="container padd-40">
    <div class="row">
      <div class="col-md-9">
        <table class="table table-md">
            <tbody>
              <tr>
                <td>Loan id: </td>
                <td><?php echo e($loan->id); ?></td>
              </tr>
              <tr>
                <td>Loan Amount:</td>
                <td><?php echo e($loan->loanamount); ?></td>
              </tr>
              <tr>
                <td>Loan Year:</td>
                <td><?php echo e($loan->loanyear); ?></td>
              </tr>
              <tr>
                <td>Purpose:</td>
                <td><?php echo e($loan->loanpurpose); ?></td>
              </tr>
              <tr>
                <td>Account Number:</td>
                <td><?php echo e($loan->accountnumber); ?></td>
              </tr>
              <tr>
                <td>Bank:</td>
                <td><?php echo e($loan->bank); ?></td>
              </tr>
              <tr>
                <td>Paid Status:</td>
                <td><?php if($loan->ispaid == 0): ?> <?php echo e('Not Paid'); ?> <?php else: ?> <?php echo e('Paid'); ?> <?php endif; ?></td>
              </tr>
              <tr>
                <td>Loan Status:</td>
                <td><?php echo e($loan->loanstatus); ?></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>