<?php $__env->startSection('content'); ?>
<div class="container padd-80">
  <div class="row">
      <div class="col-md-8">
        <h4>Apply for a loan</h4>

        <form method="POST" action="<?php echo e(route('loans.store')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="loanamount" class="col-md-12 col-form-label"><?php echo e(__('Loan Amount: ')); ?><small> How much are you applying for?</small></label>

                <div class="col-md-12">
                    <input id="loanamount" type="number" class="form-control<?php echo e($errors->has('loanamount') ? ' is-invalid' : ''); ?>" name="loanamount" value="<?php echo e(old('loanamount')); ?>" required autofocus>

                    <?php if($errors->has('loanamount')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('loanamount')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>


            <div class="form-group">
                <label for="loanyear" class="col-md-12 col-form-label"><?php echo e(__('Loan Year: ')); ?><small> Tell us the academic year you need this loan for</small></label>

                <div class="col-md-12">
                    <select id="loanyear" type="text" class="form-control<?php echo e($errors->has('loanyear') ? ' is-invalid' : ''); ?>" name="loanyear"  required autofocus>
                      <?php for($i = date('Y'); $i < (date('Y') + 10); $i++): ?>
                      <option value="<?php echo e($i.'/'.($i+1)); ?>"><?php echo e($i.'/'.($i+1)); ?></option>
                      <?php endfor; ?>
                    </select>

                    <?php if($errors->has('loanyear')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('loanyear')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="form-group">
                <label for="loanpurpose" class="col-md-12 col-form-label"><?php echo e(__('Purpose: ')); ?><small> What expenses will this loan cover?</small></label>

                <div class="col-md-12">
                    <select id="loanpurpose" class="form-control<?php echo e($errors->has('loanpurpose') ? ' is-invalid' : ''); ?>" name="loanpurpose" required autofocus>
                      <option value="Tuition">Tuition</option>
                      <option value="Tuition-Stipends">Tuition + Stipends</option>
                      <option value="">Stipends</option>


                    </select>

                    <?php if($errors->has('loanpurpose')): ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($errors->first('loanpurpose')); ?></strong>
                        </span>
                    <?php endif; ?>
                </div>
            </div>




            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-1">
                    <button type="submit" class="btn btn-blue">
                        <?php echo e(__('Submit Application')); ?>

                    </button>
                </div>
            </div>
        </form>
        <?php if(session('errors')): ?>
        <div class="alert alert-info col-md-6">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <small><li><?php echo e($error); ?></li></small>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php endif; ?>
      </div>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>