<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AddAdminController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Landing Page */
// Route::get('/', [LandingPageController::class, 'index']);
Route::resource('/', App\Http\Controllers\LandingPageController::class);
// Route::get('/', function () {
//     return view('welcome');
// });

/* Admin */
//Add Admin
Route::resource('welcome',AddAdminController::class);

// Login Admin
Route::get('login', function () {
    return view('admin.loginAdmin');
})->middleware('guest');
Route::post('/loginPost',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout']);

// Halaman Admin
Route::get('/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::resource('data-klasifikasi', App\Http\Controllers\Admin\DataTestingController::class);
Route::resource('data-baru', App\Http\Controllers\Admin\DataBaruController::class);

Route::get('/predict',[PostGuzzleController::class,'predict']);
// Route::get('posts/store', [PostGuzzleController::class, 'store' ]);