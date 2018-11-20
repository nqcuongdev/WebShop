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

Route::get('index',['as' => 'index', 'uses' => 'PageController@getIndex']);
Route::get('products',['as' => 'products', 'uses' => 'PageController@getProducts']);
Route::get('products/{id_type}',['as' => 'product', 'uses' => 'PageController@getProductsByID']);
Route::get('checkout',['as' => 'checkout', 'uses' => 'PageController@getCheckOut']);
Route::get('about',['as' => 'about', 'uses' => 'PageController@getAbout']);
Route::get('contact',['as' => 'contact', 'uses' => 'PageController@getContact']);
Route::get('cart',['as' => 'cart', 'uses' => 'PageController@getAddtoCart']);
Route::get('product-details/{id}',['as' => 'product-details', 'uses' => 'PageController@getProductsDetails']);
Route::get('thanks',['as' => 'thanks', 'uses' => 'PageController@getThanks']);
Route::group(['prefix' => 'admin'],function (){
   Route::get('/login',['as' => 'login','uses' => 'AdminController@logIn']);
   Route::get('/index',['as' => 'index','uses' => 'AdminController@getIndex']);
});
