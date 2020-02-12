<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Cart;
use App\Variant;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function testDatabase()
    {
        $art=factory(Article::class,30)->make();
        $decode=json_decode($art,true);
        Article::insert($decode);
    }

    public function fetchProductById($macrocat,$id){
        if(!Auth::guest()){
        $usercart=Cart::select("variant_id","amount")->
                  where("products_id","=",$id)->
                  where("user_id","=",Auth::user()->id);
                  /*
                  $query=Article::select("article.id",
                                "article.name",
                                "article.description",
                                "article.price",
                                "article.URI",
                                "article.imgURI",
                                "category.name as nomecat",
                                "category.id as idcat",
                                "category.macrocategory",
                                "article.sale",
                                "article.price",
                                "article.rating",
                                "article.stock",
                                DB::raw("GROUP_CONCAT(variant.color SEPARATOR ',') as colorlist"),
                                DB::raw("article.price-article.sale*article.price/100 as saledprice"))->
                                
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id")->get();
                  */
        $articlesingle=Article::select(
                        "article.id",
                        "article.name",
                        "article.description",
                        "article.price",
                        "article.URI",
                        "article.imgURI",
                        "category.name as nomecat",
                        "article.details",
                        "article.sale",
                        "article.rating",
                        "article.stock",
                        "variant.id as varid",
                        DB::raw("GROUP_CONCAT(variant.size SEPARATOR ',') as sizelist"))->
                        where("article.id","=",$id)->
                        join("category","article.cat_id","=","category.id")->
                        where("category.macrocategory","=","$macrocat")->
                        join("variant","variant.product_id","=","article.id")->
                        first();
        $fetchvariant=Variant::all()->where("product_id","=",$id);
        return view("frontend.singleProduct",["singart"=>$articlesingle,"details"=>$fetchvariant,"cartamount"=>$usercart]);
        }else{
            
            $articlesingle=Article::select(
                            "article.id",
                            "article.name",
                            "article.description",
                            "article.price",
                            "article.URI",
                            "article.imgURI",
                            "category.name as nomecat",
                            "article.details",
                            "article.sale",
                            "article.rating",
                            "article.stock",
                            DB::raw("GROUP_CONCAT(variant.size SEPARATOR ',') as sizelist"))->
                            where("article.id","=",$id)->
                            join("category","article.cat_id","=","category.id")->
                            where("category.macrocategory","=","$macrocat")->
                            join("variant","variant.product_id","=","article.id")->
                            first();
            $fetchvariant=Variant::all()->where("product_id","=",$id);
            return view("frontend.singleProduct",["singart"=>$articlesingle,"details"=>$fetchvariant]);
        }
    }
}
