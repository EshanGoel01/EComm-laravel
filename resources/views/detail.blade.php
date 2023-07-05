@extends('master')
@section('content')
<div class="row my-3">
    <div class="col-sm-11">
    </div>
    <div class="col-sm-1">
        <button class="btn btn-dark">
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
                <h1>{{$product['name']}} </h1>
                <h6>{{$product['category']}}</h6>
                <h3>Price: {{$product['price']}}</h3>
                <h6>Description: {{$product['description']}}</h6>
            </div>
        </div>
        <div class="col-sm-6">
        </div>
        <div class="col-sm-4 my-5">
            {{-- <button class="btn btn-success">Buy Now</button> --}}
        </div>
        
        <div class="col-sm-2 my-5">
            <form action="/add_to_cart" method="post">
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                @csrf
                <button class="btn btn-success">Add to Cart</button>
            </form>   
        </div>
    </div>
</div>
@endsection