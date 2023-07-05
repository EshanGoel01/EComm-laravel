@extends('master')
@section('content')
<div class="row my-3">
    <div class="col-sm-11">
    </div>
    <div class="col-sm-1">
        <button class="btn btn-primary">
            <a class="dropdown-item" href="/">Go Back</a>
        </button>
</div>
</div>

<div class="container my-5">
    
    <div class="row">
        <div class="col-sm-3">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="login-form col-sm-6">
            <div class="  customer-login">
                <h2>Name: {{$product['name']}} </h2>
                <h6>{{$product['category']}}</h6>
                <h3>Price: {{$product['price']}}</h3>
                <h5>Desc: {{$product['description']}}</h5>
            </div>
        </div>
        <div class="col-sm-6">
        </div>
        <div class="col-sm-3 my-5">
            <form action="/add_to_cart" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-primary">Add to Cart</button>
            </form>   
        </div>
        <div class="col-sm-3 my-5">
            <button class="btn btn-success">Buy Now</button>
        </div>
        
    </div>
</div>
@endsection