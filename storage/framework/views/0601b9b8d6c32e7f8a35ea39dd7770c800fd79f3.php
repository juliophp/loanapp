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
</div>
<!-- /.box-body -->
