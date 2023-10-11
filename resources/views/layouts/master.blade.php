<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> <?php if ($title) {
                echo $title;
            } else {
                echo 'Simpact Solutions';
            } ?> </title>


    <!-- <link rel="shortcut icon" href="{{asset('assets/images/logoIcon/favicon.png')}}" type="image/x-icon"> -->
    <meta name="title" Content="<?php if ($title) {echo $title;} else {echo 'Simpact Solutions';} ?>">
    <meta name="description" content="<?php if ($description) {
                                            echo $description;
                                        } else {
                                            echo 'Simpact Solutions';
                                        } ?>">
    <meta name="keywords" content="<?php if ($keywords) {
                                        echo $keywords;
                                    } else {
                                        echo 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
                                    } ?>">
    <meta name="robots" content="index,follow" />
	<meta name="author" content="Simpact Solutions">
	<meta name="language" content="English">
	
    <link rel="shortcut icon" href="{{asset('assets/images/logoIcon/s.ico')}}" type="image/x-icon">
    <link rel="canonical" href="<?php if ($canonical) {  echo $canonical; } else { echo 'https://mlmcreatorsindia.com/';  } ?>" />

    <meta http-equiv="content-language" content="en-gb" />
    <meta http-equiv="content-script-type" content="text/javascript" />
    <meta http-equiv="content-style-type" content="text/css" />
    <meta http-equiv="window-target" content="_top" />

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php if ($canonical) {  echo $canonical; } else { echo 'https://mlmcreatorsindia.com/';  } ?>"">
    <meta name="twitter:creator" content="Simpact Solutions">
    <meta name="twitter:image" content="{{asset('assets/images/logoIcon/logo.png')}}">
    <meta name="twitter:title" content="<?php if ($title) {  echo $title; } else { echo 'Simpact Solutions';  } ?>"">
    <meta name="twitter:description" content="<?php if ($description) {  echo $description; } else { echo 'Simpact Solutions';  } ?>"">


    <!-- <meta name="twitter:app:id:iphone" content="" />
    <meta name="twitter:app:name:ipad" content="" />
    <meta name="twitter:app:id:ipad" content="" />
    <meta name="twitter:app:name:googleplay" content="" />
    <meta name="twitter:app:id:googleplay" content="" />
    <meta property="al:ios:app_store_id" content="">
    <meta property="al:ios:app_name" content="">
    <meta property="al:android:app_name" content="">
    <meta property="al:android:package" content="">
    <meta property="al:ios:url" content="" />
    <meta property="al:android:url" content="" />

    <link rel="apple-touch-icon" href="{{asset('assets/images/logoIcon/logo.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="simpact - Home">-->
    
    <meta itemprop="name" content="simpact - Home">
    <meta itemprop="description" content="<?php if ($description) {echo $description;} else {echo 'Simpact Solutions';} ?>"">
    <meta itemprop="image" content="{{asset('assets/images/seo/621e01dd493e51646133725.png')}}"> 

    <meta property="og:locale" content="en_GB" />
    <meta property="og:site_name" content="Simpact Solutions" />

    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php if ($title) {echo $title;} else {echo 'Simpact Solutions';} ?>">
    <meta property="og:description" content="<?php if ($description) {echo $description;} else {echo 'Simpact Solutions';} ?>">
    <meta property="og:image" content="assets/images/seo/621e01dd493e51646133725.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="600" />
    <meta property="og:image:height" content="315" />
    <meta property="og:url" content="<?php if ($canonical) {echo $canonical;} else {echo 'https://mlmcreatorsindia.com/';} ?>">

		<script type="application/ld+json">
	{
	  "@context": "http://schema.org",
	  "@type": "Organization",
	  "name": "Simpact Solutions",
	  "url": "https://mlmcreatorsindia.com/",
	  "logo": "{{asset('assets/images/logoIcon/logo.png')}}",
	  "description": "Simpact Solutions is your one-stop destination for Web Design, Web Development, SEO Services, Software Development, IT Solutions, and more. Located in Raipur.",
	  "address": {
		"@type": "PostalAddress",
		"streetAddress": "First Floor, Shop No.121, Simpact Solutions, Golden Trade Center, New Rajendra Nagar,",
		"addressLocality": "Raipur",
		"addressRegion": "Chhattisgarh",
		"postalCode": "492001",
		"addressCountry": "India"
	  }
	}
	</script>

    <link media  rel="stylesheet" href="{{asset('assets/global/css/bootstrap.min.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/templates/basic/css/jquery-ui.min.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/templates/basic/css/animate.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/global/css/all.min.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/global/css/line-awesome.min.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/templates/basic/css/lightbox.min.css')}}">
    <link media  rel="stylesheet" href="{{asset('assets/templates/basic/css/owl.min.css')}}">


    <link media  rel="stylesheet" href="{{asset('assets/templates/basic/css/main.css')}}">

    <link media  rel="stylesheet" href='{{asset('assets/templates/basic/css/color8bf4.css?color=7376E7&amp;secondColor=47498f')}}'>


