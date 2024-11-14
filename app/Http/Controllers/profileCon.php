<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileCon extends Controller
{
    public function userprofile(){
        //$Share = createShare::all();
        return view('backendfile.element.userpo');
    }

    public function Withdraw(){
        //$Share = createShare::all();
        return view('backendfile.element.withdrawamount');
    }
}
