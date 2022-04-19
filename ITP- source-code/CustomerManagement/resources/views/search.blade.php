<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <title>Document</title>
</head>
<body>


@if(isset($candidates))

<table class="table table-striped">
    <thead>
    <tr>

        <th scope="col">ID</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col"> email</th>
        <th scope="col">Password</th>
        <th scope="col">Contact No</th>
        <th scope="col">Address</th>
        <th scope="col">City</th>
        <th scope="col">ZIP</th>
    </tr>
    </thead>

    @if(count($candidates)>0)

    @foreach($candidates as $candidates)
        <tbody>
        <tr>

            <td>{{$candidates['id']}}</td>
            <td>{{$candidates['Fname']}}</td>
            <td>{{$candidates['Lname']}}</td>
            <td>{{$candidates['email']}}</td>
            <td>{{$candidates['password']}}</td>
            <td>{{$candidates['contactNo']}}</td>
            <td>{{$candidates['Address']}}</td>
            <td>{{$candidates['city']}}</td>
            <td>{{$candidates['ZIP']}}</td>
        </tr>

    @endforeach

    @else
    <tr><td>No result found</td></tr>
    @endif
        </tbody>
</table>
@endif
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
