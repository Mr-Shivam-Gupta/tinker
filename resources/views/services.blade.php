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
               <h3 class="section__title">Why We are The Best</h3>
               <p>
                  Necessitatibus sapiente ex earum omnis, commodi doloribus! Iste corrupti error maiores inventore.
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
                     We support a variety of the most popular digital currencies.
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
                     We always provide the best 
                     support to all our users.
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
                     Currency stored on our servers is covered by our insurance policy.
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
                     This site can be easily translated into your own language.
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
                     Gives ultimate security with 2FA authentication with this system
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
                     You can get the golden opportunity to actually win a lot of profit here.
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Service Section -->
@endsection