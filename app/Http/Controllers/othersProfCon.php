<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otherswork;
use App\Models\otherWorkProf;
use Validator;
use Session;

class othersProfCon extends Controller
{
    public function findajob(){
        $othersworkData = otherswork::where('status', 0)->get();

        // $TotalWork = 500;
        // $makePersentTotalWork = 100/$TotalWork;

        // $completed = 400;
        // $mainCom = $completed*$makePersentTotalWork;
                             
        return view('backendfile.element.findajob',compact('othersworkData'));
    }

    public function singaddView($id){
        $othersworkData = otherswork::find($id);
        return view('backendfile.element.otherSingleAddview',compact('othersworkData'));
    }

    public function sendProf(Request $request){
        $Dataprove = new otherWorkProf;

         $validator = validator::make($request->all(),[
            'otherworkid'=>'required',
            'point'=>'required',
            'checking_code'=>'required',
            'add_show_quantity'=>'required',
            'prof_img_one' =>'image|mimes:jpg,jpeg,png,gif|max:100',
            'prof_img_two' =>'image|mimes:jpg,jpeg,png,gif|max:100',

        ]);
        $pointt = $request->point / 0.66;

        $profPhotoOne = null;
        $profPhotoTwo = null;
        if (request()->hasFile('prof_img_one')) {
                $prof_img_one = request()->file('prof_img_one');
                $profPhotoOne = md5($prof_img_one->getClientOriginalName() . time()) . "." . $prof_img_one->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImageOthers/profImg';
                $prof_img_one->move($filePatch, $profPhotoOne);    
            }
        if (request()->hasFile('prof_img_two')) {
                $prof_img_two = request()->file('prof_img_two');
                $profPhotoTwo = md5($prof_img_two->getClientOriginalName() . time()) . "." . $prof_img_two->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImageOthers/profImg';
                $prof_img_two->move($filePatch, $profPhotoTwo);    
            }

        $Dataprove->otherworkid = $request->otherworkid;
        $Dataprove->checking_code = $request->checking_code;
        $Dataprove->add_show_quantity = $request->add_show_quantity;
        $Dataprove->date = date("d-m-Y");
        $Dataprove->point = $pointt;
        $Dataprove->prof_img_one = $profPhotoOne;
        $Dataprove->prof_img_two = $profPhotoTwo;
        $Dataprove->completed_code = 1;
        $Dataprove->completed_code_update_time = date("d-m-Y h:i:sa");
        $Dataprove->user_id = 1;
        $Dataprove->save();

       
        Session::flash('message','Successfully');
        
        return redirect('/findajob');
    }
}
