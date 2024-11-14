@extends('backendfile.layouts.master')
  @section('body')
 <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <h3>{{$othersworkData->workName}}</h3>
                    <hr>
                    <img src="{{asset('backend_assets/images/postImageOthers/'.$othersworkData->search_site_img)}}" alt="l" /> <br><br>
                    <hr>
                    <div class="col-sm-12 col-xl-12">
                        <div class="rounded h-100 p-4">
                            <div class="row">
                            	<div class="col-sm-6 col-md-6">
                            		<h6><i class="fa fa-globe me-2"></i>{{$othersworkData->locatione}}</h6>
                            		<h6><i class="fa fa-globe me-2"></i>{{$othersworkData->locatione}}</h6>
                            	</div>
                            	<div class="col-sm-6 col-md-6">
                            		<h6><i class="fa fa-globe me-2"></i>{{$othersworkData->workCatagory}}</h6>
                            		<h6><i class="fa fa-globe me-2"></i>{{$othersworkData->workCatagory}}</h6>
                            	</div>
                            </div>
                            <form method="post" action="{{url('/otherProfsend')}}" enctype="multipart/form-data">
                                @csrf
                            	<hr>
                            	<h6><i class="fa fa-list me-2"></i>WHAT IS EXPECTED FROM WORKERS?</h6>
                            	<hr>
                            	<p>{{$othersworkData->workDetails}}</p>
                            	<hr>
                            	<h6><i class="fa fa-list me-2"></i>REQUIRED PROOF THAT TASK WAS FINISHED?</h6>
                            	<hr>
                            	<p>{{$othersworkData->sotokobarta}}</p>
                            	<hr>
                                <h6>1.  UPLOAD SCREENSHOT PROVE</h6>
                                <hr>
                                <div class="row mb-3">
                                    <label for="inputEmail3" class="col-sm-2 col-form-label">Checking Code</label>
                                    <div class="col-sm-10">
                                        <input type="hidden" class="form-control" id="otherworkid" name="otherworkid" value="{{$othersworkData->id}}">
                                        <input type="hidden" class="form-control" id="point" name="point" value="{{$othersworkData->perpayamount}}">
                                        <input type="text" class="form-control" id="inputEmail3" name="checking_code">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword3" class="col-sm-2 col-form-label">Add Show Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" id="inputPassword3" name="add_show_quantity">
                                    </div>
                                </div>
                                <hr>
                                <h6>1.  UPLOAD SCREENSHOT PROVE</h6>
                                <hr>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Prov Image One</label>
                                    <input class="form-control" type="file" id="formFile" name="prof_img_one">
                                </div>
                                 <hr>
                                <h6>2.  UPLOAD SCREENSHOT PROVE</h6>
                                <hr>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Prov Image Two</label>
                                    <input class="form-control" type="file" id="formFile" name="prof_img_two">
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
  @endsection
