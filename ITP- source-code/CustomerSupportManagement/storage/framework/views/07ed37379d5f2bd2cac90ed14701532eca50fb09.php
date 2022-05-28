<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
        <meta charset="utf-8">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>feedback</title>
  </head>
  <body>


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
                        <a class="nav-link" href="../about/82"  position = "absolute"><font size="3" > About us        </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="../contact/66"  position = "absolute"><font size="3" >  Contact us         </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../feedback/create"  position = "absolute"><font size="3" >  Feedback </font></a>
                      </li>
                    </ul>
                  </div>
                  <img src="/images/mini.png " width="100" height="20" align="right">
                </div>
              </nav>
</div>
  
<div class="bg-image" 
      style="background-image: url('/images/feedback.png');
            height: 100vh">
              <div class="container">
            <div class="imagebg"></div>
            
            <div class="row " style="margin-top: 30px">
            <?php if(session('status')): ?>
        <h1 class =  "alert alert-success alert-dismissible" style="text-align: center;"><?php echo e(session('status')); ?></h1>
        <?php endif; ?>
                <div class="col-md-6 col-md-offset-3 form-container">
            
            <div class="shadow-lg p-3 mb-5 bg-white rounded">  

<div class="card">
  <div class="card-header">
  <div class="card-body">
    
   
      <form action="<?php echo e(url('feedback')); ?>" method="post">
        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                           <center> <h1 class="display-1" style="font-size: 80px;"><b>Feedback..!</b></h1>
                    <p class="display-6">
                    Your Feedback help others make better decision
                     about our products & Services
</p></center> </br></br>
                                <label class="h3">Overall experience?</label></br>
                                <p class="h4">
                                    <label class="radio-inline" >
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="bad" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="average" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="good" required>
                                        Good 
                                    </label>
                                </p></br>
                                <label class="h3">Timely Response?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="bad" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="average" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="good" required>
                                        Good 
                                    </label>
                                </p></br>

                                <label class="h3">Our Support?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="bad" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="average" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="good" required>
                                        Good 
                                    </label>
                                </p></br>
                                
                                <label class="h3">Overall Satisfaction?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="bad" required>
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="average" required>
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="good" required>
                                        Good 
                                    </label>
                                </p></br>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments" class="h3"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="Comment" required id="Comment" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name" class="h3"> Your Name:</label>
                                <input type="text" class="form-control" id="Name" name="Name" required maxlength="20">
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email" class="h3"> Email:</label>
                                <input type="email" class="form-control" id="Email" name="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" id="btnresult">Post </button>
                            </div>
                        </div>
                    </form>

                </div>
  </div>
</div>
 </div>
</div>
</div>
</div>
</div>

 </div>

        
</div>
 </div>
</div>
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>


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

<?php /**PATH C:\Users\INSIGHT\OneDrive\Desktop\addContact\resources\views/feedbacks/create.blade.php ENDPATH**/ ?>