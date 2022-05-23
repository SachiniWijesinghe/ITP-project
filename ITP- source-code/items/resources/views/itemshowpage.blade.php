<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <title>Items</title>
  </head>
  <body>

<div class="shadow-lg p-3 mb-5 bg-white rounded">
<nav class="navbar navbar-expand-lg navbar-light bg-light" >

                <div class="container-fluid">
                  <img src="public\dist\img\logo.png" height="50"  align="left">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute" ><font size="3" > Home    </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute"><font size="3" > New Arrivals       </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link"href="#" position = "absolute"><font size="3" > Category       </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.vue" position = "absolute"><font size="3" > About us        </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" position = "absolute"><font size="3" >  Contact us         </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" position = "absolute"><font size="3" >  Feedback </font></a>
                      </li>
                    </ul>
                  </div>
                  <img src="/images/mini.png " width="100" height="20" align="right">
                </div>
              </nav>
</div>

        <br>
    <!--<div class="row">
        @foreach($items as $item)
            <div class="col-sm-6 col-md-3">
                <div class="img-thumbnail" >
                    <img
                        src="{{asset('upload/items/'.$item->image1)}}"  class="img-fluid" alt="responsive image" >
                    <div class="caption">
                        <a class="itemName" href=""  target="_blank"><h6>{{$item->name}}</h6></a>
                        <div class="clearfix">
                            <div class="pull-left price">LKR {{$item->selling_price}}</div>
                            <a href="/addToCart/{{$item->id}}" class="btn btn-dark pull-right" role="button">Add To Cart</a></p>

                        </div>
                        <a href="/addToWishlist/{{$item->id}}" class="btn btn-dark pull-right" role="button">Wishlist</a></p>
                    </div>
                </div>
            </div>

        @endforeach
    </div>-->


    <!--<div class="container">
    <div class="row">
    @foreach($items as $item)
    <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
     
      <div class="card rounded shadow-sm border-0">
        <div class="card-body p-0"><img src="{{asset('upload/items/'.$item->image1)}}" alt="" class="card-img-top mb-2 rounded float-left" width="265px" height="345.5px">
          <h5> <a href="#" class="text-dark pl-2">{{$item->name}}</a></h5>
          <p class="small text-muted font-italic pl-2">LKR {{$item->selling_price}}</p>
          
          <a href="/addToCart/{{$item->id}}" class="btn btn-dark pull-right p-2" role="button">Add To Cart</a>
          <a href="/addToWishlist/{{$item->id}}" class="btn btn-dark pull-right"><i class="fa-regular fa-heart"></i></a>
          
        </div>
      </div>
    </div>
    @endforeach
    </div>
    </div>-->


    <div class="container">
    <div class = "collection-list mt-4 row gx-0 gy-3">
    @foreach($items as $item)

                    <div class = "col-md-6 col-lg-4 col-xl-3 p-2">
                        <div class = "collection-img position-relative">
                            <a href="/itemdetails/{{$item->id}}"><img src = "{{asset('upload/items/'.$item->image1)}}" class = "w-100"></a>
                            <a href="/addToWishlist/{{$item->id}}" class=""><button type="button" class="btn btn-outline-secondary btn-flat position-absolute" style="right:0;"><i class="far fa-heart" aria-hidden="true"></i></button></a>
                        </div>
                        <div class = "text-center">
                            <p class = "my-1">{{$item->name}}</p>
                            <span class = "fw-bold">LKR {{$item->selling_price}}</span>
                        </div>
                            
                            <a href="/addToCart/{{$item->id}}" class=""><button type="button" class="btn btn-block btn-outline-secondary btn-flat">ADD TO CART</button></a>
                    </div>
                    

    @endforeach
    </div>
    </div>

</body>
</html>
