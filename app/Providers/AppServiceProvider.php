<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use App\Cart;
use App\TypeProduct;
use App\BannerIndex;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Truyền session giỏ hàng vào header
       view()->composer('header',function($view){
           if(Session('cart')){
               $oldCart = Session::get('cart');
               $cart = new Cart($oldCart);
               $view->with(['cart'=>Session::get('cart'), 'products_cart' => $cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
           }
       });
        //Truyền promotion vào footer
        view()->composer('footer',function($view){
            $bannerindex = BannerIndex::all();
            $view->with('bannerindex',$bannerindex);
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
