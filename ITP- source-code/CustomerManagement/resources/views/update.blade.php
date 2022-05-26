<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="Dashboard/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <title>Document</title>




</head>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <title>About us</title>
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































<div class="row">
    <div class="container    mt-5 mb-5   col-md-4  " >


        <form action="">
            <div class="  text-center mt-5">
                <br><br><br>

            </div>

            <div class ="container  text-center mt-5">
                <img src="https://w7.pngwing.com/pngs/178/595/png-transparent-user-profile-computer-icons-login-user-avatars-thumbnail.png" class="rounded-circle" class="img-fluid img-thumbnail"class="img-fluid img-thumbnail" class="card-img-top" alt="..."width=25%>
                <div class="card btn-group-vertical"role="group" ><!-- Button group vertical-->
                    <button  class="btn btn-dark p-3 mt-5">My Orders</button>

                    <button  class="btn btn-dark p-3 mt-5">My Wishlist</button>

                    <button  class="btn btn-dark p-3 mt-5">My Reviews</button>
                    <br><br><br>
                </div>
            </div>

        </form>
    </div>








    <div class="container form bg-secondary  mt-5 mb-5  col-12 col-sm-5 col-md-5  " >


        <form action="">
            <br><br>
            <h3 class="text">Personal info</h3>

            <br><br>
            <div class="row p-2">
                <div class="form-group col-md-6 ">
                    <label for="InputFirstName">First Name</label>
                    <input type="text"class="form-control"id="InputFirstName"placeholder="First Name" value="{{$data['Fname']}}"   >
                </div>
                <div class="form-group col-md-6 ">
                    <label for="InputLasttNamestName">Last Name</label>
                    <input type="text"class="form-control"id="InputLasttName"placeholder="Last Name"    value="{{$data['Lname']}}"  >
                </div>
            </div>

            <div class="form-group col p-2  ">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email"   value="{{$data['email']}}">
            </div>



            <div class="form-group col mb-3 p-2">
                <label for="inputContactNo">Contact Number</label>
                <input type="text" class="form-control" id="inputContactNo" placeholder="Contact Number" value="{{$data['contactNo']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="address" value="{{$data['Address']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="address"  value="{{$data['city']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputCode">ZIP code/postal  code</label>
                <input type="text" class="form-control" id="inputCode" placeholder="ZIP code/postal  code" value="{{$data['ZIP']}}">
            </div>

            <br><br>

            <div class="row mb-2  p-2">
                <div class="form-group col-md-8">

                    <a href="logout" class="btn btn-danger">logout </a>

                </div>



                <div class="form-group col-md-2">



                    <a class="btn btn-success" href={{"edit/".$data['id'] }}     >Update </a>




                </div>

            </div>
        </form>
    </div>

</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>









































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

</footer>
</body>
</html>
</body>
</html>



