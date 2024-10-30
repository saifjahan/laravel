<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',  [Homecontroller::class, 'index'] );
Route::get('/about',  [Homecontroller::class, 'about'] );
Route::get('/contact',  [Homecontroller::class, 'contact'] );
    
// Route::get('/home', function () {
//     return view('home');
// });
