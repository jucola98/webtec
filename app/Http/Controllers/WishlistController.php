<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    function addToWishlist(Request $request){
        if(!(Wishlist::all()->where("product_id","=",$request->prodid)->first())){
        $wish=new Wishlist();
        $wish->user_id=Auth::user()->id;
        $wish->product_id=$request->prodid;
        $wish->save();
        
        }
        return redirect("wishlist");
    }

}