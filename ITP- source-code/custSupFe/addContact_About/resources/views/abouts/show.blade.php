<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>
  <body>
    <div id="app"></div>
    <script src="/dist/build.js"></script>
    

    @extends('abouts.layout')
@section('content')

        <div class="card-body">
        <p class="card-text">{{ $abouts->Photo }}</p>
        <h4 class="card-title">{{ $abouts->Name }}</h4>
        <p class="card-text">{{ $abouts->Email }}</p>
  </div>  
  </hr>
  </div>
</div>

  
</body>
</html>