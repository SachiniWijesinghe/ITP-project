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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  </head>
  <body>
    
    </head>

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
                        <a class="nav-link" href="contactus.vue" position = "absolute"><font size="3" > About us        </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" position = "absolute"><font size="3" >  Contact us         </font></a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#" position = "absolute"><font size="3" >  Feedback </font></a>
                      </li>
                    </ul>
                  </div>
                  <img src="/images/mini.png " width="100" height="20" align="right">
                </div>
              </nav>
</div>
  
<div class="bg-image" 
      style="background-image: url('/images/feedback.png');
            height: 108vh">
              <div class="container">
            <div class="imagebg"></div>
            
            <div class="row " style="margin-top: 30px">
                <div class="col-md-6 col-md-offset-3 form-container">
            
            <div class="shadow-lg p-3 mb-5 bg-white rounded">  

<div class="card">
  <div class="card-header">
  <div class="card-body">

      <form action="<?php echo e(url('feedback')); ?>" method="post">
        <?php echo csrf_field(); ?>

                        <div class="row">
                            <div class="col-sm-12 form-group">
                           <center> <h1 class="display-1" style="font-size: 80px;">Feedback..!</h1>
                    <h1 class="display-9">
                    Your Feedback help others make better decision
                     about our products & Services
                    </h1></center> </br></br>
                                <label class="h3">Overall experience?</label></br>
                                <p class="h4">
                                    <label class="radio-inline" >
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Experience" id="Overall_Experience" value="good" >
                                        Good 
                                    </label>
                                </p></br>
                                <label class="h3">Timely Response?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Timely_Response" id="Timely_Response" value="good" >
                                        Good 
                                    </label>
                                </p></br>

                                <label class="h3">Our Support?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Our_Support" id="Our_Support" value="good" >
                                        Good 
                                    </label>
                                </p></br>
                                
                                <label class="h3">Overall Satisfaction?</label>
                                <p class="h4">
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="bad" >
                                        Bad 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="average" >
                                        Average 
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="Overall_Satisfaction" id="Overall_Satisfaction" value="good" >
                                        Good 
                                    </label>
                                </p></br>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="comments" class="h3"> Comments:</label>
                                <textarea class="form-control" type="textarea" name="Comment" id="Comment" placeholder="Your Comments" maxlength="6000" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name" class="h3"> Your Name:</label>
                                <input type="text" class="form-control" id="Name" name="Name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email" class="h3"> Email:</label>
                                <input type="email" class="form-control" id="Email" name="Email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        </div>

        
</div>
</body>
</html>

<?php /**PATH C:\Users\INSIGHT\OneDrive\Desktop\ITP\resources\views/feedbacks/create.blade.php ENDPATH**/ ?>