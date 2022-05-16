<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <title>Document</title>
</head>
<body>


<div class="row">









    <div class="container form bg-secondary  mt-5 mb-5   col-sm-5 col-md-5  " >


        <form action="{{url('Pro-Update/'.$data->id)}}" method="post">
            {{csrf_field()}}
            @method('PUT')
            <br><br>
            <h3 class="text">Personal info</h3>

            <br><br>
            <div class="row p-2">








                <div class="form-group col-md-6 ">
                    <label for="InputFirstName">First Name</label>
                    <input type="text"class="form-control"id="InputFirstName"placeholder="First Name" name="Fname" value="{{$data->Fname}}"   >
                </div>
                <div class="form-group col-md-6 ">
                    <label for="InputLasttNamestName">Last Name</label>
                    <input type="text"class="form-control"id="InputLasttName"placeholder="Last Name"  name="Lname"  value="{{$data->Lname}}"  >
                </div>
            </div>

            <div class="form-group col p-2  ">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email"  name="email" value="{{$data['email']}}">
            </div>



            <div class="form-group col mb-3 p-2">
                <label for="inputContactNo">Contact Number</label>
                <input type="text" class="form-control" id="inputContactNo" placeholder="Contact Number" name="contactNo" value="{{$data['contactNo']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="address" name="Address" value="{{$data['Address']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity" placeholder="address" name="city"  value="{{$data['city']}}">
            </div>

            <div class="form-group col mb-3 p-2">
                <label for="inputCode">ZIP code/postal  code</label>
                <input type="text" class="form-control" id="inputCode" placeholder="ZIP code/postal  code" name="ZIP" value="{{$data['ZIP']}}">
            </div>

            <br><br>

            <div class="row mb-2  p-2">
                <div class="form-group col-md-8">



                </div>



                <div class="form-group col-md-2">



                    <button type="submit" class="btn btn-dark" onclick=''> save </button>

                    @if(Session::has('response'))
                        <div class="alert alert-success">{{Session::get('response')}}</div>

                    @endif


                </div>

            </div>
        </form>

    </div>
</div>
</div>


    </div>



    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>



