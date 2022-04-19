<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>





<div class="container form bg-secondary  mt-5 mb-5 col align-self-center col-5 " >


    <form method="POST" action="{{ url ('/register ') }}">
        {{ csrf_field() }}
        <br><br>
        <h1 class="text-center ">Super Fashion</h1>
        <br>
        <h3 class="text-center">Sign up</h3>
        <br><br>
        <div class="row p-2">


            <div class="form-group col-md-6 ">
                <label for="InputFirstName">First Name</label>
                <input type="text" name="Fname" class="form-control"id="InputFirstName"placeholder="First Name">
            </div>
            <div class="form-group col-md-6 ">
                <label for="InputLasttNamestName">Last Name</label>
                <input type="text" name="Lname" class="form-control"id="InputLasttName"placeholder="Last Name">
            </div>
        </div>

        <div class="form-group col p-2  ">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>

        <div class="row mb-3 p-2">
            <div class="form-group col-md-6 ">
                <label for="inputPassword">Password</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="password">
            </div>
            <div class="form-group col-md-6 ">
                <label for="inputCpassword">Confirm Password</label>
                <input type="password" name="Cpassword" class="form-control" id="inputCpassword" placeholder="Confirm Password">
            </div>
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputContactNo">Contact Number</label>
            <input type="text" name="contactNo" class="form-control" id="inputContactNo" placeholder="Contact Number">
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputAddress">Address</label>
            <input type="text" name="Address" class="form-control" id="inputAddress" placeholder="address">
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputCity">City</label>
            <input type="text" name="city" class="form-control" id="inputCity" placeholder="address">
        </div>

        <div class="form-group col mb-3 p-2">
            <label for="inputCode">ZIP code/postal  code</label>
            <input type="text" name="ZIP" class="form-control" id="inputCode" placeholder="ZIP code/postal  code">
        </div>

        <br><br>

        <div class="row mb-3 p-2">
            <div class="form-group col-md-10">
                <div id="emailHelp" class="form-text text-black">Already Registered?<a href="#" class="alert-link">login here</a></div>
            </div>


            @if(count($errors) > 0)
                @foreach($errors->all() as $error)
                    <div class="col-md-8 alert alert-danger">{{$error}}</div>
                @endforeach
            @endif

            @if(session('response'))
                <div class="col-md-8 alert  alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="form-group col-md-2">
                <button type="submit" class="btn btn-dark" onclick=''>Register</button>
            </div>
        </div>

    </form>






</div>








<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
