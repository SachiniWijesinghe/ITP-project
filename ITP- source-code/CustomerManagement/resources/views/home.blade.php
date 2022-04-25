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
                @if ($errors->first('Fname'))
                    <div class="alert-danger">{{$errors->first('Fname')}}</div>
                @endif

            </div>

            <div class="form-group col-md-6 ">
                <label for="InputLasttNamestName">Last Name</label>
                <input type="text" name="Lname" class="form-control"id="InputLasttName"placeholder="Last Name">
                @if ($errors->first('Fname'))
                    <div class="alert-danger">{{$errors->first('Fname')}}</div>
                @endif
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
                @if ($errors->first('Cpassword'))
                    <div class="alert-danger">{{$errors->first('Cpassword')}}</div>
                @endif
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


        @if(session('response'))
            <div class="col-md-8 alert  alert-success">
                {{ session('response') }}
            </div>

        @endif

        <div class="row mb-3 p-2">
            <div class="form-group col-md-10">
                <div id="emailHelp" class="form-text text-black">Already Registered?<a href="#" class="alert-link">login here</a></div>
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
</body>
</html>
