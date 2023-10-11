@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
   <div class="container">
      <h1 class="hero-title">Contact</h1>
   </div>
</section>
<!-- Hero Section -->
<!-- Contact -->
<section class="contact-section pt-120 pb-120 pb-lg-0">
    <div class="container">
       <div class="contact-area">
          <div class="contact-content">
             <div class="section__header">
                <h3 class="section__title">Get In Touch With Us</h3>
                <p>
                   We are here for you always! please fill up the information and feel free ask if you have any query.
                </p>
             </div>
             <div class="contact-content-botom">
                <h5 class="subtitle">More Information</h5>
                <ul class="contact-info">
                   <li>
                      <div class="icon">
                         <i class="las la-map-marker-alt"></i>
                      </div>
                      <div class="cont">
                         <h6 class="name">Address</h6>
                         <span class="info">First Floor, Shop No.121, Simpact Solutions, Golden Trade Center, New Rajendra Nagar, Raipur</span>
                      </div>
                   </li>
                   <li>
                      <div class="icon">
                         <i class="las la-envelope"></i>
                      </div>
                      <div class="cont">
                         <h6 class="name">Email</h6>
                         <a class="text--base" href="mailto:cto.simpact@gmail.com?">cto.simpact@gmail.com</a>
                      </div>
                   </li>
                   <li>
                      <div class="icon">
                         <i class="las la-phone-volume"></i>
                      </div>
                      <div class="cont">
                         <h6 class="name">Phone</h6>
                         <span class="name">Call Us: </span><a href="tel:(+91)871782XXXX" class="text--base">(+91)871782XXXX</a>
                         </span>
                      </div>
                   </li>
                </ul>
             </div>
          </div>
          <div class="contact-wrapper bg--section">
             <div class="section__header">
                <h3 class="section__title">Drop Us a Line</h3>
             </div>
             <form class="contact-form" method="post" action="{{url('contact-form')}}">
               @csrf
                <div class="row">
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label for="name" class="form--label text--title">Full Name <span class="text-danger">(*)</span></label>
                         <input type="text" name="name" value="text-name" class="form-control form--control" placeholder="Your Full Name" id="name" required>
                      </div>
                   </div>
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label for="phone" class="form--label text--title">Phone <span class="text-danger">(*)</span></label>
                         <input type="tel" name="phone" placeholder="Enter 10-digit Mobile number" value="987654321" id="phone" required class="form-control form--control">
                      </div>
                   </div>
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label for="email" class="form--label text--title">Email <span class="text-danger">(*)</span></label>
                         <input type="email" name="email"  value="text.@email.com" id="email" placeholder="Enter E-Mail Address" required class="form-control form--control">
                      </div>
                   </div>
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label for="subject" class="form--label text--title">Subject <span class="text-danger">(*)</span></label>
                         <input type="text" name="subject" placeholder="Write your subject" value="text-subject" id="subject" required class="form-control form--control">
                      </div>
                   </div>
                   <div class="col-sm-12">
                      <div class="form-group">
                         <label for="message" class="form--label text--title">Message <span class="text-danger">(*)</span></label>
                         <textarea name="message" id="message" class="form-control form--control" placeholder="Write your message">text-message</textarea>
                      </div>
                   </div>
                   
                   <div class="col-sm-12">
                      <button type="submit" class="cmn--btn w-100">Send Message</button>
                   </div>
                </div>
             </form>
          </div>
       </div>
    </div>
 </section>
 <!-- Contact -->

@endsection