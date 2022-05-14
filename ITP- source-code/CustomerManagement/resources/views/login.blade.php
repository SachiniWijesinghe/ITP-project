<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>









    <div class="container form bg-secondary  mt-5 mb-5 col align-self-center col-5 " >






        <form action="{{route('login-user')}}"method="post">
            @csrf
            <div class="form-group">
                <label for="inputEmail4">Email address:</label>
                <input type="email" name="email" class="form-control" id="inputEmail4"  value="{{old('email')}}"  >
                <span class="alert-danger">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="form-group">
                <label for="inputPassword">Password:</label>
                <input type="password" class="form-control"  name="password"  id="inputPassword">
                <span class="alert-danger">@error('password'){{$message}}@enderror</span>
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>


            @if(Session::has('sucess'))
                <div class="alert alert-success">{{Session::get('sucess')}}</div>

            @endif

            @if(Session::has('fail'))
                <div class="alert alert-danger">{{Session::get('fail')}}</div>

            @endif
        </form>







    </div>











<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
