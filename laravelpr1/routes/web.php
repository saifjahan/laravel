<?php

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\studentcontroller;
use Illuminate\Support\Facades\Route;



Route::get('/',  [Homecontroller::class, 'index'] );
Route::get('/about',  [Homecontroller::class, 'about'] );
Route::get('/contact',  [Homecontroller::class, 'contact'] );

Route::get('/student',[studentcontroller::class, 'index'])->name('student.index');
Route::get('/student/create',[studentcontroller::class, 'create']);
Route::post('/student/store',[studentcontroller::class, 'store'])->name('student.store');

    
// Route::get('/home', function () {
//     return view('home');
// });
