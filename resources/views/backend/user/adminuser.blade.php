@extends('backend.adminlayout.adminmaster')
@section('title','Admin User Info Page')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="page-header text-center">Admin User Info</h1>
                    <table class="table">
                        <thead>
                            <th>Id</th>
                            <th>Admin Name</th>
                            <th>Email</th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}.</td>
                                <td><a href="{{action('admin\AdminUserController@edit',$user->id)}}">{{$user->name}}</a></td>
                                <td>{{$user->email}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
