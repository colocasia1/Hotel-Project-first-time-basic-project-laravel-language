@extends('backend.adminlayout.adminmaster')
@section('title','Food Create Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Food Create Page</h1>
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-8 col-md-offset-2">
                    <legend>Food Create Form</legend>
                    <form method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger text-center">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                           <p class="alert alert-success text-center">{{session('status')}}</p>
                        @endif
                        <div class="form-group">
                            <label for="name">Food Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Food Name">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" placeholder="About Food" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="category">Choose Category Type</label>
                            <select class="form-control" name="category" id="category">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->cat_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Image input</label>
                            <input type="file" id="exampleInputFile" name="img">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Create Food</button>
                        <div class="clearfix"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

