<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Contact Us</title>
  </head>

  <body style="background-color: #E8E8E8;">
    <div id="app"></div>
    <script src="/dist/build.js"></script>


    <div class="shadow-lg p-3 mb-5 bg-white rounded">

    
<nav class="navbar navbar-expand-lg navbar-light bg-light" >

                <div class="container-fluid">
                  <img src="/images/logo.png "height="50"  align="left">


                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute" ><font size="3" > Home    </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#" position = "absolute"><font size="3" > New Arrivals       </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link"href="#" position = "absolute"><font size="3" > Category       </font></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="../about/82" position = "absolute"><font size="3" > About us        </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../contact/66" position = "absolute"><font size="3" >  Contact us         </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="../feedback/create" position = "absolute"><font size="3" >  Feedback </font></a>
                      </li>
                    </ul>
                  </div>
                  <img src="/images/mini.png " width="100" height="20" align="right">
                </div>
              </nav>
</div>
            


      <div id="products" class="row view-group">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <!------ Include the above in your HEAD tag ---------->

      <section id="banner" class="banner">
        <div class="bg-color">
<div class="bg-image" 
      style="background-image: url('/images/Banner.png');
            height: 97vh;" >
          <div class="container">
            <div class="row">
              <div class="banner-info">
                <div class="banner-logo text-center">
                @if(session('status'))
        <h1 class = "alert alert-success" role="alert"> {{session('status')}}</h1>
        @endif
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br
></br>
</br>


                  <h1 class="display-1" style="font-size: 80px;" align = "left"> <b>Contact Us</b></h2>
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

<section id="contact" style="background-color: #E8E8E8;">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
	<div class="row">
	  <div class="col-md-7">
        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3736489.7218514383!2d90.21589792292741!3d23.857125486636733!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1506502314230" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-5" >
          <h4 align  = "center"  style="font-size: 40px;">Get in Touch</h4>
          <p  class="display-15" align = "center"  style="font-size: 12px;">We value your thoughts, suggestions and comments regarding any aspect of the
<b>SUPER FASHION</b> experience. Please contact us by completing the form below. You will receive a reply from us shortly.</p>

@extends('contacts.layout')
@section('content')

          <div class="shadow-lg p-3 mb-5 bg-white rounded">
          <form action="{{url('suggestion')}}"  method="post" id="contactForm" name="contactForm" class="contactForm">
            {!! csrf_field() !!}
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
												
													<input type="text" class="form-control" name="Name" id="Name" placeholder="Full Name" required>
												</div>
											</div>
                      <div class="col-md-6"> 
												<div class="form-group">
												
													<input type="text" class="form-control" name="Address" id="Address" placeholder="Address" required>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
												
                          	<input type="text" class="form-control" name="Phone" id="Phone" placeholder="Phone" required maxlength="10">
												</div>
											</div>
                      <div class="col-md-6"> 
												<div class="form-group">
													
													<input type="email" class="form-control" name="Email" id="Email" placeholder="Email" required>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
												
													<input type="text" class="form-control" name="Subject" id="Subject" placeholder="Subject" required>
												</div>
											</div>
                      
											<div class="col-md-12">
												<div class="form-group">
												
													<textarea name="Message" class="form-control" id="Message" cols="30" rows="4" placeholder="Message" required></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Send Message" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
      </div>
    </div>
  </div>
</section>

      <!------ Contact details ---------->

      <h1 class="display-1"  align="center"><b> Contact Details</b></h1>
      <br/>
      <div class="shadow-lg p-3 mb-5 bg-white rounded">
      <div class="item col-xs-4 col-lg-4">
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
           
          <div class="caption card-body">
            <img src="/images/pic_1.png " width="400" height="250">

@extends('contacts.layout')
@section('content')

        <div class="card-body" >
        <h4 class="card-title" style="font-size: 18px ">{{ $contacts->Title }}</h4>
        <p class="card-text"  style="font-size: 14px"> {{ $contacts->Address }}</p>
        <p class="card-text" style="font-size: 14px"> {{ $contacts->Telephone }}</p>
        <p class="card-text" style="font-size: 14px">{{ $contacts->Email }}</p>
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
            <h4 class="card-title" style="font-size: 18px ">CARD CENTER</h4></br>

            <p class="card-text" style="font-size: 14px">18, Kawdana Road, Dehiwala, Sri Lanka.</p>
            <p class="card-text" style="font-size: 14px">011 273 9583</p>
            <p class="card-text" style="font-size: 14px">buying@fashion.lk</p>

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
            <h4 class="card-title" style="font-size: 18px ">ONLINE INQUIRIES AND ORDERS
