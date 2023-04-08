<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/shop', [ProductController::class, 'index'])->name('shop');
Route::get('/shop/add', [ProductController::class, 'create'])->name('add');
Route::post('/shop/store', [ProductController::class, 'store'])->name('store');
Route::get('/shop/edit/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/shop/update/{id}', [ProductController::class, 'update'])->name('update');
Route::delete('/shop/delete/{id}', [ProductController::class, 'destroy'])->name('delete');
