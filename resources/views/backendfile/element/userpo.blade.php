@extends('backendfile.layouts.master')
  @section('body')
  <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row justify-content-center mx-0">
                 <div class="col-xl-4 col-md-4">
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2" src="{{asset('backend_assets/img/testimonial-2.jpg')}}" alt="" style="width: 200px; height: 200px;">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary" type="button">Upload new image</button>
                            </div>
                            <div class="text-center">
                                <hr>
                                <div class="button-container">
                                  <div class="row">
                                    <div class="col-lg-4 col-md-6 col-6 ml-auto">
                                      <h5 class="text-info">12<br><small>Reffer</small></h5>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                                      <h5 class="text-info">Silver<br><small>Role</small></h5>
                                    </div>
                                    <div class="col-lg-4 mr-auto">
                                      <h5 class="text-info">24,6$<br><small>Balance</small></h5>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>

                        <!-- Profile information card-->
                        <div class="card mt-3">
                          <div class="card-header">
                            <h4 class="card-title">Team Members</h4>
                          </div>
                          <div class="card-body">
                            <ul class="list-unstyled team-members">
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-2 col-2">
                                    <div class="avatar">
                                          <img class="rounded-circle me-lg-2" src="{{asset('backend_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                    </div>
                                  </div>
                                  <div class="col-md-7 col-7">
                                    DJ Khaled
                                    <br />
                                    <span class="text-muted"><small>Offline</small></span>
                                  </div>
                                  <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-2 col-2">
                                    <div class="avatar">
                                          <img class="rounded-circle me-lg-2" src="{{asset('backend_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                    </div>
                                  </div>
                                  <div class="col-md-7 col-7">
                                    Creative Tim
                                    <br />
                                    <span class="text-success"><small>Available</small></span>
                                  </div>
                                  <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-2 col-2">
                                    <div class="avatar">
                                        <img class="rounded-circle me-lg-2" src="{{asset('backend_assets/img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                                    </div>
                                  </div>
                                  <div class="col-ms-7 col-7">
                                    Flume
                                    <br />
                                    <span class="text-danger"><small>Busy</small></span>
                                  </div>
                                  <div class="col-md-3 col-3 text-right">
                                    <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-md-8">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">Account Details</div>
                            <div class="card-body">
                                <form>
                                    <!-- Form Group (username)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputUsername">Username (how your name will appear to other users on the site)</label>
                                        <input class="form-control" id="inputUsername" type="text" placeholder="Enter your username" value="username">
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (first name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputFirstName">First name</label>
                                            <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="Valerie">
                                        </div>
                                        <!-- Form Group (last name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLastName">Last name</label>
                                            <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Luna">
                                        </div>
                                    </div>
                                    <!-- Form Row        -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (organization name)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputOrgName">Organization name</label>
                                            <input class="form-control" id="inputOrgName" type="text" placeholder="Enter your organization name" value="Start Bootstrap">
                                        </div>
                                        <!-- Form Group (location)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputLocation">Location</label>
                                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter your location" value="San Francisco, CA">
                                        </div>
                                    </div>
                                    <!-- Form Group (email address)-->
                                    <div class="mb-3">
                                        <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" placeholder="Enter your email address" value="name@example.com">
                                    </div>
                                    <!-- Form Row-->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (phone number)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputPhone">Phone number</label>
                                            <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567">
                                        </div>
                                        <!-- Form Group (birthday)-->
                                        <div class="col-md-6">
                                            <label class="small mb-1" for="inputBirthday">Birthday</label>
                                            <input class="form-control" id="inputBirthday" type="text" name="birthday" placeholder="Enter your birthday" value="06/10/1988">
                                        </div>
                                    </div>
                                    <!-- Save changes button-->
                                    <button class="btn btn-primary" type="button">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->
  @endsection