@extends('backendfile.layouts.master')
  @section('body')
    <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-12 text-center">
                        <h3> WHAT IS EXPECTED FROM WORKERS?</h3><br>
                        <p>1. প্রথমে আপনার ব্রাউজার হিস্টোরি ক্লিন করুন, এরপরে আপনি গুগলে গিয়ে "prurigo health awareness" লিখে সার্চ করুন</p>
                        <p>2 2. আপনার সামনে গুগল এর প্রথম পেজে আমাদের ছবিতে দেওয়া পোস্টটি আপনার সামনে চলে আসবে। এরপর স্কিন শট নিন</p>
                        <p>3 3. প্রথম পোস্টটি ওপেন করে একজন পাঠকের মতো 2 মিনিট সময় দিয়ে সুন্দরভাবে পড়তে হবে। এরপর সাইটের ৭টি পোস্ট ওপেন করে প্রতি পোস্টে এক মিনিট করে সময় দিতে হব</p>
                        <p>4 4. এরপর আপনি যেকোনো পোষ্টের মধ্যে থাকা ১টি গুগল এডস এর উপরে ক্লিক করে ১ মিনিট সময় দিন & এডস সাইটের যেকোনো 2 টি অপশনে ক্লিক করে ১ মিনিট করে সময় দিন।</p>
                        <hr>
                        <h3>REQUIRED PROOF THAT TASK WAS FINISHED?</h3>
                        <hr>
                        <p>সর্তকতা: ১। একের অধিক এডস ক্লিক করা যাবে না ২। এডস সাইটে ২/৩টি অপশনে ক্লিক করতে হবে ৩। একাধিক পেজ ওপেন করে কাজ করা যাবে না। করলে পেমেন্ট পাবেন না। প্রুফ: ১. প্রথম পেজ ওপেন এর স্কিন শট। অবশ্যই সময় উল্লেখ থাকবে। ২.আপনার কাজ করার ব্রাউসার হিস্টোরির স্ক্রিনশট।যেখানে আপনার কাজের হিস্ট্রি সময় তারিখসহ দেখা যাবে।</p>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
            <!-- Blank Start -->
            <div class="container-fluid p-4 px-4">
                <div class="row bg-light rounded align-items-center justify-content-center mx-0">
                    
                    <div class="col-sm-12 col-xl-12 bg-light rounded">
                        <div class="d-flex align-items-center justify-content-between p-2">
                            
                            <h6>Today Task - {{$datee}}</h6>
                            <h6>Total Task - {{count($workData)}}</h6>
                            <div class="ms-3">
                                <h6 class="mb-0">Your Completed - {{count($provData)}}/{{count($workData)}}</h6>
                            </div>
                        </div>
                        <div class="pg-bar mb-3">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="{{(100/count($workData))*count($provData)}}" aria-valuemin="0" aria-valuemax="100">{{number_format((100/count($workData))*count($provData),1)}}% / 100%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
    <!-- Other Elements Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <div class="accordion" id="accordionExample">
                                 @foreach($workData as $key=>$ShRow)
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        @php
                                        $proData = App\Models\profwork::where('mainworkid',$ShRow->id)->where('user_id',1)->where('add_show_quantity','>',0)->first();
                                        if($proData != null){
                                          $profCode = $proData->completed_code;
                                        }else{
                                            $profCode = 0;
                                        }
                                        @endphp
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne{{$ShRow->workid}}" aria-expanded="false"
                                            aria-controls="collapseOne{{$ShRow->workid}}">
                                            Task Item # {{++$key}} @if($profCode == "1") <img class="rounded-circle" src="{{asset('backend_assets/img/icons8-check-mark-48.png')}}" alt="" style="width: 35px; height: 35px;"> @elseif($profCode == "2") <img class="rounded-circle" src="{{asset('backend_assets/img/icons8-close-48.png')}}" alt="" style="width: 35px; height: 35px;"> @endif
                                        </button>
                                    </h2>
                                    <div id="collapseOne{{$ShRow->workid}}" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p class="bg-warning text-white px-2"><span class="bg-danger p-1">Note :-</span> Search Keyword "{{$ShRow->keyword}}" And Follow Picture<p>
                                            <img src="{{asset('backend_assets/images/postImage/'.$ShRow->search_site_img)}}" alt="l" /> <br><br>
                                            <hr>
                                            <div class="col-sm-12 col-xl-12">
                                                <div class="bg-light rounded h-100 p-4">
                                                    <h6 class="mb-4">Horizontal Form</h6>
                                                    <form method="post" action="{{url('workdataStor/')}}" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row mb-3">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Checking Code</label>
                                                            <div class="col-sm-10">
                                                                <input type="hidden" class="form-control" id="mainworkid" name="mainworkid" value="{{$ShRow->id}}">
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
                                </div>
                                @endforeach
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Accordion Item #2
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Voluptua sit dolores consetetur ea et diam est et takimata. Et erat sadipscing dolores et stet diam ut ut diam, sit aliquyam no magna et dolore lorem dolor sit. Lorem lorem sed sed duo, eirmod sit diam ipsum sit erat, lorem sit dolor diam amet ea aliquyam tempor rebum invidunt,.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Accordion Item #3
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            Dolore eos dolor tempor justo sea eos amet eos kasd dolor, et diam tempor lorem dolores vero. Stet dolore gubergren nonumy diam. Consetetur sit takimata magna invidunt, dolore sea amet consetetur ea et rebum, invidunt et amet sit sea. Dolor eirmod sed magna sadipscing sadipscing lorem lorem sed, sit lorem.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Other Elements End -->
  @endsection