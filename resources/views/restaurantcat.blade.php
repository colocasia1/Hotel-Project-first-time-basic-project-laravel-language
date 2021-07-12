@extends('layout.master')
@section('title','Restaurant')
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
                <div class="col-md-9" style="margin-top: 20px;">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4 class="text-center">{{$category->cat_name}}</h4>
                        </div>
                        <div class="panel-body">
                            @foreach($category->restaurants as $restaurant)
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                        <img src="{{asset('/food/'.$restaurant->img)}}" style="width: 382px;height: 254px;" alt="...">
                                        <div class="caption">
                                            <p class="text-danger">Price ${{$restaurant->price}}</p>
                                            <h4 class="text-center">{{$restaurant->food_name}}</h4>
                                            <p>{{$restaurant->description}}</p>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="list-group text-center">
                        <h3 class="list-group-item active">
                            Food Category
                        </h3>
                        @foreach($categories as $category)
                            <a href="{{action('Viewer\RestaurantController@show',$category->id)}}" class="list-group-item">{{$category->cat_name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
