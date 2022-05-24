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

    <title>Items</title>
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
                                <font size="3"> Home </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3"> New Arrivals </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3"> Category </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" position="absolute">
                                <font size="3"> About us </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#" position="absolute">
                                <font size="3"> Contact us </font>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#" position="absolute">
                                <font size="3"> Feedback </font>
                            </a>
                        </li>
                    </ul>
                </div>
                <img src="../../dist/img/mini.png" width="100" height="20" align="right">
            </div>
        </nav>
    </div>


    <br>

    <div class="container">
        <h5>Men > Casual</h5>
        <div class="collection-list mt-4 row gx-0 gy-3">
            @foreach($items as $item)

            <div class="col-md-6 col-lg-4 col-xl-3 p-2">
                <div class="collection-img position-relative">
                    <a href="/itemdetails/{{$item->id}}"><img src="{{asset('upload/items/'.$item->image1)}}"
                            class="w-100"></a>
                    <a href="/addToWishlist/{{$item->id}}" class=""><button type="button"
                            class="btn btn-outline-secondary btn-flat position-absolute" style="right:0;"><i
                                class="far fa-heart" aria-hidden="true"></i></button></a>
                </div>
                <div class="text-center">
                    <p class="my-1">{{$item->name}}</p>
                    <span class="fw-bold">LKR {{$item->selling_price}}</span>
                </div>

                <a href="/addToCart/{{$item->id}}" class=""><button type="button"
                        class="btn btn-block btn-outline-secondary btn-flat">ADD TO CART</button></a>
            </div>

            @endforeach
        </div>
    </div>




    <!-- Footer -->

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
</body>

</html>
