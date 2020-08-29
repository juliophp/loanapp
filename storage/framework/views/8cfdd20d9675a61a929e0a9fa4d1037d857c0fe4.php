<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
<!-- START CUSTOM TABS -->
<!-- Main content -->
    <section class="content">
      <h2 class="page-header">Donor Details</h2>

      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Donor Information</a></li>

            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <!-- /.box-header -->
                  <div class="box-body no-padding">
                    <table class="table">
                      <tr>
                        <td><h5>Donor name:</h5></td>
                        <td><h5><?php echo e($donor->donorname); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Username:</h5></td>
                        <td><h5><?php echo e($donor->username); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Email</h5></td>
                        <td><h5><?php echo e($donor->email); ?></h5></td>
                      </tr>
                      <tr>
                        <td><h5>Phone:</h5></td>
                        <td><h5><?php echo e($donor->phone); ?></h5></td>
                      </tr>

                    </table>
                  </div>
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