</head>

<body class="overflow-hidden">


    {{-- <div class="preloader">
        <div class="loader">
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
            <span class="loader-block"></span>
        </div>
    </div>
    <div class="overlay"></div> --}}

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')




    <script data-cfasync="false" src="{{asset('assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js')}}"></script>
    <script src="{{asset('assets/global/js/jquery-3.6.0.min.js')}}" defer></script>
    <script src="{{asset('assets/templates/basic/js/isotope.pkgd.min.js')}}" defer></script>
    <script src="{{asset('assets/global/js/bootstrap.min.js')}}" defer></script>
    <script src="{{asset('assets/templates/basic/js/rafcounter.min.js')}}" defer></script>
    <script src="{{asset('assets/templates/basic/js/lightbox.min.js')}}" defer></script>
    <script src="{{asset('assets/templates/basic/js/owl.min.js')}}" defer></script>


    <script src="{{asset('assets/templates/basic/js/main.js')}}" defer></script>
    <link rel="stylesheet" href="{{asset('assets/global/css/iziToast.min.css')}}">
    <script src="{{asset('assets/global/js/iziToast.min.js')}}" defer></script>


    <script>
        'use strict';

        function notify(status, message) {
            iziToast[status]({
                message: message,
                position: "topRight"
            });
        }
    </script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=Demo"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "Demo");
    </script>
    <script>
        $(document).on("change", ".langSel", function() {
            window.location.href = "https://www.simpact.co.in//change/" + $(this).val();
        });
    </script>


    <script>
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>

    <script>
        if (window.top != window.self) {
            document.body.innerHTML += '<div style="position:fixed;top:0;width:100%;z-index:9999999;background:#f8d7da;color:#721c24;text-align:center; padding: 20px;"><p style="font-size:20px; font-weight: bold;">You are using this website under an external iframe!!</p><p style="font-size:16px; margin-top: 20px;">for a better experience, please browse directly instead of an external iframe.</p><a href="' + window.self.location + '" target="_blank" style=" margin-top:20px; color: #fff;background-color: #dc3545; padding: 5px 10px; border-radius: 5px; text-decoration: none;">Browse Directly</a></div>';
        }
    </script>


    <script>
        adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
        adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
        adroll_version = "2.0";
        (function(w, d, e, o, a) {
            w.__adroll_loaded = true;
            w.adroll = w.adroll || [];
            w.adroll.f = ['setProperties', 'identify', 'track'];
            var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id +
                "/roundtrip.js";
            for (a = 0; a < w.adroll.f.length; a++) {
                w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {
                    return function() {
                        w.adroll.push([n, arguments])
                    }
                })(w.adroll.f[a])
            }
            e = d.createElement('script');
            o = d.getElementsByTagName('script')[0];
            e.async = 1;
            e.src = roundtripUrl;
            o.parentNode.insertBefore(e, o);
        })(window, document);
        adroll.track("pageView");
    </script>



</body>

</html>