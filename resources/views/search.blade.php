@extends('master')
@section('content')
<div class=" my-5 custom-product">
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>

    <div class="col-sm-4">
        <div class="trending">
            <h1>REsults:</h1>
            @foreach ($products as $item)   
            <div class="search-item ">
                <a href="detail/{{$item['id']}}">
                   <img src="{{$item['gallery']}}" class="trend-img" alt="...">
                   <div class="">
                     <h5>{{$item['name']}}</h5>
                     {{-- <p>{{$item['description']}}</p> --}}
                 </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
      
</div>
@endsection