<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<!-- START CUSTOM TABS -->
<!-- Main content -->
    <section class="content">
      <h2 class="page-header">Loan Details</h2>

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Loan Information</a></li>
              <li><a href="#tab_2" data-toggle="tab">Academic Information</a></li>
              <li><a href="#tab_3" data-toggle="tab">Residential Information</a></li>
              <li><a href="#tab_4" data-toggle="tab">Guarantor Information</a></li>
              <li><a href="#tab_5" data-toggle="tab">Verify Applicant's Details</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td><h5>Loan Applicant:</h5></td>
                        <td><h5><?php echo e($loan->user->firstname . ' '. $loan->user->lastname); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Apllicant's DOB:</h5></td>
                        <td><h5><?php echo e($loan->user->dob); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's Gender:</h5></td>
                        <td><h5><?php echo e($loan->user->gender); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's State of Origin:</h5></td>
                        <td><h5><?php echo e($loan->user->stateoforigin); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's Nationality:</h5></td>
                        <td><h5><?php echo e($loan->user->nationality); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Applicant's NIN:</h5></td>
                        <td><h5><?php echo e($loan->user->nin); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Loan Amount:</h5></td>
                        <td><h5><?php echo e(number_format($loan->loanamount, 2)); ?></h5></td>

                      </tr>
                      <tr>
                        <td><h5>Loan Purpose:</h5></td>
                        <td><h5><?php echo e($loan->loanpurpose); ?></h5></td>

                      </tr>
                      <tr>
                        <td><h5>Application Date:</h5></td>
                        <td><h5><?php echo e($loan->created_at); ?></h5></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table">
                  <tr>
                    <td><h5>University:</h5></td>
                    <td><h5><?php echo e($loan->user->university->universityname); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Program:</h5></td>
                    <td><h5><?php echo e($loan->user->program); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Expected Year of Graduation:</h5></td>
                    <td><h5><?php echo e($loan->user->yearofgraduation); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Department:</h5></td>
                    <td><h5><?php echo e($loan->user->department); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Current GPA:</h5></td>
                    <td><h5><?php echo e($loan->user->currentgpa); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>CGPA:</h5></td>
                    <td><h5><?php echo e($loan->user->cgpa); ?></h5></td>
                  </tr>
                </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table">
                  <tr>
                    <td><h5>Address Line One:</h5></td>
                    <td><h5><?php echo e($loan->user->addresslineone); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Address Line Two:</h5></td>
                    <td><h5><?php echo e($loan->user->addresslinetwo); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>City:</h5></td>
                    <td><h5><?php echo e($loan->user->addresscity); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>State:</h5></td>
                    <td><h5><?php echo e($loan->user->addressstate); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Country:</h5></td>
                    <td><h5><?php echo e($loan->user->addresscountry); ?></h5></td>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <table class="table">
                  <tr>
                    <td><h5>Firstname:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->firstname); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Lastname:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->lastname); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Phone number:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->phone); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Email Address:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->email); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Occupation:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->occupation); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Address:</h5></td>
                    <td><h5><?php echo e($loan->user->guarantor->address); ?></h5></td>
                  </tr>

                </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_5">
                <table class="table">
                  <tr>
                    <td><h5>Bank Verification Number:</h5><small>This Service will cost you NGN500</small></td>
                    <td><h5><?php echo e($loan->user->bvn); ?></h5></td>
                    <td>
                      <h5>
                        <?php if(App\bvn::where('user_id', $loan->user->id)->where('bank_id', Auth::user()->id)->get()->count() > 0): ?>
                        <a href="<?php echo e(route('bvn.load', $loan->user->id)); ?>" class="btn btn-primary btn-md">View Report</a>
                        <?php else: ?>
                        <form action="<?php echo e(route('bvn.verify', ['id' => $loan->user->id, 'bvn' => $loan->user->bvn])); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <button type="submit" name="bvn" value="<?php echo e($loan->user->bvn); ?>" class="btn btn-md btn-success">Verify BVN </button>
                        </form>
                        <?php endif; ?>
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>National Identification Number:</h5><small>This Service will cost you NGN500</small></td>
                    <td><h5><?php echo e($loan->user->nin); ?></h5></td>
                    <td>
                      <h5>
                        <?php if(App\Nimc::where('user_id', $loan->user->id)->where('bank_id', Auth::user()->id)->get()->count() > 0): ?>
                        <a href="<?php echo e(route('nin.load', $loan->user->id)); ?>" class="btn btn-primary btn-md">View Report</a>
                        <?php else: ?>
                        <form action="<?php echo e(route('nin.verify', ['id' => $loan->user->id, 'bvn' => $loan->user->nin])); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <button type="submit" name="nin" value="<?php echo e($loan->user->nin); ?>" class="btn btn-md btn-success">Verify NIN</button>
                        </form>
                        <?php endif; ?>
                      </h5>
                    </td>
                  </tr>
                  <tr>
                    <td><h5>Credit History:</h5><small>This Service will cost you NGN5,000</small></td>
                    <td></td>
                    <td>
                      <h5>
                        <form action="<?php echo e(route('credit.verify', ['id' => $loan->user->id, 'bvn' => $loan->user->bvn])); ?>" method="post">
                          <?php echo csrf_field(); ?>
                          <button type="submit" name="bvn" value="<?php echo e($loan->user->bvn); ?>" class="btn btn-md btn-success">Verify Credit History</button>
                        </form>
                      </h5>
                    </td>

                  </tr>

                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <?php if (! ($loan->bank_id)): ?>
          <form action="<?php echo e(route('bank.loans.update', $loan->id)); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('patch'); ?>
            <button name="unclaim" type="submit" value="unclaim" class="btn btn-md btn-primary">Unclaim</button>
            <button name="unclaim" type="submit" value="grant" class="btn btn-md btn-success">Grant Loan</button>
            <button type="button" class="btn btn-md btn-success" data-toggle="modal" data-target="#modal-default">
                Request More Info
            </button>
          </form>
          <?php endif; ?>

          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
    </section>
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title">Request More Information:</h4>
            </div>
            <form>
            <div class="modal-body">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                  <label for="title" class="col-form-label">Subject:</label>
                  <input type="text" class="form-control" id="title">
                </div>
                <div class="form-group">
                  <label for="desc" class="col-form-label">Description:</label>
                  <textarea class="form-control" id="desc"></textarea>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Send Message</button>
            </div>
          </form>

          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bankapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>