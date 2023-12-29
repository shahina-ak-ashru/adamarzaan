<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
Route::name('admin.')->group(function(){
    Route::get('admin/login', [LoginController::class,'login'])->name('login');
    Route::post('admin/do-login', [LoginController::class,'doLogin'])->name('do.login');
    Route::middleware('auth:admin')->group(function(){
        Route::get('admin/logout', [LoginController::class,'logout'])->name('logout');
        Route::get('admin/dashboard', [DashboardController::class,'dashboard'])->name('dashboard');
        Route::name('product.')->prefix('admin/products')->controller(ProductController::class)->group(function(){
            Route::get('/','list')->name('list');
            Route::get('/create','create')->name('create');
            Route::post('/save','save')->name('save');
            Route::get('/delete/{id}','delete')->name('delete');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update','update')->name('update');
        });
        Route::name('category.')->prefix('admin/categories')->controller(CategoryController::class)->group(function(){
            Route::get('/','list')->name('list');
            Route::get('/create','create')->name('create');
            Route::post('/save','save')->name('save');
            Route::get('/delete/{id}','delete')->name('delete');
            Route::get('/edit/{id}','edit')->name('edit');
            Route::post('/update','update')->name('update');
        });
    });
});
