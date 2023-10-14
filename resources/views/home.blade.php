@extends('layouts.master')
@section('content')
<section class="banner-section bg--title shapes-container">
   <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
         <div class="carousel-item active">
            <div class="banner-shape shape1">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/1.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape2">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/2.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape3">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/3.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape4">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/4.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape5">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/5.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape6">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/6.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape7">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/7.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape8">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/8.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape9">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/9.png')}}" alt="banner-shapes">
            </div>
            <div class="banner-shape shape10">
              <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/10.png')}}" alt="banner-shapes">
            </div>
            <div class="container">
               <div class="banner__wrapper">
                  <div class="banner__wrapper-content">
                     <h2 class="banner__wrapper-content-title">Multilevel Marketing Platform</h2>
                     <p class="banner__wrapper-content-txt">
                        Win more commissions by making more members and increase your capital. And you can earn more money by viewing advertisements on our site.
                     </p>
                     <div class="btn__grp white-btns">
                        <a href="{{url('login')}}" class="cmn--btn">sign in</a>
                        <a href="{{url('register')}}" class="cmn--btn cmn--btn1">sign up</a>
                     </div>
                  </div>
                  <div class="banner__wrapper-thumb">
                    <img loading="lazy" src="{{asset('assets/images/frontend/banner/binaryMLM.png')}}" alt="banner">
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item">

            <div class="container">
               <div class="banner__wrapper">
                  <div class="banner__wrapper-content">
                     <h1 class="banner__wrapper-content-title">Web Development</h1>
                     <p class="banner__wrapper-content-txt">
                        We've got the expertise to create a website that will perform well on search engines and capture your target audience. Contact us today!
                     </p>
                     <div class="btn__grp white-btns">
                        <a href="{{url('login')}}" class="cmn--btn">sign in</a>
                        <a href="{{url('register')}}" class="cmn--btn cmn--btn1">sign up</a>
                     </div>
                  </div>
                  <div class="banner__wrapper-thumb">
                    <img loading="lazy" src="{{asset('assets/images/frontend/banner/wbdd.jpg')}}" alt="banner">
                  </div>
               </div>
            </div>
         </div>
         <div class="carousel-item ">
            
            <div class="container">
               <div class="banner__wrapper">
                  <div class="banner__wrapper-content">
                     <h2 class="banner__wrapper-content-title">Mobile Application Development</h2>
                     <p class="banner__wrapper-content-txt"> 
                        Mobile Websites are Compatible Across Devices. A single mobile website can reach users across many different types of mobile devices, whereas native apps require a separate version to be developed for each type of device.
                     </p>
                     <div class="btn__grp white-btns">
                        <a href="{{url('login')}}" class="cmn--btn">sign in</a>
                        <a href="{{url('register')}}" class="cmn--btn cmn--btn1">sign up</a>
                     </div>
                  </div>
                  <div class="banner__wrapper-thumb">
                    <img loading="lazy" src="{{asset('assets/images/frontend/banner/mb_n.png')}}" alt="banner">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="about-section pt-120 pb-60">
   <div class="container">
      <div class="row justify-content-between flex-wrap-reverse gy-4">
         <div class="col-lg-6">
            <div class="about__thumb">
               <div class="thumb">
                 <img loading="lazy" src="{{asset('assets/images/frontend/about/6215d5c3b5a6d1645598147.jpg')}}" alt="about">
                  <a href="https://www.youtube.com/watch?v=lpGXqAX7_v8" class="video-button" data-lightbox><i class="las la-play"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="ps-xl-4 ps-xxl-5">
               <div class="about-content">
                  <div class="section__header">
                     <span class="section__cate">About Us</span>
                     <h3 class="section__title">15 Years of Trust</h3>
