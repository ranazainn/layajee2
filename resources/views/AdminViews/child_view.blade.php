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
                            <li class="breadcrumb-item"><a href="{{url('admin/customer')}}">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="#">Booking Detail</a>
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
                                    <h4 class="card-title">Child Booking Detail</h4>
                                    <!-- <h5 class="card-title" style="margin-top: 20px;">Booking Information</h5> -->
                                    <table>
                                        <tr>
                                            <th>Pickup Address:</th>
                                            <td>{{$booking->pickup_address}}</td>
                                            <th>Drop Address:</th>
                                            <td>{{$booking->drop_address}}</td>
                                        </tr>
                                        <tr>
                                            <th>Day:</th>
                                            <td colspan="3">
                                                @foreach($days as $item)
                                                <div @if($item->is_off==1) class="btn active" @else class="btn grey lighten-5" @endif
                                                    style="border-radius: 100px;color: rgb(0 0 0 / 57%);">
                                                    {{$item->day}}
                                                </div>
                                                @endforeach
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="mt-3">
                                        <label for="">Driver</label>
                                        <form action="{{url('admin/update/'.$booking->id)}}" method="POST">
                                            @csrf
                                            <select class="form-select" name="driver" aria-label="Default select example">
                                                <option selected disabled>--Select Driver--</option>
                                                @foreach($driver as $item)
                                                <option value="{{$item->id}}"{{($booking->driver_id==$item->id)?'selected':''}}>{{$item->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <button type="update" class="btn btn-primary">Update</button>
                                        </form>
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