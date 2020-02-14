<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Cart;
use App\Variant;
use App\ArticleImg;
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
        $articlesingle=Article::select(
                        "article.id",
                        "article.name",
                        "article.description",
                        "article.price", 
                        "article.imgURI",
                        "category.name as nomecat",
                        "article.details",
                        "article.sale",
                        
                        "variant.id as varid",
                        DB::raw("GROUP_CONCAT(variant.size SEPARATOR ',') as sizelist"))->
                        where("article.id","=",$id)->
                        join("category","article.cat_id","=","category.id")->
                        where("category.macrocategory","=","$macrocat")->
                        join("variant","variant.product_id","=","article.id")->
                        first();
        if(!Auth::guest()){
        $usercart=Cart::select("variant_id","amount")->
                         where("products_id","=",$id)->
                        where("user_id","=",Auth::user()->id);
                        $fetchvariant=Variant::all()->where("product_id","=",$id);
                        $images=ArticleImg::select("image")-> where("product_id","=",$id);
                        return view("frontend.singleProduct",["singart"=>$articlesingle,"details"=>$fetchvariant,"cartamount"=>$usercart,"images"=>$images]);
        }else{
            $fetchvariant=Variant::all()->where("product_id","=",$id);
            $images=ArticleImg::select("image")-> where("product_id","=",$id);
            return view("frontend.singleProduct",["singart"=>$articlesingle,"details"=>$fetchvariant,"images"=>$images,"cartamount"=>null]);
        }
    }

}
