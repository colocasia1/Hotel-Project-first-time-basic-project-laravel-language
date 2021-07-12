@extends('backend.adminlayout.adminmaster')
@section('title','Other Service Create Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Other Service Create Page</h1>
            <div class="row">
                <div class="col-md-8 col-md-offset-2" style="margin-top: 10px;">
                    <legend class="text-center">Video Create</legend>
                    <form method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" id="exampleInputFile" name="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


