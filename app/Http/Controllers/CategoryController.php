<?php

namespace App\Http\Controllers;

use App\Article;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\Environment\Console;

class CategoryController extends Controller
{
    public function getSaleProd(){
        $query=Article::select("article.id",
                                "article.name",
                                "article.description",
                                "article.price",
                                
                                "article.imgURI",
                                "category.name as nomecat",
                                "category.id as idcat",
                                "category.macrocategory",
                                "article.sale",
                                "article.price"
                                )->where(
                                "article.sale" ,'>', "0"
                                )->join("category","article.cat_id",'=',"category.id")->paginate(9);

                                return view('frontend.products',["items"=>$query]);

    }
    
    public function getProdLike($category_name){
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
                                "variant.size",)->
                                join("category","article.cat_id",'=',"category.id")->
                                
                                where("category.name","like","%".$category_name."%")-> 
                                join("variant","variant.product_id","=","article.id")->paginate(9);
        return view('frontend.products',["items"=>$query]);


    }
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

            return view('frontend.products',["items"=>$query,"sizesdistinct"=>$arraynodup]);
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
                $query=$query->whereIn("variant.size",$variantvar)->paginate(9);
            }else{
                $query=$query->paginate(9);
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
                                    $query=$query->whereIn("variant.size",$variantvar)->paginate(9);
                                }else{
                                    $query=$query->paginate(9);
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
                                    $query=$query->whereIn("variant.size",$variantvar)->paginate(9);
                                }else{
                                    $query=$query->paginate(9);
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
