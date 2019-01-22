<?php $__env->startSection('content'); ?>
<div class="container padd-80">
    <div class="row">
        <div class="col-md-12">
          <div class="tabs-content">

          <ul class="nav nav-tabs" id="myTab" role="tablist">
             <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Basic Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Academic Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Residential Information</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" id="guarantor-tab" data-toggle="tab" href="#guarantor" role="tab" aria-controls="guarantor" aria-selected="false">Guarantor Information</a>
             </li>
          </ul>
          <div class="tab-content" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <form method="POST" action="<?php echo e(route('students.update', Auth::user()->id)); ?>">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('patch'); ?>

                   <div class="form-group">
                       <label for="firstname" class="col-md-4 col-form-label"><?php echo e(__('Firstname:')); ?></label>

                       <div class="col-md-8">
                           <input id="firstname" type="text" class="form-control<?php echo e($errors->has('firstname') ? ' is-invalid' : ''); ?>" name="firstname" value="<?php echo e($std->firstname); ?>" required autofocus>

                           <?php if($errors->has('firstname')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('firstname')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="middlename" class="col-md-4 col-form-label"><?php echo e(__('Middlename:')); ?></label>

                       <div class="col-md-8">
                           <input id="middlename" type="text" class="form-control<?php echo e($errors->has('middlename') ? ' is-invalid' : ''); ?>" name="middlename" value="<?php echo e($std->middlename); ?>" required autofocus>

                           <?php if($errors->has('middlename')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('middlename')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="lastname" class="col-md-4 col-form-label "><?php echo e(__('Lastname:')); ?></label>

                       <div class="col-md-8">
                           <input id="lastname" type="text" class="form-control<?php echo e($errors->has('lastname') ? ' is-invalid' : ''); ?>" name="lastname" value="<?php echo e($std->lastname); ?>" required autofocus>

                           <?php if($errors->has('lastname')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('lastname')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="username" class="col-md-4 col-form-label "><?php echo e(__('Username:')); ?></label>

                       <div class="col-md-8">
                           <input id="username" type="text" class="form-control<?php echo e($errors->has('username') ? ' is-invalid' : ''); ?>" name="username" value="<?php echo e($std->username); ?>" disabled autofocus>

                           <?php if($errors->has('username')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('username')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="gender" class="col-md-4 col-form-label "><?php echo e(__('Gender:')); ?></label>

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

                   <div class="form-group">
                       <label for="dob" class="col-md-4 col-form-label "><?php echo e(__('Date of Birth:')); ?></label>

                       <div class="col-md-8">
                           <input id="dob" type="date" class="form-control<?php echo e($errors->has('dob') ? ' is-invalid' : ''); ?>" name="dob" value="<?php echo e($std->dob); ?>" required autofocus>

                           <?php if($errors->has('dob')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('dob')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="phone" class="col-md-4 col-form-label "><?php echo e(__('Phone number:')); ?></label>

                       <div class="col-md-8">
                           <input id="phone" type="text" class="form-control<?php echo e($errors->has('phone') ? ' is-invalid' : ''); ?>" name="phone" value="<?php echo e($std->phone); ?>" required autofocus>

                           <?php if($errors->has('phone')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('phone')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="email" class="col-md-4 col-form-label "><?php echo e(__('E-Mail Address')); ?></label>

                       <div class="col-md-8">
                           <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e($std->email); ?>" required>

                           <?php if($errors->has('email')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('email')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="nationality" class="col-md-4 col-form-label"><?php echo e(__('Nationality:')); ?></label>

                       <div class="col-md-8">
                           <select id="nationality" class="form-control<?php echo e($errors->has('nationality') ? ' is-invalid' : ''); ?>" name="nationality"  required>
                             <option value="">---</option>
                             <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($country->name); ?>"><?php echo e($country->name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>

                           <?php if($errors->has('nationality')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('nationality')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                     </div>

                     <div class="form-group">
                         <label for="stateoforigin" class="col-md-4 col-form-label"><?php echo e(__('State of Origin:')); ?></label>

                         <div class="col-md-8">
                             <select id="stateoforigin" class="form-control<?php echo e($errors->has('stateoforigin') ? ' is-invalid' : ''); ?>" name="stateoforigin">
                               <option value="">N/A</option>
                               <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $state): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option id="<?php echo e($state->state->id); ?>"value="<?php echo e($state->state->name); ?>"><?php echo e($state->state->name); ?></option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             </select>

                             <?php if($errors->has('stateoforigin')): ?>
                                 <span class="invalid-feedback" role="alert">
                                     <strong><?php echo e($errors->first('stateoforigin')); ?></strong>
                                 </span>
                             <?php endif; ?>
                         </div>
                       </div>

                   <div class="form-group">
                           <label for="bvn" class="col-md-4 col-form-label"><?php echo e(__('BVN:')); ?></label>

                           <div class="col-md-8">
                               <input id="bvn" type="text" class="form-control<?php echo e($errors->has('bvn') ? ' is-invalid' : ''); ?>" name="bvn" value="<?php echo e($std->bvn); ?>" autofocus>

                               <?php if($errors->has('bvn')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('bvn')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>

                   <div class="form-group mb-0">
                       <div class="col-md-8">
                           <button type="submit" class="btn btn-blue">
                               <?php echo e(__('Update Information')); ?>

                           </button>
                       </div>
                   </div>

               </form>
             </div>
             <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
               <form method="POST" action="<?php echo e(route('students.update', Auth::user()->id)); ?>">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('patch'); ?>
                   <div class="form-group">
                       <label for="university" class="col-md-4 col-form-label"><?php echo e(__('University:')); ?></label>
                       <div class="col-md-8">
                           <select id="university" class="form-control <?php echo e($errors->has('university') ? 'is-invalid' : ''); ?>" name="university">
                             <?php $__currentLoopData = $unis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($uni->id); ?>"><?php echo e($uni->universityname); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>

                           <?php if($errors->has('university')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('university')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>
                    <div class="form-group">
                        <label for="program" class="col-md-4 col-form-label "><?php echo e(__('Program:')); ?></label>

                        <div class="col-md-8">
                          <select id="program" class="form-control<?php echo e($errors->has('program') ? ' is-invalid' : ''); ?>" name="program" >
                            <option value="bachelors">Bachelors</option>
                            <option value="masters">Masters</option>
                            <option value="posstgraduate">Post Graduate</option>

                          </select>
                            <?php if($errors->has('program')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('program')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="yearofgraduation" class="col-md-4 col-form-label "><?php echo e(__('Expected Year of Graduation:')); ?></label>

                        <div class="col-md-8">
                          <select id="yearofgraduation" class="form-control<?php echo e($errors->has('yearofgraduation') ? ' is-invalid' : ''); ?>" name="yearofgraduation" >
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>


                          </select>
                            <?php if($errors->has('program')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('program')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="department" class="col-md-4 col-form-label "><?php echo e(__('Department:')); ?></label>

                        <div class="col-md-8">
                            <input id="department" type="department" class="form-control<?php echo e($errors->has('department') ? ' is-invalid' : ''); ?>" name="department" value="<?php echo e($std->department); ?>" required>

                            <?php if($errors->has('department')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('department')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cgpa" class="col-md-4 col-form-label "><?php echo e(__('Cummulative GPA:')); ?></label>

                        <div class="col-md-8">
                            <input id="cgpa" type="decimal" class="form-control<?php echo e($errors->has('cgpa') ? ' is-invalid' : ''); ?>" name="cgpa" value="<?php echo e($std->cgpa); ?>" required>

                            <?php if($errors->has('department')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('department')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="currentgpa" class="col-md-4 col-form-label "><?php echo e(__('Current GPA:')); ?></label>

                        <div class="col-md-8">
                            <input id="currentgpa" type="decimal" class="form-control<?php echo e($errors->has('currentgpa') ? ' is-invalid' : ''); ?>" name="currentgpa" value="<?php echo e($std->currentgpa); ?>" required>

                            <?php if($errors->has('currentgpa')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('currentgpa')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-blue">
                                <?php echo e(__('Update Information')); ?>

                            </button>
                        </div>
                    </div>
              </form>
             </div>
             <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
               <form method="POST" action="<?php echo e(route('students.update', Auth::user()->id)); ?>">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('patch'); ?>

                   <div class="form-group">
                       <label for="addresslineone" class="col-md-4 col-form-label"><?php echo e(__('Address Line One:')); ?></label>

                       <div class="col-md-8">
                           <input id="addresslineone" type="text" class="form-control<?php echo e($errors->has('addresslineone') ? ' is-invalid' : ''); ?>" name="addresslineone" value="<?php echo e($std->addresslineone); ?>" required autofocus>

                           <?php if($errors->has('addresslineone')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addresslineone')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresslinetwo" class="col-md-4 col-form-label"><?php echo e(__('Address Line Two:')); ?></label>

                       <div class="col-md-8">
                           <input id="addresslinetwo" type="text" class="form-control<?php echo e($errors->has('addresslinetwo') ? ' is-invalid' : ''); ?>" name="addresslinetwo" value="<?php echo e($std->addresslinetwo); ?>" autofocus>

                           <?php if($errors->has('addresslinetwo')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addresslinetwo')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresscity" class="col-md-4 col-form-label"><?php echo e(__('City:')); ?></label>

                       <div class="col-md-8">
                           <input id="addresscity" type="text" class="form-control<?php echo e($errors->has('addresscity') ? ' is-invalid' : ''); ?>" name="addresscity" value="<?php echo e($std->addresscity); ?>" required autofocus>

                           <?php if($errors->has('addresscity')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addresscity')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addressstate" class="col-md-4 col-form-label "><?php echo e(__('State:')); ?></label>

                       <div class="col-md-8">
                           <input id="addressstate" type="text" class="form-control<?php echo e($errors->has('addressstate') ? ' is-invalid' : ''); ?>" name="addressstate" value="<?php echo e($std->addressstate); ?>" required autofocus>

                           <?php if($errors->has('addressstate')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addressstate')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addressyears" class="col-md-4 col-form-label "><?php echo e(__('Number of Years at Resident:')); ?></label>

                       <div class="col-md-8">
                           <input id="addressyears" type="number" class="form-control<?php echo e($errors->has('addressyears') ? ' is-invalid' : ''); ?>" name="addressyears" value="<?php echo e($std->addressyears); ?>" required autofocus>

                           <?php if($errors->has('addressyears')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addressyears')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                   </div>

                   <div class="form-group">
                       <label for="addresscountry" class="col-md-4 col-form-label"><?php echo e(__('Country:')); ?></label>

                       <div class="col-md-8">
                           <select id="addresscountry" class="form-control<?php echo e($errors->has('addresscountry') ? ' is-invalid' : ''); ?>" name="addresscountry"  required>
                             <option value="">---</option>
                             <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                             <option value="<?php echo e($country->name); ?>"><?php echo e($country->name); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>

                           <?php if($errors->has('addresscountry')): ?>
                               <span class="invalid-feedback" role="alert">
                                   <strong><?php echo e($errors->first('addresscountry')); ?></strong>
                               </span>
                           <?php endif; ?>
                       </div>
                     </div>

                  <div class="form-group mb-0">
                         <div class="col-md-8">
                             <button type="submit" class="btn btn-blue">
                                 <?php echo e(__('Update Information')); ?>

                             </button>
                         </div>
                     </div>

                </form>
              </div>
            <div class="tab-pane fade" id="guarantor" role="tabpanel" aria-labelledby="guarantor-tab">
              This tab is for guarantor Information just incase we might need it
            </div>

          </div>

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
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>