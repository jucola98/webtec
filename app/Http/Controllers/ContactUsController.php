<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    function postMessage(Request $request){
        $newmessage=new ContactUs;
        $newmessage->name=$request->cf_name;
        $newmessage->email=$request->cf_email;
        $newmessage->subject=$request->cf_website;
        $newmessage->message=$request->cf_message;
        $newmessage->save();
        return redirect("/");
    }
}
