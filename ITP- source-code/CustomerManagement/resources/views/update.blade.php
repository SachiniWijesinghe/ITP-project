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
</body>
</html>