<p>
<div style="text-align:justify;">
<div>We are more than just an online representation of a business market; we are a reflection of the entire MLM industry. Our international financial company is actively involved in investment activities connected to MLM within the financial markets, led by qualified professional traders.</div>
</div>
                     <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                     <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                     <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                     <blockquote style="margin:0 0 0 40px;border:none;padding:0px;"></blockquote>
                     </p>
                  </div>
                  <div class="row g-4">
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about__item">
                           <div class="icon">
                              <i class="las la-gem"></i>                                        
                           </div>
                           <div class="info">
                           <h6 class="subtitle">Premier Platform with Over 1000+ Satisfied Clients</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about__item">
                           <div class="icon">
                              <i class="las la-chart-line"></i>                                        
                           </div>
                           <div class="info">
                           <h6 class="subtitle">Expanding Your Business Worldwide</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about__item">
                           <div class="icon">
                              <i class="las la-award"></i>                                        
                           </div>
                           <div class="info">
                           <h6 class="subtitle">We Offer a Full 100% Money-Back Guarantee Within 30 Days</h6>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="about__item">
                           <div class="icon">
                              <i class="las la-headphones-alt"></i>                                        
                           </div>
                           <div class="info">
                           <h6 class="subtitle">Our Customer Support is Available 24/7</h6>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="btn__grp">
                     <a href="{{url('about')}}" class="cmn--btn">More About</a>
                     <a href="{{url('about')}}" class="cmn--btn">Explore More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
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
<section class="how-to-section bg--title shapes-container">
   <div class="banner-shape shape1">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/1.png')}}" alt="banner/shapes">
   </div>
   <div class="banner-shape shape2">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/2.png')}}" alt="banner/shapes">
   </div>
   <div class="banner-shape shape3">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/3.png')}}" alt="banner/shapes">
   </div>
   <div class="banner-shape shape4">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/4.png')}}" alt="banner/shapes">
   </div>
   <div class="banner-shape shape6">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/6.png')}}" alt="banner/shapes">
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center text-white">
               <span class="section__cate text-white">How</span>
               <h3 class="section__title text-white">Getting Started</h3>
<p>
   Follow these steps to begin using the system.
</p>

            </div>
         </div>
      </div>
      <div class="how--wrapper">
         <div class="how__item">
            <div class="how__item-icon text--base">
               <i class="las la-user-plus"></i>                    
            </div>
            <div class="how__item-content">
               <h6 class="how__item-title">Create An Account</h6>
            </div>
         </div>
         <div class="how__item">
            <div class="how__item-icon text--base">
               <i class="las la-hand-pointer"></i>                    
            </div>
            <div class="how__item-content">
               <h6 class="how__item-title">Choose Plan</h6>
            </div>
         </div>
         <div class="how__item">
            <div class="how__item-icon text--base">
               <i class="las la-users"></i>                    
            </div>
            <div class="how__item-content">
               <h6 class="how__item-title">Invite More People</h6>
            </div>
         </div>
         <div class="how__item">
            <div class="how__item-icon text--base">
               <i class="las la-wallet"></i>                    
            </div>
            <div class="how__item-content">
               <h6 class="how__item-title">Get Commission</h6>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- <div class="cmn--modal modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Business Volume (BV) info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <span>
            When someone from your below tree subscribe this plan, You will get this Business Volume  which will be used for matching bonus                </span>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn--danger" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="cmn--modal modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Referral Commission info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <span>
            When Your Direct-Referred/Sponsored  User Subscribe in <b> ANY PLAN </b>, You will get this amount                </span>
            <p class="text-success mt-4"> This is the reason You should Choose a Plan With Bigger Referral Commission</p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn--danger" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
<div class="cmn--modal modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Commission to tree info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <span>
            When someone from your below tree subscribe this plan, You will get this amount as Tree Commission                </span>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn--danger" data-bs-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div> -->
<section class="pricing-section pt-120 pb-60">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Pricing Plan</span>
               <h3 class="section__title">Our Pricing Structure</h3>
               <p>
                  We offer competitive pricing plans designed to meet your needs. Our commitment is to provide value and quality.
               </p>
            </div>
         </div>
      </div>
      <div class="price-wrapper">
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>100
               </div>
               <h3 class="pricing-title">Basic</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">0
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 5
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 0.03
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>300
               </div>
               <h3 class="pricing-title">Standard</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">30
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 15
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 0.66
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>500
               </div>
               <h3 class="pricing-title">Premium</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">50
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 25
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 0.66
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>1000
               </div>
               <h3 class="pricing-title">Silver</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">100
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 50
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 0.99
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>3000
               </div>
               <h3 class="pricing-title">Gold</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">300
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 150
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 1.5
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
         <div class="pricing-item">
            <div class="pricing-deco">
               <div class="wave">&nbsp;</div>
               <div class="pricing-price"><span class="pricing-currency">$</span>5000
               </div>
               <h3 class="pricing-title">Plutinum</h3>
            </div>
            <ul class="pricing-feature-list">
               <li class="pricing-feature">
                  Business Volume (BV) : <span class="amount">500
                  <span data-bs-target="#exampleModal" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Referral Commission : <span class="amount">$ 250
                  <span data-bs-target="#exampleModal2" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
               <li class="pricing-feature">
                  Commission To Tree : <span class="amount">$ 5.5
                  <span data-bs-target="#exampleModal3" data-bs-toggle="modal"><i class="fas la-question"></i></span>
               </li>
            </ul>
            <div class="text-center pb-4 mb-2">
               <a class="cmn--btn" href="{{url('login')}}">Subscribe now</a>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="team-section pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Survey</span>
               <h3 class="section__title">Our Leading Survey Participants</h3>
