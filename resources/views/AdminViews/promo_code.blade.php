@extends('AdminViews.adminlayouts.admin_master')


@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

@endsection

@section('content')


<div id="main">
  <div class="row">
    <div id="breadcrumbs-wrapper" data-image="../../../app-assets/images/gallery/breadcrumb-bg.jpg">
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
                  <!-- <div style="display: inline-block;">
                    <h4>Rides List</h4>
                  </div> -->

                  <!-- <div style="float:right">
                    <a class="waves-effect waves-light btn-small" href="{{route('assigndriver')}}">Assign Driver</a>

                  </div> -->
                  <div class="row">
                    <div class="col s12 m12 " style="overflow:auto ;overflow-x: scroll;">
                      <table id="page-length-option" class="display" style="width:100%;">
                        <thead>
                          <tr>

                            <th>Sr#</th>
                            <th>Name</th>
                            <th>Gneder</th>
                            <th>Special child</th>
                            <th>Pickup time</th>
                            <th>Drop off time</th>
                            <th>Pickup location</th>
                            <th>Drop off location</th>
                            <th>Vehicle type</th>
                            <th>Status</th>
                            <th>Assign driver</th>
                          </tr>
                        </thead>
                        <tbody>


                          @foreach($childinfo as $key=>$child)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $child->full_name }}</td>
                            <td>{{($child->gender == 0)? "Male":"Female"}}</td>
                            <td>{{ ($child->is_special == 0)? "Normal":"Special" }}</td>
                            <td>{{ isset( $child->booking['pick_time'])?$child->booking['pick_time']:'-'}}</td>
                            <td>{{ isset( $child->booking['drop_time'])?$child->booking['drop_time']:'-' }}</td>
                            <td>{{ isset( $child->booking['pickup_address'])?$child->booking['pickup_address']:'-' }}</td>
                            <td>{{ isset( $child->booking['drop_address'])?$child->booking['drop_address']:'-' }}</td>
                            <td>{{ $child->vehicle_type }}</td>
                            <td>{{ ($child->user_driver_id != null) ? "Assigned" : "UnAssgined" }}</td>
                            <td style="padding-left: 2%;">
                              <a class="btn-floating mb-1 btn modal-trigger btn-medium waves-effect waves-light" href="#modal{{$child->id}}">
                                <i class="material-icons">add</i>

                              </a>
                            </td>
                          </tr>

                          <!-- Modal Structure -->
                          <div id="modal{{$child->id}}" class="modal">
                            <div class="modal-content">
                              <h4>Assign Driver {{$child->full_name}}</h4>
                            </div>

                             <div class="row">
                              <form class="col s12">
                              @CSRF
                              <input type="hidden" id="t" name="id" value="{{$child->id}}">
                              <div class="col s10">
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">account_circle</i>
                                  <input disabled id="icon_prefix" type="text" class="validate" value="{{$child->parentDetails->name}}">
                                  <label for="icon_prefix">Parent Name</label>
                                </div>
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">phone</i>
                                  <input disabled id="icon_telephone" type="tel" class="validate" value="{{$child->parentDetails->phone}}">
                                  <label for="icon_telephone">Telephone</label>
                                </div>
                              </div>
                              <div class="col s10">
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">mail_circle</i>
                                  <input disabled id="icon_prefix" type="text" class="validate" value="{{$child->parentDetails->email}}">
                                  <label for="icon_prefix">Email</label>
                                </div>
                                <div class="input-field col s6">
                                  <i class="material-icons prefix">face</i>
                                  <input disabled id="icon_telephone" type="tel" class="validate" value="{{$child->parentDetails->gender}}">
                                  <label for="icon_telephone">Gender</label>
                                </div>
                              </div>
                              <div class="col s12">
                                <div class="input-field col s12">
                                  <i class="material-icons prefix">directions_car</i>
                                  <select name="user_driver_id" id="uudi">
                                    @foreach($data as $d)
                                      <option value="{{$d->id}}">{{ $d->name }}</option>
                                   @endforeach

                                  </select>
                                  <label for="icon_prefix">Dreiver</label>
                                </div>
                              </div>
                              <div class="modal-footer col s12">
                              <button class="modal-close blue waves-effect waves-green btn-flat update">Assign</button>
                              <a href="#!" class="modal-close red waves-effect waves-green btn-flat">Close</a>
                            </div>
                          </form>
                        </div>
                          </div>
                          @endforeach

                        </tbody>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

 <!-- Modal Trigger -->
 <!-- <a class="waves-effect waves-light btn modal-trigger"{{url('/admin/assigndriver/'.$child->id)}} href="#modal">Modal</a> -->

          @endsection

          @section('js')

          <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
          </script>

          <script>
            $(document).ready(function() {
              $('#myTable').DataTable();
            });
            // document.addEventListener('DOMContentLoaded', function() {
            //   var elems = document.querySelectorAll('.modal');
            //   var instances = M.Modal.init(elems, options);
            // });

  // Or with jQuery

  $(document).ready(function(){
    $('.modal').modal();
  });
      $(document).on("click", ".update" , function(e) {
        e.preventDefault();
        var udi   = $('#uudi').val();
        var id   = $('#t').val();
        var token = "{{ csrf_token() }}";

        $.ajax({
        url: 'assign-drivers/'+id,
        type: 'post',
        data:{
          _token:token,
          user_driver_id:udi
        },
        success: function(data){  
          console.table(data);
        //  alert("Assign Driver Successfully!")
			   window.location.href = "home"

        }
        });

    });
          </script>

          @endsection