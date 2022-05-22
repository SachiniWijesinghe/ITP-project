<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>feedback</title>
  </head>
  <body>

  <div class="shadow-lg p-3 mb-5 bg-white rounded">

    
<nav class="navbar navbar-expand-lg navbar-light bg-light" >

                <div class="container-fluid">
                  <img src="/images/logo.png "height="50"  align="left">


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
                        <a class="nav-link active" aria-current="page" href="#" position = "absolute"><font size="3" >  Feedback </font></a>
                      </li>
                    </ul>
                  </div>
                  <img src="/images/mini.png " width="100" height="20" align="right">
                </div>
              </nav>
</div>

        <br>
    <div class="row">
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


    </div>


</body>
</html>
