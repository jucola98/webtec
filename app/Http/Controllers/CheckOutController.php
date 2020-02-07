<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    function checkOutOperations(Request $request){
        $cartContent=Cart::select("id","products_id","amount")->where("user_id","=",Auth::user()->id)->get();
        foreach($cartContent as $singleproduct){
            $article=Article::find($singleproduct->products_id);
            $article->stock=$article->stock-$singleproduct->amount;
            $article->buycounter+=$singleproduct->amount;
            $article->save();
            Cart::find($singleproduct->id)->delete();
            
        }
        return redirect("/");

    }
}
