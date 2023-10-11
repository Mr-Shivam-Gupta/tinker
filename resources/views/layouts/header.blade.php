<!-- Header -->
<div class="header-top">
    <div class="container">
       <div class="header__top__wrapper">
          <ul>
             <li>
                <span class="">Email: </span> 
                <a class="text--base" href="mailto:cto.simpact@gmail.com?">cto.simpact@gmail.com</a> 
             </li>
             <li>
                <span class="name">Call Us: </span><a href="tel:(+91)871782XXXX" class="text--base">(+91)871782XXXX</a>
             </li>
          </ul>
          <ul class="social-icons">
             <li><a href="https://www.facebook.com/" target="_blank"
                title="Facebook"><i class="lab la-facebook"></i></a>
             </li>
             <li><a href="https://www.twitter.com/" target="_blank"
                title="twitter"><i class="lab la-twitter"></i></a>
             </li>
             <li><a href="https://www.youtube.com/" target="_blank"
                title="youtube"><i class="fab fa-youtube"></i></a>
             </li>
             <li><a href="https://www.instagram.com/" target="_blank"
                title="instagram"><i class="lab la-instagram"></i></a>
             </li>
          </ul>
       </div>
    </div>
 </div>
 <div class="header-bottom bg--section">
    <div class="header-area">
       <div class="container">
          <div class="header-wrapper">
             <div class="logo me-lg-4 me-auto">
                <a href="#"><img src="{{asset('assets/images/logoIcon/simpact_logo.png')}}"
                   alt="logo">
                </a>
             </div>
             <div class="menu-area">
                <div class="menu-close">
                   <i class="las la-times"></i>
                </div>
                <ul class="menu">
                   <li><a href="{{ url('home') }}">Home</a></li>
                   <li><a href="{{ url('about') }}">About</a></li>
                   <li><a href="{{ url('faq') }}">FAQ's</a></li>
                   <li><a href="{{ url('blog') }}">Blog</a></li>
                   <li><a href="{{ url('price') }}">Pricing</a></li>
                   <li><a href="{{ url('products') }}">Products</a></li>
                   <li><a href="{{ url('services') }}">Services</a></li>
                   <li><a href="{{ url('contact') }}">Contact</a></li>
                </ul>
             </div>
             <div class="change-language me-3 me-lg-0">
                <div class="sign-in-up d-none d-sm-block">
                   <span><i class="fas la-user text-danger"></i></span>
                   <a href="{{url('login')}}">Sign In</a>
                   <a href="{{url('register')}}">Sign Up</a>
                </div>
             </div>
             <div class="header-bar d-lg-none">
                <span></span>
                <span></span>
                <span></span>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- Header -->