<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class employeeContro extends Controller
{
    public function sobemployee(){
        //$Share = createShare::all();
        return view('backendfile.element.sobemplye');
    }

    public function contentInspect(){
        //$Share = createShare::all();
        return view('backendfile.element.contentIns');
    }

    public function memberInspect(){
        //$Share = createShare::all();
        return view('backendfile.element.memberIns');
    }
}