<p>
   Meet some of our most accomplished survey earners, who have demonstrated remarkable dedication and success.
</p>
            </div>
         </div>
      </div>
      <div class="row g-4">
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/user/profile/1646148109_testuser.jpg')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">Jane Smith</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">fgd dfdsfd</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">demo holo</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">berke uysal</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">alaa gamal</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
         <div class="col-xl-4 col-md-6">
            <div class="team__item">
               <div class="team__thumb">
                 <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="profile">
               </div>
               <div class="team__content">
                  <h6 class="team__title">Zar Gul</h6>
                  <span class="info">$19</span>
                  <ul class="social__icons"></ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="counter-section bg--title shapes-container">
   <div class="banner-shape shape1">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/1.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape2">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/2.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape3">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/3.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape4">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/4.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape6">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/6.png')}}" alt="banner-shapes">
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center text-white">
               <span class="section__cate text-white">Counter</span>
               <h3 class="section__title text-white">Our Approach</h3>
<p>
   Discover our strategic direction and the innovative solutions we offer to meet your needs.
</p>

            </div>
         </div>
      </div>
      <div class="row justify-content-center g-4">
         <div class="col-lg-3 col-sm-6">
            <div class="counter-item">
               <div class="counter-header">
                  <h3 class="title rafcounter" data-counter-end="1300">00</h3>
                  <h3 class="title">+</h3>
               </div>
               <div class="counter-content">
                  Total Users
               </div>
               <div class="icon">
                  <i class="fas fa-users"></i>                        
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter-item">
               <div class="counter-header">
                  <h3 class="title rafcounter" data-counter-end="8">00</h3>
                  <h3 class="title">M+</h3>
               </div>
               <div class="counter-content">
                  Total Withdraw
               </div>
               <div class="icon">
                  <i class="las la-hand-holding-usd"></i>                        
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter-item">
               <div class="counter-header">
                  <h3 class="title rafcounter" data-counter-end="10">00</h3>
                  <h3 class="title">M+</h3>
               </div>
               <div class="counter-content">
                  Total Deposit
               </div>
               <div class="icon">
                  <i class="las la-wallet"></i>                        
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-sm-6">
            <div class="counter-item">
               <div class="counter-header">
                  <h3 class="title rafcounter" data-counter-end="9">00</h3>
                  <h3 class="title">M</h3>
               </div>
               <div class="counter-content">
                  Total Invest
               </div>
               <div class="icon">
                  <i class="las la-money-bill-wave-alt"></i>                        
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="transaction-section pt-120 pb-60">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Transaction</span>
               <h3 class="section__title">Our Most Recent Transaction</h3>
<p>
   Explore the details of our latest transaction and learn more about our commitment to excellence.
