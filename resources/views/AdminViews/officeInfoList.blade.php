
@extends('AdminViews.adminlayouts.admin_master')

@section('content') 


   
    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="breadcrumbs-dark pb-0 pt-4" id="breadcrumbs-wrapper">
          <!-- Search for small screen-->
          <div class="container">
            <div class="row">
              <div class="col s10 m6 l6">
                <h5 class="breadcrumbs-title mt-0 mb-0">Home</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="{{route('officeinfolist')}}">Home</a>
                  </li>
                  <!-- <li class="breadcrumb-item"><a href="#">Table</a>
                  </li> -->
                  <li class="breadcrumb-item active">office list
                  </li>
                </ol>
              </div>
         
            </div>
          </div>
        </div>
        <div class="col s12">
          <div class="container">
            <div class="section section-data-tables">
  <!-- <div class="card">
    <div class="card-content">
      <p class="caption mb-0"></p>
    </div>
  </div> -->

  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Office List</h4>
          <div class="row">
            <div class="col s12 m12 " style="overflow:auto ;overflow-x: scroll;margin-top:5%" >
            <table id="page-length-option" class="display" style="width:100%;">
            <thead>
        <tr>


            <th>Sr no.</th>
            <!-- <th>Id</th> -->
            <th>Name</th>
            <th>Gneder</th>
            <th>Pickup time</th>
            <th>Drop off time</th>
            <th>Pickup location</th>
            <th>Drop off location</th>
            <th>Vehicle type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($officeinfo as $key=>$office)
        {{--dd($office->toArray())--}}
        <tr>
            <td>{{$key+1}}</td>
            <!-- <td>{{$office->id}}</td> -->
            <td>{{$office->full_name}}</td>
            <td>{{($office->gender == 0)? "Male":"Female"}}</td>
            <td>{{isset( $office->booking['pick_time'])?$office->booking['pick_time']:'-'}}</td>
            <td>{{isset( $office->booking['drop_time'])?$office->booking['drop_time']:'-' }}</td>
            <td>{{isset( $office->booking['drop_time'])?$office->booking['drop_time']:'-' }}</td>
            <td>{{isset( $office->booking['drop_address'])?$office->booking['drop_address']:'-'}}</td>
            <td>{{$office->vehicle_type}}</td>
        </tr>

        @endforeach
    </tbody>


  
                <!-- <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot> -->
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



@endsection