</h4></br>

<p class="card-text" style="font-size: 14px">18, Kawdana Road, Dehiwala, Sri Lanka.</p>
<p class="card-text" style="font-size: 14px">011 273 9583</p>
<p class="card-text" style="font-size: 14px">buying@fashion.lk</p>

          </div>
        </div>
      </div>

      <div class="item col-xs-4 col-lg-4">
    
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="/images/pic_4.png " width="400" height="250">
            <h4 class="card-title" style="font-size: 18px ">Purchasing & Merchandising Queries</h4></br>

<p class="card-text" style="font-size: 14px">18, Kawdana Road, Dehiwala, Sri Lanka.</p>
<p class="card-text" style="font-size: 14px">011 273 9583</p>
<p class="card-text" style="font-size: 14px">buying@fashion.lk</p>

          </div>
        </div>
      </div>
      <div class="item col-xs-4 col-lg-4">
  
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="/images/image 3.png " width="400" height="250">
            <h4 class="card-title" style="font-size: 18px ">Gift Voucher Inquiries</h4></br>

<p class="card-text" style="font-size: 14px">18, Kawdana Road, Dehiwala, Sri Lanka.</p>
<p class="card-text" style="font-size: 14px">011 273 9583</p>
<p class="card-text" style="font-size: 14px">buying@fashion.lk</p>

          </div>
        </div>
      </div>
    </div>    


<!-- Footer -->
<footer class="page-footer font-small mdb-color lighten-3 pt-4" style="background-color: #BBBFCA;">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h2 class="font-weight-bold text-uppercase mb-4">Super Fashion</h2>
        <p style = "text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, reprehenderit
           in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
           cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
           Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
          incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, reprehenderit
           in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
           cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

       <!-- Links -->
       <h2 class="font-weight-bold text-uppercase mb-4" style = "text-align:justify;">USEFUL LINKS</h2>

<ul class="list-unstyled" style = "text-align:justify;">
  <li>
    <p style = "text-align:justify; font-size:15px;" >
      <a href="#!">CONTATC US</a>
    </p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <a href="#!">ABOUT US</a>
    </p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <a href="#!">HELP</a>
    </p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <a href="#!">SETTING</a>
    </p>
  </li>
</ul>

</div>

       <!-- Grid column -->
       <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

<!-- Contact details -->
<h2 class="font-weight-bold text-uppercase mb-4" style = "text-align:justify;">Store</h2>

<ul class="list-unstyled" style = "text-align:justify;">
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <i class="fas fa-home mr-11"></i> Women</p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <i class="fas fa-envelope mr-11"></i>Men</p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <i class="fas fa-phone mr-11"></i> Kids</p>
  </li>
</ul>

</div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">
 <!-- Grid column -->
 <div class="col-md-2 col-lg-1 text-center mx-auto my-4">
    <!-- Contact details -->
    <h2 class="font-weight-bold text-uppercase mb-4" style = "text-align:justify;">Account</h2>

<ul class="list-unstyled" style = "text-align:justify;">
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <i class="fas fa-home mr-11"></i> My profile</p>
  </li>
  <li>
    <p style = "text-align:justify;font-size:15px;">
      <i class="fas fa-envelope mr-11"></i>Wishlist</p>
  </li>
  <li>
    <p style = "text-align:justify; font-size:15px;">
      <i class="fas fa-phone mr-11"></i> Orders</p>
  </li>
</ul>

</div>
        <!-- Social buttons -->
        <h2 class="font-weight-bold text-uppercase mb-4">Follow Us</h2>

        <!-- Right -->
    <div>
      <img src="/images/brandico_facebook-rect.png" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>

      <img src="/images/uim_whatsapp.png" class="me-4 text-reset">
        <i class="fab fa-whatsapp"></i>
  
      <img src="/images/bi_instagram.png"  class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
     
   
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

     
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <footer class="bg-light text-center text-white">
 
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 " style="background-color: #495464;">
  <h5>© 2022 All Rights Reserved.</h5>
  </div>
  <!-- Copyright -->
        </footer>
</body>
</html>