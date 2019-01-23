<?php $__env->startSection('content'); ?>
<div class="container padd-80">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Loan id</th>
                <th scope="col">Loan Purpose</th>
                <th scope="col">Amount Requested</th>
                <th scope="col">Loan Status</th>
                <th scope="col">Application Fee</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($loan->id); ?></td>
                <td><?php echo e($loan->loanpurpose); ?></td>
                <td><?php echo e(number_format($loan->loanamount, 2)); ?></td>
                <td><?php echo e($loan->loanstatus); ?></td>
                <td>1,500</td>
                <td>
                  <form action="<?php echo e(route('make.payment', Auth::user()->id)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="btn btn-blue btn-sm">Pay</button>
                  </form>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
          </table>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>