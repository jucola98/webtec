<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Cart;
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
        $usercart=Cart::select("amount")->where("products_id","=",$id)->where("user_id","=",Auth::user()->id)->first();
        $articlesingle=Article::select("article.id","article.name","article.description","article.price","article.URI","article.imgURI","category.name as nomecat","article.details","article.sale","article.rating","article.stock")->where("article.id","=",$id)->join("category","article.cat_id","=","category.id")->where("category.macrocategory","=","$macrocat")->first();
        $fetchjson=json_decode($articlesingle["details"],true);
        return view("frontend.singleProduct",["singart"=>$articlesingle,"details"=>$fetchjson,"cartamount"=>$usercart]);
    }
}
