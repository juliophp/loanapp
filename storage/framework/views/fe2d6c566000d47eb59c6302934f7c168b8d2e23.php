<!DOCTYPE html>
<html lang="en">
   <head>
      <!--Metas-->
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Education Finance Solution | Landing page">
      <title>Education Finance Solution | Welcome</title>
      <!--External Stylesheets css-->
      <!-- Bootstrap -->
      <link rel="stylesheet" href="<?php echo e(asset('cs/bootstrap.min.css')); ?>">
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
      <div class="warpper clearfix">
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
                        <li class="nav-item active">
                           <a data-scroll="" class="nav-link section-scroll" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                           <a data-scroll="" class="nav-link section-scroll" href="#about-tab">About</a>
                        </li>
                        <li class="nav-item">
                           <a data-scroll="" class="nav-link section-scroll" href="#services-d">Services</a>
                        </li>
                        <li>
                           <a data-scroll="" href="#testimonials" class="nav-link section-scroll">Testimonials</a>
                        </li>
                        <li>
                           <a data-scroll="" href="<?php echo e(route('login')); ?>" class="nav-link section-scroll">Login</a>
                        </li>
                        <li>
                           <div class="connect-block">
                              <a href="<?php echo e(route('register')); ?>" class="btn btn-blue">Get started</a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>
         <!--Header-->
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
                                 Education Finance Solution(EFS) is a product of Education Finance Company. This platform serves as a meeting point for
                                 student, lenders and donors.
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
                           Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
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
         <!--Services-->
         <section id="services-d" class="padd-80 ">
            <!--container-->
            <div class="container">
               <div class="row-centered">
                  <div class="col-centered col-lg-12">
                     <h2 class="title-h2">Features</h2>
                     <p class="font-p">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                     </p>
                     <div class="tabs-content">
                        <ul class="nav nav-tabs">
                           <li class="nav-item">
                              <a class="nav-link"   data-toggle="tab" href="#tab-1">Students / Loan Applicants</a>
                           </li>
                           <li class="nav-item ">
                              <a class="nav-link  active"   data-toggle="tab" href="#tab-2">Bank / Lender Log In</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link"   data-toggle="tab" href="#tab-3">Donor Log In</a>
                           </li>
                           <!--<li class="nav-item">
                              <a class="nav-link"   data-toggle="tab" href="#tab-4">Search Engine Optimization</a>
                           </li>-->
                        </ul>
                        <div class="tab-content mg-tp-60">
                           <div class="tab-pane fade " id="tab-1">
                              <div class="row">
                                 <div class="col-md-6 col-12 col-sm-6">
                                    <div class="bloc-icon">
                                       <img src="<?php echo e(asset('images/Conversion.svg')); ?>" alt="">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-12 col-sm-6 text-left">
                                    <h3>Student Login</h3>
                                    <form action="<?php echo e(route('login')); ?>" method="post">
                                      <?php echo csrf_field(); ?>
                                      <div class="form-group">
                                         <div class="col-lg-12">
                                            <label for="username" class="col-form-label text-md-right">Username: </label>
                                            <input type="text" name="username" class="form-control" placeholder="username">
                                         </div>
                                         <div class="col-lg-12">
                                            <label for="password" class="col-form-label text-md-right">Password: </label>
                                            <input type="password" name="password" class="form-control" placeholder="password">
                                         </div>
                                      </div>
                                      <button type="submit" class="btn btn-blue">Log In</button>

                                    </form>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade show active" id="tab-2">
                              <div class="row">
                                 <div class="col-md-6 col-12 col-sm-6">
                                    <div class="bloc-icon">
                                       <img src="<?php echo e(asset('images/Search.svg')); ?>" alt="">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-12 col-sm-6 text-left">
                                    <h3>Bank Login</h3>
                                    <div class="form-group">
                                       <div class="col-lg-12">
                                          <label for="username" class="col-form-label text-md-right">Username: </label>
                                          <input type="text" name="username" class="form-control" placeholder="username">
                                       </div>
                                       <div class="col-lg-12">
                                          <label for="password" class="col-form-label text-md-right">Password: </label>
                                          <input type="password" name="dob" class="form-control" placeholder="password">
                                       </div>
                                    </div>
                                    <a href="" class="btn btn-blue">Log In</a>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="tab-3">
                              <div class="row">
                                 <div class="col-md-6 col-12 col-sm-6">
                                    <div class="bloc-icon">
                                       <img src="<?php echo e(asset('images/Marketin.jpg')); ?>" alt="">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-12 col-sm-6 text-left">
                                    <h3>Donor Login</h3>
                                    <div class="form-group">
                                       <div class="col-lg-12">
                                          <label for="username" class="col-form-label text-md-right">Username: </label>
                                          <input type="text" name="username" class="form-control" placeholder="username">
                                       </div>
                                       <div class="col-lg-12">
                                          <label for="password" class="col-form-label text-md-right">Password: </label>
                                          <input type="password" name="dob" class="form-control" placeholder="password">
                                       </div>
                                    </div>
                                    <a href="" class="btn btn-blue">Log In</a>
                                 </div>
                              </div>
                           </div>
                           <!-- <div class="tab-pane fade" id="tab-4">
                              <div class="row">
                                 <div class="col-md-6 col-12 col-sm-6">
                                    <div class="bloc-icon">
                                       <img src="<?php echo e(asset('images/search.jpg')); ?>" alt="">
                                    </div>
                                 </div>
                                 <div class="col-md-6 col-12 col-sm-6 text-left">
                                    <h3>Search Engine Optimization</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                    <p>
                                       Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                    </p>
                                    <a href="" class="btn btn-blue">Read more</a>
                                 </div>
                              </div>
                           </div>
-->                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--container-->
         </section>
         <!--Services-->
         <!--CTA-->
         <section class="padd-40 bg-color-3">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-lg-12  col-12">
                     <div class="quote-bloc center-quote-bloc text-center">
                        <h3>Get A Loan in 2 Hours </h3>
                        <p class="mg-bt-30">FROM THE NUMBER ONE AGENCY</p>
                        <a href="" class="btn btn-white">get started</a>
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
Thanks to EFC for making my dream come true.</p>                           </div>
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
      <!--Footer-->
      <footer class="footer">
         <div class="footer-warpper">
            <!--Request quote-->
            <section class="padd-40 bg-color-2">
               <div class="container">
                  <div class="row">
                     <div class="col-md-5 col-lg-5 col-12">
                        <div class="quote-bloc">
                           <h3>FREE SEO QUOTE </h3>
                           <p>FROM THE NUMBER ONE AGENCY</p>
                        </div>
                     </div>
                     <div class="col-md-7 col-lg-7 col-12">
                        <form class="form-quote">
                           <div class="form-row">
                              <div class="form-group pd-rg-0 col-md-11 col-lg-11">
                                 <div class="input-icon">
                                    <span class="icon_globe_alt"></span>
                                    <input type="email" class="form-control" placeholder="Enter your website">
                                    <button class="btn btn-blue-1">Check Now</button>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </section>
            <!--Request quote-->
            <div class="footer-top">
               <div class="container">
                  <div class="footer-bottom-content clearfix">
                     <div class="row">
                        <div class="col-lg-3 col-md-3">
                           <div class="logo-footer">
                              <a class="navbar-brand" href="index.html"> <img src="<?php echo e(asset('images/efc-logo.png')); ?>" alt=""><span>EduFinance Solution</span></a>
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
                                 8, Louis Solomon CLose, Victoria Island
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
