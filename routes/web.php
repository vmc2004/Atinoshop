<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

// Admin 
Route::get('/dashboard', function () {
    return view('admin.main');
});




// Kết thúc Admin 


// Người dùng 
Route::get('/', function(){
    return view('client.home');
});
Route::get('/shop', [ProductController::class, 'index']);

Route::get('/singin', [UserController::class, 'login'])->name('signin');
Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::resource('product', UserController::class);

// Kết thúc của người dùng 