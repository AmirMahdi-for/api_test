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
Route::get('/products', 'ProductController@index')->name('get.products');
// Route::prefix('procducts')->group(function(){

//     Route::get('/', 'ProductController@index')->name('get.products');
//     Route::get('/{$id}', 'ProductController@get_product')->name('get.product');
//     Route::get('/feature', 'ProductController@get_feature')->name('get.products.feature');
    
// });


Route::prefix('conmments')->group(function(){
    
    Route::get('/{$product_id}', 'CommentController@index')->name('get.comments');
    Route::post('/{$product_id}', 'ProductController@store')->name('add.comments');

});

Route::get('sponsor', 'SponsorController@index')->name('get.sponsor');