@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h4 class="card-title">
                                   @if($errors->has('date'))
                                        <div class="alert alert-danger" role="alert">
                                          {{$errors->first('date')}}
                                        </div>
                                    @endif
                                 </h4>
                            <div class="d-flex align-items-center justify-content-between p-2">
                                <h6 class="mb-4">Work Report By Date</h6>
                                <h6 class="mb-4">Total Work Day - 00</h6>
                            </div>
                            <hr>
                            <form method="post" action="{{url('/workListByDayCheck')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Search By Date</label>
                                    <input class="form-control" name="date" type="date" id="formFile">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
            <!-- Sale & Revenue End -->
  @endsection