</p>

            </div>
         </div>
      </div>
      <ul class="nav nav-tabs nav--tabs">
         <li>
            <a class="active" href="#deposit" data-bs-toggle="tab">Deposit</a>
         </li>
         <li>
            <a href="#withdraw" data-bs-toggle="tab">Withdraw</a>
         </li>
      </ul>
      <div class="tab-content">
         <div class="tab-pane fade show active" id="deposit">
            <table class="table cmn--table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Plan</th>
                     <th>Date</th>
                     <th>Amount</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="image">
                           </div>
                           <div class="content">Vishal Sharma</div>
                        </div>
                     </td>
                     <td data-label="Plan">Plutinum</td>
                     <td data-label="Date">23 January, 2023</td>
                     <td data-label="Amount">10000 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="image">
                           </div>
                           <div class="content">Vishal Sharma</div>
                        </div>
                     </td>
                     <td data-label="Plan">Plutinum</td>
                     <td data-label="Date">23 January, 2023</td>
                     <td data-label="Amount">100 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="image">
                           </div>
                           <div class="content">Test TT</div>
                        </div>
                     </td>
                     <td data-label="Plan">No plan</td>
                     <td data-label="Date">10 October, 2022</td>
                     <td data-label="Amount">5 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/user/profile/1669637107_username.jpg')}}" alt="image">
                           </div>
                           <div class="content">Test User</div>
                        </div>
                     </td>
                     <td data-label="Plan">Basic</td>
                     <td data-label="Date">27 June, 2022</td>
                     <td data-label="Amount">10000 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/user/profile/1646148109_testuser.jpg')}}" alt="image">
                           </div>
                           <div class="content">Jane Smith</div>
                        </div>
                     </td>
                     <td data-label="Plan">Standard</td>
                     <td data-label="Date">01 March, 2022</td>
                     <td data-label="Amount">500 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/user/profile/1646145673_testuser2.jpg')}}" alt="image">
                           </div>
                           <div class="content">Austin Ballard</div>
                        </div>
                     </td>
                     <td data-label="Plan">Standard</td>
                     <td data-label="Date">01 March, 2022</td>
                     <td data-label="Amount">2000 USD</td>
                  </tr>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/user/profile/1646148109_testuser.jpg')}}" alt="image">
                           </div>
                           <div class="content">Jane Smith</div>
                        </div>
                     </td>
                     <td data-label="Plan">Standard</td>
                     <td data-label="Date">01 March, 2022</td>
                     <td data-label="Amount">5000 USD</td>
                  </tr>
               </tbody>
            </table>
         </div>
         <div class="tab-pane fade" id="withdraw">
            <table class="table cmn--table">
               <thead>
                  <tr>
                     <th>Name</th>
                     <th>Plan</th>
                     <th>Date</th>
                     <th>Amount</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td data-label="Name">
                        <div class="author">
                           <div class="thumb">
                             <img loading="lazy" src="{{asset('assets/images/avatar.png')}}" alt="image">
                           </div>
                           <div class="content">
                              ROBIUL ISLAM
                           </div>
                        </div>
                     </td>
                     <td data-label="Plan">Standard</td>
                     <td data-label="Date">07 March, 2022</td>
                     <td data-label="Amount">18 USD</td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</section>
<section class="blog-section pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Blog Posts</span>
               <h3 class="section__title"> Latest News and Valuable Tips</h3>
<p>
   Explore informative content and practical tips to enhance your experience.
