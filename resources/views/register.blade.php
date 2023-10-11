   @extends('layouts.master')
   @section('content')

   <!-- Hero Section -->
   <section class="hero-section bg--title shapes-container">
      <div class="container">
         <h1 class="hero-title">Registration</h1>
      </div>
   </section>
   <!-- Hero Section -->
   <!-- Account Section -->

   <div class="container">
      <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
         <h4 class="card-title mt-3 text-center">Create Account</h4>
         <div class="d-grid gap-2 d-md-block">
            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
            <a href="{{url('google-login')}}" class="btn btn-block btn-facebook"> <i class="fab fa-google"></i>   Login via google</a>
         </div>
         <p class="divider-text">
            <span class="bg-light">OR</span>
         </p>
         <form>
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="" class="form-control" placeholder="Full name" type="text">
         </div> <!-- form-group// -->
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="" class="form-control" placeholder="Email address" type="email">
         </div> <!-- form-group// -->
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
            </div>
            <select class="custom-select" style="max-width: 120px;">
               <option selected="">+971</option>
               <option value="1">+972</option>
               <option value="2">+198</option>
               <option value="3">+701</option>
               <option value="4">+91</option>
            </select>
            <input name="" class="form-control" placeholder="Phone number" type="text">
         </div> <!-- form-group// -->
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-building"></i> </span>
            </div>
            <select class="form-control">
               <option selected=""> Select job type</option>
               <option>Designer</option>
               <option>Manager</option>
               <option>Accounting</option>
            </select>
         </div> <!-- form-group end.// -->
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Create password" type="password">
         </div> <!-- form-group// -->
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input class="form-control" placeholder="Repeat password" type="password">
         </div> <!-- form-group// -->                                      
         <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block text-center w-100 rounded-pill"> Create Account </button>
         </div> <!-- form-group// -->      
         <p class="text-center ">Have an account? <a href="{{url('login')}}">Log In</a> </p>                                                                 
      </form>
      </article>
      </div> <!-- card.// -->
      
      </div> 
      <!--container end.//-->


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

   <script async src="../../pagead2.googlesyndication.com/pagead/js/f6b5c.txt?client=ca-pub-8940522890323334" crossorigin="anonymous"></script>
   @endsection