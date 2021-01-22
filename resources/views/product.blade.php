@extends('master')
@section('content')
 

<h1>Product Page</h1>
  
<div class="custom-product ">

  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
   @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption slider-text">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>   
      
      </a> 
    </div>
       
   @endforeach
   
   
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon">Previous</span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon">Next</span>
  </a>
</div>
    
 

    <div class="trending-wrapper">
      <h1>Trending Products</h1>
      @foreach ($products as $item)
      <div class="trending-item">
         <a href="detail/{{$item['id']}}">
        <img class="trending-image" src="{{$item['gallery']}}" alt="">
          <div class="">
            <h3>{{$item['name']}}</h3>

          </div>
         </a>
      </div>
          
      @endforeach

    </div>      
    </div>

    
@endsection 