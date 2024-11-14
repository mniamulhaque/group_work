<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainwork;
use App\Models\profwork;
use Validator;
use Session;

class myWorksCon extends Controller
{
    public function myWorkView(){
        $workData = mainwork::all();
        $datee = date("d-m-Y");
        $provData = profwork::where('date',$datee)->where('user_id',1)->where('completed_code',1)->get();
        return view('backendfile.element.todayTask',compact('workData','datee','provData'));
    }

    public function optionalWorkView(){
        //$Share = createShare::all();
        return view('backendfile.element.optionalWork');
    }

    public function workdataStor(Request $request){
        $Dataprove = new profwork;

         $validator = validator::make($request->all(),[
            'mainworkid'=>'required',
            'checking_code'=>'required',
            'add_show_quantity'=>'required',
            'prof_img_one' =>'image|mimes:jpg,jpeg,png,gif|max:100',
            'prof_img_two' =>'image|mimes:jpg,jpeg,png,gif|max:100',

        ]);


        $profPhotoOne = null;
        $profPhotoTwo = null;
        if (request()->hasFile('prof_img_one')) {
                $prof_img_one = request()->file('prof_img_one');
                $profPhotoOne = md5($prof_img_one->getClientOriginalName() . time()) . "." . $prof_img_one->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImage/profImg';
                $prof_img_one->move($filePatch, $profPhotoOne);    
            }
        if (request()->hasFile('prof_img_two')) {
                $prof_img_two = request()->file('prof_img_two');
                $profPhotoTwo = md5($prof_img_two->getClientOriginalName() . time()) . "." . $prof_img_two->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImage/profImg';
                $prof_img_two->move($filePatch, $profPhotoTwo);    
            }

        $Dataprove->mainworkid = $request->mainworkid;
        $Dataprove->checking_code = $request->checking_code;
        $Dataprove->add_show_quantity = $request->add_show_quantity;
        $Dataprove->date = date("d-m-Y");
        $Dataprove->point = 1;
        $Dataprove->prof_img_one = $profPhotoOne;
        $Dataprove->prof_img_two = $profPhotoTwo;
        $Dataprove->completed_code = 1;
        $Dataprove->completed_code_update_time = date("d-m-Y h:i:sa");
        $Dataprove->user_id = 1;
        $Dataprove->save();

       
        Session::flash('message','Successfully');
        
        return redirect('/myWorkView');
    }
}
