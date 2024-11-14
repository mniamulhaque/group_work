@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="card-title">
                                   @if($errors->has('otherworkid'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('otherworkid')}}
                                        </div>
                                    @elseif($errors->has('workName'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workName')}}
                                        </div>
                                    @elseif($errors->has('locatione'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('locatione')}}
                                        </div>
                                    @elseif($errors->has('workCatagory'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workCatagory')}}
                                        </div>
                                    @elseif($errors->has('keyword'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('keyword')}}
                                        </div>
                                    @elseif($errors->has('workDetails'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workDetails')}}
                                        </div>
                                    @elseif($errors->has('workQuantity'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('workQuantity')}}
                                        </div>
                                    @elseif($errors->has('sotokobarta'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('sotokobarta')}}
                                        </div>
                                    @elseif($errors->has('perpayamount'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('perpayamount')}}
                                        </div>
                                    @elseif($errors->has('totalpayamount'))
                                      <div class="alert alert-danger" role="alert">
                                          {{$errors->first('totalpayamount')}}
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
                            <div class="mb-5">
                                <h6 class="mb-4">Post a Job</h6>
                            </div>
                                <h6 class="">Select Location</h6>
                                <hr  class="mb-5">
                            <form method="post" action="{{url('/postajobSend')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="otherworkid" value="{{$workiddd}}">
                                <select class="form-select mb-5" aria-label="Default select example" name="locatione">
                                    <option selected>Select Area</option>
                                    <option value="International">International</option>
                                    <option value="Asia">Asia</option>
                                    <option value="USA & Western">USA & Western</option>
                                    <option value="Africa">Africa</option>
                                    <option value="Europe West">Europe West</option>
                                    <option value="Muslim Countries">Muslim Countries</option>
                                    <option value="Europe East">Europe East</option>
                                    <option value="Europe East">Latin America</option>
                                </select>

                                <h6 class="mt-4">Select Catagory</h6>
                                <hr  class="mb-5">
                                <select class="form-select mb-5" aria-label="Default select example" name="workCatagory">
                                    <option selected>Select Catagory</option>
                                    <option value="Blog Website Visit">Blog Website Visit</option>
                                    <option value="YouTube Services">YouTube Services</option>
                                    <option value="Write an Article(Blog Post)">Write an Article(Blog Post)</option>
                                    <option value="Twitter">Twitter</option>
                                    <option value="Tik-tok">Tik-tok</option>
                                    <option value="Talegram">Talegram</option>
                                    <option value="Others">Others</option>
                                    <option value="Mobile Application">Mobile Application</option>
                                    <option value="Linkedin">Linkedin</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Gmail Account">Gmail Account</option>
                                    <option value="Facebook Services">Facebook Services</option>
                                </select>
                                <h6 class="mt-4">Post Information</h6>
                                <hr  class="mb-5">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Job Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="workName">
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Clear Job Image</label>
                                    <input class="form-control" type="file" id="formFile" name="search_site_img">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Search Keyword</label>
                                    <input type="text" class="form-control" name="keyword" id="exampleInputEmail1">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Job Link <span style="color:red;">(Optional)</span> </label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="worklink">
                                </div>
                                <div class="mb-3">
                                    <div class="row">
                                        <div class="col-md-4">
                                                <label for="exampleInputEmail1" class="form-label">Job Quantity <span style="color:red;">*</span> </label>
                                                <input type="number" class="form-control" id="jobquantity" name="workQuantity" onkeyup="myEcu();">
                                        </div>
                                        <div class="col-md-4">
                                                <label for="exampleInputEmail1" class="form-label">Per Job Pay Amount <span style="color:red;">*</span> </label>
                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                    <input type="text" class="form-control" aria-label="Username"
                                                        aria-describedby="basic-addon1" id="perpayamount" name="perpayamount" onkeyup="myEcu();">
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <label for="exampleInputEmail1" class="form-label">Total Amount <span style="color:red;">*</span> </label>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1">$</span>
                                                    <input type="text" class="form-control" aria-label="Username"
                                                        aria-describedby="basic-addon1" id="totalpayamount" name="totalpayamount" readonly>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea" class="form-label">WHAT IS EXPECTED FROM WORKERS?</label>
                                    <textarea class="form-control" name="workDetails"
                                        id="floatingTextarea" style="height: 150px;">1 1. প্রথমে আপনার ব্রাউজার হিস্টোরি ক্লিন করুন, এরপরে আপনি গুগলে গিয়ে 'prurigo health awareness' লিখে সার্চ করুন. 2 2. আপনার সামনে গুগল এর প্রথম পেজে আমাদের ছবিতে দেওয়া পোস্টটি আপনার সামনে চলে আসবে। এরপর স্কিন শট নিন. 3 3. প্রথম পোস্টটি ওপেন করে একজন পাঠকের মতো 2 মিনিট সময় দিয়ে সুন্দরভাবে পড়তে হবে। এরপর সাইটের ৭টি পোস্ট ওপেন করে প্রতি পোস্টে এক মিনিট করে সময় দিতে হব. 4 4. এরপর আপনি যেকোনো পোষ্টের মধ্যে থাকা ১টি গুগল এডস এর উপরে ক্লিক করে ১ মিনিট সময় দিন & এডস সাইটের যেকোনো 2 টি অপশনে ক্লিক করে ১ মিনিট করে সময় দিন।
                                    </textarea>
                                    
                                </div>
                                <div class="mb-3">
                                    <label for="floatingTextarea" class="form-label">REQUIRED PROOF THAT TASK WAS FINISHED?</label>
                                    <textarea class="form-control" name="sotokobarta" 
                                        id="floatingTextarea" style="height: 150px;">সর্তকতা: ১। একের অধিক এডস ক্লিক করা যাবে না ২। এডস সাইটে ২/৩টি অপশনে ক্লিক করতে হবে ৩। একাধিক পেজ ওপেন করে কাজ করা যাবে না। করলে পেমেন্ট পাবেন না। প্রুফ: ১. প্রথম পেজ ওপেন এর স্কিন শট। অবশ্যই সময় উল্লেখ থাকবে। ২.আপনার কাজ করার ব্রাউসার হিস্টোরির স্ক্রিনশট।যেখানে আপনার কাজের হিস্ট্রি সময় তারিখসহ দেখা যাবে।</textarea>
                                    
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Sale & Revenue End -->
            <script>
                function myEcu(value){
                        const x = document.getElementById("jobquantity").value;
                        const y = document.getElementById("perpayamount").value;
                        const z = y * x;
                        document.getElementById("totalpayamount").value = z;
                         
                    }
            </script>
  @endsection