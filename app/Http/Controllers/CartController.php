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
            $checkifexist=Cart::select("id","products_id")->where("products_id","=",$request->prodid)->where("user_id","=",Auth::user()->id)->first();
            if(!$checkifexist){
                $cartrow=new Cart();
                $cartrow->user_id= Auth::user()->id;
                $cartrow->amount= $request->quantity;
                $cartrow->products_id=$request->prodid;
                $cartrow->save();
                return view("frontend.cart");
            }else{
                $toupdate=Cart::find($checkifexist->id);
                $toupdate->amount=$toupdate->amount+$request->quantity;
                $toupdate->save();
                return view("frontend.cart");
            } 
        }else{
            return view("auth.login",["quantity"=>"AAAAAAA"]);
        }
    }
    function cartGet(){
        if(!Auth::guest()){
            $data=Cart::select("products_id","amount","article.name","article.price","category.id as catid","category.macrocategory")->join("article","cart_content.products_id","=","article.id")->join("category","article.cat_id","=","category.macrocategory")->get();//->where("cat_id",$category)->where("macrocategory",$macro)->paginate(16);
            return view("frontend.cart",["dataquery"=>$data]);
        }else{
            return view("auth.login");
        }
    }
}
