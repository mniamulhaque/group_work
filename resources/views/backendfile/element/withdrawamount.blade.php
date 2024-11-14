@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-12 col-xl-8">
                        <div class="card mb-4">
                            <div class="card-header bg-primary text-white">Withdraw</div>
                            <div class="card-body">
                                <img class="me-4" src="{{asset('backend_assets/img/bkash.png')}}" alt="" height="50"> <img class="me-4" src="{{asset('backend_assets/img/nagad.png')}}" alt="" height="50"> <img src="{{asset('backend_assets/img/roket.webp')}}" alt="" height="50">
                                <hr>
                                <form>
                                    <div class="mb-3">   
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                value="bKash">
                                            <label class="form-check-label" for="inlineRadio1">bKash</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                                value="Nagad">
                                            <label class="form-check-label" for="inlineRadio2">Nagad</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3"
                                                value="Rocket">
                                            <label class="form-check-label" for="inlineRadio3">Rocket</label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Receive Account Number</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp">
                                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">$</span>
                                                <input type="number" class="form-control" placeholder="Amount" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-group mb-3">
                                                <span class="input-group-text" id="basic-addon1">Total Amount</span>
                                                <input type="number" class="form-control" placeholder="Total Amount" aria-label="Username"
                                                    aria-describedby="basic-addon1">
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary mt-3">Withdraw</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
  @endsection