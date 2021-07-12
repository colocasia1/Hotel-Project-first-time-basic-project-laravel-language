@extends('backend.adminlayout.adminmaster')
@section('title','Category Create Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Category Type Create Page</h1>
            <div class="row">
                <div class="col-md-5">
                    <legend>Food Category Create</legend>
                    <form method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger text-center">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success text-center">{{session('status')}}</p>
                            @endif
                        <div class="form-group">
                            <label for="name">Category Type Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Category Name">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Category Create</button>
                        <div class="clearfix"></div>
                    </form>

                </div>
                <div class="col-md-7">
                    <legend>View all Category</legend>
                    <table class="table">
                        <thead class="text-danger">
                        <th>Id</th>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                        <tr class="text-primary">
                            <td>{{$category->id}}.</td>
                            <td>{{$category->cat_name}}</td>
                            <td><a href="#">edit</a></td>
                            <td><a href="#">delete</a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

