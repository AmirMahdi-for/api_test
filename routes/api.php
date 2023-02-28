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

<<<<<<< HEAD
<<<<<<< HEAD
Route::prefix('procducts')->group(function(){

    Route::get('', 'ProductController@index')->name('get.products');
    Route::get('/{id}', 'ProductController@get_product')->name('get.product');
    Route::get('/feature', 'ProductController@get_feature')->name('get.products.feature');
    
});
=======
=======
>>>>>>> a40736a9a5b1d2a0c59ea66c261e65193d9c82d0
Route::group([], function($router){
    $router->get('users', 'app\Http\Controllers\UserController@index');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
>>>>>>> a40736a9a5b1d2a0c59ea66c261e65193d9c82d0
