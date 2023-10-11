@extends('layouts.master')
@section('content')
<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
   <div class="container">
      <h1 class="hero-title">Blog</h1>
   </div>
</section>
<!-- Hero Section -->
<!-- Blog Section -->
<section class="blog-section pt-120 pb-120">
   <div class="container">
      <div class="row g-4 justify-content-center">
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog1')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621cab133a8081646045971.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog1')}}">2020 Top 50 MLM Companies in the U.S.</a>
                  </h5>
                  <a href="{{url ('blog1')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog2')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621cab51dfa241646046033.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog2')}}">Amway Co-Founder Richard DeVos Passes Away at Age 92</a>
                  </h5>
                  <a href="{{url ('blog2')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog3')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621cab5a8a2761646046042.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog3')}}">Melaleuca CEO Frank VanderSloot Promises to Resign if World Record Attempt Fails</a>
                  </h5>
                  <a href="{{url ('blog3')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog4')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621caba48f7f41646046116.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog4')}}">What is Multi-Level Marketing? What You Need to Know About the Industry</a>
                  </h5>
                  <a href="{{url ('blog4')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog5')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621cab660c5a11646046054.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog5')}}">History of Multi Level Marketing in the world</a>
                  </h5>
                  <a href="{{url ('blog5')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 col-sm-10">
            <div class="post__item">
               <div class="post__thumb">
                  <a href="{{url ('blog6')}}">
                  <img src="{{asset('assets/images/frontend/blog/thumb_621ca6983ca221646044824.jpg')}}" alt="blog">
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
                     <a href="{{url ('blog6')}}">Popular Words in the Multi-Level Marketing Industry</a>
                  </h5>
                  <a href="{{url ('blog6')}}" class="text--base">Read More <i class="las la-long-arrow-alt-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Blog Section -->
@endsection