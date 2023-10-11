@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="hero-section bg--title shapes-container">
    <div class="container">
       <h1 class="hero-title">Login</h1>
    </div>
 </section>
 <!-- Hero Section -->
<!-- Account Section -->
<div id="login">
   <h3 class="text-center text-white pt-2">Login form</h3>
   <div class="container">
       <div id="login-row" class="row justify-content-center align-items-center">
           <div id="login-column" class="col-md-6">
               <div id="login-box" class="col-md-12">
                   <form id="login-form" class="form" action="" method="post">
                       <h3 class="text-center text-info">Login</h3>
                       <div class="form-group">
                           <label for="username" class="text-info">Username:</label><br>
                           <input type="text" name="username" id="username" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="password" class="text-info">Password:</label><br>
                           <input type="password" name="password" id="password" class="form-control">
                       </div>
                       <div class="form-group">
                           <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                           <input type="submit" name="submit" class="btn btn-info btn-md mt-2 w-100" value="submit">
                       </div>
                       <div id="register-link" class="text-right">
                           <a href="{{url('register')}}" class="text-info">Create account?</a>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>














{{-- <div class="account-section bg_img" data-background="{{asset('assets/images/frontend/sign_in/621752517dacf1645695569.png')}}">
   <div class="account__section-wrapper">
      <div class="account__section-content">
         <div class="w-75">  
            <div class="section__header text-white">
               <h4 class="section__title mb-0 text-white">Sign In</h4>
            </div>
            <form class="account--form row g-4" method="post" action="https://www.simpact.co.in//login"
               onsubmit="return submitUserForm();">
               <input type="hidden" name="_token" value="TPXhAiNNHlX7p8Usss5nBHeLx1552mXDKNMZf91b">                        
               <div class="col-sm-12">
                  <label for="username" class="form--label-2">Your Name</label>
                  <input type="text" id="username" name="username" value="" placeholder="Username" required class="form-control form--control-2">
               </div>
               <div class="col-sm-12">
                  <label for="myInputThree" class="form--label-2">Your Password</label>
                  <input type="password" id="myInputThree" name="password" placeholder="Password" required class="form-control form--control-2">
               </div>
               <div class="col-lg-12 form-group my-3">
               </div>
               <div class="col-sm-12">
                  <button type="submit" class="cmn--btn w-100">Sign In</button>
               </div>
            </form>
            <div class="mt-4 text--white">
               <span class="d-block">
               Forget Password ? <a href="password/reset.html" class="text--base">Reset Password</a>
               </span>
               <span class="d-block">
               Create Account ? <a href="{{url('register')}}" class="text--base">Create New</a>
               </span>
            </div>
         </div>
      </div>
   </div>
</div> --}}
<!-- Account Section -->
<script src="assets/global/js/jquery-3.6.0.min.js"></script>
<script src="assets/templates/basic/js/isotope.pkgd.min.js"></script>
<script src="assets/global/js/bootstrap.min.js"></script>
<script src="assets/templates/basic/js/rafcounter.min.js"></script>
<script src="assets/templates/basic/js/lightbox.min.js"></script>
<script src="assets/templates/basic/js/owl.min.js"></script>
<script src="assets/templates/basic/js/main.js"></script>
<link rel="stylesheet" href="assets/global/css/iziToast.min.css">
<script src="assets/global/js/iziToast.min.js"></script>
<script>
   'use strict';
   function notify(status,message) {
       iziToast[status]({
           message: message,
           position: "topRight"
       });
   }
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=Demo"></script>
<script>
   window.dataLayer = window.dataLayer || [];
   function gtag(){dataLayer.push(arguments);}
   gtag("js", new Date());
   
   gtag("config", "Demo");
</script>
<script>
   $(document).on("change", ".langSel", function () {
       window.location.href = "https://www.simpact.co.in//change/" + $(this).val();
   });
</script>
<script>
   function submitUserForm() {
       var response = grecaptcha.getResponse();
       if (response.length == 0) {
           document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">Captcha field is required</span>';
           return false;
       }
       return true;
   }
   function verifyCaptcha() {
       document.getElementById('g-recaptcha-error').innerHTML = '';
   }
</script>
<script>
   var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
   (function(){
   var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
   s1.async=true;
   s1.src='https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
   s1.charset='UTF-8';
   s1.setAttribute('crossorigin','*');
   s0.parentNode.insertBefore(s1,s0);
   })();
</script>
<script>
   if (window.top != window.self) {
   document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="'+window.self.location+'" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
   }
</script>
<script>
   adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
   adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
   adroll_version = "2.0";
   (function(w, d, e, o, a) {
       w.__adroll_loaded = true;
       w.adroll  = w.adroll  || [];
       w.adroll.f = [ 'setProperties', 'identify', 'track' ];
       var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
               + "/roundtrip.js";
       for (a = 0; a < w.adroll.f.length; a++) {
           w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
               return function() {
                   w.adroll.push([ n, arguments ])
               }
           })(w.adroll.f[a])
       }
       e = d.createElement('script');
       o = d.getElementsByTagName('script')[0];
       e.async  = 1;
       e.src  = roundtripUrl;
       o.parentNode.insertBefore(e, o);
   })(window, document);
   adroll.track("pageView");
</script>
<script async src="../../pagead2.googlesyndication.com/pagead/js/f6b5c.txt?client=ca-pub-8940522890323334" crossorigin="anonymous"></script>
@endsection