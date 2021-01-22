<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>E-Commerce</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  /* Make the image fully responsive */
  /* .carousel-inner img {
    width: 100%;
    height: 100%;
  } */
  </style>
</head>
<body>

    {{View::make('header')}}
    @yield('content')
    {{-- <br>
    <br>
    <br>
    <br> --}}
    {{View::make('footer')}}
</body>
    <style>
        .custom-login{
            height: 500px;
            padding-top:100px;
        }
        .carousel-caption{
            
        }
        img.slider-img{
            height: 400px !important
        }
        .custom-product{
            height: 500px;
        }
        .slider-text{
            background-color: #35443585 !important
        }
        .trending-image{
            height: 100px;
        }
        .trending-item{
            float: left;
            width: 20%;
        }
        .card{
            width: 100%;
            clear: both;
        }
        .trending-wrapper{
            margin:30px;
        }
        .detail-img{
            height: 200px;
        }
        .search-box{
            width: 500px !important
        }
    </style>

</html>