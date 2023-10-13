   @extends('layouts.master')
   @section('content')

   <section class="hero-section bg--title shapes-container">
      <div class="container">
         <h1 class="hero-title">Registration</h1>
      </div>
   </section>


   <div class="container">
      <div class="card bg-light">
      <article class="card-body mx-auto" style="max-width: 400px;">
         <h4 class="card-title mt-3 text-center">Create Account</h4>
         <div class="d-grid gap-2 d-md-block">
            <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i>   Login via Twitter</a>
            <a href="{{url('google-login')}}" style="background-color:gainsboro" class="btn btn-block "> <i><svg style="width:20px" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" class="LgbsSe-Bz112c"><g><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.72 17.74 9.5 24 9.5z"></path><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"></path><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"></path><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"></path><path fill="none" d="M0 0h48v48H0z"></path></g></svg></i>   Login via google</a>
         </div>
         <p class="divider-text">
            <span class="bg-light">OR</span>
         </p>
         <form class="contact-form" method="post" action="{{url('register-form')}}">
         @csrf
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input name="name" class="form-control" placeholder="Full name" type="text">
         </div> 
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input name="username" class="form-control" placeholder="Email address" type="email">
         </div> 
         <div class="form-group input-group">
            <div class="input-group-prepend">
               <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
            </div>
            <input name="pass" class="form-control" placeholder="Create password" type="password">
         </div> 
         <div class="form-group">
            <button type="submit" class="btn btn-danger btn-block text-center w-100 rounded-pill"> Create Account </button>
         </div>       
         <p class="text-center ">Have an account? <a href="{{url('login')}}">Log In</a> </p>                                                                 
      </form>
      </article>
      </div> 
      
      </div> 
  
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