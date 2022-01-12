<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use App\Http\Controllers\produk;
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

Route :: get('/', 'App\Http\Controllers\HomeController@index')->name('home');

Route :: get('/produk', 'App\Http\Controllers\admin\produkController@index')->name('produk');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Admin
Route::prefix('admin')->group(function(){
    Route::get('/',[admin\adminController::class,'index']);
    Route::get('/login',[admin\auth\LoginController::class,'loginForm'])->name('admin.login');
    Route::post('/login',[admin\auth\LoginController::class,'login'])->name('admin.login');
    Route::get('/logout',[admin\auth\LoginController::class,'logout'])->name('admin.logout');
    Route::get('/home',[admin\adminController::class,'index'])->name('admin.index');
    Route :: get('/input', 'App\Http\Controllers\admin\produkController@create')->name('produk.input');
    Route :: post('/create', 'App\Http\Controllers\admin\produkController@store')->name('produk.create');
    

});