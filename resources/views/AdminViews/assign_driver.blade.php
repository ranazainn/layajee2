@extends('AdminViews.adminlayouts.admin_master')

@section('content')



<!-- BEGIN: Page Main-->

<div id="main">
  <div class="row">
    <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
      <!-- Search for small screen-->
      <div class="container">
        <div class="row">
          <div class="col s10 m6 l6">
            <h5 class="breadcrumbs-title mt-0 mb-0">Home</h5>
            <ol class="breadcrumbs mb-0">
              <li class="breadcrumb-item">Home
              </li>
              <li class="breadcrumb-item active">
                <a href="{{route('home')}}">Child List</a>
              </li>
              <!-- <li class="breadcrumb-item"><a href="{{url('/assigndriver')}}">Assign Driver</a> -->
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12" >
      <div class="container" >
        <div class="section section-data-tables">
          <div class="col s12 m12 l12">
            <div id="Form-advance" class="card card card-default scrollspy" style="height:400px">
              <div class="card-content">
                <h4 class="card-title">Assign Driver</h4>
                <form class="col s12" action="{{route('assigndriver')}}" method="post" >
                  @csrf
                  <div class="row">
                    <div class="input-field col s12 m6">
                      <select name="ride_details_id" class="validate" aria-required="true" required>
                        <option value="" disabled selected>Rides :</option>
                       
                        <option value="{{$rides['id']}}">{{$rides['child_name']}}</option>                  
                      </select>
                      <label for="firstName">Rides : <span class="red-text"> </span></label>
                    </div>

                
                   
                    <div class="input-field col s12 m6">
                      <select name="d_id" class="validate" aria-required="true" required>
                        <option value="" disabled selected>Select Driver :</option>
                        
                        
                        @foreach($driver as $driver_list)
                        <option value="{{$driver_list->id}}">{{$driver_list->name}}</option>
                        @endforeach

                      </select>
                      <label for="firstName">Dirve List: <span class="red-text"> </span></label>
                    </div>
                   
                  </div>

                  <div class="row">
                  
                   
                  </div>
                    <div class="input-field col s12">
                      <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                        <i class="material-icons right">send</i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection