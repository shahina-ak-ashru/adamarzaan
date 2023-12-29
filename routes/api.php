<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::middleware('auth:sanctum')->group(function(){
//     Route::post('/get-profile','App\Http\Controllers\ApiController@getProfile');
//     Route::post('/logout','App\Http\Controllers\ApiController@logout');
//     Route::post('/employee','App\Http\Controllers\ApiController@store');
//     Route::put('/employee/{id}','App\Http\Controllers\ApiController@update');
//     Route::delete('/employee/{id}','App\Http\Controllers\ApiController@destroy');
// });

Route::group(['Middleware'=>'auth:api'],function(){
    Route::post('/get-profile','App\Http\Controllers\ApiController@getProfile');
    Route::post('/logout','App\Http\Controllers\ApiController@logout');
    Route::post('/employee','App\Http\Controllers\ApiController@store');
    Route::put('/employee/{id}','App\Http\Controllers\ApiController@update');
    Route::delete('/employee/{id}','App\Http\Controllers\ApiController@destroy');
});
Route::post('/login','App\Http\Controllers\ApiController@login');

