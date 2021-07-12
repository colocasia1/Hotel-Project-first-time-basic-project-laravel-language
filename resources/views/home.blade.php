@extends('layout.master')
@section('title','Home')
@section('content')
    <div class="container-fluid">
        @foreach($homecarousels as $image)
            <img src="{{public_path('/homecarosal').$image->img}}" alt="...">
        @endforeach
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="well">
                    <h3 class="text-center">Central Hotel is happy to wellcome you!</h3>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="..." alt="...">
                            </a>
                        </div>
                        <div class="media-body text-justify">
                            <p>Come alone or bring your family,stay here for a night
                                for weeks, stay here while on business trip-either way
                                our hotel is the best possible variant.Feel free to contact
                                us anytime in case you have any questions or concerns.
                            </p>
                        </div>
                    </div>
                    <hr>

                    <h3 class="text-center">Our location at Yangon,Mandalay and Naypyitaw</h3>

                    @foreach($homeposts as $homepost)
                    <div class="col-md-4 col-sm-6">
                            <div class="thumbnail">
                                <img src="{{asset('/homephotos/'.$homepost->imgs)}}" alt="...">
                                <div class="caption">
                                    <h4 class="text-center">{{$homepost->title}}</h4>
                                    <p>{{$homepost->description}}</p>
                                    <p>
                                        <a href="#" class="btn btn-primary pull-right" role="button">Read</a>
                                    </p>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    @endforeach
                    <div class="clearfix"></div>

                 </div>
            </div>
            <div class="col-md-4">
                @include('layout.sidebar')
            </div>
        </div>
    </div>
    @include('layout.footer')
@endsection

