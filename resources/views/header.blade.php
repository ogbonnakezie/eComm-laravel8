<?php
  use App\Http\Controllers\ProductController;
  $total = 0;
  if (Session::has('user')) {
    $total = ProductController::cartItem();
    # code...
  }
  

?>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="/">E-Comm</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Orders</a>
      </li>
     
    </ul>
    <form action="search"  class="form-inline my-2 my-lg-0">
      <input name="query" class="form-control mr-sm-2 search-box" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
    <ul class="navbar-nav  my-2 my-lg-0">
     <li class="nav-item active  mr-sm-2">
        <a class="nav-link" href="#">Cart ({{$total}}) <span class="sr-only">(current)</span></a>
      </li>
      @if (Session::has('user'))
          
    
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       Welcome {{Session::get('user')['name']}}
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/logout">Logout</a>
    
      </div>
    </li>
    @else
       <li class="nav-item active  mr-sm-2">
        <a class="nav-link" href="login">Login <span class="sr-only">(current)</span></a>
      </li>
      @endif
    </ul>
  </div>
</nav>