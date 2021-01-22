@extends('master')
@section('content')
 
  <div class="container">
      <div class="row">
<div class="custom-product ">

        <div class="col-sm-10">
             <div class="trending-wrapper">
                    <h4>Results for Products</h4>
                    @foreach ($products as $item)
                    <div class= row searched-item " id="cart-list-divider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                        <img class="trending-image" src="{{$item->gallery}}" alt="">
                        </a>

                        </div>
                       

                         <div class="col-sm-4">
                            
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h5>{{$item->description}}</h5>
                            

                        </div>
                    

                        </div>

                         <div class="col-sm-3">
                          <button class="btn btn-warning"> Remove from Cart</button>

                        </div>
                        <br>
                        <br>
                 </div>
          
      @endforeach

    </div>      
        </div>
    </div>
    </div>
</div>
    
@endsection 