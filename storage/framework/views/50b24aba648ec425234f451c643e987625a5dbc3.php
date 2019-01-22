<?php $__env->startSection('content'); ?>
<div class="container padd-80">
    <div class="row justify-content-center">
        <div class="col-md-8">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Firstname:')); ?></label>

                            <div class="col-md-8">
                                <input id="firstname" type="text" class="form-control<?php echo e($errors->has('firstname') ? ' is-invalid' : ''); ?>" name="firstname" value="<?php echo e(old('firstname')); ?>" required autofocus>

                                <?php if($errors->has('firstname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Middlename:')); ?></label>

                            <div class="col-md-8">
                                <input id="middlename" type="text" class="form-control<?php echo e($errors->has('middlename') ? ' is-invalid' : ''); ?>" name="middlename" value="<?php echo e(old('middlename')); ?>" required autofocus>

                                <?php if($errors->has('middlename')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('middlename')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Lastname:')); ?></label>

                            <div class="col-md-8">
                                <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" name="lastname" value="<?php echo e(old('lastname')); ?>" required autofocus>

                                <?php if($errors->has('lastname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('lastname')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Username:')); ?></label>

                            <div class="col-md-8">
                                <input id="username" type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e(old('username')); ?>" required autofocus>

                                <?php if($errors->has('username')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('username')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Gender:')); ?></label>

                            <div class="col-md-8">
                                <select id="gender" class="form-control<?php echo e($errors->has('gender') ? ' is-invalid' : ''); ?>" name="gender" >
                                  <option value="male">Male</option>
                                  <option value="female">Female</option>
                                </select>

                                <?php if($errors->has('gender')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('gender')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Date of Birth:')); ?></label>

                            <div class="col-md-8">
                                <input id="dob" type="date" class="form-control<?php echo e($errors->has('dob') ? ' is-invalid' : ''); ?>" name="dob" value="<?php echo e(old('dob')); ?>" required autofocus>

                                <?php if($errors->has('dob')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('dob')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Phone number:')); ?></label>

                            <div class="col-md-8">
                                <input id="phone" type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus>

                                <?php if($errors->has('phone')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('phone')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>






                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password')); ?></label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-blue">
                                    <?php echo e(__('Register')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>