
@if(!Auth::check())
    <div class="well">
        <h4 class="text-center">Admin Login</h4>
        <form method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            @foreach($errors->all() as $error)
                <p class="alert alert-danger text-center">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Email">
            </div>
            <div class="form-group input-group">
                <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                <span class="input-group-btn">
                <button type="submit" class="btn btn-primary">Login</button>
            </span>
            </div>
        </form>
    </div>
@endif

<div class="well">
    <h4 class="text-center">Our Special Offers</h4>
    <ul>
        <li>FREE wide-screen TV</li>
        <li>50% Discount for our room service</li>
        <li>30% Discount for 3 days+ orders</li>
        <li>FREE drinks and beverages in rooms</li>
        <li>Exclusive souvenirs</li>
        <li>FREE to use wifi connection strong 20mb</li>
    </ul>
</div>

<div class="well">
    <h4 class="text-center">In-Room Facilities</h4>
    <ul>
        <li>LCD Flat Screen TV</li>
        <li>Wireless-line</li>
        <li>Aboard Telephone Lines</li>
        <li>Individual Air Conditioning</li>
        <li>Tea and Coffee making facilities</li>
        <li>Complimentary Wi-Fi internet access throughout Hotel</li>
    </ul>
</div>
