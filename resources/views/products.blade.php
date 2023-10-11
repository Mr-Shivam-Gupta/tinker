@extends('layouts.master')
@section('content')
<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
    <div class="container">
       <h1 class="hero-title">Products</h1>
    </div>
 </section>
 <!-- Hero Section ends-->
 <div class="container">
 <div class="row">
    <div class="col-sm-12">
      <div class="card shadow p-3 mb-5 bg-white rounded">
        <div class="card-body">
          <h5 class="card-title">Our Products</h5>
          <div class="about-content">
            <div class="section__header">
               <span class="section__cate">Categories</span>
               <h3 class="section__title">Innovative Tools to Grow your Business
                  Scalable solutions to meet your business requirements
               </h3>
               <p>
               <div style="text-align:justify;">
                  <div>We are not just an online version of any Business market, but also, the reflection of each and every MLM business. We are an international financial company engaged in investment activities, which are related to MLM on financial markets by qualified professional traders.</div>
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
                        <i class="las la-arrow-right"></i>                                        
                     </div>
                     <div class="info">
                        <a href="{{url ('product1')}}">
                           <h6 class="subtitle">Direct Sales Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="about__item">
                     <div class="icon">
                        <i class="las la-arrow-right" style="color: #cd0a0a;"></i>                                      
                     </div>
                     <div class="info">
                        <a href="{{url ('product2')}}">
                           <h6 class="subtitle">Learning Management Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="about__item">
                     <div class="icon">
                        <i class="las la-arrow-right"></i>                                        
                     </div>
                     <div class="info">
                        <a href="{{url ('product3')}}">
                           <h6 class="subtitle">Party Plan MLM Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="about__item">
                     <div class="icon">
                        <i class="las la-arrow-right"></i>                                        
                     </div>
                     <div class="info">
                        <a href="{{url ('product4')}}">
                           <h6 class="subtitle">Affiliate Marketing Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="about__item">
                     <div class="icon">
                        <i class="las la-arrow-right"></i>                                        
                     </div>
                     <div class="info">
                        <a href="{{url ('product5')}}">
                           <h6 class="subtitle">MLM CRM Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6 col-md-6 col-sm-12">
                  <div class="about__item">
                     <div class="icon">
                        <i class="las la-arrow-right"></i>                                        
                     </div>
                     <div class="info">
                        <a href="{{url ('product6')}}">
                           <h6 class="subtitle">E-Commerce Shopping Cart Software</h6>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="btn__grp">
               <a href="{{ url('exploremore') }}" class="cmn--btn w-100">Explore Products</a>
            </div>
         </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="card">
        <div class="card-body">
          <img src="{{asset('assets/images/frontend/banner/bag.jpg')}}" class="img-fluid mt-2" alt="" style="height:50%; width:100%;">
        </div>
      </div>
    </div> --}}
  </div>
</div>
@endsection