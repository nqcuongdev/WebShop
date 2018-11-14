<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Cart;
use App\TypeProduct;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Truyển dữ liệu giỏ hàng vào header
//        view()->composer('header',function($view){
//            if(Session('keyCart')){
//                //Kiểm tra giỏ hàng củ đã mua hay chưa
//                $oldCart = Session::get('keyCart');
//                $cart = new Cart($oldCart);
//
//            }
//             $view->with(['keyCart' => Session::get('keyCart'),'product_cart' => $cart->items,'totalPrice' => $cart->totalPrice,
//                         'totalQty' => $cart->totalQty]);
//        });
        //Truyền loại sản phẩm vào slidebar
        view()->composer('slidebar-admin',function($view){
            $typeproduct = TypeProduct::all();
            $view->with('typeproduct',$typeproduct);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
