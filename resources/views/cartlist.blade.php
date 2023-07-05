@extends('master')
@section('content')
<div class="  custom-product">
    <div class="">
        <div class="">
            <h1 class="my-4">Cart List</h1>
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
                    <button class="btn btn-warning ">Remove from cart</button>
                    <a href="detail/{{$item->id}}">
                        
                     </a>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
