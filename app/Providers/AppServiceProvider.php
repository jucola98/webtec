<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use App\Observers\CartObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cart::observe(CartObserver::class);
        
           
        view()->composer("frontend.layout",function($view){
            $man=Category::all()->where("macrocategory",1);
            $woman=Category::all()->where("macrocategory",0);
            $view->with(["man"=>$man,"woman"=>$woman]);
        });
    }
}
