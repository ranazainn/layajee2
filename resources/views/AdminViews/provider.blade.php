@extends('AdminViews.adminlayouts.admin_master')

@section('content')


<div id="main">
    <div class="row">
        <div id="breadcrumbs-wrapper" data-image="{{asset('app-assets/images/gallery/breadcrumb-bg.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col s10 m6 l6">
                        <h5 class="breadcrumbs-title mt-0 mb-0">Home</h5>
                        <ol class="breadcrumbs mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{route('provider')}}">home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="{{route('provider')}}">Provider List</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                <div class="card">
                    <div class="card-content">
                        <div class="row">
                            <div class="col s12">
                                <table id="data_table" class="display">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('js')

@include('includes.datatable', [
'columns' => "
{data: 'name', name: 'name'},
{data: 'email', name: 'email'},
{data: 'phone', name: 'phone'},
{data: 'action', name: 'action', orderable: false, searchable: false},",
'route' => 'provider',
'buttons' => false,
'class' => 'data_table',
'variable' => 'data_table',
])

@endsection