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


                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>


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