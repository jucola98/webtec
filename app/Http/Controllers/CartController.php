<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    function postTest(Request $request){
        
        if(!Auth::guest()){
            //query cart
            $checkifexist=Cart::select("id",
                                        "products_id",
                                        "variant_id")->
                                        where("products_id","=",$request->prodid)->
                                        where("user_id","=",Auth::user()->id)->
                                        where("variant_id","=",$request->sizeselect)->
                                        first();
            if(!$checkifexist){
                $cartrow=new Cart();
                $cartrow->user_id= Auth::user()->id;
                $cartrow->amount= $request->quantity;
                $cartrow->products_id=$request->prodid;
                $cartrow->variant_id=$request->sizeselect;
                $cartrow->save();
            }else{
                $toupdate=Cart::find($checkifexist->id);
                $toupdate->amount=$toupdate->amount+$request->quantity;
                $toupdate->save();
            } /*
            if(!Auth::guest()){
                $data=Cart::select("products_id","cart.amount","article.name","article.price","category.id","category.macrocategory as mcat","article.sale")->join("article","cart_content.products_id","=","article.id")->join("category","article.cat_id","=","category.id")->where("cart_content.user_id","=",Auth::user()->id)->get();//->where("cat_id",$category)->where("macrocategory",$macro)->paginate(16);
                $total=0;
                foreach($data as $values){
                    $total+=$values->amount*($values->price-($values->price)*($values->sale/100));
                }*/
                return redirect("cart");//view("frontend.cart",["dataquery"=>$data,"total"=>$total]);
            }else{
                return view("auth.login");
            }
        /*}else{
            return view("auth.login",["quantity"=>"AAAAAAA"]);
        }*/
    }
    function cartGet(){
        if(!Auth::guest()){
            $data=Cart::select("products_id",
                                "cart_content.amount",
                                "article.name",
                                "article.price",
                                "category.id as catid",
                                "category.macrocategory as mcat",
                                "article.sale",
                                "variant.size as catsize",
                                "cart_content.variant_id",
                                "article.imgURI")->
                                join("article","cart_content.products_id","=","article.id")->
                                join("variant","variant.id","=","cart_content.variant_id")->
                                join("category","article.cat_id","=","category.id")->
                                where("cart_content.user_id","=",Auth::user()->id)->
                                get();
            $total=0;
            foreach($data as $values){
                $total+=$values->amount*($values->price-($values->price)*($values->sale/100));
            }
            return view("frontend.cart",["dataquery"=>$data,"total"=>$total]);
        }else{
            return view("auth.login");
        }
    }
    function deleteFromCart(Request $request){
        Cart::where("products_id","=",$request->prodid)->
              where("user_id","=",Auth::user()->id)->
              where("variant_id","=",$request->variant)->
              delete();
        return redirect("cart");
    }
    function clearCart(Request $request){
        Cart::where("user_id","=",Auth::user()->id)->
              delete();
        return redirect("cart");
    }
}
