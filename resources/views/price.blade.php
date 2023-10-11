@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
   <div class="container">
      <h1 class="hero-title">Prices</h1>
   </div>
</section>
<!-- Hero Section -->
<!-- Pricing Plan Section -->
<section class="pricing-section pt-120 pb-60">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Pricing Plan</span>
               <h3 class="section__title">Our Pricing Plan</h3>
               <p>
                  Necessitatibus sapiente ex earum omnis, commodi doloribus! Iste corrupti error maiores inventore.
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
<!-- Pricing Plan Section -->

<!-- Payment Gateways Section -->
<section class="payment-gateway-section pt-60 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-6 col-md-10">
            <div class="section__header text-center">
               <span class="section__cate">Easy Payment</span>
               <h3 class="section__title">Our Payment System For You</h3>
               <p>
                  Necessitatibus sapiente ex earum omnis, commodi doloribus! Iste corrupti error maiores inventore.
               </p>
            </div>
         </div>
      </div>
      <div class="payment-slider owl-carousel owl-theme">
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621b1433434811645941811.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/6216178f9a7371645614991.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621b146d5e8ad1645941869.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e3542201421646146882.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e3550bd0bc1646146896.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e355dbf0371646146909.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e3568c0fb01646146920.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e3576a10911646146934.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e35ef924e71646147055.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e360db509b1646147085.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e36221cea21646147106.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e362d9864a1646147117.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e363aa12da1646147130.jpg')}}" alt="payment">
         </div>
         <div class="payment__item">
            <img src="{{asset('assets/images/gateway/621e364cc21d41646147148.jpg')}}" alt="payment">
         </div>
      </div>
   </div>
</section>
<!-- Payment Gateways Section -->
@endsection