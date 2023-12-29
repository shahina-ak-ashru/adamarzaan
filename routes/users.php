<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\LoginController;
use App\Http\Controllers\User\HomepageController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
Route::name('users.')->group(function(){
    Route::get('users/login', [LoginController::class,'login'])->name('login');
    Route::get('users/signup', [LoginController::class,'signup'])->name('signup');
    Route::post('users/do-signup', [LoginController::class,'register'])->name('do.signup');
    Route::get('users/home', [HomepageController::class,'home'])->name('home');
    Route::get('users/products/{id}', [HomepageController::class,'products'])->name('products');
    Route::middleware('auth:users')->group(function(){
        Route::get('users/logout', [UserloginController::class,'logout'])->name('logout');
        //Route::get('users/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
        //Route::name('product.')->prefix('users/products')->controller(HomepageController::class)->group(function(){
            //Route::get('/','listproducts')->name('list');
            // Route::get('/create','create')->name('create');
            // Route::post('/save','save')->name('save');
            // Route::get('/delete/{id}','delete')->name('delete');
            // Route::get('/edit/{id}','edit')->name('edit');
            // Route::post('/update','update')->name('update');
       // });
        //Route::name('category.')->prefix('users/categories')->controller(CategoryController::class)->group(function(){
           // Route::get('/','list')->name('list');
            // Route::get('/create','create')->name('create');
            // Route::post('/save','save')->name('save');
            // Route::get('/delete/{id}','delete')->name('delete');
            // Route::get('/edit/{id}','edit')->name('edit');
            // Route::post('/update','update')->name('update');
       // });
    });
});
