<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
route::get('/about', function(){
    return view('about');
});
route::get('/contact', function(){
    return view('contact');
});
route::get('/pricing', function(){
    return view('pricing');
});
route::get('/portfolio-item', function(){
    return view('portfolio-item');
});
route::get('/portfolio-overview', function(){
    return view('portfolio-overview');
});
route::get('/bloghome', function(){
    return view('bloghome');
});
route::get('/blogpost', function(){
    return view('blogpost');
});
route::get('/faq', function(){
    return view('faq');
});
