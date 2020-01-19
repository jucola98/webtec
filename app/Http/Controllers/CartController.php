<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
    function postTest(Request $request){
        $ciao= $request->quantity;
        if(!Auth::guest()){
            return view("frontend.cart",["quantity"=>Auth::user()]);
        }else{
            return view("frontend.cart",["quantity"=>"AAAAAAA"]);
        }
    }
}
