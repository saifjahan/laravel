<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    //return view('dashboard');
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

 Route::middleware('auth')->group(function () {

    Route::resource('/Article', ArticleController::class);

//   });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// Route::get('/admindashboard', function () {
//     return view('backend.dashboard');
// })->middleware(['auth','verified'])->name('admindashboard');


Route::get('/admin', function () {
    return view('signin');
})->name('admin');


require __DIR__.'/auth.php';
