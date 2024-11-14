@extends('backendfile.layouts.master')
  @section('body')
 <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row justify-content-center mx-0 mb-3">
                    <div class="col-xl-12 col-md-12">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">

                            <div class="card-body text-center">
                                <h6>My Reffer Link</h6>
                                <div class="border">
                                    http://localhost/kajnin/public/refMembersView
                                </div>
                            </div>
                        </div>
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">

                            <div class="card-body text-center">
                                <h6>My Reffer Bonus</h6>
                                <p>আমাদের এখানে কয়েকটি ধাপ কমপ্লিট করতে পারলে আপনি ২ হাজার থেকে ২ লাখ টাকা ইনকাম করতে পারেবেন। আর প্রতিটি ধাপ কমপ্লিট করার জন্য আপনাকে নির্ভর করতে হবে রেফার ও কাজের ভালো পারফর্মেন্সের উপর। মনে রাখবেন আমরা আপনকে সবসময় চেকিং করতে থাকব,তাই ভূলেও কেউ উল্টা-পাল্টা বা ছল-চাতুরী অথবা বাটপারী  করার চেষ্ঠা করবেন না। নিজের একাধিক আইডি রেফার করবেন না।এক জনরে নামে একাদিক আইডি থাকলে কোনরকম কারণ ছাড়াই আইডি বেন খাবেন।</p>
                            </div>
                        </div>
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">

                            <div class="card-body text-center">
                                <h6>My Reffer Bonus</h6>
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white">My Runing Rank</div>
                                            <div class="card-body">
                                                <img src="{{asset('backend_assets/img/onestar.jpg')}}" width="220">
                                                <p>আপনি প্রথম র‌্যাংকে কোন রেফার ছাড়াই এই টাকা  টা মাসিক ভিত্তিতে পাবেন। তবে অবশ্যয়ই আপনাকে প্রতিদিনের কাজ প্রতিদিন কমপ্লিট করতে হবে।</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white">My Next Rank</div>
                                            <div class="card-body">
                                                <img src="{{asset('backend_assets/img/twostar.jpg')}}" width="220">
                                                <p>এই র‌্যাংকে আপনি প্রতি একজন রেফার থেকে ১০০ টাকা করে মাসিক ভিত্তিতে পাবেন, তবে অবশ্যই আপনার রেফার করা ব্যক্তিকে পুরা মাস কাজ করতে হবে,সেই হিসেবে ১০ জন রেফার থেকে ১০০০ টাকা এবং আপনার নিজের  কাজের জন্য পাবেন ২০০০ টাকা। মোট তিন হাজার টাকা পাবেন প্রতি মাসে।</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white">My Next Rank</div>
                                            <div class="card-body">
                                                <img src="{{asset('backend_assets/img/threestar.jpg')}}" width="220">
                                                <p>এই র‌্যাংকে আপনাকে ৫০ জন রেফার করতে হবে। ৫০ জন রেফার থেকে আপনি পাবেন ৫০০০ টাকা, আপনার নিজের কাজের জন্য পাবেন দুই হাজার টাকা, রেফার ম্যাচিং  বোনাস পাবেন এক হাজার টাকা। মোট আপনি পাবেন আট হাজার টাকা প্রতিমাসে।</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-3">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white">My Next Rank</div>
                                            <div class="card-body">
                                                <img src="{{asset('backend_assets/img/fourstar.jpg')}}" width="220">
                                                <p>এই র‌্যাংকে আপনাকে ১০০ জন রেফার করতে হবে। ১০০ জন রেফার থেকে আপনি পাবেন ১০০০০ টাকা, আপনার নিজের কাজের জন্য পাবেন ২০০০ টাকা, রেফার ম্যাচিং বোনাস পাবেন তিন হাজার টাকা। মোট আপনি পাবেন ১৫ হাজার টাকা প্রতি মাসে।</p>
                                            </div>
                                        </div>
                                    </div><div class="col-sm-12 col-md-12">
                                        <div class="card mb-4">
                                            <div class="card-header bg-primary text-white">My Next Rank</div>
                                            <div class="card-body">
                                                <img src="{{asset('backend_assets/img/fivestar.jpg')}}" width="220">
                                                <p>এই র‌্যাংকে আপনাকে পৌঁছাতে হলে আপনার প্রতি রেফারের ১০০ জন করে রেফার হতে হবে। তবে আপনার রেফারের মধ্য থেকে ১০ জন ফোর স্টার কমপ্লিট করতে পারলে সে পাবে এককালীন ১০ হাজার টাকা, বিশজন করতে পারলে পাবে বিশ হাজার, ৩০ জন করতে পারলে পাবে ৩০ হাজার টাকা, এভাবে ১০০ জন করতে পারলে পাবে ১ লক্ষ টাকা। এরপর থেকে প্রতি মাসে পাবে দুই লক্ষ টাকা করে।</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
  @endsection
