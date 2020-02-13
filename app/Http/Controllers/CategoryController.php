<?php

namespace App\Http\Controllers;

use App\Article;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    public function getProductsMacroCat($macro,$category){
        $query=Article::select("article.id",
                               "article.name",
                                "article.description",
                                "article.price",
                                
                                "article.imgURI",
                                "category.name as nomecat",
                                "category.id as idcat",
                                "category.macrocategory",
                                "article.sale",
                                "article.price",
                                "variant.size",
                                DB::raw("article.price-article.sale*article.price/100 as saledprice"))->
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id")->paginate(9);
                                
        if($query->isEmpty()){
            
            return(abort(404));
        }else{
            $array=[];
            
            foreach($query as $sizeget){
                array_push($array,$sizeget->size);
            }
            $uniq=array_unique($array);
            arsort($uniq);
            

            return view('frontend.products',["items"=>$query,"sizesdistinct"=>$uniq]);
        }
    }
    public function productsMacroCatFilter($macro,$category,Request $request){
        //SELECT *,group_concat(concat(`variant.color`,',',`colors`) SEPARATOR ",") from article INNER JOIN variant on article.id = variant.product_id;ù
        /*
            $items = DB::table('item')
            ->select(DB::raw("item_id,item_color,GROUP_CONCAT(item_Quantity SEPARATOR '-') as `L-M-S`,sum(item_Quantity) as TOTAL"))
            ->groupBy('item_id','item_color')
            ->get();
        */ 
        $variantvar=$request->input("variant");
        if($request->has("orderby")&&$request->orderby=="asc"){

            $query=Article::select("article.id",
                                  "article.name",
                                  "article.description",
                                  "article.price",
                                  "article.imgURI",
                                  "category.name as nomecat",
                                  "category.id as idcat",
                                  "category.macrocategory",
                                  "article.sale",
                                  "article.price",
                                  "variant.size",
                                  DB::raw("article.price-article.sale*article.price/100 as saledprice")
                                  )->
                                  join("category","article.cat_id",'=',"category.id")->
                                  where("cat_id",$category)->
                                  where("macrocategory",$macro)->
                                  
                                  join("variant","variant.product_id","=","article.id")->
                                  groupBy("variant.product_id")->
                                  
                                  orderBy("saledprice","ASC");
            if($variantvar!=null){
                $query=$query->whereIn("variant.size",$variantvar)->paginate($request->pagingform);
            }else{
                $query=$query->paginate($request->pagingform);
            }
            
            //"variant.size",
        }else if($request->has("orderby")&&$request->orderby=="desc"){
                                $query=Article::select("article.id",
                                "article.name",
                                "article.description",
                                "article.price",
                                "article.imgURI",
                                "category.name as nomecat",
                                "category.id as idcat",
                                "category.macrocategory",
                                "article.sale",
                                "article.price",
                                "variant.size",
                                DB::raw("article.price-article.sale*article.price/100 as saledprice")
                                )->
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id")->
                                orderBy("saledprice","DESC");
                                if($variantvar!=null){
                                    $query=$query->whereIn("variant.size",$variantvar)->paginate($request->pagingform)->onEachSide($request->pagingform);
                                }else{
                                    $query=$query->paginate($request->pagingform)->onEachSide($request->pagingform);
                                }     
        }else{
                                $query=Article::select("article.id",
                                "article.name",
                                "article.description",
                                "article.price",
                                "article.imgURI",
                                "category.name as nomecat",
                                "category.id as idcat",
                                "category.macrocategory",
                                "article.sale",
                                "article.price",
                                "variant.size",
                                DB::raw("article.price-article.sale*article.price/100 as saledprice"))->
                                
                                join("category","article.cat_id",'=',"category.id")->
                                where("cat_id",$category)->
                                where("macrocategory",$macro)->
                                join("variant","variant.product_id","=","article.id")->
                                groupBy("variant.product_id");
                                if($variantvar!=null){
                                    $query=$query->whereIn("variant.size",$variantvar)->paginate($request->pagingform)->onEachSide($request->pagingform);
                                }else{
                                    $query=$query->paginate($request->pagingform)->onEachSide($request->pagingform);
                                }
        }
        if($query->isEmpty()){
            
            return(abort(404));
        }else{
            
            
            $array=[];
            $variantst=Article::select("variant.size")->
                                    join("category","article.cat_id",'=',"category.id")->
                                    where("cat_id",$category)->
                                    where("macrocategory",$macro)->
                                    
                                    join("variant","variant.product_id","=","article.id")->
                                    groupBy("variant.product_id");
            foreach($variantst->get() as $sizeget){
                array_push($array,$sizeget->size);
                
            }
            
            $arraynodup=array_unique($array);
            arsort($arraynodup);
            return view('frontend.products',["items"=>$query,"orderby"=>$request->orderby,"pagingnumber"=>$request->pagingform,"sizesdistinct"=>$arraynodup]);
        }
    }
}
