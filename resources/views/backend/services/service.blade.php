@extends('backend.adminlayout.adminmaster')
@section('title','Service Create Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Service Create Page</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;">
                    <legend class="text-center">Service Kind Of Room</legend>
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger text-center">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success text-center">{{session('status')}}</p>
                        @endif
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Title Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" class="form-control" name="price" id="price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="imgs">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Create Service Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

