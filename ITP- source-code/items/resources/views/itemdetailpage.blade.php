<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <link rel="stylesheet" href="../../dist/css/productstyle.css" type="text/css">
  <link rel="stylesheet" href="../../dist/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="../../dist/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/slicknav.min.css" type="text/css">


    <title>Item Details</title>
</head>
<body>
    <div class="shadow-lg p-3 mb-5 bg-white rounded ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light " >
        
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
        
   <div class="container">
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product__details__pic">
                        <div class="product__details__slider__content">
                            <div class="product__details__pic__slider owl-carousel">
                                <img data-hash="product-1" class="product__big__img" src="{{asset('upload/items/'.$itemdata->image1)}}" alt="">
                                <img data-hash="product-2" class="product__big__img" src="{{asset('upload/items/'.$itemdata->image2)}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product__details__text">
                        <h3>{{$itemdata->name}}</h3>
                        <span>Code : {{$itemdata->code}}</span>
                        <div class="product__details__price">
                            LKR {{$itemdata->selling_price}}
                        </div>
                        <p>{{$itemdata->description}}</p>
                        <div class="product__details__button">
                            <div class="quantity">
                                <span>Quantity:</span>
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                            <a href="/addToCart/{{$itemdata->id}}" class=""><button type="button" class="btn btn-outline-secondary btn-flat ml-3">ADD TO CART</button></a>
                            
                                <a href="/addToWishlist/{{$itemdata->id}}" class=""><button type="button" class="btn btn-outline-secondary btn-flat position-absolute ml-3"><i class="far fa-heart" aria-hidden="true"></i></button></a>
                            
                        </div>
                        <div class="product__details__widget">
                            <ul>
                                <li>
                                    <span>Colors:</span>
                                    <div class="color__checkbox">
                                        <label for="red">
                                            <input type="radio" name="color__radio" id="red" checked>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label for="black">
                                            <input type="radio" name="color__radio" id="black">
                                            <span class="checkmark black-bg"></span>
                                        </label>
                                        <label for="grey">
                                            <input type="radio" name="color__radio" id="grey">
                                            <span class="checkmark grey-bg"></span>
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <span>Sizes:</span>
                                    <div class="size__btn">
                                        <label for="xs-btn" class="active">
                                            <input type="radio" id="xs-btn">
                                            xs
                                        </label>
                                        <label for="s-btn">
                                            <input type="radio" id="s-btn">
                                            s
                                        </label>
                                        <label for="m-btn">
                                            <input type="radio" id="m-btn">
                                            m
                                        </label>
                                        <label for="l-btn">
                                            <input type="radio" id="l-btn">
                                            l
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
   </div>


    <script src="../../dist/js/owl.carousel.min.js"></script>

    <script src="../../dist/js/jquery-3.3.1.min.js"></script>

    <script src="../../dist/js/bootstrap.min.js"></script>

    <script src="../../dist/js/jquery.magnific-popup.min.js"></script>

    <script src="../../dist/js/jquery-ui.min.js"></script>

    <script src="../../dist/js/mixitup.min.js"></script>

    <script src="../../dist/js/jquery.countdown.min.js"></script>

    <script src="../../dist/js/jquery.slicknav.js"></script>

    <script src="../../dist/js/owl.carousel.min.js"></script>

    <script src="../../dist/js/jquery.nicescroll.min.js"></script>

    <script src="../../dist/js/main.js"></script>
</body>
</html>