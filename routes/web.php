<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AddAdminController;
use App\Http\Controllers\Admin\LoginController;
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
Route::post('/admin/loginPost',[LoginController::class,'login'])->name('login');
Route::get('/admin/logout',[LoginController::class,'logout']);

// Halaman Admin
//Route::get('/admin/dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
Route::get('/admin/dashboard', function () {
    return view('admin.dashboardAdmin');
});