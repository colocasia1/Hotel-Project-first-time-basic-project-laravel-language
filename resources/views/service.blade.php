@extends('layout.master')
@section('title','service')
@section('content')
    <div class="container-fluid">
        <div class="well well-sm">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{{asset('photo/slider-1.jpg')}}" alt="..." style="width: 100%;height: 380px;">
                    </div>
                    <div class="item">
                        <img src="{{asset('photo/slider-2.jpg')}}" alt="..." style="width: 100%;height: 380px;">
                    </div>
                    <div class="item">
                        <img src="{{asset('photo/slider-3.jpg')}}" alt="..." style="width: 100%;height: 380px;">
                    </div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="fa fa-chevron-circle-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="fa fa-chevron-circle-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="well" style="margin-top: 40px;">
                        <h3>Other Service</h3>
                        <p>In addition to housing we also offer.</p>

                        @foreach($otherservices as $otherservice)
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="{{asset('/service/'.$otherservice->imgs)}}"
                                         style="width: 61px; height: 61px;" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <p>{{$otherservice->description}}</p>
                            </div>
                        </div>
                        @endforeach
                        <div class="row">
                            <div class="text-center small">
                                {{$otherservices->links()}}
                            </div>
                        </div>

                        <legend class="text-center text-info">Watch Short Video</legend>
                        @foreach($uploads as $upload)
                            <video width="370" controls height="auto">
                                <source src="{{asset('/videos/'.$upload->video)}}" type="video/mp4" autofocus>
                            </video>
                        @endforeach

                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3 class="text-center">We offer several kinds of rooms</h3>
                    @if(session('status'))
                        <p class="alert alert-success text-center">{{session('status')}}</p>
                    @endif
                    @foreach($services as $service)
                    <div class="col-sm-6 col-md-6">
                        <div class="thumbnail">
                            <img src="{{asset('/service/'.$service->imgs)}}" alt="..." style="width: 382px;height: 267px;">
                            <div class="caption">
                                <p class="text-danger">Price ${{$service->price}}</p>
                                @if(Auth::check())
                                    @if(Auth::user()->hasRole('Admin'))
                                <p class="pull-right"><a href="{{action('Viewer\BookingController@destroy',$service->id)}}"><span class="fa fa-trash text-danger"></span></a></p>
                                    @endif
                                @endif
                                <h3 class="text-center text-primary">{{$service->title}}</h3>
                                <p>{{$service->description}}</p>
                                <p>
                                    <a href="{{action('Viewer\BookingController@create',$service->id)}}" class="btn btn-primary pull-right" role="button">Fill Book</a>
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @endforeach
                   <div class="row">
                       <div class="col-12 text-center">
                           {{$services->links()}}
                       </div>
                   </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-4">

                </div>
                <!--div align="center" class="embed-responsive embed-responsive-16by9">
                    <video autoplay loop class="embed-responsive-item">
                     </video>
                 </div-->
                </div>
            </div>
        </div>
    </div>
@endsection
