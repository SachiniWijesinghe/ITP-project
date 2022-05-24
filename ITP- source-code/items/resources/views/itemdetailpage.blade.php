<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <link rel="stylesheet" href="../../dist/css/productstyle.css" type="text/css">
    <link rel="stylesheet" href="../../dist/css/owl.carousel.min.css" type="text/css">

    <title>Item Details</title>
</head>

<body>

    <div class="shadow-lg p-3 mb-5 bg-white rounded">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="../../dist/img/logo.png" height="50" align="left">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">Home</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">New Arrivals</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">Category</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">About us</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">Contact us</font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3">Feedback</font>
                            </a>
                        </li>
                    </ul>
                </div>
                <img src="../../dist/img/mini.png" width="100" height="20" align="right">
            </div>
        </nav>
    </div>



    <div class="container">
        <section class="product-details spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product__details__pic">
                            <div class="product__details__pic__left product__thumb nice-scroll">
                                <a class="pt active" href="#product-1">
                                    <img src="{{asset('upload/items/'.$itemdata->image1)}}" alt="">
                                </a>
                                <a class="pt" href="#product-2">
                                    <img src="{{asset('upload/items/'.$itemdata->image2)}}" alt="">
                                </a>
                            </div>
                            <div class="product__details__slider__content">
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-hash="product-1" class="product__big__img"
                                        src="{{asset('upload/items/'.$itemdata->image1)}}" alt="">
                                    <img data-hash="product-2" class="product__big__img"
                                        src="{{asset('upload/items/'.$itemdata->image2)}}" alt="">
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
                                <a href="/addToCart/{{$itemdata->id}}" class=""><button type="button"
                                        class="btn btn-outline-secondary btn-flat ml-3">ADD TO CART</button></a>

                                <a href="/addToWishlist/{{$itemdata->id}}" class=""><button type="button"
                                        class="btn btn-outline-secondary btn-flat position-absolute ml-3"><i
                                            class="far fa-heart" aria-hidden="true"></i></button></a>

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
            </div>
        </section>
    </div>


    <footer class="page-footer mdb-color lighten-3 pt-4 mt-lg-2" style="background-color: #BBBFCA;">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-0">

                    <!-- Content -->
                    <h4 class="font-weight-bold text-uppercase mb-4">Super Fashion</h4>
                    <p style="text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        eiusmod tempor
                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, reprehenderit
                        in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                        cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    </p>
                </div>
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 ">

                    <!-- Links -->
                    <h4 class="font-weight-bold text-uppercase mb-4" style="text-align:justify;">USEFUL LINKS</h4>

                    <ul class="list-unstyled" style="text-align:justify;">
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <a href="#!">CONTATC US</a>
                            </p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <a href="#!">ABOUT US</a>
                            </p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <a href="#!">HELP</a>
                            </p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <a href="#!">SETTING</a>
                            </p>
                        </li>
                    </ul>

                </div>

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4">

                    <!-- Contact details -->
                    <h4 class="font-weight-bold text-uppercase mb-4" style="text-align:justify;">Store</h4>

                    <ul class="list-unstyled" style="text-align:justify;">
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <i class="fas fa-home mr-11"></i> Women</p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <i class="fas fa-envelope mr-11"></i>Men</p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <i class="fas fa-phone mr-11"></i> Kids</p>
                        </li>
                    </ul>

                </div>
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 ">
                    <!-- Contact details -->
                    <h4 class="font-weight-bold text-uppercase mb-4" style="text-align:justify;">Account</h4>

                    <ul class="list-unstyled" style="text-align:justify;">
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <i class="fas fa-home mr-11"></i> My profile</p>
                        </li>
                        <li>
                            <p style="text-align:justify;font-size:15px;">
                                <i class="fas fa-envelope mr-11"></i>Wishlist</p>
                        </li>
                        <li>
                            <p style="text-align:justify; font-size:15px;">
                                <i class="fas fa-phone mr-11"></i> Orders</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <!-- Footer Links -->
        <h4 class="font-weight-bold text-center text-uppercase">Follow Us</h4>
        <div class="text-center">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-whatsapp"></i>
            <i class="fab fa-instagram"></i>
        </div>

        <!-- Copyright -->
        <footer class="bg-light text-center text-white">

            <!-- Grid container -->

            <!-- Copyright -->
            <div class="text-center p-1" style="background-color: #495464;">
                <h6>© 2022 All Rights Reserved.</h6>
            </div>
            <!-- Copyright -->
        </footer>


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
