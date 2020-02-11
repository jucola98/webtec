<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    public function getProductsMacroCat($macro,$category,Request $request){
        //SELECT *,group_concat(concat(`variant.color`,',',`colors`) SEPARATOR ",") from article INNER JOIN variant on article.id = variant.product_id;ù
        /*
            $items = DB::table('item')
            ->select(DB::raw("item_id,item_color,GROUP_CONCAT(item_Quantity SEPARATOR '-') as `L-M-S`,sum(item_Quantity) as TOTAL"))
            ->groupBy('item_id','item_color')
            ->get();
        */ 
        if($request->has("orderby")&&$request->orderby=="priceasc"){
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
                                  DB::raw("article.price-article.sale*article.price/100 as saledprice")
                                  )->
                                  join("category","article.cat_id",'=',"category.id")->
                                  where("cat_id",$category)->
                                  where("macrocategory",$macro)->
                                  join("variant","variant.product_id","=","article.id")->
                                  groupBy("variant.product_id")->
                                  orderBy("saledprice","ASC")->get();
            
            
            
        }else if($request->has("orderby")&&$request->orderby=="pricedesc"){
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
                                DB::raw("article.price-article.sale*article.price/100 as saledprice")
                                )->
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id")->
                                orderBy("saledprice","DESC")->get();
        }else{
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
                                DB::raw("article.price-article.sale*article.price/100 as saledprice"))->
                                
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id")->get();
        }
        if($query->isEmpty()){
            
            return(abort(404));
        }else{
            
            return view('frontend.products',["items"=>$query,"orderby"=>$request->orderby]);
        }
    }
}
