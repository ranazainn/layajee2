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
        <div class="section  section-data-tables">
          <div class="row">
            <div class="col s12">

              <div class="card">
                <div class="card-content">
                  <h4 class="card-title">User Detail</h4>
                  <table>
                    <tr>
                      <th>Name:</th>
                      <td>Muhammad Ashraf</td>
                      <th>Email:</th>
                      <td>admin@laygee.com</td>
                    </tr>
                    <tr>
                      <th>Phone</th>
                      <td>12345678</td>
                      <th>Gender:</th>
                      <td>Male</td>
                    </tr>
                  </table>
                  <h4 class="card-title" style="margin-top: 20px;">Driver Documentation</h4>
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
                  <h4 class="card-title" style="margin-top: 20px;">Driver Vehicle Detail</h4>
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
                  <h4 class="card-title" style="margin-top: 20px;">Start And End</h4>
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
                  <h4 class="card-title" style="margin-top: 20px;">Stop</h4>
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
                  <div class="container mt-5">
                    <div id="map" style="width:100%;height: 300px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection
