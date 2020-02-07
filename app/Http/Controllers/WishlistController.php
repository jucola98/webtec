<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    function addToWishlist($prodid){
        $wish=new Wishlist();
        $wish->user_id=Auth::user()->id;
        $wish->product_id=$prodid;
        $wish->save();
        return redirect("wishlist");
    }
}