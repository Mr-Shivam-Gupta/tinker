@extends('layouts.master')
@section('content')
<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
    <div class="container">
       <h1 class="hero-title">Explore Products</h1>
    </div>
 </section>
 <!-- Hero Section ends-->
 <div class="container">
 {{-- card 1 & 2  --}}
 <div class="row">
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2  border border-danger ">
      <div class="card">
        <div class="card-body">
          <a href="{{url('product1')}}"><h5 class="card-title">Direct Sales Software</h5></a>
          <p class="card-text">Make your direct sales business more effective, engaging, and rewarding with Epixel Direct Sales Software. An all-in-one fully scalable platform to address your expanding direct selling, affiliate marketing, party sales, and network marketing demands. A skillfully architectured platform built on high-end technology to attend to the marketing strategies of your preference.          </p>
          <a href="{{url('contact')}}" class="btn btn-danger justify-content-end">Schedule Call</a>
        </div>
      </div>
    </div>
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2  border border-danger">
      <div class="card">
        <div class="card-body">
          <a href="#"><h5 class="card-title">Learning Management Software</h5></a>
          <p class="card-text">Learning Management System refers to a software framework for organizations to create, organize, deliver and manage courses, training programs, or learning and other development programs. It can embed any sort of media to produce the best of training through audio, video, slides, PDF, notes, etc, and provide certificates upon course completion too.</p>
          <a href="{{url('contact')}}" class="btn btn-danger ">Schedule Call</a>
        </div>
      </div>
    </div>
  </div>
 {{-- card 1 & 2 ends  --}}

 {{-- card 3 & 4  --}}
 <div class="row">
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2  border border-danger">
      <div class="card">
        <div class="card-body">
          <a href="#"><h5 class="card-title">Party Plan MLM Software</h5></a>
          <p class="card-text">Party Plan MLM software is a software system suitable for MLM companies where the web-based application is used to manage, organize and host home-based sales parties.
              <ol>
                <li>Benefits:</li>
                <li>ENGAGE AND MANAGE YOUR HOME PARTY BUSINESS EASILY</li>
                <li> ENSURE YOUR HOME PARTY BUSINESS IS STABLE & SUSTAINABLE WITH ADVANCED FEATURES</li>
                <li>HOST TRAINING PROGRAM PARTY CALENDAR COMPENSATION CALCULATOR PAYOUT COMPRESSION</li>
              </ol>
            </p>
          <a href="{{url('contact')}}" class="btn btn-danger ">Schedule Call</a>
        </div>
      </div>
    </div>
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2  border border-danger">
      <div class="card">
        <div class="card-body">
          <a href="#"><h5 class="card-title">Affiliate Marketing Software</h5></a>
          <p class="card-text">MLM affiliate software is a set of tools designed to streamline affiliate marketing and promotions for the network marketing business. It enables organizations to manage their affiliate networks easily and provides them with the right tools to boost their productivity.
            <ol>
              <li>Benefits:</li>
              <li>LOW START-UP COSTS</li>
              <li>HIGHER ROI</li>
              <li>ENHANCE BRAND RECOGNITION</li>
            </ol>

          </p>
          <a href="{{url('contact')}}" class="btn btn-danger ">Schedule Call</a>
        </div>
      </div>
    </div>
  </div>
 {{-- card 3 & 4 ends  --}}

 {{-- card 5 & 6  --}}
 <div class="row">
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2  border border-danger">
      <div class="card">
        <div class="card-body">
          <a href="#"><h5 class="card-title">MLM CRM Software</h5></a>
          <p class="card-text ">An MLM CRM software refers to a software system that helps with hassle-free customer relationship management of the entire network marketing business with a personalized customer approach and a rewarding customer experience.</p>
          <a href="{{url('contact')}}" class="btn btn-danger ">Schedule Call</a>
        </div>
      </div>
    </div>
    <div class="w-50 col-sm-6 shadow bg-white rounded mt-2   border border-danger">
      <div class="card">
        <div class="card-body">
          <a href="#"><h5 class="card-title">E-Commerce Shopping Cart Software</h5></a>
          <p class="card-text">An Ecommerce Shopping Cart Software is a software system that helps with setting up a customizable multi-vendor shopping cart. This is further supported by basic product management hosting and support round the clock.</p>
          <a href="{{url('contact')}}" class="btn btn-danger">Schedule Call</a>
        </div>
      </div>
    </div>
  </div>
 {{-- card 5 & 6 ends  --}}
</div>



@endsection