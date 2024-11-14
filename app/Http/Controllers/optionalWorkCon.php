<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\otherswork;
use Validator;
use Session;

class optionalWorkCon extends Controller
{
      public function postajob(){

        $othersworkk = count(otherswork::all());
        if($othersworkk > 0){
          $workid = otherswork::latest()->first()->id;  
      }else{
        $workid = 0;
      }
        
        
        $workidd = $workid+1;
        $workiddd = rand(1000,10000).$workidd;
        return view('backendfile.element.postajob',compact('workiddd'));
    }


    public function postajobSend(Request $request){
        $othersworkData = new otherswork;
        if($request->worklink == ""){
            $worklink = 0;
        }else{
            $worklink = $request->worklink;
        }
         $validator = validator::make($request->all(),[
            'otherworkid'=>'required',
            'keyword'=>'required',
            'workName'=>'required',
            'locatione'=>'required',
            'workCatagory'=>'required',
            'workDetails'=>'required',
            'workQuantity'=>'required',
            'perpayamount'=>'required',
            'totalpayamount'=>'required',
            'sotokobarta'=>'required',
            'search_site_img' =>'image|mimes:jpg,jpeg,png,JPG,PNG,gif|max:100',

        ]);

         if($validator->fails()){
            return redirect('/postajob')->withErrors($validator)->withInput();
        }

        $filePhoto = null;
        if (request()->hasFile('search_site_img')) {
                $photo = request()->file('search_site_img');
                $filePhoto = md5($photo->getClientOriginalName() . time()) . "." . $photo->getClientOriginalExtension();
                $filePatch = 'backend_assets/images/postImageOthers';
                $photo->move($filePatch, $filePhoto);    
            }
        

        $othersworkData->otherworkid = $request->otherworkid;
        $othersworkData->workName = $request->workName;
        $othersworkData->worklink = $worklink;
        $othersworkData->locatione = $request->locatione;
        $othersworkData->workCatagory = $request->workCatagory;
        $othersworkData->workDetails = $request->workDetails;
        $othersworkData->workQuantity = $request->workQuantity;
        $othersworkData->perpayamount = $request->perpayamount;
        $othersworkData->totalpayamount = $request->totalpayamount;
        $othersworkData->sotokobarta = $request->sotokobarta;
        $othersworkData->keyword = $request->keyword;
        $othersworkData->date = date("d-m-Y");
        $othersworkData->search_site_img = $filePhoto;
        $othersworkData->link_click_count = 0;
        $othersworkData->added_by = "admin";
        $othersworkData->status = 0;
        $othersworkData->user_id = 0;
        $othersworkData->save();

       
        Session::flash('message','Successfully');
        
        return redirect('/postajob');
    }

    
}
