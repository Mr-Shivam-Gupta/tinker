@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
    <div class="container">
       <h1 class="hero-title">Services</h1>
    </div>
 </section>
 <!-- Hero Section -->

 <!-- Service Section -->
<section  class="feature-section pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Our Services</span>
               <h3 class="section__title">Why Choose Us</h3>
               <p>
               We fulfill your requirements with exceptional dedication and expertise, ensuring your complete satisfaction. Our relentless commitment to quality and innovation sets us apart from the rest.
               </p>
            </div>
         </div>
      </div>
      <div class="row g-3 g-sm-4">
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="fas fa-globe-americas"></i>                        
               </div>
               <div class="feature__item-cont">
                  <h6 class="feature__item-cont-title">Global</h6>
                  <p>
                  We provide support for a wide range of popular digital currencies.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="far fa-life-ring"></i>                        
               </div>
               <div class="feature__item-cont">
                 <a href="{{url('contact')}}"> <h6 class="feature__item-cont-title">Support</h6></a>
                  <p>
                  Our commitment is to consistently offer top-notch support to all our users.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="las la-chart-line"></i>                        
               </div>
               <div class="feature__item-cont">
                  <a href="{{url('price')}}"><h6 class="feature__item-cont-title">Currency</h6></a>
                  <p>
                  Our insurance policy provides coverage for the currency stored on our servers.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="fas fa-language"></i>                        
               </div>
               <div class="feature__item-cont">
                  <h6 class="feature__item-cont-title">Language</h6>
                  <p>
                  Our website can be effortlessly translated into your preferred language.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="fas fa-lock"></i>                        
               </div>
               <div class="feature__item-cont">
                  <h6 class="feature__item-cont-title">Secure</h6>
                  <p>
                  Enhances security through the use of 2FA authentication within this system.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6">
            <div class="feature__item">
               <div class="feature__item-icon">
                  <i class="fas fa-hand-holding-heart"></i>                        
               </div>
               <div class="feature__item-cont">
                  <h6 class="feature__item-cont-title">Profitable</h6>
                  <p>
                  This presents a golden opportunity for you to potentially achieve substantial profits.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Service Section -->
@endsection