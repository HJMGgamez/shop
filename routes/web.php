<?php

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

Route::get('/','articlesController@index','categorieController@nav' );

// Route::get('/', function () {
//     return view('shop/index');
// });

    Route::get('/articles', 'articlesController@index');

    Route::get('/addToCart/{id}', 'articlesController@addToCart');
    
    Route::get('/deleteItem/{id}', 'articlesController@deleteItem');

    Route::get('/flush', 'articlesController@flushShoppingcart');

    Route::get('/article/{article}', 'articlesController@show');

    Route::get('/shopingcart', 'shopingcartController@index');
    
    Route::get('/article/addToCart/{id}', 'articlesController@addToCart');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/shopingcart/buy', 'shopingcartController@buy');

    Route::get('/shopingcart/info', 'shopingcartController@info');

    Route::get('/shopingcart/userInfo/{id}', 'shopingcartController@userInfo');
});
Auth::routes();

    Route::get('/{catagorie}', 'categorieController@index');

