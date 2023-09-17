<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/login',[AdminController::class,' Login'])->name('login');
Route::post('/do-login',[AdminController::class,'DoLogin'])->name('dologin');


Route::get('/admin-dashboard',[AdminController::class,'AdminDashboard'])->name('dashboard');
Route::get('/product-list',[AdminController::class,'ProductList'])->name('productlist');
Route::get('/product-create',[AdminController::class,'ProductCreate'])->name('productcreate');
Route::post('/product-save',[AdminController::class,'ProductSave'])->name('productsave');
Route::post('/product-delete',[AdminController::class,'ProductDelete'])->name('productdelete');

