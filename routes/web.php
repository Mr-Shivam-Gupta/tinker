<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpactController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SimpactController::class, 'index']);
Route::get('home', [SimpactController::class, 'index']);
Route::get('/about', [SimpactController::class, 'about']);
Route::get('/aboutus', [SimpactController::class, 'aboutus1']);
Route::get('/faq', [SimpactController::class, 'faq1']);
Route::get('/blog', [SimpactController::class, 'blog']);
Route::get('/blog1', [SimpactController::class, 'blog1']);
Route::get('/blog2', [SimpactController::class, 'blog2']);
Route::get('/blog3', [SimpactController::class, 'blog3']);
Route::get('/blog4', [SimpactController::class, 'blog4']);
Route::get('/blog5', [SimpactController::class, 'blog5']);
Route::get('/blog6', [SimpactController::class, 'blog6']);
Route::get('/price', [SimpactController::class, 'price1']);
Route::get('/login', [SimpactController::class, 'login1']);
Route::get('/products', [SimpactController::class, 'products1']);
Route::get('/product1', [SimpactController::class, 'product1']);
Route::get('/product2', [SimpactController::class, 'product2']);
Route::get('/product3', [SimpactController::class, 'product3']);
Route::get('/product4', [SimpactController::class, 'product4']);
Route::get('/product5', [SimpactController::class, 'product5']);
Route::get('/product6', [SimpactController::class, 'product6']);
Route::get('/exploremore', [SimpactController::class, 'exploremore1']);
Route::get('/services', [SimpactController::class, 'services1']);
Route::get('/contact', [SimpactController::class, 'contact1']);
Route::post('/contact-form', [SimpactController::class, 'contactForm']);
Route::get('/register', [SimpactController::class, 'register1']);
Route::any('/register-form', [SimpactController::class, 'registerForm']);
Route::any('/google-login', [SimpactController::class, 'googleLogin']);
Route::get('/auth/google/callback', [SimpactController::class, 'googleHandle']);

Route::fallback(function () {
    $data['title'] = 'Simpact Solutions ';
      $data['canonical'] = 'https://mlmcreatorsindia.com/';
      $data['keywords'] = 'Web Design, Web Development, SEO Services, Software Development, IT Solutions, Raipur IT Company, Website Designers, Web Developers, Search Engine Optimization, Software Solutions, E-commerce Development, Mobile App Development, Responsive Web Design, Custom Software, CMS (Content Management System), Web Hosting, UI/UX Design, Website Maintenance, Raipur Software Company, Web Design and SEO, Software Engineering, IT Support, Website Security, App Store Optimization (ASO), Raipur Technology Experts.';
      $data['description'] = 'desc';
    return view('errors', $data);
});