<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function testDatabase()
    {
        $art=factory(Article::class,30)->make();
        $decode=json_decode($art,true);
        Article::insert($decode);
    }
    public function fetchProductById($id){

        $articlesingle=Article::select("article.id","article.name","article.description","article.price","article.URI","article.imgURI","category.name as nomecat","article.details")->where("article.id","=",$id)->join("category","article.cat_id","=","category.id")->first();
        $fetchjson=json_decode($articlesingle["details"],true);
        return view("frontend/singleproduct",["singart"=>$articlesingle,"details"=>$fetchjson]);
    }
}
