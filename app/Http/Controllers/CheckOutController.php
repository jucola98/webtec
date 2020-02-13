<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cart;
use App\Order;
use App\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckOutController extends Controller
{
    function checkOutOperations(Request $request){
        $cartContent=Cart::select("id","products_id","amount as camount","variant_id as variantid")->where("user_id","=",Auth::user()->id)->get();
        foreach($cartContent as $singleproduct){
            $article=Variant::find($singleproduct->variantid);
            $article->amount=$article->amount-$singleproduct->camount;
            $article->save();
        }
        $articletotal=Article::find($cartContent->first()->products_id);
        $articletotal->buycounter+=$cartContent->first()->camount;
        $articletotal->save();
        foreach($cartContent as $cdelete) {
        $cdelete->delete();
        }
        $ordernew=new Order();
        $ordernew->URL="https://www.logistics.dhl/it-it/home/tracciabilita.html?tracking-id=fidtusxfcgivkhbguofyidt";
        $ordernew->user_id=Auth::user()->id;
        $ordernew->save();
        return redirect("/");

    }
}
