@extends('AdminViews.adminlayouts.admin_master')
@section('content')
<!-- BEGIN: Page Main-->
<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <!-- <h5 class="breadcrumbs-title mt-0 mb-0">Home</h5> -->
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item"><a href="{{route('provider')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Driver Details</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12">
            <div class="container">
                <!-- Account settings -->
                <section class="tabs-vertical mt-1 section">
                    <div class="row">
                        <div class="col l4 s12">
                            <!-- tabs  -->
                            <div class="card-panel">
                                <ul class="tabs">
                                    <li class="tab">
                                        <a href="#general">
                                            <i class="material-icons">brightness_low</i>
                                            <span>Profile</span>
                                        </a>
                                    </li>
                                    <!-- <li class="tab">
                                        <a href="#change-password">
                                            <i class="material-icons">lock_open</i>
                                            <span>Change Password</span>
                                        </a>
                                    </li> -->

                                    <li class="tab">
                                        <a href="#social-link">
                                            <i class="material-icons">chat_bubble_outline</i>
                                            <span>Information</span>
                                        </a>
                                    </li>

                                    <li class="tab">
                                        <a href="#complain">
                                            <i class="material-icons">notifications_none</i>
                                            <span> Complaint</span>
                                            <span class="badge badge pill purple float-right" style="
                                            position: absolute;margin-left: 2px;margin-top: 5px;">{{$complain->count()??0}}</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col l8 s12">
                            <!-- tabs content -->
                            <div id="general">
                                <div class="card-panel">
                                    <div class="display-flex">
                                        <div class="media">
                                            <img src="../../../app-assets/images/avatar/avatar-12.png" class="border-radius-4" alt="profile image" height="64" width="64">
                                        </div>
                                        <div class="media-body">
                                            <div class="display-flex flex-wrap">
                                                <div class="num-rate" data-rateyo-read-only="true" data-rateyo-rating="50%"></div>

                                                <div class="chip ml-1">0</div>
                                            </div>
                                            <br>
                                            <div class="general-action-btn">

                                                <button id="#" class="btn indigo">
                                                    <span>Activate</span>
                                                </button>
                                                <button class="btn waves-effect waves-light gradient-45deg-purple-deep-orange mr-2">Deactivate</button>
                                            </div>
                                            <!-- <div class="upfilewrapper">
                                                <input id="upfile" type="file" />
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="divider mb-1 mt-1"></div>
                                    <form class="" method="">
                                        <div class="row">
                                            <h5 class="card-title">User Detail</h5>
                                            <table>
                                                <tr>
                                                    <th>Name:</th>
                                                    <td>{{$driver->name}}</td>
                                                    <th>Email:</th>
                                                    <td>{{$driver->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$driver->phone}}</td>
                                                    <th>Gender:</th>
                                                    <td>{{$driver->gender}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="social-link">
                                <div class="card-panel">
                                    <form class="paaswordvalidate">
                                        <div class="row">
                                            <h5 class="card-title" style="margin-top: 20px;">Driver Documentation</h5>
                                            <table>

                                                <tr>
                                                    <th>Driver Name:</th>
                                                    <td>Null</td>
                                                    <th>Vehicle:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>Document type:</th>
                                                    <td>Null</td>
                                                    <th>Document Image:</th>
                                                    <td>Null</td>
                                                </tr>
                                            </table>
                                            <h5 class="card-title" style="margin-top: 20px;">Driver Vehicle Detail</h5>
                                            <table>
                                                <tr>
                                                    <th>Vehicle Model:</th>
                                                    <td>Null</td>
                                                    <th>Vehicle Type:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>Vehicle Number:</th>
                                                    <td>Null</td>
                                                    <th>Vehicle Color:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>Vehicle Year:</th>
                                                    <td>Null</td>
                                                    <th>Vehicle Seats:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>Occupied Seats:</th>
                                                    <td>Null</td>
                                                    <th>Vehicle Seats:</th>
                                                    <td>Null</td>
                                                </tr>
                                            </table>
                                            <h5 class="card-title" style="margin-top: 20px;">Start And End</h5>
                                            <table>
                                                <tr>
                                                    <th>Start Time:</th>
                                                    <td>Null</td>
                                                    <th>Estimate Time:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>Start Lat:</th>
                                                    <td>Null</td>
                                                    <th>Start Long:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>End Lat:</th>
                                                    <td>Null</td>
                                                    <th>End Long:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <th>End Time:</th>
                                                <td>Null</td>
                                                </tr>
                                            </table>
                                            <h5 class="card-title" style="margin-top: 20px;">Stop</h5>
                                            <table>
                                                <tr>
                                                    <th>Location Name:</th>
                                                    <td>Null</td>
                                                    <th>Start Location:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>location Lat:</th>
                                                    <td>Null</td>
                                                    <th>location Long:</th>
                                                    <td>Null</td>
                                                </tr>
                                                <tr>
                                                    <th>End location:</th>
                                                    <td>Null</td>
                                                    <th>Distance:</th>
                                                    <td>Null</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div id="complain">
                                <form class="paaswordvalidate">
                                    <div class="row">
                                        <ul class="collapsible collapsible-accordion">
                                            <li class="active">
                                                <div class="collapsible-header"><i class="material-icons">adjust</i>Complaint</div>
                                                <div class="collapsible-body">
                                                    @foreach($complain as $item)
                                                    <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                                                        <div class="card-content white-text">
                                                            <p class="card-stats-title"><i class="material-icons">perm_identity</i>{{$item->user->name??''}}</p>
                                            <p class="card-stats-title"><i class="material-icons">group</i>    {{$item->person->name??''}}</p>
                                                            <br>
                                                            <p>
                                                            {{$item->complaint}}
                                                            </p>
                                                        </div>
                                                       
                                                        <div class="card-action">
                                                            <a href="#!" class="waves-effect waves-light btn gradient-45deg-red-pink">View</a>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

@endsection