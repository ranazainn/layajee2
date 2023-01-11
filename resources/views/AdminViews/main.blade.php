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
                <h5 class="breadcrumbs-title mt-0 mb-0">DataTable</h5>
                <ol class="breadcrumbs mb-0">
                  <li class="breadcrumb-item"><a href="#">Home</a>
                  </li>
                  <li class="breadcrumb-item"><a href="#">Table</a>
                  </li>
                  <li class="breadcrumb-item active">DataTable
                  </li>
                </ol>
              </div>
              <div class="col s2 m6 l6"><a class="btn dropdown-settings waves-effect waves-light breadcrumbs-btn right" href="#!" data-target="dropdown1"><i class="material-icons hide-on-med-and-up">settings</i><span class="hide-on-small-onl">Settings</span><i class="material-icons right">arrow_drop_down</i></a>
                <ul class="dropdown-content" id="dropdown1" tabindex="0">
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-profile-page.html">Profile<span class="new badge red">2</span></a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="app-contacts.html">Contacts</a></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="page-faq.html">FAQ</a></li>
                  <li class="divider" tabindex="-1"></li>
                  <li tabindex="0"><a class="grey-text text-darken-2" href="user-login.html">Logout</a></li>
                </ul>
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




  <!-- Page Length Options -->
  <div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <h4 class="card-title">Page Length Options</h4>
          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                    <tr>

                        <th>Child id</th>
                        <th>Parent id</th>
                        <th>Parent name</th>
                        <th>Child name</th>
                        <th>Gneder</th>
                        <th>Special child</th>
                        <th>Pickup time</th>
                        <th>Drop off time</th>
                        <th>Pickup location</th>
                        <th>Drop off location</th>
                        <th>Vehicle type</th>
                    </tr>
              </thead>
              <tbody>

                  @foreach($childinfo as $key=>$child)
                  <tr>
                      <td>{{ $key+1 }}</td>
                      <th>{{ $child->p_id }}</th>
                      <th>{{ $child->parent_name }}</th>
                      <td>{{ $child->child_name }}</td>
                      <td>{{ $child->gender }}</td>
                      <td>{{ $child->special_child }}</td>
                      <td>{{ $child->pickup_time }}</td>
                      <td>{{ $child->drop_off_time }}</td>
                      <td>{{ $child->pickup_location }}</td>
                      <td>{{ $child->drop_off_location }}</td>
                      <td>{{ $child->vehicle_type }}</td>
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


