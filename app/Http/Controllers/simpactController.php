<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Registration;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailSender;
// use Exception;
// use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Session; 
 use Illuminate\Support\Facades\Auth;
class simpactController extends Controller
{
    public function index()
   {
      $data['title'] = 'Simpact Solutions - Web Design, Development, SEO, and IT Solutions ';
      $data['canonical'] = 'https://mlmcreatorsindia.com/';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Simpact Solutions is your one-stop destination for Web Design, Web Development, SEO Services, Software Development, IT Solutions, and more. Located in Raipur .';
      return view('home', $data);
   }
   public function about()
   {
      $data['title'] = 'About | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/about';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Learn more about Simpact Solutions - your trusted technology experts in Raipur. Discover our expertise in Web Design, Web Development, SEO Services, Software Development, and IT Solutions.';
      return view('about', $data);
   }

   public function faq1()
   {
      $data['title'] = 'FAQ | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/faq';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Find answers to commonly asked questions about Simpact Solutions, including information about our services, expertise, and more.';
      return view('faq', $data);
   }
   public function blog()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blog', $data);
   }

   public function price1()
   {
      $data['title'] = 'Price | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/price';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our pricing plans at Simpact Solutions. Get detailed information on our competitive pricing for web design, web development, SEO services, software development, and IT solutions.';
      return view('price', $data);
   }

   public function contact1()
   {
      $data['title'] = 'Contact | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/contact';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Contact Simpact Solutions today for inquiries, collaborations, or to get in touch with our team. We are here to assist you with web design, web development, SEO services, software development, and IT solutions.';
      return view('contact', $data);
   }
   public function login1()
   {
      $data['title'] = 'Login | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/login';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Log in to your Simpact Solutions account. Access your dashboard, manage your settings, and explore our services.';
      return view('login', $data);
   }
   public function register1()
   {
      $data['title'] = 'Registration | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/register';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Register for an account with Simpact Solutions. Sign up to access exclusive services, personalized content, and stay updated with our latest offerings in web design, development, SEO, and IT solutions.';
      return view('register', $data);
   }
   public function services1()
   {
      $data['title'] = 'Services | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/services';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our comprehensive range of services at Simpact Solutions. We offer expert solutions in web design, web development, SEO services, software development, IT solutions, and more. Discover how we can help your business succeed online.';
      return view('services', $data);
   }
   public function products1()
   {
      $data['title'] = 'Products | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/products';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('products', $data);
   }
   public function aboutus1()
   {
      $data['title'] = 'About-Us | Simpact Solutions  ';
      $data['canonical'] = 'https://mlmcreatorsindia.com/aboutus';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Learn more about Simpact Solutions - your trusted technology experts in Raipur. Discover our expertise in Web Design, Web Development, SEO Services, Software Development, and IT Solutions';
      return view('aboutus', $data);
   }

   public function blog1()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog1';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog1', $data);
   }
   public function blog2()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog2';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog2', $data);
   }
   public function blog3()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog3';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog3', $data);
   }
   public function blog4()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog4';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog4', $data);
   }
   public function blog5()
   {
      $data['title'] = 'Blog | Simpact Solutions  ';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog5';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog5', $data);
   }
   public function blog6()
   {
      $data['title'] = 'Blog | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/blog6';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Explore our latest blog posts at Simpact Solutions. Stay updated with insightful articles on web design, development, SEO, software, IT solutions, and more.';
      return view('blogdetails.blog6', $data);
   }
   public function product1()
   {
      $data['title'] = 'Products | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product1';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('productdetails.product1', $data);
   }
   public function product2()
   {
      $data['title'] = 'Products | Simpact Solutions  ';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product2';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'desc';
      return view('productdetails.product2', $data);
   }
   public function product3()
   {
      $data['title'] = 'Products | Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product3';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('productdetails.product3', $data);
   }
   public function product4()
   {
      $data['title'] = 'Products | Simpact Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product4';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('productdetails.product4', $data);
   }
   public function product5()
   {
      $data['title'] = 'Products | Simpact Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product5';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('productdetails.product5', $data);
   }
   public function product6()
   {
      $data['title'] = 'Products | Simpact Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/product6';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'Discover our featured products at Simpact Solutions. Explore our high-quality offerings, including web design tools, development software, SEO services, and IT solutions. Find the right products to elevate your online presence.';
      return view('productdetails.product6', $data);
   }
   public function exploremore1()
   {
      $data['title'] = 'Simpact Solutions - Web Design, Development, SEO, and IT Solutions';
      $data['canonical'] = 'https://mlmcreatorsindia.com/';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'desc';
      return view('exploremore', $data);
   }

      

   public function contactForm(Request $req)
   {

      $agent = new Agent();
      $userAgent = $req->header('User-Agent');
      $validation = $req->validate([
         'name' => 'required',
         'phone' => 'required|numeric',
         'email' => 'required|email',
         'subject' => 'required',
         'message' => 'required',
      ]);

     $formData = [
      'name' =>  $req->name,
      'email' =>  $req->email,
      'phone' =>  $req->phone,
      'subject' =>  $req->subject,
      'message' =>  $req->message,
      'ip_address' =>  $ipAddress = $req->ip(),
      'browser' =>  $browser = $agent->browser(),
      // ' '.$agent->getBrowserVersion(),
      'submit_date' =>  $submissionDate = date('Y-m-d H:i:s'),
     ];

     $query = DB:: table('contact_tbl')->insert($formData);
   //   $data = Mail::to('shivam.gupta.43620@gmail.com')->send(new MailSender($formData));
     if($query){
        return redirect('contact')->with('success', 'form submited successful!');
     }
     else{
      return redirect('contact')->with('danger', 'Somthing went worng!,Please try again');
     }
   }

   public function registerForm(Request $req){
      $agent = new Agent();
      
      $validation = $req->validate([
         'name' => 'required',
         'username' => 'required|email',
         'pass' => 'required',
      ]);

     $formData = [
      'name' =>  $req->name,
      'email' =>  $req->username,
      'password' =>  $req->pass,
      'ip_address' =>  $ipAddress = $req->ip(),
      'browser' =>  $browser = $agent->browser(),
      // .' '.$agent->getBrowserVersion(),
      // 'submit_date' =>  now(), 
     ];
     $registration = Registration::create($formData);
    dd($formData);
   }



   public function logout(){
      Session::flush();
      Auth::logout(); 
    return redirect('/');
   }

   public function googleLogin()
   {
      return Socialite::driver('google')->redirect();
   }
   public function googleHandle()
   {
      
         try {
           $user = Socialite::driver('google')->user();
         //   dd($user);
         $findUser =User::where('email',$user->email)->first();
         if(!$findUser){
                  $findUser = new User();
                  $findUser->fullname= $user->name;
                  $findUser->email= $user->email;
                  $findUser->picture= $user->avatar;
                  $findUser->password= '12345';
                  $findUser->type= 'Customer';
                  $findUser->status= 'Active';
                  $findUser->save();

               }
         session()->put('id',$findUser->id);
         session()->put('type',$findUser->type);
         return redirect('/');
         }
         catch (\Exception $e) {
            echo ($e->getMessage());
            // return redirect()->route('login')->with('error', 'Google authentication failed. Please try again later.');
        }

}

}
