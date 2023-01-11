@extends('layouts.master')
@section('title',"parent info page")

@section('header2')
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
                <form method="POST" action="{{ route('schoolparentinfo') }}">
                    @csrf
                    <input type="hidden" name="type" value="parent" class="form-control" id="">

                    <h4 class="mb-4 fonTs">Parent Info</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Parent's Name</label>
                                <div class="col-sm-9 form-control-lg">
                                    <input type="text" name="name" class="form-control" id="">
                                    <!-- <input type="hidden" name="type"  value='parent' class="form-control" id=""> -->
                                </div>

                            </div>
                            @include('common.alert', ['input' => 'name'])
                            <div class="mb-3 row">
                                <label for="inputPassword" class="col-sm-3 col-form-label">Phone Number or Email</label>
                                <div class="col-sm-9 form-control-lg">
                                    <input type="text" name="email" class="form-control" id="">
                                </div>
                            </div>
                            @include('common.alert', ['input' => 'email'])
                        </div>
                        <div class="col-md-6">
                            <div class="stl76 col-sm-8 m-auto">
                                <div class="mb-3 row">
                                    <button type="submit" class="btn btnst  bgclr606"> LOGIN</button>
                                </div>
                                <div class="mb-3 row">
                                    <p>Or, login with</p>
                                </div>
                                <div class="mb-3 row">
                                    <Button type="text" class="btn btnst fbcl" href="{{ url('login/facebook') }}"> <i
                                            class="fa fa-facebook"></i>Facebook</Button>
                                </div>
                                <div class="mb-3 row">
                                    <button type="text" href='#' class="btn btnst gclr"> <i class="fa fa-google-plus"></i>Google</button>
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

@parent
@endsection


@section('footer')
@parent
@endsection