@extends('backend.adminlayout.adminmaster')
@section('title','Booking Request Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Trash Booking Request Page</h1>
            <div class="row">
                <div class="col-md-12 col-sm-8" style="margin-top: 10px;">
                    <legend>Trash Booking Request</legend>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @if(session('status'))
                                <p class="alert alert-success text-center">{{session('status')}}</p>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            @if(session('force'))
                                <p class="alert alert-danger text-center">{{session('force')}}</p>
                            @endif
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                        <th>Id</th>
                        <th>Request Name</th>
                        <th>Phone Number</th>
                        <th>Room Type</th>
                        <th>Room Price</th>
                        <th>Number of Guest</th>
                        <th>Message</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Restore</th>
                        <th>Remove</th>
                        </thead>
                        <tbody>
                        @foreach($reservations as $reservation)
                            <tr>
                                <td>{{$reservation->id}}.</td>
                                <td>{{$reservation->name}}</td>
                                <td>{{$reservation->phone}}</td>
                                <td>{{$reservation->room_type}}</td>
                                <td>{{$reservation->room_price}}</td>
                                <td>{{$reservation->no_guest}}</td>
                                <td>{{$reservation->message}}</td>
                                <td>{{$reservation->check_in}}</td>
                                <td>{{$reservation->check_out}}</td>
                                <td><a href="{{action('admin\BookingController@restore',$reservation->id)}}"><span class="fa fa-window-restore"></span></a></td>
                                <td><a href="{{action('admin\BookingController@forcedelete',$reservation->id)}}"><span class="fa fa-remove text-danger"></span></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

