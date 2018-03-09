<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    public function show(Request $request)
    {
        $txt_name = $request->input('name'); 
        $txt_hidden = $request->input('hidden'); 
        $txt_radio = $request->input('radio'); 
        

        $array = [
            "NAME" => $txt_name ,
            "ID"   => $txt_hidden ,
            "GEN"  => $txt_radio
        ];

        return view('page.page1',$array);
 
    }

    public function show_password(Request $request){
        return view('page.page11',$request);
    }

}