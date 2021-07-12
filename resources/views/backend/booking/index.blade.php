@extends('backend.adminlayout.adminmaster')
@section('title','Booking Request Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Booking Request Page</h1>
            <div class="row">
                <div class="col-md-12 col-sm-8" style="margin-top: 10px;">
                    <legend>Booking Result</legend>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            @if(session('status'))
                                <p class="alert alert-warning text-center">{{session('status')}}</p>
                            @endif
                        </div>
                    </div>
                    <table class="table">
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
                        <th>delete</th>
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
                            <td><a href="{{action('admin\BookingController@destroy',$reservation->id)}}"><span class="fa fa-trash text-danger"></span></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

