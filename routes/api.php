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

//Product
Route::any('add', 'ProductController@add');
Route::any('update', 'ProductController@update');
Route::any('delete', 'ProductController@delete');
Route::any('show', 'ProductController@show');

//User
Route::any('register','userController@register');
Route::any('login','userController@login');
