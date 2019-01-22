@extends('layouts.ui')

@section('content')
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
                     <a href="https://www.youtube.com/embed/7e90gBu4pas" class="video-modal play-btn"><img src="{{asset('images/play-button.svg')}}" alt="">Watch video</a>
                  </div>
               </div>
               <div class="col-md-6 col-12 col-sm-6">
                  <img src="{{asset('images/efc.png')}}" alt="" class="img-width">
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
                  <img src="{{asset('images/groip.svg')}}" alt="">
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
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
               </p>
            </div>
         </div>
         <div class="col-lg-5 col-md-5 col-12">
            <ul class="nav nav-tabs tab-element">
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.4s">
                  <a href="#tab1"   data-toggle="tab">
                     <h4>Students</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </a>
               </li>
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.6s">
                  <a href="#tab2"  class="active" data-toggle="tab">
                     <h4>Banks</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </a>
               </li>
               <li class="link-tab wow fadeInLeft" data-wow-delay="0.6s">
                  <a href="#tab3"   data-toggle="tab">
                     <h4>Donors</h4>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                  </a>
               </li>
            </ul>
         </div>
         <div class="col-lg-6 col-md-6 offset-md-1 col-12">
            <div class="tab-content content-element">
               <div class="tab-pane fade active show" id="tab1">
                  <div class="tab_img">
                     <img class="img-fluid"  src="{{asset('images/student.png')}}" alt="">
                  </div>
               </div>
               <div class="tab-pane fade" id="tab2">
                  <div class="tab_img">
                     <img class="img-fluid" src="{{asset('images/bank.png')}}" alt="">
                  </div>
               </div>
               <div class="tab-pane fade" id="tab3" >
                  <div class="tab_img">
                     <img class="img-fluid" src="{{asset('images/donor.png')}}" alt="">
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
               <span>1,143 </span>
               <p>Applications</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span>200</span>
               <p>Banks</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span>250</span>
               <p>Donors</p>
            </div>
         </div>
         <div class="col-md-3 col-sm-3 col-12 z-index">
            <div class="number-bloc">
               <span>70</span>
               <p>Our Dedicated Support</p>
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
            <h2 class="title-h2">Discover Our  Services</h2>
            <p class="font-p">
               Sed ut perspiciatis unde omnis iste natus error sit voluptatem <br> accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
            </p>
            <div class="tabs-content">
               <ul class="nav nav-tabs">
                  <li class="nav-item">
                     <a class="nav-link"   data-toggle="tab" href="#tab-1">Pay-Per-Click Advertising</a>
                  </li>
                  <li class="nav-item ">
                     <a class="nav-link  active"   data-toggle="tab" href="#tab-2" >Conversion Optimization</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"   data-toggle="tab" href="#tab-3">Social Media Marketing</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link"   data-toggle="tab" href="#tab-4">Search Engine Optimization</a>
                  </li>
               </ul>
               <div class="tab-content mg-tp-60">
                  <div class="tab-pane fade " id="tab-1">
                     <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                           <div class="bloc-icon">
                              <img src="{{asset('images/Pay-Per-Click.svg')}}" alt="">
                           </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6 text-left">
                           <h3>Pay-Per-Click Advertising</h3>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                           <p>
                              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                           </p>
                           <a href="" class="btn btn-blue">Read more</a>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade show active" id="tab-2">
                     <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                           <div class="bloc-icon">
                              <img src="{{asset('images/Conversion.svg')}}" alt="">
                           </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6 text-left">
                           <h3>Conversion Optimization</h3>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                           <p>
                              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                           </p>
                           <a href="" class="btn btn-blue">Read more</a>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab-3">
                     <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                           <div class="bloc-icon">
                              <img src="{{asset('images/Marketin.svg')}}" alt="">
                           </div>
                        </div>
                        <div class="col-md-6 col-12 col-sm-6 text-left">
                           <h3>Social Media Marketing</h3>
                           <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                           <p>
                              Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                           </p>
                           <a href="" class="btn btn-blue">Read more</a>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="tab-4">
                     <div class="row">
                        <div class="col-md-6 col-12 col-sm-6">
                           <div class="bloc-icon">
                              <img src="{{asset('images/search.svg')}}" alt="">
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
               </div>
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
               <a href="{{ route('loans.create')}}" class="btn btn-white">Apply</a>
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
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
               </p>
               <div class="testimonial-slider">
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="{{asset('images/avatars/1.jpg')}}" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Kathleen Mills</h4>
                           <span>Digital constumer</span>
                        </div>
                     </div>
                     <p>
                        Nam libero tempore, cum soluta nobis est eligen di opt ios cumque <br>nihil impedit quo minus id quo d maxime placeat facere possimus.<br>Sed ut perspi ciatis unde omnis iste natus error sit
                     </p>
                  </div>
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="{{asset('images/avatars/2.jpg')}}" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Jasmine Brown</h4>
                           <span>Digital constumer</span>
                        </div>
                     </div>
                     <p>
                        Nam libero tempore, cum soluta nobis est eligen di opt ios cumque <br>nihil impedit quo minus id quo d maxime placeat facere possimus.<br>Sed ut perspi ciatis unde omnis iste natus
                  </div>
                  <div class="item-inner">
                     <div class="avatar-item">
                        <div class="avatar-photo">
                           <img src="{{asset('images/avatars/3.jpg')}}" alt="">
                        </div>
                        <div class="avatar-info">
                           <h4>Ethan Nguyen</h4>
                           <span>Digital constumer</span>
                        </div>
                     </div>
                     <p>
                        Nam libero tempore, cum soluta nobis est eligen di opt ios cumque <br>nihil impedit quo minus id quo d maxime placeat facere possimus.<br>Sed ut perspi ciatis unde omnis iste natus
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
                     <img src="{{asset('images/clients/logo1.png')}}" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="{{asset('images/clients/logo2.png')}}" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="{{asset('images/clients/logo3.png')}}" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="{{asset('images/clients/logo4.png')}}" class="img-responsive " alt=" " title=" ">
                  </div>
                  <div class="item ">
                     <img src="{{asset('images/clients/logo5.png')}}" class="img-responsive " alt=" " title=" ">
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
@endsection
