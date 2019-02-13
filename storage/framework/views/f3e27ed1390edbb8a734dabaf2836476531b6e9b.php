<?php $__env->startSection('content'); ?>
<div class="container padd-20">
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
             <li class="nav-item">
                <a class="nav-link" id="upload-tab" data-toggle="tab" href="#upload" role="tab" aria-controls="upload" aria-selected="false">Upload Photo</a>
             </li>
          </ul>
          <div class="tab-content text-left" id="myTabContent">
             <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
               <form method="POST" action="<?php echo e(route('students.update', Auth::user()->id)); ?>">
                   <?php echo csrf_field(); ?>
                   <?php echo method_field('patch'); ?>

                   <div class="form-group ">
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
                             <option value="male" <?php if($std->gender == 'male'): ?><?php echo e('selected'); ?><?php endif; ?>>Male</option>
                             <option value="female" <?php if($std->gender == 'female'): ?><?php echo e('selected'); ?><?php endif; ?>>Female</option>
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
                             <option value="<?php echo e($country->name); ?>" <?php if($std->nationality == $country->name): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($country->name); ?></option>
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
                               <option id="<?php echo e($state->state->id); ?>" value="<?php echo e($state->state->name); ?>" <?php if($std->stateoforigin == $state->state->name): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($state->state->name); ?></option>
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
                    <div class="form-group">
                            <label for="bvn" class="col-md-4 col-form-label"><?php echo e(__('National Identification Number:')); ?></label>

                            <div class="col-md-8">
                                <input id="bvn" type="text" class="form-control<?php echo e($errors->has('bvn') ? ' is-invalid' : ''); ?>" name="nin" value="<?php echo e($std->nin); ?>" autofocus>

                                <?php if($errors->has('nin')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('nin')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>



                       <div class="form-group">
                           <label for="accountnumber" class="col-md-4 col-form-label"><?php echo e(__('Account Number:')); ?></label>

                           <div class="col-md-8">
                               <input id="accountnumber" type="number" class="form-control<?php echo e($errors->has('accountnumber') ? ' is-invalid' : ''); ?>" name="accountnumber" value="<?php echo e($std->accountnumber); ?>" required autofocus>

                               <?php if($errors->has('accountnumber')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('accountnumber')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>

                       <div class="form-group">
                           <label for="bank" class="col-md-4 col-form-label"><?php echo e(__('Bank:')); ?></label>

                           <div class="col-md-8">
                               <select id="bank" class="form-control<?php echo e($errors->has('bank') ? ' is-invalid' : ''); ?>" name="bank" >
                                 <option value="">---</option>
                                 <option value="Access Bank">Access Bank</option>
                                  <option value="Accessmobile">Accessmobile</option>
                                  <option value="Aso Savings And Loans">Aso Savings And Loans</option>
                                  <option value="Cellulant">Cellulant</option>
                                  <option value="Central Bank Of Nigeria">Central Bank Of Nigeria</option>
                                  <option value="Citibank">Citibank</option>
                                  <option value="Coronation Merchant Bank">Coronation Merchant Bank</option>
                                  <option value="Corporetti">Corporetti</option>
                                  <option value="Covenant Microfinance Bank">Covenant Microfinance Bank</option>
                                  <option value="Diamond Bank">Diamond Bank</option>
                                  <option value="Eartholeum (qik Qik)">Eartholeum (qik Qik)</option>
                                  <option value="Ecobank Nigeria">Ecobank Nigeria</option>
                                  <option value="Ecomobile">Ecomobile</option>
                                  <option value="Ekondo Microfinance Bank">Ekondo Microfinance Bank</option>
                                  <option value="Enterprise Bank">Enterprise Bank</option>
                                  <option value="Equitorial Trust Bank">Equitorial Trust Bank</option>
                                  <option value="E-tranzact">E-tranzact</option>
                                  <option value="Fbn M-money">Fbn M-money</option>
                                  <option value="Fbn Mortgages">Fbn Mortgages</option>
                                  <option value="Fets (my Wallet)">Fets (my Wallet)</option>
                                  <option value="Fidelity Bank">Fidelity Bank</option>
                                  <option value="Fidelity Mobile">Fidelity Mobile</option>
                                  <option value="Finatrust Microfinance Bank">Finatrust Microfinance Bank</option>
                                  <option value="First Bank Of Nigeria">First Bank Of Nigeria</option>
                                  <option value="First City Monument Bank">First City Monument Bank</option>
                                  <option value="First Inland Bank">First Inland Bank</option>
                                  <option value="Fortis Microfinance Bank">Fortis Microfinance Bank</option>
                                  <option value="Fortis Mobile">Fortis Mobile</option>
                                  <option value="Fsdh">Fsdh</option>
                                  <option value="Gt Mobile Money">Gt Mobile Money</option>
                                  <option value="Guaranty Trust Bank">Guaranty Trust Bank</option>
                                  <option value="Hedonmark">Hedonmark</option>
                                  <option value="Heritage Bank">Heritage Bank</option>
                                  <option value="Imperial Homes Mortgage Bank">Imperial Homes Mortgage Bank</option>
                                  <option value="Intercontinental Bank">Intercontinental Bank</option>
                                  <option value="Jaiz Bank">Jaiz Bank</option>
                                  <option value="Jubilee Life">Jubilee Life</option>
                                  <option value="Kegow">Kegow</option>
                                  <option value="Keystone Bank">Keystone Bank</option>
                                  <option value="Mainstreet Bank">Mainstreet Bank</option>
                                  <option value="Mimoney (powered By Intellifin)">Mimoney (powered By Intellifin)</option>
                                  <option value="M-kudi">M-kudi</option>
                                  <option value="Monetize">Monetize</option>
                                  <option value="Moneybox">Moneybox</option>
                                  <option value="New Prudential Bank">New Prudential Bank</option>
                                  <option value="Npf Mfb">Npf Mfb</option>
                                  <option value="Oceanic Bank">Oceanic Bank</option>
                                  <option value="Omoluabi Savings And Loans">Omoluabi Savings And Loans</option>
                                  <option value="One Finance">One Finance</option>
                                  <option value="Paga">Paga</option>
                                  <option value="Page Mfbank">Page Mfbank</option>
                                  <option value="Parallex">Parallex</option>
                                  <option value="Parkway (ready Cash)">Parkway (ready Cash)</option>
                                  <option value="Payattitude Online">Payattitude Online</option>
                                  <option value="Paycom">Paycom</option>
                                  <option value="Providus Bank">Providus Bank</option>
                                  <option value="Safetrust Mortgage Bank">Safetrust Mortgage Bank</option>
                                  <option value="Seed Capital Microfinance Bank">Seed Capital Microfinance Bank</option>
                                  <option value="Skye Bank">Skye Bank</option>
                                  <option value="Stanbic Ibtc Bank">Stanbic Ibtc Bank</option>
                                  <option value="Stanbic Mobile">Stanbic Mobile</option>
                                  <option value="Standard Chartered Bank">Standard Chartered Bank</option>
                                  <option value="Sterling Bank">Sterling Bank</option>
                                  <option value="Sterling Mobile">Sterling Mobile</option>
                                  <option value="Suntrust">Suntrust</option>
                                  <option value="Teasy Mobile">Teasy Mobile</option>
                                  <option value="Trustbond">Trustbond</option>
                                  <option value="U-mo">U-mo</option>
                                  <option value="Union Bank Of Nigeria">Union Bank Of Nigeria</option>
                                  <option value="United Bank For Africa">United Bank For Africa</option>
                                  <option value="Unity Bank">Unity Bank</option>
                                  <option value="Vfd Microfinance Bank">Vfd Microfinance Bank</option>
                                  <option value="Visual Ict">Visual Ict</option>
                                  <option value="Vtnetwork">Vtnetwork</option>
                                  <option value="Wema Bank">Wema Bank</option>
                                  <option value="Zenith Bank">Zenith Bank</option>
                                  <option value="Zenith Mobile">Zenith Mobile</option>
                               </select>

                               <?php if($errors->has('bank')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('bank')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="facebookhandle" class="col-md-4 col-form-label"><?php echo e(__('Facebook Handle:')); ?></label>

                           <div class="col-md-8">
                               <input id="facebookhandle" type="text" class="form-control<?php echo e($errors->has('facebookhandle') ? ' is-invalid' : ''); ?>" name="facebookhandle" value="<?php echo e($std->facebookhandle); ?>" autofocus>

                               <?php if($errors->has('facebookhandle')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('facebookhandle')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                       <div class="form-group">
                           <label for="twitterhandle" class="col-md-4 col-form-label"><?php echo e(__('Twitter Handle:')); ?></label>

                           <div class="col-md-8">
                               <input id="twitterhandle" type="text" class="form-control<?php echo e($errors->has('twitterhandle') ? ' is-invalid' : ''); ?>" name="twitterhandle" value="<?php echo e($std->twitterhandle); ?>" autofocus>

                               <?php if($errors->has('twitterhandle')): ?>
                                   <span class="invalid-feedback" role="alert">
                                       <strong><?php echo e($errors->first('twitterhandle')); ?></strong>
                                   </span>
                               <?php endif; ?>
                           </div>
                       </div>
                   <div class="form-group mb-0">
                       <div class="col-md-8">
                           <button type="submit" class="btn btn-blue">
                               <?php echo e(__('Save')); ?>

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
                             <option value="<?php echo e($uni->id); ?>" <?php if($std->university == $uni->universityname): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($uni->universityname); ?></option>
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
                      <label for="matricno" class="col-md-4 col-form-label "><?php echo e(__('Matric No / Jamb Reg. Number:')); ?></label>

                      <div class="col-md-8">
                          <input id="matricno" type="text" class="form-control<?php echo e($errors->has('matricno') ? ' is-invalid' : ''); ?>" name="matricno" value="<?php echo e($std->matricno); ?>" required>

                          <?php if($errors->has('matricno')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('matricno')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="tuitionfee" class="col-md-4 col-form-label "><?php echo e(__('Annual Tuition:')); ?></label>

                      <div class="col-md-8">
                          <input id="tuitionfee" type="text" class="form-control<?php echo e($errors->has('tuitionfee') ? ' is-invalid' : ''); ?>" name="tuitionfee" value="<?php echo e($std->tuitionfee); ?>" required>

                          <?php if($errors->has('tuitionfee')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('tuitionfee')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                    </div>
                    <div class="form-group">
                        <label for="program" class="col-md-4 col-form-label "><?php echo e(__('Program:')); ?></label>

                        <div class="col-md-8">
                          <select id="program" class="form-control<?php echo e($errors->has('program') ? ' is-invalid' : ''); ?>" name="program" >
                            <option value="Bachelors" <?php if($std->program == 'Bachelors'): ?><?php echo e('selected'); ?><?php endif; ?>>Bachelors</option>
                            <option value="Masters" <?php if($std->program == 'Masters'): ?><?php echo e('selected'); ?><?php endif; ?>>Masters</option>
                            <option value="Postgraduate" <?php if($std->program == 'Postgraduate'): ?><?php echo e('selected'); ?><?php endif; ?>>Post Graduate</option>

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
                            <?php for($i = date('Y'); $i < (date('Y') + 7); $i++): ?>
                            <option value="<?php echo e($i.'/'.($i+1)); ?>" <?php if($std->yearofgraduation == ($i.'/'.($i+1))): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($i.'/'.($i+1)); ?></option>
                            <?php endfor; ?>
                          </select>
                            <?php if($errors->has('yearofgraduation')): ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($errors->first('yearofgraduation')); ?></strong>
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
                                <?php echo e(__('Save')); ?>

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
                             <option value="<?php echo e($country->name); ?>" <?php if($std->addresscountry == $country->name): ?><?php echo e('selected'); ?><?php endif; ?>><?php echo e($country->name); ?></option>
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
              <form method="POST" action="<?php echo e(route('students.update', Auth::user()->id)); ?>">
                  <?php echo csrf_field(); ?>
                  <?php echo method_field('patch'); ?>

                  <div class="form-group ">
                      <label for="firstname" class="col-md-4 col-form-label"><?php echo e(__('Firstname:')); ?></label>

                      <div class="col-md-8">
                          <input id="firstname" type="text" class="form-control<?php echo e($errors->has('gfirstname') ? ' is-invalid' : ''); ?>" name="gfirstname" value="<?php if($std->guarantor): ?><?php echo e($std->guarantor->firstname); ?><?php endif; ?>" required autofocus>

                          <?php if($errors->has('firstname')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('firstname')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="lastname" class="col-md-4 col-form-label "><?php echo e(__('Lastname:')); ?></label>

                      <div class="col-md-8">
                          <input id="lastname" type="text" class="form-control<?php echo e($errors->has('glastname') ? ' is-invalid' : ''); ?>" name="glastname" value="<?php if($std->guarantor): ?><?php echo e($std->guarantor->lastname); ?><?php endif; ?>" required autofocus>

                          <?php if($errors->has('lastname')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('lastname')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                  </div>





                  <div class="form-group">
                      <label for="phone" class="col-md-4 col-form-label "><?php echo e(__('Phone number:')); ?></label>

                      <div class="col-md-8">
                          <input id="phone" type="text" class="form-control<?php echo e($errors->has('gphone') ? ' is-invalid' : ''); ?>" name="gphone" value="<?php if($std->guarantor): ?><?php echo e($std->guarantor->phone); ?><?php endif; ?>" required autofocus>

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
                          <input id="email" type="email" class="form-control<?php echo e($errors->has('gemail') ? ' is-invalid' : ''); ?>" name="gemail" value="<?php if($std->guarantor): ?><?php echo e($std->guarantor->email); ?><?php endif; ?>" required>

                          <?php if($errors->has('email')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('email')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="occupation" class="col-md-4 col-form-label "><?php echo e(__('Occupation:')); ?></label>

                      <div class="col-md-8">
                          <input id="occupation" type="text" class="form-control<?php echo e($errors->has('goccupation') ? ' is-invalid' : ''); ?>" name="goccupation" value="<?php if($std->guarantor): ?><?php echo e($std->guarantor->occupation); ?><?php endif; ?>" required autofocus>

                          <?php if($errors->has('occupation')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('occupation')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="form-group">
                      <label for="address" class="col-md-4 col-form-label "><?php echo e(__('Address:')); ?></label>

                      <div class="col-md-8">
                          <textarea id="address" type="text" class="form-control<?php echo e($errors->has('gaddress') ? ' is-invalid' : ''); ?>" name="gaddress" required autofocus><?php if($std->guarantor): ?><?php echo e($std->guarantor->address); ?><?php endif; ?></textarea>

                          <?php if($errors->has('address')): ?>
                              <span class="invalid-feedback" role="alert">
                                  <strong><?php echo e($errors->first('address')); ?></strong>
                              </span>
                          <?php endif; ?>
                      </div>
                  </div>

                  <div class="form-group mb-0">
                      <div class="col-md-8">
                          <button type="submit" class="btn btn-blue">
                              <?php echo e(__('Save')); ?>

                          </button>
                      </div>
                  </div>

              </form>
             </div>
             <div class="tab-pane fade" id="upload" role="tabpanel" aria-labelledby="upload-tab">
                <form method="POST" class="row" action="<?php echo e(route('students.update', Auth::user()->id)); ?>" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('patch'); ?>
                    <div class="col-md-6">
                      <div class="form-group ">
                          <label for="firstname" class="col-md-4 col-form-label"><?php echo e(__('Upload Photo:')); ?></label>

                          <div class="col-md-12">
                              <input id="photo" type="file" class="form-control<?php echo e($errors->has('photo') ? ' is-invalid' : ''); ?>" name="photo"  required autofocus>

                              <?php if($errors->has('photo')): ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($errors->first('photo')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group">
                          <label for="photoid" class="col-md-4 col-form-label "><?php echo e(__('Photo ID:')); ?></label>

                          <div class="col-md-12">
                              <input id="photoid" type="file" class="form-control<?php echo e($errors->has('photoid') ? ' is-invalid' : ''); ?>" name="photoid"  required autofocus>

                              <?php if($errors->has('photoid')): ?>
                                  <span class="invalid-feedback" role="alert">
                                      <strong><?php echo e($errors->first('photoid')); ?></strong>
                                  </span>
                              <?php endif; ?>
                          </div>
                      </div>

                      <div class="form-group mb-0">
                          <div class="col-md-8">
                              <button type="submit" class="btn btn-blue">
                                  <?php echo e(__('Save')); ?>

                              </button>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-2 padd-40">
                      <img src="<?php echo e(asset('storage/photos/'.$std->photo)); ?>" class="rounded-circle" width="200px">
                      <small>Photo</small>
                    </div>
                    <div class="col-md-2 padd-40">
                      <img src="<?php echo e(asset('storage/photos/'.$std->photoid)); ?>" class="square" width="200px">
                      <small>Photo ID</small>
                    </div>
                </form>
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