<?php

namespace App\Http\Controllers;
use App\Newsletter;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    function postNews(Request $request){
        
        $checkifexist=Newsletter::select("email")->where("email", "=" , $request->email);
        

        if ( !$checkifexist->first() ){
        $news = new Newsletter();
        
        $news->email = $request->email;
        
        $news->save();
        return redirect("/");
        
    }
    
    }
}
