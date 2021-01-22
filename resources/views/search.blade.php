@extends('master')
@section('content')
 

<h1>Product Page</h1>
  <div class="container">
      <div class="row">
<div class="custom-product ">
        <div class="col-sm-4">
            <a href="#">filter</a>

        </div>

        <div class="col-sm-6">
             <div class="trending-wrapper">
                    <h4>Results for Products</h4>
                    @foreach ($products as $item)
                    <div class="searched-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{$item['gallery']}}" alt="">
                        <div class="">
                            <h2>{{$item['name']}}</h2>
                            <h5>{{$item['description']}}</h5>
                            

                        </div>
                        </a>
                 </div>
          
      @endforeach

    </div>      
        </div>
    </div>
    </div>
</div>
    
@endsection 