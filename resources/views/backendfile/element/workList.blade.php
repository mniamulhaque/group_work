@extends('backendfile.layouts.master')
  @section('body')
 <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded vh-100 p-4">
                            <h6 class="mb-4">Work Item List</h6>
                            <div class="table-responsive">
                                <table id="myTable" class="table display">
                                    <thead>
                                        <tr>
                                            <th scope="col">#1</th>
                                            <th scope="col">workid</th>
                                            <th scope="col">keyword</th>
                                            <th scope="col">search_site_img</th>
                                            <th scope="col">Com Work Quantity</th>
                                            <th scope="col">Add Show Quantity</th>
                                            <th scope="col">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($workmainn as $key=>$row)
                                        @php
                                        $proData = App\Models\profwork::where('mainworkid',$row->id)->where('completed_code',1)->where('add_show_quantity','>',0)->get();
                                        @endphp
                                        <tr>
                                            <th scope="row">{{++$key}}</th>
                                            <td>{{$row->workid}}</td>
                                            <td>{{$row->keyword}}</td>
                                            <td><img class="" src="{{asset('backend_assets/images/postImage/'.$row->search_site_img)}}" alt="" style="width: 30px; height: 20px;"></td>
                                            <td>{{count($proData)}}</td>
                                            <td>{{$proData->sum('add_show_quantity')}}</td>
                                            <td>{{$row->date}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->
  @endsection
