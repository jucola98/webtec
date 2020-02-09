<?php

namespace App\Providers;

use App\Cart;
use App\Category;
use App\Observers\CartObserver;
use Illuminate\Support\Facades\Auth;
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
        //Cart::observe(CartObserver::class);
        
           
        view()->composer("frontend.layout",function($view){
            $man=Category::all()->where("macrocategory",1);
            $woman=Category::all()->where("macrocategory",0);
            $query=null;
            $total=0;
            if(!(Auth::guest())){
                $query=Cart::select("products_id","amount","article.name","article.price","category.id as catid","category.macrocategory as mcat","article.sale")->join("article","cart_content.products_id","=","article.id")->join("category","article.cat_id","=","category.id")->where("cart_content.user_id","=",Auth::user()->id)->limit(2)->get();
                $querytotal=Cart::select("products_id","amount","article.price","sale")->where("cart_content.user_id","=",Auth::user()->id)->join("article","cart_content.products_id","=","article.id")->get();
                foreach($querytotal as $values){
                    $total+=$values->amount*($values->price-($values->price)*($values->sale/100));
                }
            }
            
            $view->with(["man"=>$man,"woman"=>$woman,"cart_items"=>$query,"cart_total"=>$total]);
        });
    }
}
