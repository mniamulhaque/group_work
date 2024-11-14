<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class referralControler extends Controller
{
    public function refGrapchicalView(){
        //$Share = createShare::all();
        return view('backendfile.element.mlmdayagram');
    }


     public function refMembersView(){
        //$Share = createShare::all();
        return view('backendfile.element.refMember');
    }

    public function refDetails(){
        //$Share = createShare::all();
        return view('backendfile.element.refDetails');
    }
}
