@extends('master')
@section('content')
<div class="row my-3">
    <div class="col-sm-11">
    </div>
    
</div>
<div class="  custom-product">
    <div class="">
        <div class="row">
            <h1 class="my-1 col-sm-10">Cart List</h1>
            <div class="my-1 mx-3 col-sm-1">
                <button class="btn btn-success">
                    <a class="dropdown-item" href="ordernow">Order Now</a>
                </button>
            </div>
        </div>
            @foreach ($products as $item)     
            <div class="row searched-item cart-list-divider customer-login">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="trend-img" alt="...">
                    </a>
                </div>
                <div class="col-sm-4 my-2">
                        <div class="">
                          <h5>{{$item->name}}</h5>
                          <p>{{$item->description}}</p>
                      </div>
                </div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2 my-2">
                    <a href="removecart/{{$item->cart_id}}">
                        <button class="btn btn-warning ">Remove from cart</button>  
                     </a>
                </div>
                
            </div>
            @endforeach
    </div>
</div>

@endsection