</p>

            </div>
         </div>
      </div>
      <div class="row g-4 justify-content-center">
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url('blog1')}}">
                 <img loading="lazy" src="{{asset('assets/images/frontend/blog/thumb_621cab133a8081646045971.jpg')}}" alt="blog">
                  </a>
                  <div class="post__date">
                     <h4 class="date">30</h4>
                     <span>Nov</span>
                  </div>
               </div>
               <div class="post__content">
                  <div class="overflow-hidden">
                     <div class="post__meta">
                        <a class="item">
                        <i class="las la-user"></i>
                        <span>Admin</span>
                        </a>
                     </div>
                  </div>
                  <h5 class="post__title">
                     <a href="{{url('blog1')}}">2020 Top 50 MLM Companies in the U.S.</a>
                  </h5>
                  <a href="{{url('blog1')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url('blog2')}}">
                 <img loading="lazy" src="{{asset('assets/images/frontend/blog/thumb_621cab51dfa241646046033.jpg')}}" alt="blog">
                  </a>
                  <div class="post__date">
                     <h4 class="date">30</h4>
                     <span>Nov</span>
                  </div>
               </div>
               <div class="post__content">
                  <div class="overflow-hidden">
                     <div class="post__meta">
                        <a class="item">
                        <i class="las la-user"></i>
                        <span>Admin</span>
                        </a>
                     </div>
                  </div>
                  <h5 class="post__title">
                     <a href="{{url('blog2')}}">Amway Co-Founder Richard DeVos Passes Away at Age 92</a>
                  </h5>
                  <a href="{{url('blog2')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url('blog3')}}">
                 <img loading="lazy" src="{{asset('assets/images/frontend/blog/thumb_621cab5a8a2761646046042.jpg')}}" alt="blog">
                  </a>
                  <div class="post__date">
                     <h4 class="date">30</h4>
                     <span>Nov</span>
                  </div>
               </div>
               <div class="post__content">
                  <div class="overflow-hidden">
                     <div class="post__meta">
                        <a class="item">
                        <i class="las la-user"></i>
                        <span>Admin</span>
                        </a>
                     </div>
                  </div>
                  <h5 class="post__title">
                     <a href="{{url('blog3')}}">Melaleuca CEO Frank VanderSloot Promises to Resign if World Record Attempt Fails</a>
                  </h5>
                  <a href="{{url('blog3')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="clients-section bg--title shapes-container">
   <div class="banner-shape shape1">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/1.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape2">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/2.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape3">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/3.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape4">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/4.png')}}" alt="banner-shapes">
   </div>
   <div class="banner-shape shape6">
     <img loading="lazy" src="{{asset('assets/templates/basic/images/banner/shapes/6.png')}}" alt="banner-shapes">
   </div>
   <div class="container">
      <div class="section__title d-flex flex-wrap justify-content-between align-items-center">
         <h3 class="title mb-3 me-2 text-white">Our Happy Client</h3>
      </div>
      <div class="row g-3">
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Agun Islam</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     cusamus debitis consequuntur pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, l
                  </p>
                  <span class="date">26 Feb, 2022 07:52 PM</span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Mr Rasel</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, laborum dolore, sequi asperiores.
                  </p>
                  <span class="date">26 Feb, 2022 07:52 PM</span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Mohamamd Islam</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     Accusamus debitis consequuntur pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, laborum dolore
                  </p>
                  <span class="date">26 Feb, 2022 07:51 PM</span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Zahidul Islam</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     Accusamus debitis consequuntur pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, laborum dolore, sequi asperiores.
                  </p>
                  <span class="date">23 Feb, 2022 12:04 AM</span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Mumu</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     Accusamus debitis consequuntur pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, laborum dolore, sequi asperiores.
                  </p>
                  <span class="date">23 Feb, 2022 12:03 AM</span>
               </div>
            </div>
         </div>
         <div class="col-sm-6 col-lg-4">
            <div class="client__item">
               <div class="client__item-title">
                  <h6 class="name">Sifatullah Shuvo</h6>
                  <div class="ratings">
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                     <span>
                     <i class="las la-star"></i>
                     </span>
                  </div>
               </div>
               <div class="client__item-body">
                  <p>
                     Accusamus debitis consequuntur pariatur explicabo hic neque, vero qui maiores enim ad cupiditate placeat eos quia a deleniti, laborum dolore, sequi asperiores.
                  </p>
                  <span class="date">23 Feb, 2022 12:03 AM</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="subscribe" class="subscribe-section pt-60 pb-60"
   >
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Subscribe</span>
               <h3 class="section__title">Dont Forget To Subscribe</h3>
               <p>
                  Necessitatibus sapiente ex earum omnis, commodi doloribus!                    
               </p>
            </div>
         </div>
      </div>
      <div class="row justify-content-center">
         <div class="col-lg-7 col-md-10">
            <div class="subscribe-content">
               <form class="subscribe-form" method="post" action="https://www.simpact.co.in//subscriber">
                  <input type="hidden" name="_token" value="TPXhAiNNHlX7p8Usss5nBHeLx1552mXDKNMZf91b">                        
                  <div class="input-group">
                     <input type="email" name="email" class=" form-control form--control rounded-pill"  placeholder="Enter Your email address" required>
                     <button class="cmn--btn ml-2 rounded-circle" type="submit">
                     <i class="fas fa-paper-plane"></i>
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>

<section class="payment-gateway-section pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Easy Payment</span>
               <h3 class="section__title">Our Custom Payment System</h3>
<p>
   Discover the convenience and flexibility of our tailored payment system designed with you in mind.
</p>

            </div>
         </div>
      </div>
      <div class="payment-slider owl-carousel owl-theme">
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621b1433434811645941811.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/6216178f9a7371645614991.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621b146d5e8ad1645941869.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e3542201421646146882.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e3550bd0bc1646146896.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e355dbf0371646146909.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e3568c0fb01646146920.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e3576a10911646146934.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e35ef924e71646147055.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e360db509b1646147085.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e36221cea21646147106.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e362d9864a1646147117.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e363aa12da1646147130.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
           <img loading="lazy" src="{{asset('assets/images/gateway/621e364cc21d41646147148.jpg')}}" alt="payment">
         </div>
      </div>
   </div>
</section>

@endsection