@extends('backend.adminlayout.adminmaster')
@section('title','Admin Edit Page')
@section('content')
    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="page-header text-center">Admin Rank Edit </h1>
                    <form method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        @if(session('status'))
                            <p class="alert alert-success text-center">{{session('status')}}</p>
                            @endif
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <select multiple class="form-control" name="role[]">
                                @foreach($roles as $role)
                                    <option value="{{$role->name}}"

                                            @if(in_array($role->name,$selectedRoles))
                                            selected="selected"
                                            @endif

                                    >{{$role->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

