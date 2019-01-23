<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Metas-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="LeadDigital  Landing page Template">
      <title><?php echo e(config('app.name', 'Laravel')); ?></title>
      <!--External Stylesheets css-->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="<?php echo e(asset('cs/bootstrap.min.css')); ?>">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
      <!--elegant icon font -->
      <link rel="stylesheet" href="<?php echo e(asset('cs/elegant-icons.css')); ?>">
      <!--Animate -->
      <link rel="stylesheet" href="<?php echo e(asset('cs/animate.css')); ?>">
      <!-- Slick -carousel-->
      <link rel="stylesheet" href="<?php echo e(asset('cs/slick.css')); ?>">
      <!-- Magnific Popup-->
      <link rel="stylesheet" href="<?php echo e(asset('cs/magnific-popup.css')); ?>">
      <!--Template Stylesheets css-->
      <link rel="stylesheet" href="<?php echo e(asset('cs/style.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('cs/responsive.css')); ?>">
      <!-- Fonts styles -->
      <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i" rel="stylesheet">
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo e(asset('images/efc-logo.png')); ?>" type="image/x-icon">
      <link rel="icon" href="<?php echo e(asset('images/efc-logo.png')); ?>" type="image/x-icon">
      <script src="<?php echo e(asset('js/modernizr.js')); ?>"></script>
      <!--[if lt IE 9]>
      <script src="<?php echo e(asset('js/html5shiv.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/respond.min.js')); ?>"></script>
      <![endif]-->
   </head>
   <body data-spy="scroll" data-target=".navbar-default" data-offset="100">
      <!-- Page Preloader -->
      <div id="loading-page">
         <div id="loading-center-page">
            <div id="loading-center-absolute">
               <div class="loader"></div>
            </div>
         </div>
      </div>
      <!-- Page Preloader -->
      <!-- Page Content -->
      <div class="warpper clearfix padd-40">

        <!-- Header -->
        <header class="navbar-header">
           <nav class="navbar navbar-expand-lg fixed-top">
              <div class="container">
                 <a class="navbar-brand" href="/"> <img src="<?php echo e(asset('images/efc-logo.png')); ?>" alt=""> <span>Education Finance Solution</span></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon  icon_menu"></span>
                 </button>
                 <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <?php if(auth()->guard()->guest()): ?>
                       <li class="nav-item active">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('index')); ?>#home">Home</a>
                       </li>
                       <li class="nav-item">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('index')); ?>#about-tab">About</a>
                       </li>
                       <li class="nav-item">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('index')); ?>#services-d">Services</a>
                       </li>
                       <li>
                          <a data-scroll="" href="<?php echo e(route('index')); ?>#testimonials" class="nav-link section-scroll">Testimonials</a>
                       </li>
                       <li>
                          <a data-scroll="" href="<?php echo e(route('login')); ?>" class="nav-link section-scroll">Login</a>
                       </li>
                       <li>
                          <div class="connect-block">
                             <a href="<?php echo e(route('register')); ?>" class="btn btn-blue">Get started</a>
                          </div>
                       </li>
                       <?php else: ?>
                       <li class="nav-item active">
                          <a data-scroll="" class="nav-link section-scroll" href="#home">Home</a>
                       </li>
                       <li class="nav-item">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('students.edit', Auth::user()->id)); ?>">Update Profile</a>
                       </li>
                       <li class="nav-item">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('loans.create')); ?>">Apply for a Loan</a>
                       </li>
                       <li class="nav-item">
                          <a data-scroll="" class="nav-link section-scroll" href="<?php echo e(route('students.loans')); ?>">View Applications</a>
                       </li>
                       <li>
                           <div class="connect-block">
                               <a href="" class="btn btn-blue" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">Logout</a>
                           </div>

                       </li>
                       <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                           <?php echo csrf_field(); ?>
                       </form>
                       <?php endif; ?>
                    </ul>
                 </div>
              </div>
           </nav>
        </header>
        <!--Header-->

      <?php echo $__env->yieldContent('content'); ?>


      </div>

      <!--Footer-->
      <footer class="footer">
         <div class="footer-warpper">
            <div class="footer-top">
               <div class="container">
                  <div class="footer-bottom-content clearfix">
                     <div class="row">
                        <div class="col-lg-3 col-md-3">
                           <div class="logo-footer">
                              <a class="navbar-brand" href="<?php echo e(route('home')); ?>"> <img src="<?php echo e(asset('images/efc-logo.png')); ?>" alt=""><span>EduFinance Solution</span></a>
                           </div>
                           <div class="text-footer">
                              <p>
                                 Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                              </p>
                           </div>
                           <!-- Newsletter -->
                           <div class="newsletter-block clearfix">
                              <div class="subscribe-form">
                                 <form action="#" method="get" class="subscribe-mail">
                                    <div class="form-group ">
                                       <input type="email" class="form-control email-input" placeholder="Enter your email">
                                       <button type="submit" class="btn btn-subscribe"><i class="arrow_carrot-right_alt2"></i></button>
                                    </div>
                                    <p class="error-message"></p>
                                    <p class="sucess-message"></p>
                                 </form>
                              </div>
                           </div>
                           <!-- Newsletter -->
                           <ul class="list-social list-inline">
                              <li>
                                 <a href="#">
                                 <i class="social_facebook "></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="social_twitter "></i>
                                 </a>
                              </li>
                              <li>
                                 <a href="#">
                                 <i class="social_googleplus "></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <h5>Menu</h5>
                           <ul class="list-menu">
                              <li>
                                 <a href="#">Home </a>
                              </li>
                              <li>
                                 <a href="#">About</a>
                              </li>
                              <li>
                                 <a href="#">Services</a>
                              </li>
                              <li>
                                 <a href="#">Team</a>
                              </li>
                              <li>
                                 <a href="#">Pricing</a>
                              </li>
                              <li>
                                 <a href="#">Blog</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <h5>Useful Link</h5>
                           <ul class="list-menu">
                              <li>
                                 <a href="#">How it works </a>
                              </li>
                              <li>
                                 <a href="#">Terms of Service</a>
                              </li>
                              <li>
                                 <a href="#">Privacy policy</a>
                              </li>
                              <li>
                                 <a href="#">General Terms</a>
                              </li>
                              <li>
                                 <a href="#">Faq</a>
                              </li>
                              <li>
                                 <a href="#">Patners</a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-lg-3 col-md-3">
                           <h5>Contact Info</h5>
                           <ul class="list-menu contact-list">
                              <li>
                                 8, Louis Solomon CLose
                                 Victoria Island, Lagos
                              </li>
                              <li>
                                 conact@contact.com
                              </li>
                              <li>+369 258 147 258 </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <!-- COPYRIGHT TEXT -->
                        <div class="copyright text-center">
                           <p>2019 © Copyright Chamsswitch Ltd All rights Reserved.</p>
                        </div>
                        <!-- COPYRIGHT TEXT -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!--Footer -->
      <script src="<?php echo e(asset('sweetalert/dist/sweetalert.min.js')); ?>"></script>
      <!-- Include this after the sweet alert js file -->
      <?php echo $__env->make('sweet::alert', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- jQuery -->
      <script src="<?php echo e(asset('js/jquery-2.1.1.min.js')); ?>"></script>
      <!-- Bootstrap Plugins -->
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
      <!-- Template Plugins -->
      <script src="<?php echo e(asset('js/jquery.easing.js')); ?>"></script>
      <script src="<?php echo e(asset('js/wow.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/magnific-popup.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.scrollUp.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/jquery.ajaxchimp.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
      <!-- Main js -->
      <script src="<?php echo e(asset('js/main.js')); ?>"></script>
   </body>
</html>
