@extends('backend.adminlayout.adminmaster')
@section('title','Home Carosal Create Page')
@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">
            <h1 class="page-header text-center">Home Carosal Create Page</h1>
            <div class="row">
                <div class="col-md-6" style="margin-top: 10px;">
                    <legend>Carousel Create</legend>
                <form method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                 @if(session('status'))
                        <p class="alert alert-success text-center">{{session('status')}}</p>
                    @endif
                <div class="form-group">
                    <input type="file" name="file[]" id="exampleInputFile" multiple>
                </div>
                    <button type="submit" class="btn btn-primary">Carousel Create</button>
                </form>
            </div>
            </div>
        </div>
    </div>
    <!--script type="text/javascript">
        $(document).ready(function() {
            $(".btn-primary").click(function(){
                var html = $(".clone").html();
                $(".increment").after(html);
            });
        });
    </script-->
@endsection
