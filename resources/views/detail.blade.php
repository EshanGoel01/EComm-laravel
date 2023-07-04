@extends('master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="detail-img" src="{{$product['gallery']}}" alt="">
        </div>
        <div class="col-sm-6">
            <a href="/">Go Back</a>
            <h2>Name: {{$product['name']}} </h2>
            <h6>{{$product['category']}}</h6>
            <h3>Price: {{$product['price']}}</h3>
            <h5>Desc: {{$product['description']}}</h5>
        </div>
        <button class="btn btn-success">Buy Now</button>
        <button class="btn btn-primary">Add to Cart</button>

    </div>
</div>
@endsection