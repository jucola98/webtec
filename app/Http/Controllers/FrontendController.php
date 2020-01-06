<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public static function fetchCategoriesMan(){
        $query=Category::all()->where("macrocategory",1);
        return $query;
    }
    public static function fetchCategoriesWoman(){
        $query=Category::all()->where("macrocategory",0);
        return $query;
    }

    public function getMaster(){
        
        return view('frontend.master');
    }
    public function getContact(){
        
        return view('frontend.contact');
    }
    public function getProducts(){
        return view('frontend.products');
    }

    public function getCart(){
        return view('frontend.cart');
    }
    public function getSingleproduct(){
        return view('frontend.singleproduct');
    }
}
