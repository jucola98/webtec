<?php

namespace App\Http\Controllers;

use App\Category;
use App\Article;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public static function fetchCategoriesMan(){
        $query=Category::all()->where("macrocategory",1);
        return $query;
    }
    public static function fetchCategoriesWoman(){
        $query=Category::all()->where("macrocategory",0);
        return $query;
    }

    public function getMaster(){
        
        return view('frontend.master');
    }
    public function getContact(){
        
        return view('frontend.contact');
    }
    public function getProducts(){
        return view('frontend.products');
    }

    public function getCart(){
        return view('frontend.cart');
    }
    public function getSingle(){
        return view('frontend.singleProduct');
    }
    public function getCheckout(){
        return view('frontend.checkout');
    }
    public function searchProduct(Request $request){
        $query=Article::select("article.id","article.name","article.description","article.price","article.URI","article.imgURI","category.name as nomecat","category.name as nomecat","category.id as idcat","category.macrocategory","article.sale","article.price","article.rating","article.stock")->join("category","article.cat_id",'=',"category.id")->where("article.name","like","%".$request->searchbar."%")->orderBy("price","ASC")->paginate(16);
        if($query->isEmpty()){
            
            return(abort(404));
        }
        return view('frontend.products',["items"=>$query]);
    }
}
