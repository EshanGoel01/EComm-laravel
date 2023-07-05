@extends('master')
@section('content')
<div class=" customddd-product">
    <div class="slidingg">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
         @foreach ($products as $item)         
          <div class="carousel-item {{$item['id']==1?'active':''}}">
            <a href="detail/{{$item['id']}}" class="linkslide">
              <div class="row">
                <div class="col-sm-6">
                  <img src="{{$item['gallery']}}" class="slider-img" alt="...">
                </div>
                <div class="col-sm-6 my-5">
                <br><br><br><br><br>
                <div class="slidertext">
                  <h1>{{$item['name']}}</h1>
                  <p>{{$item['description']}}</p>
                </div> 
                  </div>
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
    </div> 
<hr>


      <div class="cxc">
        <h1 class="trend-head">Trending</h1>
        <div class="container my-1">
          @foreach ($products as $item)     
          <a href="detail/{{$item['id']}}">
          <div class="card" style="--clr: #009688">
              <div class="img-box">
                  <img src="{{$item['gallery']}}">
              </div>
              <div class="content">
                <h2>{{$item['name']}}</h2>
                <p>
                  {{$item['description']}}
                </p>
              </div>
            </div>
          </a>
          @endforeach
        </div>
      </div>
</div>
@endsection

 {{-- <div class="card" style="--clr: #FF3E7F">
            <div class="img-box">
                <img src="https://i.postimg.cc/pdjRc68d/img-02.png">
            </div>
            <div class="content">
                <h2>Fruits</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Architecto, hic? Magnam eum error saepe doloribus corrupti
                    repellat quisquam alias doloremque!
                </p>
                <a href="">Read More</a>
            </div>
        </div>
        <div class="card" style="--clr: #03A9F4">
            <div class="img-box">
                <img src="https://i.postimg.cc/26fms7F7/img-03.png">
            </div>
            <div class="content">
                <h2>Flowers</h2>
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Architecto, hic? Magnam eum error saepe doloribus corrupti
                    repellat quisquam alias doloremque!
                </p>
                <a href="">Read More</a>
            </div>
        </div> --}}
    {{-- </div>
      <div class="trending">
        <div class="carousel-inner">
            @foreach ($products as $item)     
            <a href="detail/{{$item['id']}}">
               <img src="{{$item['gallery']}}" class="trend-img" alt="...">
               <div class="">
                 <h5>{{$item['name']}}</h5>
                 {{-- <p>{{$item['description']}}</p> --}}
             {{-- </div>
            </a>
             @endforeach
   
        </div> --}} 