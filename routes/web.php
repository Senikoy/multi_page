<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return 'dsds';
   // return view('welcome');//
});
route::get('/product', function(){
    //return ('this is product page');//
   // return view('product', ['name' => 'shoes']);//
});
route::get('/multi_page', function(){
    //return ('this is multi_page');//
    return view('multi_page');
});
