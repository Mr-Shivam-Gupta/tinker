@extends('layouts.master')
@section('content')
<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
   <div class="container">
      <h1 class="hero-title">Direct Sales Software</h1>
   </div>
</section>
<!-- Hero Section ends-->
<div class="container">
<div class="row">
<div class="card w-100 d-flex justify-content-center" >
<div class="card-body">
{{-- <h5 class="card-title">Direct Sales Software</h5> --}}
<h6 class="card-title mb-2 text-muted h4 mt-2">The complete software solution to meet the diverse challenges in your direct selling business.
   We have ready-to-launch direct sales software platforms that are customizable to your varied marketing demands.
</h6>
{{-- source cards  --}}
<div class="container-inner">
   <div class="mx-auto" style="max-width: 1300px;">
      <h2 class="card-title h2 mb-40 aos aos-init aos-animate mt-3" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800" style="">Your strategy, Our solution</h2>
      <p class="h3 aos aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="800">We have ready-to-launch direct sales software platforms that are customizable to your varied marketing demands.</p>
      <hr>
      <div class="card-section-v3 my-3 my-md-4 my-lg-5">
         <div class="card-section py-20">
            <div class="row justify-content-center">
               <div class="col-xl-4 col-lg-6 col-md-6 mb-4-5 aos aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                  <div class="border-0 border-round-5 card h-100 p-4 position-relative text-center">
                     {{-- <img alt="Find the right prospects" class="mb-3 pb-10 mx-auto w-20 h-auto" width="150" height="150" src="https://assets.epixelmlmsoftware.com/sites/default/files/multilevel-marketing.svg" data-src="https://assets.epixelmlmsoftware.com/sites/default/files/multilevel-marketing.svg"> --}}
                     <div class="mb-3"> <span class="d-inline-block font-weight-normal px-3 py-2 text-white" style="background: #c61a09;font-size: 16px;border-radius: 13px;">Multilevel Marketing</span></div>
                     <h2 class="text-s-1-4 text-s-1-4 text-transform-unset font-weight-normal mb-3 py-10" style="color: #c61a09;">Fuel your network expansion.</h2>
                     <p class="mb-3" style="color: #c61a09;">A business-ready solution with highly configurable options for all MLM compensation plans.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 mb-4-5 aos aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                  <div class="border-0 border-round-5 card h-100 p-4 position-relative text-center">
                     {{-- <img alt="Find the right prospects" class="mb-3 pb-10 mx-auto w-20 h-auto" width="150" height="120" src="https://assets.epixelmlmsoftware.com/sites/default/files/party-sales.svg" data-src="https://assets.epixelmlmsoftware.com/sites/default/files/party-sales.svg"> --}}
                     <div class="mb-3"> <span class="d-inline-block font-weight-normal px-3 py-2 text-white" style="background: #c61a09;font-size: 16px;border-radius: 13px;">Party Sales</span></div>
                     <h2 class="text-s-1-4 text-s-1-4 text-transform-unset font-weight-normal mb-3 py-10" style="color: #c61a09;">Make your Home Party Sales more engaging and rewarding.</h2>
                     <p class="mb-3" style="color: #c61a09;">Establish your home party sales with out-of-the-box tools and techniques for a more productive and engaging work-from-party experience.</p>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-6 col-md-6 mb-4-5 aos aos-init aos-animate" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
                  <div class="border-0 border-round-5 card h-100 p-4 position-relative text-center">
                     {{-- <img alt="Find the right prospects" class="mb-3 pb-10 mx-auto w-20 h-auto" width="150" height="150" src="https://assets.epixelmlmsoftware.com/sites/default/files/affiliate-marketing.svg" data-src="https://assets.epixelmlmsoftware.com/sites/default/files/affiliate-marketing.svg"> --}}
                     <div class="mb-3"> <span class="d-inline-block font-weight-normal px-3 py-2 text-white" style="background: #c61a09;font-size: 16px;border-radius: 13px;">Affiliate Marketing</span></div>
                     <h2 class="text-s-1-4 text-s-1-4 text-transform-unset font-weight-normal mb-3 py-10" style="color: #c61a09;">Witness exponential traffic to your website</h2>
                     <p class="mb-3" style="color: #c61a09;">Manage, track, and optimize your affiliate marketing with intelligent marketing automation.</p>
                  </div>
               </div>
            </div>
            <a href="{{url('product2')}}" class="btn btn-danger card-link w-100 rounded-pill mt-4 mb-4" style="background-color: #c61a09">Next Product >></a>
         </div>
      </div>
   </div>
</div>
@endsection