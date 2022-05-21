<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    
</head>

<body>
  


@extends('Feedbacks.layout')
@section('content')
 
<div class="card">
  <div class="card-header"></div>
  <div class="card-body">

@if ($errors->any())


<div class="alert alert-danger">

<ul>
    @foreach ($errors->all() as $error)
    <li>{{   $error   }}</li>
    @endforeach

</ul>

</div>
@endif

      <form action="{{ url('feedback') }}" method="post">
        {!! csrf_field() !!}
        <label>You Name</label></br>
        <input type="text" name="Title" id="Title" class="form-control" placeholder="Enter Title"></br>
        
        <input type="submit" value="Add to Table" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop

</body>



</html>