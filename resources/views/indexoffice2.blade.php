@extends('layouts.master')
@section('title',"office page2")

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
                <form id="form_reg" action="{{ route('indexoffice') }}" method="POST">
                    @csrf
                    <h4 class="mb-4 fonTs">Personal Info</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="Name" class="col-sm-3 col-form-label">First Name</label>
                                <div class="col-sm-9 form-control-lg">
                                    <input type="text" name="first_name" class="form-control" id="">
                                    <input type="hidden" name="type" value="office" class="form-control" id="">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="Name" class="col-sm-3 col-form-label">Last Name</label>
                                <div class="col-sm-9 form-control-lg">
                                    <input type="text" name="last_name" class="form-control" id="">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9 form-control-lg">
                                    <input type="email" class="form-control" name="email" id="">
                                </div>
                            </div>
                            
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Gender</label>
                                <div class="col-sm-9 form-control-lg flxcenter">
                                    <input class=" " type="radio" name="gender" value="male" style="height: auto;">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Male</label>
                                    <input class="" type="radio" name="gender" value="female" style="height: auto;">
                                    <label for="inputPassword" class="col-sm-3 col-form-label" >Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="stl76 col-sm-8 m-auto">
                                <div class="mb-3 row">
                                    <Button type="submit" class="btn btnst  bgclr606 ">LOGIN</Button>
                                </div>
                                <div class="mb-3 row">
                                    <p>Or, login with</p>
                                </div>
                                <div class="mb-3 row">
                                    <button type="text" class="btn btnst fbcl"> <i
                                            class="fa fa-facebook"></i>Facebook</button>
                                </div>
                                <div class="mb-3 row">
                                    <button type="text" class="btn btnst   gclr"> <i
                                            class="fa fa-google-plus"></i>Google</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- <section>
    <div class="secMaP">
        <div class="container">
            <div class="maP mb-4">
                <div id="googleMap">
                    <img src="images/mapp.jpg">
                </div>
            </div>
            <div class="btnss">

                <button type="submit" class="btn  bgclr606 col-sm-3"> Submit</button>
                <button type="Cancel" class="btn  bgclr606 col-sm-3">Cancel</button>

            </div>
        </div>
    </div>
</section> -->
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
                                <p class="choP">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. </p>
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

@parent
@endsection

@section('footer')
@parent
@endsection