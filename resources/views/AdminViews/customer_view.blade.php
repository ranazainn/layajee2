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
              <li class="breadcrumb-item"><a href="{{route('customer-get')}}">Home</a>
              </li>
              <li class="breadcrumb-item active">
                <a href="#">User Details</a>
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
                      <span>Person Detail</span>
                    </a>
                  </li>

                  <li class="tab">
                    <a href="#notifications">
                      <i class="material-icons">notifications_none</i>
                      <span> Complaint</span>
                      <span class="badge badge pill purple float-right" style="
                       position: absolute;margin-left: 2px;margin-top: 5px;">3</span>
                    </a>
                  </li>

                  <!-- <li class="tab">
                    <a href="#notifications">
                      <i class="material-icons">notifications_none</i>
                      <span>Booking Detail</span>

                    </a>
                  </li> -->
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
                      <a class="mb-6 btn waves-effect waves-light gradient-45deg-purple-deep-orange right"><i class="material-icons right">delete</i>Delete</a>
                    </div>
                  </div>
                  <div class="divider mb-1 mt-1"></div>
                  <form class="formValidate" method="get">
                    <div class="row">
                      <h5 class="card-title">User Detail</h5>
                      <table>
                        <tr>
                          <th>Name:</th>
                          <td>{{$customer->name}}</td>
                          <th>Email:</th>
                          <td>{{$customer->email}}</td>
                        </tr>
                        <tr>
                          <th>Phone</th>
                          <td>{{$customer->phone}}</td>
                          <th>Gender:</th>
                          <td>{{$customer->gender}}</td>
                        </tr>
                      </table>
                    </div>
                  </form>
                </div>
              </div>
              <div id="social-link">
                <form class="paaswordvalidate">
                  <div class="row">
                    <ul class="collapsible collapsible-accordion">
                      <li class="active">

                        <div class="collapsible-header"><i class="material-icons">adjust</i>Child Information</div>
                        <div class="collapsible-body">
                          <!-- <div class="card gradient-45deg-light-blue-cyan gradient-shadow"> -->
                          <!-- <div class="card-content white-text"> -->

                          @foreach($person as $item)
                          <div class="mt-4">
                            <span class="card-title">Child List</span>
                            <table>

                              <tr>
                                <th>Name:</th>
                                <td>{{$item->name}}</td>
                                <th>Phone:</th>
                                <td>{{$item->phone}}</td>
                              </tr>
                              <tr>
                                <th>Age:</th>
                                <td>{{$item->age}}</td>
                                <th>Gender:</th>
                                <td>{{$item->gender}}</td>
                              </tr>
                              <tr>
                                <th>Class:</th>
                                <td>{{$item->class}}</td>
                                <th>School:</th>
                                <td>{{$item->school_name}}</td>
                              </tr>
                              <tr>
                                <th>Area:</th>
                                <td>{{$item->area}}</td>
                                <th>Description:</th>
                                <td>{{$item->description}}</td>
                              </tr>
                              <tr>
                                <td colspan="4">
                                  <a href="{{url('admin/child_view/'.$item->id)}}" class="waves-effect waves-light btn  teal accent-4 
                                   right">View</a>
                                </td>
                              </tr>
                            </table>
                          </div>
                          @endforeach

                        </div>
                      </li>
                    </ul>
                  </div>
                </form>

              </div>

              <div id="notifications">
                            <form class="paaswordvalidate">
                                <div class="row">
                                    <ul class="collapsible collapsible-accordion">
                                        <li class="active">

                                            <div class="collapsible-header"><i class="material-icons">adjust</i>Complaint</div>
                                            <div class="collapsible-body">

                                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow">
                                                    <div class="card-content white-text">
                                                        <span class="card-title">User Name</span>
                                                        <p>
                                                            I am a very simple card with gradient background & button. I am good at
                                                            containing small bits
                                                            of
                                                            information. I am convenient because I require little markup to use
                                                            effectively.
                                                        </p>
                                                    </div>
                                                    <div class="card-action">
                                                        <a href="#!" class="waves-effect waves-light btn gradient-45deg-red-pink">View</a>
                                                    </div>
                                                </div>

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