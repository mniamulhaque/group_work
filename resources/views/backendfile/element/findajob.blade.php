@extends('backendfile.layouts.master')
  @section('body')
  <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                     @foreach($othersworkData as $key=>$ShRow)
                    <div class="col-sm-6 col-xl-3">
                        @php
                        $provData = App\Models\otherWorkProf::where('otherworkid',$ShRow->id)->where('completed_code',1)->get();
                        @endphp
                        <div class="bg-light rounded">
                            <div class="d-flex align-items-center justify-content-between p-4">
                                <img class="rounded-circle" src="{{asset('backend_assets/img/dollar-coin.png')}}" alt="" style="width: 50px; height: 50px;">
                                <div class="ms-3">
                                    <a class="mb-2" href="{{url('/addSingleView/'.$ShRow->id)}}">{{$ShRow->workName}}</a>
                                    <h6 class="mb-0">${{$ShRow->perpayamount}}</h6>
                                    <p class="mb-0">{{count($provData)}}/{{$ShRow->workQuantity}}</p>
                                </div>
                            </div>
                            <div class="pg-bar mb-3">
                                <div class="progress">
                                  <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="{{(100/$ShRow->workQuantity)*count($provData)}}" aria-valuemin="0" aria-valuemax="100">{{count($provData)}}/{{$ShRow->workQuantity}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- Sale & Revenue End -->
  @endsection