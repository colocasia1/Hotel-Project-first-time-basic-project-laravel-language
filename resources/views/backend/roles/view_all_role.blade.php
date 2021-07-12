@extends('backend.adminlayout.adminmaster')
@section('title','View Rank')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="page-header text-center">View Rank</h1>
                    <table class="table">
                        <thead>
                        <th>Id</th>
                        <th>Rank Name</th>
                        </thead>
                        <tbody>
                        @foreach($roles as $role)
                            <tr>
                                <td>{{$role->id}}.</td>
                                <td>{{$role->name}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
