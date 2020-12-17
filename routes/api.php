<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group(function(){
    Route::get('category', 'CategoryController@index');
    Route::get('category/{id}', 'CategoryController@show')->where('id','[0-9]+');
    Route::get('category/{id}/search', 'CategoryController@search');
    Route::post('category/create', 'CategoryController@create');

    Route::get('product', 'ProductController@index');
    Route::get('product/{id}', 'ProductController@show')->where('id','[0-9]+');
    Route::get('product/search', 'ProductController@search')->where('id', '[0-9]+');


    Route::get('user', 'UserController@index');
    Route::get('user/{id}', 'UserController@show')->where('id','[0-9]+');

});
