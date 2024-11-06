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

Route::post('/student/delete/{id}',[studentcontroller::class, 'destroy'])->name('student.destroy');
Route::get('/student/edit/{id}',[studentcontroller::class, 'edit'])->name('student.edit');
Route::post('/student/update/{id}',[studentcontroller::class, 'update'])->name('student.update');


    
// Route::get('/home', function () {
//     return view('home');
// });
