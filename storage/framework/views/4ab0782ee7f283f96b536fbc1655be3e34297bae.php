<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<!-- START CUSTOM TABS -->
<!-- Main content -->
    <section class="content">
      <h2 class="page-header">Student Details</h2>

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Basic Information</a></li>
              <li><a href="#tab_2" data-toggle="tab">Academic Information</a></li>
              <li><a href="#tab_3" data-toggle="tab">Residential Information</a></li>
              <li><a href="#tab_4" data-toggle="tab">BVN & Credit History</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td><h5>Student name:</h5></td>
                        <td><h5><?php echo e($std->firstname . ' '. $std->lastname); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>DOB:</h5></td>
                        <td><h5><?php echo e($std->dob); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Gender:</h5></td>
                        <td><h5><?php echo e($std->gender); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>State of Origin:</h5></td>
                        <td><h5><?php echo e($std->stateoforigin); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Nationality:</h5></td>
                        <td><h5><?php echo e($std->nationality); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Email:</h5></td>
                        <td><h5><?php echo e($std->email); ?></h5></td>

                      </tr>
                      <tr>
                        <td><h5>Phone:</h5></td>
                        <td><h5><?php echo e($std->phone); ?></h5></td>

                      </tr>
                      <tr>
                        <td><h5>BVN:</h5></td>
                        <td><h5><?php echo e($std->bvn); ?></h5></td>
                      </tr>
                    </table>
                  </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                <table class="table">
                  <tr>
                    <td><h5>University:</h5></td>
                    <td><h5><?php echo e($std->universityname); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Program:</h5></td>
                    <td><h5><?php echo e($std->program); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Expected Year of Graduation:</h5></td>
                    <td><h5><?php echo e($std->yearofgraduation); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Department:</h5></td>
                    <td><h5><?php echo e($std->department); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Current GPA:</h5></td>
                    <td><h5><?php echo e($std->currentgpa); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>CGPA:</h5></td>
                    <td><h5><?php echo e($std->cgpa); ?></h5></td>
                  </tr>
                </table>

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                <table class="table">
                  <tr>
                    <td><h5>Address Line One:</h5></td>
                    <td><h5><?php echo e($std->addresslineone); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Address Line Two:</h5></td>
                    <td><h5><?php echo e($std->addresslinetwo); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>City:</h5></td>
                    <td><h5><?php echo e($std->addresscity); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>State:</h5></td>
                    <td><h5><?php echo e($std->addressstate); ?></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Country:</h5></td>
                    <td><h5><?php echo e($std->addresscountry); ?></h5></td>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_4">
                <table class="table">
                  <tr>
                    <td><h5>Bank Verification Number:</h5></td>
                    <td><h5><?php echo e($std->bvn); ?></h5></td>
                    <td><h5></h5></td>
                  </tr>
                  <tr>
                    <td><h5>Credit History:</h5></td>
                    <td><h5></h5></td>
                    <td><h5></h5></td>
                  </tr>
                </table>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>


          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <!-- END CUSTOM TABS -->
    </section>

</div>
<!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admapp', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>