@extends('layouts.master')

@section('title',"office page")

    @section('header')
    @parent
    @endsection

    @section('content')
      
      <section>
         <div class="topBanner">
            <div class="bnerimg">
               <div class="cpstop">
                  <div class="cpsp">
                     <span class="col-7">
                        <img src="images/picDropTxt.png"></span>
                  </div>
               </div>
               <img src="images/topBoffice.jpg">
            </div>
         </div>
      </section>
      <section>
         <div class="secform">
            <div class="container">
               <div class="forM">
                  <form  action="{{route('office')}}" method="POST" id="submit_form">
                  @csrf
                  <input type="text" hidden name="usr_id" value="{{Session::get('USER_DATA')->id}}">
                  <input type="text" hidden name="gender" value="{{Session::get('USER_DATA')->gender}}">
                    <h4 class="mb-4 fonTs">Location</h4>
                     <div class="row">
                        <div class="col-md-6">
                        
                           <div class="mb-3 row">
                              <label for="inputPassword"  class="col-sm-3 col-form-label">Pickup Time</label>
                              <div class="col-sm-9 form-control-lg">
                                 <input type="time" class="form-control" name="pickup_time" id="">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-3 col-form-label">Drop Off Time</label>
                              <div class="col-sm-9 form-control-lg">
                                 <input type="time" class="form-control" name="drop_off_time" id="">
                              </div>
                           </div>
                           <div class="mb-3 row">
                              <label  for="inputPassword" class="col-sm-3 col-form-label" id="add_more" data-id="office"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                           </svg>Add More</label>
                                 <!-- <div class="col-sm-9 form-control-lg">
                                    <input type="submit" class="form-control" id="inputPassword">
                                  </div> -->
                           </div>
                        </div>   
                         <div class="col-md-6">
                          <div class="mb-3 row">

                                <label for="inputPassword" class="col-sm-3 col-form-label">Pickup Location</label>
                                <input type="hidden" name="p_lat" id="latitude" value="{{old('latitude')}}">
                                <input type="hidden" name="p_long" id="longitude" value="{{old('longitude')}}">
                                <div class="col-sm-9 form-control-lg">
                                    <input type="text" id="pickup_location" name="pickup_location" class="form-control">
                                </div>
                            </div>
                           <div class="mb-3 row">
                              <label for="inputPassword" class="col-sm-3 col-form-label">Drop Off Location</label>
                              <div class="col-sm-9 form-control-lg">
                              <input type="text" id="drop_off_location" name="drop_off_location"
                                        class="form-control">
                                    <input type="hidden" name="d_lat" id="latitude2" value="{{old('latitude2')}}">
                                    <input type="hidden" name="d_long" id="longitude2" value="{{old('longitude2')}}">
                              </div>
                           </div> 
                           <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Preferred Type</label>
                                <div class="col-sm-9 form-control-lg">
                                  
                                <select name="vehicle_type" class="form-control" id="cars">
                                        <option value="">Select Vehicle</option>
                                        <option value="Van">Van</option>
                                        <option value="Bus">Bus</option>
                                        <option value="Car">Car</option>
                                        <option value="Bike">Bike</option>
                                </select>
                                </div>
                            </div>
                        </div>
                     </div>
                  </form>

                
               </div>
            </div>
         </div>
      </section>
      <section>
      <div class="secMaP">
        <div class="container">
            <div class="maP mb-4">
                <div id="googleMap">
                    <div class="map">
                        <div id="map-canvas" style="width:100%; height:700px; border: 1px solid rgb(220, 220, 220);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="btnss">
                <input type="button" id="routebtn" style="display:none" value="route" />

                <!-- <button type="submit" class="btn  bgclr606 col-sm-3"> Submit</button>
                <button type="Cancel" class="btn  bgclr606 col-sm-3">Cancel</button> -->

            </div>
        </div>
    </div>
      </section>
      <section>
         <div class="secL11">
            <div class="container">
               <div class="Downapp">
                  <div class="col-md-10 m-auto ">
                     <div class="row">
                        <div class="col-md-4">
                           <div class="imgbox">
                              <img src="images/mobilImg.png">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="downCap">
                              <span class="texcol">DOWNLOAD THE APP</span>
                              <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                              <div class="btNs">
                                 <button type="submit" class="btn   "><img src="images/playstor-iso.png"> </button>
                                 <button type="submit" class="btn  "><img src="images/playstor-goog.png"> </button>
                              </div>
                              <span>Coming Soon</span>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <section>
      </section>
      </section>
      <div class="btmstyle"></div>
      @parent
      @endsection

     
      @section('footer')
      @parent
@endsection
 

   