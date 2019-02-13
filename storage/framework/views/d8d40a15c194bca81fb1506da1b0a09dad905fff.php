<?php $__env->startSection('content'); ?>
<!--Begin Hero Section-->
<section id="home" class="hero">
   <div class="slide-home">
      <!-- slide 1-->
      <div class="slide-item">
         <!--container-->
         <div class="container">
            <div class="row hero-padd">
               <div class="col-md-6 col-12 col-sm-6">
                  <div class="hero-text">
                     <h2>Welcome to <span>EFS</span></h2>
                     <p>
                        Education Finance Solution(EFS) is a product of Education Finance Company, This platform serves as a meeting point for
                        loan applicants, lenders and donors.
                     </p>
                     <a href="https://www.youtube.com/embed/7e90gBu4pas" class="video-modal play-btn"><img src="<?php echo e(asset('images/play-button.svg')); ?>" alt="">Watch video</a>
                  </div>
               </div>
               <div class="col-md-6 col-12 col-sm-6">
                  <img src="<?php echo e(asset('images/efc.png')); ?>" alt="" class="img-width">
               </div>
            </div>
         </div>
         <!--container-->
      </div>
      <!-- slide 2-->
      <div class="slide-item">
         <!--container-->
         <div class="container">
            <div class="row hero-padd">
               <div class="col-md-6 col-12 col-sm-6">
                  <div class="hero-text">
                     <h2>Instant Loan</h2>
                     <p>
                        We provide a platform where you can apply for a loan, provide your information, upload required documents and get your loan disbursed
                        almost instantly.
                        <a href="" class="btn-blue"> Read More</a>
                  </div>
               </div>
               <div class="col-md-6 col-12 col-sm-6">
                  <img src="<?php echo e(asset('images/groip.svg')); ?>" alt="">
               </div>
            </div>
         </div>
         <!--container-->
      </div>
   </div>
</section>
<!--Request quote-->
<section class="padd-40 bg-color-2">
   <div class="container">
      <div class="row">
         <div class="col-md-5 col-lg-5 col-12">
            <div class="quote-bloc">
               <h3>FREE EFS BROCHURE </h3>
               <p>Enter email to recieve a copy of our brochure</p>
            </div>
         </div>
         <div class="col-md-7 col-lg-7 col-12">
            <form class="form-quote">
               <div class="form-row">
                  <div class="form-group pd-rg-0 col-md-11 col-lg-11">
                     <div class="input-icon">
                        <span class="icon_mail_alt"></span>
                        <input type="email" class="form-control" placeholder="Enter your email">
                        <button class="btn btn-blue-1">Submit</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</section>
<!--Request quote-->
<!--About-->
<section id="about-tab" class=" padd-80 bg-color">
   <div class="container">
      <div class="row">
         <div class="row-centered">
            <div class="col-centered col-lg-7">
               <h2 class="title-h2">Instant Loan Application  </h2>
               <p class="font-p mg-tp-30 mg-bt-60">
               </p>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-12">
            <ul class="nav nav-tabs tab-element">
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.4s">
                  <a href="#tab1"   data-toggle="tab">
                     <h4>Students</h4>
                     <p>New Students, Returning Students, Postgraduate Students can access loan to finance their education</p>
                  </a>
               </li>
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.6s">
                  <a href="#tab2"  class="active" data-toggle="tab">
                     <h4>Banks</h4>
                     <p>Partner banks provide loans for qualified student applicants</p>
                  </a>
               </li>
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.6s">
                  <a href="#tab3"   data-toggle="tab">
                     <h4>Donors</h4>
                     <p>Donors provide grants to specific qualifying student applicants</p>
                  </a>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 offset-md-1 col-12">
            <div class="tab-content content-element">
               <div class="tab-pane fade" id="tab1">
                  <div class="tab_img">
                     <img class="img-fluid active show"  src="<?php echo e(asset('images/student.png')); ?>" alt="">
                  </div>
               </div>
               <div class="tab-pane fade" id="tab2">
                  <div class="tab_img">
                     <img class="img-fluid" src="<?php echo e(asset('images/bank.png')); ?>" alt="">
                  </div>
               </div>
               <div class="tab-pane fade" id="tab3" >
                  <div class="tab_img">
                     <img class="img-fluid" src="<?php echo e(asset('images/donor.png')); ?>" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--About-->
<!--Process number bloc-->
<section id="features-about" class="padd-80 bg-image1">
   <div class="container">
      <div class="row">
         <div class="row-centered">
            <div class="col-centered col-lg-7 z-index">
               <h2 class="title-h2 color-white">Students, Banks, Donors</h2>
               <p class="font-p mg-bt-60 color-white">
               </p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span><?php echo e(App\Loan::count()); ?></span>
               <p>Applications</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span>25</span>
               <p>Banks</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span><?php echo e(App\Donor::count()); ?></span>
               <p>Donor(s)</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span><?php echo e(App\University::count()); ?></span>
               <p>Universities</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--Process number bloc-->
<!--CTA-->
<section class="padd-40 bg-color-3">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-lg-12  col-12">
            <div class="quote-bloc center-quote-bloc text-center">
               <h3>Get A Loan in 2 Hours </h3>
               <p class="mg-bt-30">FROM THE NUMBER ONE AGENCY</p>
               <a href="<?php echo e(route('loans.create')); ?>" class="btn btn-white">Apply</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--CTA-->
<!--testimonials-->
<section id="testimonials" class="pd-tp-80  pd-bt-100  clearfix">
   <div class="container">
      <div class="row">
         <div class="row-centered">
            <div class="col-centered col-lg-7 col-12 col-md-7">
               <h2 class="title-h2">Testimonials</h2>
               <p class="font-p mg-tp-30 mg-bt-60">
               </p>
               <div class="testimonial-slider">
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="<?php echo e(asset('images/avatars/1.PNG')); ?>" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Temitope Taiwo</h4>
                           <span>University of Lagos, Accouting Department</span>
                        </div>
                     </div>
                     <p>
                       EFC came through for me, in the pursuit of my education dream
                     </p>
                  </div>
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="<?php echo e(asset('images/avatars/2.jpg')); ?>" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Seyi Sulaiman</h4>
                           <span>LASU, Computer Science</span>
                        </div>
                     </div>
                     <p>
                       Thanks to EFC for making my dream come true.
                     </p>
                   </div>
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="<?php echo e(asset('images/avatars/3.jpg')); ?>" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Joanna Akan</h4>
                           <span>Unical, Computer Science</span>
                        </div>
                     </div>
                     <p>Yes! I made it, Thanks to EFC </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--testimonials-->
<!--sponsors clients-->
<section id="sponsors" class="pd-tp-60 pd-bt-40 bg-color">
   <!--container-->
   <div class="container">
      <div class="row">
         <div class="row-centered">
            <div class="col-centered col-lg-12 col-md-12">
               <div class="client-slider ">
                  <div class="item ">
                     <img src="<?php echo e(asset('images/clients/logo1.png')); ?>" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="<?php echo e(asset('images/clients/logo2.png')); ?>" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="<?php echo e(asset('images/clients/logo3.png')); ?>" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="<?php echo e(asset('images/clients/logo4.png')); ?>" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="<?php echo e(asset('images/clients/logo5.png')); ?>" class="img-responsive " alt=" " title=" ">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--End sponsors clients-->
</div>
<!--End page cotnent-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.ui', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>