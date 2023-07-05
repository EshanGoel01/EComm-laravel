@extends('master')
@section('content')
<div class="row my-3">
    <div class="col-sm-11">
    </div>
    
</div>
<div class="  custom-product">
    <div class="">
        <div class="row">
            <h1 class="my-1 col-sm-10">My orders</h1>
            {{-- <div class="my-1 mx-3 col-sm-1">
                <button class="btn btn-success">
                    <a class="dropdown-item" href="ordernow">Order list</a>
                </button>
            </div> --}}
        </div>
            @foreach ($orders as $item)     
            <div class="row searched-item cart-list-divider customer-login">
                <div class="col-sm-4">
                    <a href="detail/{{$item->id}}">
                        <img src="{{$item->gallery}}" class="trend-img" alt="...">
                    </a>
                </div>
                <div class="col-sm-4 my-2">
                        <div class="">
                          <h2>{{$item->name}}</h2>
                          <h6>Delivery Status: {{$item->status}}</h6>
                          <h6>Address: {{$item->address}}</h6>
                          <h6>Payment Status: {{$item->payment_status}}</h6>
                          <h6>Payment Method: {{$item->payment_method}}</h6>
                      </div>
                </div>                
            </div>
            @endforeach
    </div>
</div>

@endsection
