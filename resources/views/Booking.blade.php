@extends('layout.master')
@section('title','Booking')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <h3 class="text-info">Please fill in the reservation form below</h3>
                    <hr>
                    <form method="post" class="form-group">
                        {{csrf_field()}}
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                            @endif
                        <div class="form-group col-xs-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Full Name">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="number">Phone</label>
                            <input type="text" class="form-control" name="phone" id="number" placeholder="09-XXX-XXX">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="checkin">Check In</label>
                            <input type="date" class="form-control" name="checkin" id="checkin">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="checkout">Check Out</label>
                            <input type="date" class="form-control" name="checkout" id="checkout">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="roomtype">Room Type</label>
                            <input type="text" class="form-control" name="roomtype" id="roomtype" value="{{$service->title}}">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="price">Room Price</label>
                            <input type="text" class="form-control" name="price" id="price" value="{{$service->price}}">
                        </div>
                        <div class="form-group col-xs-6">
                            <label for="guest">Number Of Guest</label>
                            <input type="number" class="form-control" name="guest" id="guest">
                        </div>
                        <div class="form-group col-xs-12">
                            <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary pull-right">Request Booking</button>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="icon" style="font-size: 25px;text-shadow:1px 0px 3px gray;">
                    <a href="#">
                        <span class="fa fa-user-circle" style="color: brown;margin-left: 20px;"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-facebook" style="color: brown;margin-left: 20px;"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-twitter" style="color: brown;margin-left: 20px;"></span>
                    </a>
                    <a href="#">
                        <span class="fa fa-mail-forward" style="color: brown;margin-left: 20px;"></span>
                    </a>
                    <h2 style="color: #f5dbdb">Our Location Map</h2>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="well">
                    <h2>Address 1</h2>
                    <p>We are located in the center of Yangon surrounded by Trader.</p>
                    <p>
                        01-502456
                        <br>
                        09-799966961
                    </p>
                    <p style="display: inline-block;">Email :</p>
                    <a href="#">Centralhotel@gmail.com</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="well">
                    <h2>Address 2</h2>
                    <p>We are located in the center of Mandalay surrounded by Trader.</p>
                    <p>
                        01-502456
                        <br>
                        09-799966961
                    </p>
                    <p style="display: inline-block;">Email :</p>
                    <a href="#">Centralhotel@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
@endsection
