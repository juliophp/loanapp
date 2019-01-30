<div class="box-body">
  <table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th>Loan Applicant</th>
      <th>Loan Amount</th>
      <th>Loan purpose</th>
      <th>University</th>
      <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $loans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $loan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($loan->user->firstname . ' '. $loan->user->lastname); ?></td>
      <td><?php echo e(number_format($loan->loanamount, 2)); ?></td>
      <td><?php echo e($loan->loanpurpose); ?></td>
      <td> <?php echo e($loan->user->university->universityname); ?></td>
      <td>
        <a href="<?php echo e(route('bank.loans.show', $loan->id)); ?>" class="btn btn-sm btn-success">Claim Record</a>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
    <tfoot>
    <tr>
      <th>Loan Applicant</th>
      <th>Loan Amount</th>
      <th>Loan purpose</th>
      <th>University</th>
      <th>Action</th>
    </tr>
    </tfoot>
  </table>
</div>
