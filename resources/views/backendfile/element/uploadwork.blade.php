@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="card-title">
                                   @if($errors->has('workiddd'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workiddd')}}
                                        </div>
                                    @elseif($errors->has('keyword'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('keyword')}}
                                        </div>
                                    @elseif($errors->has('workDetails'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workDetails')}}
                                        </div>
                                    @elseif($errors->has('date'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('date')}}
                                        </div>
                                    @elseif($errors->has('search_site_img'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('search_site_img')}}
                                        </div>
                                    @elseif(Session::has('message'))
                                        <div class="alert alert-success" role="alert">
                                          {{Session::get('message')}}
                                        </div>
                                    @endif
                                 </h4>
                            <div class="d-flex align-items-center justify-content-between p-2">
                                <h6 class="mb-4">Work Upload Form</h6>
                                <h6 class="mb-4">Today Uploads - 00</h6>
                            </div>
                            <hr>
                            <form method="post" action="{{url('/uploadWorkssend')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Search Keyword</label>
                                    <input type="hidden" name="workiddd" value="{{$workiddd}}">
                                    <input type="text" class="form-control" name="keyword" id="exampleInputEmail1">
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Clear Job Image</label>
                                    <input class="form-control" name="search_site_img" type="file" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Job Link <span style="color:red;">(Optional)</span> </label>
                                    <input type="text" class="form-control" name="worklink" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Job Start Date</label>
                                    <input class="form-control" name="date" type="date" id="formFile">
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea" class="form-label">Work Details</label>
                                    <textarea class="form-control" name="workDetails" placeholder="Leave a comment here"
                                        id="floatingTextarea" style="height: 150px;"></textarea>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Sale & Revenue End -->
  @endsection