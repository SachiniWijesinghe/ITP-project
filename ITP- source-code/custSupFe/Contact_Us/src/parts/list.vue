

<template xmlns="http://www.w3.org/1999/html">


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

                  <img src="src/images/Banner.png" height="500" width=" 1200" alt="" align="justify">

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




      <!------ Get In Touch ---------->
      <div class="jumbotron jumbotron-sm">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-lg-12">
              <h3 class="h1" align="center"><b>Get in Touch</b></h3>
                <br/>
              <p><center>We value your thoughts, suggestions and comments regarding any aspect of the <b>Super Fashion </b> experience.</center></p>
              <p><center>Please contact us by completing the form below. You will receive a reply from us shortly.</center></p>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="well well-sm">
              <form>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">
                        Full Name</label>
                      <input type="text" class="form-control"  placeholder="Enter Full Name" required="required" v-model = "info.name"/>
                    </div>

                    <div class="form-group">
                      <label for="name">
                        E-mail</label>
                      <input type="text" class="form-control"  placeholder="Enter E-mail"  required= "required"  v-model = "info.email"/>

                      <div v-show=""
                    </div>
                    <div class="form-group">
                      <label for="name">
                        Phone</label>
                      <input type="text" class="form-control"  placeholder="Enter Phone" required="required"  v-model = "info.phone"/>
                    </div>
                    <div class="form-group">
                      <label for="subject">
                        Subject</label>
                      <input type="text" class="form-control"  placeholder="Enter Subject" required="required"  v-model = "info.subject"/>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name">
                        Message</label>
                      <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message" v-model = "info.message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                      Send Message</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>


      <!------ Contact details ---------->
      <h2 align="center">Contact Details</h2>
      <br/>
      <div class="item col-xs-4 col-lg-4">
        <div class="thumbnail card">
          <div class="img-event">
            <img class="group list-group-image img-fluid" src="http://placehold.it/400x250/000/fff" alt="" />
          </div>
          <div class="caption card-body">
            <img src="src/images/pic_1.png " width="400" height="250">
            <h4>Head Office</h4></br>

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
            <img src="src/images/pic_2.png " width="400" height="250">
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
            <img src="src/images/pic_3.png " width="400" height="250">
            <h4>ONLINE INQUIRIES AND ORDERS</h4></br>

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
            <img src="src/images/pic_4.png " width="400" height="250">
            <h4>Purchasing & Merchandising Queries</h4></br>

            <p>Address</p>
            <p>Telephone</p>
            <p>Email</p>

          </div>
        </div>
      </div>

    </div>

</template>

<script>
export default {

  data(){

    return{

      info:{
        name:'',
        email:'',
        phone:'',
        subject:'',
        message:''


      }
    }
  }
}

</script>

