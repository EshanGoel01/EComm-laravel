@extends('master')
@section('content')
<div class=" my-5 custom-product">
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
         @foreach ($products as $item)         
          <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}">
                <img src="{{$item['gallery']}}" class="slider-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5>{{$item['name']}}</h5>
                <p>{{$item['description']}}</p>
                </div>
            </a>
            
          </div>
          @endforeach

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <div class="trending">
        <h1>Trending</h1>
        <div class="carousel-inner">
            @foreach ($products as $item)     
            <a href="detail/{{$item['id']}}">
               <img src="{{$item['gallery']}}" class="trend-img" alt="...">
               <div class="">
                 <h5>{{$item['name']}}</h5>
                 {{-- <p>{{$item['description']}}</p> --}}
             </div>
            </a>
             @endforeach
   
        </div>
      </div>
</div>
@endsection