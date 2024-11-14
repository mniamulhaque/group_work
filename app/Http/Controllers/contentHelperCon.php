<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contentHelperCon extends Controller
{
     public function contentCreator(){
        //$Share = createShare::all();
        return view('backendfile.element.contentCre');
    }

    public function contentCheckerPost(){
        //$Share = createShare::all();
        return view('backendfile.element.contentCheckPost');
    }

    
}
