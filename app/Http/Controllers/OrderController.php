<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    function getOrders(){
        $query=Order::all()->where("user_id","=",Auth::user()->id);
        return view("frontend.orders",["orders"=>$query]);
    }
}
