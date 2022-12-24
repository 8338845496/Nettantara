<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::get('/order', [App\Http\Controllers\HomeController::class, 'order'])->name('order');
Route::get('/track', [App\Http\Controllers\HomeController::class, 'track'])->name('track');
Route::get('/user', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
Route::get('/changepassword', [App\Http\Controllers\HomeController::class, 'password'])->name('password');
Route::get('/ehome', function () {
    return view('user-dashboard');
});
Route::get('/admin/home', [App\Http\Controllers\Admin\HomeController::class, 'home'])->name('adminhome');
Route::get('/admin/add-product', [App\Http\Controllers\Admin\HomeController::class, 'product'])->name('product');
Route::post('/admin/add-product/save', [App\Http\Controllers\LaundryController::class, 'store'])->name('save');
Route::post('/store', [App\Http\Controllers\LaundryRequestController::class, 'store'])->name('store');
Route::post('/change-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');
Route::post('admin/change-password', [App\Http\Controllers\Admin\HomeController::class, 'adminupdatePassword'])->name('update-admin-password');
Route::get('admin/change/password', [App\Http\Controllers\Admin\HomeController::class, 'changePassword'])->name('change-password');
Route::get('admin/laundry', [App\Http\Controllers\Admin\HomeController::class, 'laundry'])->name('laundry');

Route::get('admin/receive/{id}', [App\Http\Controllers\Admin\HomeController::class, 'receive'])->name('receive');
Route::get('admin/process/{id}', [App\Http\Controllers\Admin\HomeController::class, 'process'])->name('process');
Route::get('admin/finish/{id}', [App\Http\Controllers\Admin\HomeController::class, 'finish'])->name('finish');
Route::get('admin/dispach/{id}', [App\Http\Controllers\Admin\HomeController::class, 'dispach'])->name('dispach');

