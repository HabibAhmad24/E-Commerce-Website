<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\CatagoryController;
use App\Http\Controllers\UserController;


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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'admin.guest'], function () {
        Route::get('/login', [AdminController::class, 'index'])->name('admin.login');
        Route::post('/authentication', [AdminController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function () {
        Route::get('/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
        Route::get('/logout', [HomeController::class, 'logout'])->name('admin.logout');
        // CatagoryController
        // Route::get('/catagories/create', [CatagoryController::class,'create'])->name('catagories.create');
        Route::get('/catagories/index',[CatagoryController::class,'index'])->name('admin.catagories.index');
        Route::get('/catagories/create',[CatagoryController::class,'create'])->name('admin.catagories.create');
        Route::post('/catagories/store',[CatagoryController::class,'store'])->name('admin.catagories.store');
        Route::get('/catagories/edit/{id}',[CatagoryController::class,'edit'])->name('admin.catagories.edit');
        Route::put('/catagories/update/{id}',[CatagoryController::class,'update'])->name('admin.catagories.update');
        Route::get('/catagories/del/{id}',[CatagoryController::class,'del'])->name('admin.catagories.del');

    });
});
Route::get('index', [UserController::class, 'index'])->name('index');
Route::get('cart', [UserController::class, 'cart'])->name('cart');
Route::get('addtocart/{catagory}', [UserController::class, 'addtocart'])->name('addtocart');
Route::get('remove/{id}', [UserController::class, 'remove'])->name('remove');
Route::get('shop', [UserController::class, 'shop'])->name('shop');
