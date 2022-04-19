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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <img src="/images/logo.png "height="50"  align="left">


                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute" ><font size="5" >|  Home     |</font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute"><font size="5" > New Arrivals       |</font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link"href="#" position = "absolute"><font size="5" > Category       |</font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="contactus.vue" position = "absolute"><font size="5" > About us        |</font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" position = "absolute"><font size="5" >  Contact us </font></a>
                      </li>

                    </ul>

                    <img src="/images/mini.png " width="100" height="20" align="right">


                  </div>

                </div>
              </nav>


              <div id="products" class="row view-group">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!------ Include the above in your HEAD tag ---------->

      <section id="banner" class="banner">
        <div class="bg-color">

          <div class="container">
            <div class="row">
              <div class="banner-info">
                <div class="banner-logo text-center">

                  <img src="/images/Banner.png" height="500" width=" 1200" alt="" align="justify">

                  <h2><font size="10"> Contact Us</font></h2>
                </div>

                <div class="overlay-detail text-center">
                  <a href="#service"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!------ Include the above in your HEAD tag ---------->



      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<section id="contact">
  
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="315" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
          <h4><strong>Get in Touch</strong></h4>
        <form>
          <div class="form-group">
            <input type="text" class="form-control" name="" value="" placeholder="Name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="" value="" placeholder="E-mail">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" name="" value="" placeholder="Phone">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="" rows="3" placeholder="Message"></textarea>
          </div>
          <button class="btn btn-dark" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<br/><br/>
      <!------ Contact details ---------->
      <h1 align="left">Contact Details</h1>
      <br/>
      <div class="item col-xs-4 col-lg-4">
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="/images/pic_1.png " width="400" height="250">

@extends('contacts.layout')
@section('content')

        <div class="card-body">
        <h4 class="card-title">{{ $contacts->Title }}</h4>
        <p class="card-text"> {{ $contacts->Address }}</p>
        <p class="card-text"> {{ $contacts->Telephone }}</p>
        <p class="card-text">{{ $contacts->Email }}</p>
  </div>  
  </hr>
  </div>
</div>

       
      </div>
      <div class="item col-xs-4 col-lg-4">
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="/images/pic_2.png " width="400" height="250">
            <h4>CARD Center</h4></br>

            <p>Address</p>
            <p>Telephone</p>
            <p>Email</p>

          </div>
        </div>
      </div>

      <div class="item col-xs-4 col-lg-4">
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="/images/pic_3.png " width="400" height="250">
            <h4>ONLINE INQUIRIES AND ORDERS</h4></br>

            <p>Address</p>
            <p>Telephone</p>
            <p>Email</p>

          </div>
        </div>
      </div>

      <div class="item col-xs-4 col-lg-4">
      <br/><br/>
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          
          <div class="caption card-body">
            <img src="/images/pic_4.png " width="400" height="250">
            <h4>Purchasing & Merchandising Queries</h4></br>

            <p>Address</p>
            <p>Telephone</p>
            <p>Email</p>

          </div>
        </div>
      </div>

    </div>          

</body>
</html>