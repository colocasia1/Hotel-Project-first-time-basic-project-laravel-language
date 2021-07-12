<div class="container-fluid">
    <div class="row">
        <div class="col-md-3" style="margin-top: 5px;">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">
                        <img alt="Brand" src="{{asset('photo/logo.png')}}" style="width: 100px;height: 80px;margin-top: -23px;margin-left: -10px;">
                    </a>
                    <a class="navbar-brand" href="#">Central Hotel</a>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container-fluid">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="{{url('services')}}">Service</a></li>
                    <li><a href="{{url('restaurant')}}">Restaurant</a></li>
                    <li><a href="{{url('about')}}">About</a></li>

                @if(Auth::check())<!-- Login user  -->
                    @if(Auth::user()->hasRole('Admin'))
                        <li><a href="{{action('admin\AdminController@index')}}">Admin Panel</a></li>
                    @endif
                    @endif

                    @if(Auth::check())
                    <li><a href="{{url('logout')}}">Logout</a></li>
                    @elseif(Auth::user() && Auth::user('colo'))
                    <li><a href="#">Register</a></li>
                    @endif

                </ul>
                <form class="navbar-form navbar-right" role="search">
                    <div class="input-group">
                        <input type="search" class="form-control" placeholder="Search">
                        <span class="input-group-btn">
                            <input type="submit" class="btn btn-primary" value="Search" name="search">
                        </span>
                    </div>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
