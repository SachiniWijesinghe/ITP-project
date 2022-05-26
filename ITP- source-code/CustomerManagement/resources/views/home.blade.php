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
    <title>Register</title>
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






















<div class="container form bg-secondary  mt-5 mb-5 col align-self-center col-5 " >


    <form method="POST" action="/register">
        {{ csrf_field() }}
        <br><br>
        <h1 class="text-center ">Super Fashion</h1>
        <br>
        <h3 class="text-center">Sign up</h3>
        <br><br>
        <div class="row p-2">

            <div class="form-group col-md-6 ">
                <label for="InputFirstName">First Name</label>
                <input type="text"  name="Fname" class="form-control"id="InputFirstName"placeholder="First Name">
                <span class="alert-danger">@error('Fname'){{$message}}@enderror</span>

            </div>

            <div class="form-group col-md-6 ">
                <label for="InputLasttNamestName">Last Name</label>
                <input type="text" name="Lname" class="form-control"id="InputLasttName"placeholder="Last Name">

            </div>
        </div>

        <div class="form-group col p-2  ">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            @if ($errors->first('email'))
                <div class="alert-danger">{{$errors->first('email')}}</div>
            @endif

        </div>

        <div class="row mb-3 p-2">
            <div class="form-group col-md-6 ">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
                @if ($errors->first('password'))
                    <div class="alert-danger">{{$errors->first('password')}}</div>
                @endif
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputCpassword">Confirm Password</label>
                <input type="password" name="Cpassword" class="form-control" id="inputCpassword" placeholder="Confirm Password">

            </div>
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputContactNo">Contact Number</label>
            <input type="text" name="contactNo" class="form-control" id="inputContactNo" placeholder="Contact Number">
            @if ($errors->first('contactNo'))
                <div class="alert-danger">{{$errors->first('contactNo')}}</div>
            @endif
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputAddress">Address</label>
            <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="address">
            @if ($errors->first('Address'))
                <div class="alert-danger">{{$errors->first('Address')}}</div>
            @endif
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="city">
            @if ($errors->first('city'))
                <div class="alert-danger">{{$errors->first('city')}}</div>
            @endif
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputCode">ZIP code/postal  code</label>
            <input type="text" name="ZIP" class="form-control" id="inputCode" placeholder="ZIP code/postal  code">
            @if ($errors->first('ZIP'))
                <div class="alert-danger">{{$errors->first('ZIP')}}</div>
            @endif
        </div>

        <br><br>

        @if(Session::has('response'))
            <div class="alert alert-success">{{Session::get('response')}}</div>

        @endif

        <div class="row mb-3 p-2">
            <div class="form-group col-md-10">
                <div id="emailHelp" class="form-text text-black">Already Registered?<a href="login" class="alert-link">login here</a></div>
            </div>


            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-dark" onclick=''>Register</button>




            </div>
        </div>

    </form>



</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src=".plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>









































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
