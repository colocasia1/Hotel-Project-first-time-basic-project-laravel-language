@extends('backend.adminlayout.adminmaster')
@section('title','Booking Request Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Service Post Trash Page</h1>
            <div class="row">
                <div class="col-md-12 col-sm-8" style="margin-top: 10px;">
                    <legend>Service Trash Post </legend>
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
                        <th>Title Name</th>
                        <th>Description</th>
                        <th>Images Name</th>
                        <th>Price</th>
                        <th>Restore</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($services as $service)
                        <tr>
                            <td>{{$service->id}}</td>
                            <td>{{$service->title}}</td>
                            <td>{{$service->description}}</td>
                            <td>{{$service->imgs}}</td>
                            <td>{{$service->price}}</td>
                            <td><a href="{{action('admin\ServiceController@restore',$service->id)}}"><span class="fa fa-window-restore"></span></a></td>
                            <td><a href="{{action('admin\ServiceController@forcedelete',$service->id)}}"><span class="fa fa-trash text-danger"></span></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

