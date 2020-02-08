<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    public function getProductsMacroCat($macro,$category,Request $request){
        
        if($request->has("orderby")&&$request->orderby=="priceasc"){
            $query=Article::select("article.id","article.name","article.description","article.price","article.URI","article.imgURI","category.name as nomecat","category.name as nomecat","category.id as idcat","category.macrocategory","article.sale","article.price","article.rating","article.stock")->join("category","article.cat_id",'=',"category.id")->where("cat_id",$category)->where("macrocategory",$macro)->orderBy("price","ASC")->paginate(16);
        }else{
            $query=Article::select("article.id","article.name","article.description","article.price","article.URI","article.imgURI","category.name as nomecat","category.id as idcat","category.macrocategory","category.macrocategory","article.sale","article.rating","article.stock")->join("category","article.cat_id",'=',"category.id")->where("cat_id",$category)->where("macrocategory",$macro)->paginate(16);
        }
        
        if($query->isEmpty()){
            
            return(abort(404));
        }else{
            return view('frontend.products',["items"=>$query,"orderby"=>$request->orderby]);
        }
    }
}
