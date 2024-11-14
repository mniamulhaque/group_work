4<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class memberCon extends Controller
{
     public function allMember(){
        //$Share = createShare::all();
        return view('backendfile.element.memberlist');
    }

    public function deactiveMember(){
        //$Share = createShare::all();
        return view('backendfile.element.deactiveMember');
    }

    public function silverMember(){
        //$Share = createShare::all();
        return view('backendfile.element.silverMem');
    }

    public function goldMember(){
        //$Share = createShare::all();
        return view('backendfile.element.goldMem');
    }

    public function platinumMember(){
        //$Share = createShare::all();
        return view('backendfile.element.platinumMem');
    }

     // return redirect()->back()->with('success', 'your message,here');
     // return Redirect::back()->with('msg', 'The Message');
     // DB::table('your_table_name')->where('column_name', '=', $value)->delete();
}
