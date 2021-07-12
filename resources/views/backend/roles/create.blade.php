@extends('backend.adminlayout.adminmaster')
@section('title','Create Rank Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="page-header text-center">Rank Create Form</h1>
                    <form method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger text-center">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success text-center">{{session('status')}}</p>
                        @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Rank Name">
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Create Rank</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
