<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mainwork;
use Validator;
use Session;

class contentsController extends Controller
{

    public function workList(){
        $workmainn = mainwork::all();
        return view('backendfile.element.workList',compact('workmainn'));
    }

    public function workListByDay(){
        return view('backendfile.element.workListcheckDay');
    }

    public function workListByDayCheckd(Request $request){
        $workmainn = mainwork::where('date',$request->date)->get();
        return view('backendfile.element.workList',compact('workmainn'));
    }

     public function uploadWorks(){
        $mainworkk = count(mainwork::all());
        if($mainworkk > 0){
          $workid = mainwork::latest()->first()->id;  
      }else{
        $workid = 0;
      }
        
        
        $workidd = $workid+1;
        $workiddd = rand(1000,10000).$workidd;
        return view('backendfile.element.uploadwork',compact('workiddd'));
    }

    public function uploadWorksSend(Request $request){
        $mainworkData = new mainwork;

         $validator = validator::make($request->all(),[
            'workiddd'=>'required|unique:mainwork',
            'keyword'=>'required',
            'workDetails'=>'required',
            'date'=>'required',
            'search_site_img' =>'image|mimes:jpg,jpeg,png,gif|max:100',

        ]);


        $filePhoto = null;
        if (request()->hasFile('search_site_img')) {
                $photo = request()->file('search_site_img');
                $filePhoto = md5($photo->getClientOriginalName() . time()) . "." . $photo->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImage';
                $photo->move($filePatch, $filePhoto);    
            }
        if($request->worklink == ""){
            $worklink = 0;
        }else{
            $worklink = $request->worklink;
        }
        $mainworkData->workid = $request->workiddd;
        $mainworkData->keyword = $request->keyword;
        $mainworkData->worklink = $worklink;
        $mainworkData->workDetails = $request->workDetails;
        $mainworkData->date = $request->date;
        $mainworkData->search_site_img = $filePhoto;
        $mainworkData->link_click_count = 0;
        $mainworkData->added_by = "admin";
        $mainworkData->status = 0;
        $mainworkData->user_id = 0;
        $mainworkData->save();

       
        Session::flash('message','Successfully');
        
        return redirect('/uploadWorks');
    }
}
