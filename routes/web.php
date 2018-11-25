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

Route::get('/',['as' => 'index', 'uses' => 'PageController@getIndex']);
Route::get('products',['as' => 'products', 'uses' => 'PageController@getProducts']);
Route::get('products/{id_type}',['as' => 'product', 'uses' => 'PageController@getProductsByID']);
Route::get('checkout',['as' => 'checkout', 'uses' => 'PageController@getCheckOut']);
Route::post('submit-checkout',['as' => 'submitcheckout', 'uses' => 'PageController@postCheckOut']);
Route::get('about',['as' => 'about', 'uses' => 'PageController@getAbout']);
Route::get('contact',['as' => 'contact', 'uses' => 'PageController@getContact']);
Route::get('cart',['as' => 'cart', 'uses' => 'PageController@cart']);
Route::get('addtocart/{id}',['as' => 'addtocart', 'uses' => 'PageController@getAddtoCart']);
Route::get('delete-item-cart/{id}',['as' => 'deleteitem', 'uses' => 'PageController@removeItem']);
Route::get('product-details/{id}',['as' => 'product-details', 'uses' => 'PageController@getProductsDetails']);
Route::get('thanks',['as' => 'thanks', 'uses' => 'PageController@getThanks']);
Route::get('login',['as' => 'login','uses' => 'PageController@getlogIn']);
Route::post('logins',['as' => 'logins','uses' => 'PageController@postlogIn']);
Route::get('logout',['as' => 'logout','uses' => 'PageController@postlogOut']);
Route::get('register',['as' => 'register','uses' => 'PageController@getRegister']);
Route::post('registers',['as' => 'registers','uses' => 'PageController@postRegister']);
Route::group(['prefix' => 'admin'],function (){
   Route::get('/dashboard',['as' => 'dashboard','uses' => 'AdminController@getIndex']);
   Route::get('/products-management',['as' => 'products-management','uses' => 'AdminController@getProductsManagement']);
   Route::get('/addproduct',['as' => 'addproduct','uses' => 'AdminController@getAddProducts']);
   Route::post('/add-product',['as' => 'add-product','uses' => 'AdminController@postAddProducts']);
   Route::get('/editproduct/{id}',['as' => 'editproduct','uses' => 'AdminController@getEditProducts']);
   Route::post('/edit-product/{id}',['as' => 'edit-product','uses' => 'AdminController@postEditProducts']);
   Route::get('/delete-product/{id}',['as' => 'delete-product','uses' => 'AdminController@getDeleteProducts']);
   Route::get('/order-product',['as' => 'order-product','uses' => 'AdminController@getOrderProducts']);
});
