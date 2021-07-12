@extends('layout.master')
@section('title','Register')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">Register Form</div>
                    <div class="panel-body">
                        <form method="post">
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger text-center">{{$error}}</p>
                            @endforeach
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                            </div>
                                <div class="form-group">
                                    <label for="Confirm_Password">Confirm Password</label>
                                    <input type="password" class="form-control" id="Confirm_Password" name="password confirmation" placeholder="Confirm Password">
                                </div>
                            <button type="submit" class="btn btn-primary pull-right">Register</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
