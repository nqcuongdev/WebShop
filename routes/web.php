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

Route::get('login',['as' => 'getlogin','uses' => 'PageController@getlogIn']);
Route::post('login',['as' => 'postlogin','uses' => 'PageController@postlogIn']);
Route::get('logout',['as' => 'logout','uses' => 'PageController@postlogOut']);
Route::get('register',['as' => 'getregister','uses' => 'PageController@getRegister']);
Route::post('register',['as' => 'postregister','uses' => 'PageController@postRegister']);

Route::post('search',['as' => 'search','uses' => 'PageController@postSearch']);

Route::get('member-infomation/{id}',['as' => 'getmember-infomation','uses' => 'PageController@getInformation']);
Route::post('member-infomation/{id}',['as' => 'postmember-infomation','uses' => 'PageController@postInformation']);

Route::post('contact-mail',['as' => 'post.contactMail','uses' => 'SendContactMailController@sendContactMail']);

// Routes of Admin Page
Route::group(['prefix' => 'admin','middleware'=>'adminLogin'],function (){

   Route::get('dashboard',['as' => 'dashboard','uses' => 'AdminController@getIndex']);

   Route::get('products-management',['as' => 'products-management','uses' => 'AdminController@getProductsManagement']);
   Route::get('add-product',['as' => 'getadd-product','uses' => 'AdminController@getAddProducts']);
   Route::post('add-product',['as' => 'postadd-product','uses' => 'AdminController@postAddProducts']);
   Route::get('edit-product/{id}',['as' => 'getedit-product','uses' => 'AdminController@getEditProducts']);
   Route::post('edit-product/{id}',['as' => 'postedit-product','uses' => 'AdminController@postEditProducts']);
   Route::get('delete-product/{id}',['as' => 'delete-product','uses' => 'AdminController@getDeleteProducts']);

   Route::get('order-product',['as' => 'order-product','uses' => 'AdminController@getOrderProducts']);

   Route::get('member-management',['as' => 'member-management','uses' => 'AdminController@getMemberManagement']);
   Route::get('delete-member/{id}',['as' => 'delete-member','uses' => 'AdminController@getDeleteMember']);
   Route::get('delete-user/{id}',['as' => 'get.deleteUser','uses' => 'AdminController@getDeleteUser']);

   Route::get('index-management',['as' => 'get.indexManagement','uses' => 'AdminController@getIndexManagement']);
   Route::get('edit-index-page',['as' => 'get.editIndexManagement','uses' => 'AdminController@getEditIndex']);
   Route::post('edit-index-page',['as' => 'post.editIndexManagement','uses' => 'AdminController@postEditIndex']);

   Route::get('export-products',['as' => 'get.exportProductsList','uses' => 'ExportExcelController@exportProducts']);
   Route::get('export-orders',['as' => 'get.exportOrdersList','uses' => 'ExportExcelController@exportOrder']);
});
