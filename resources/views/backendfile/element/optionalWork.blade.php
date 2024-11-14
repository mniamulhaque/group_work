@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12 bg-light rounded">
                        <div class="d-flex align-items-center justify-content-between p-2">
                            @php
                                $TotalWork = 500;
                                $makePersentTotalWork = 100/$TotalWork;

                                $completed = 400;
                                $mainCom = $completed*$makePersentTotalWork;
                                @endphp
                            <h6>Visit & Ads Click Work</h6>
                            <h6>{{$completed}}/{{$TotalWork}}</h6>
                            <div class="ms-3">
                                <h6 class="mb-0">$0.00300</h6>
                            </div>
                        </div>
                        <div class="pg-bar mb-3">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="{{$mainCom}}" aria-valuemin="0" aria-valuemax="100">{{$completed}}/{{$TotalWork}}</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <h6 class="mb-0">$0.00300</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <h6 class="mb-0">$0.00300</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <h6 class="mb-0">$0.00300</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sale & Revenue End -->
  @endsection