<?php 
  include 'header.php';
  include_once 'includes/dbhandler.php';
?>


<html lang="en">
    


  <body>
  
    <?php include 'navbar.php';?>
    
        <div class="container" id="container">
          <h1 class="ml-5">Get in Touch</h1>
          <hr>
          <div class="row">

            <div class="col-lg-5">
              <div class="row">

                <div class="col-lg">
                  
                  <div>
                    <img src="img/gmail.png" class="socialmedia" alt="" id="gmail">
                    <a href="">r.shohan12@gmail.com</a>
                  </div>

                  <div>
                    <img src="img/facebook.png" class="socialmedia" alt="" id="facebook">
                    <a href="www.facebook.com/shohansolo">Find me on Facebook</a>
                  </div>

                  <div>
                    <img src="img/linkedin.png" class="socialmedia" alt="" id="linkedin">
                    <a href="https://www.linkedin.com/in/shohan-rahman-49aab8185">Find me on Linkedin</a>
                  </div>

                </div>
                
              </div>

            </div>

            <div class="col-lg-7">
              <div class="row">

                <div class="col-lg">
                  
                <h2>Leave a message here:</h2>
                <br>

                <form>
                  <div class="form-row">
                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                      <label for="">Your First Name</label>
                      <input type="text" name= "firstname" class="form-control" placeholder="First Name">
                    </div>

                    <div class="form-group col-lg-6 col-md-12 col-sm-12 col-12">
                      <label for="">Your Last Name</label>
                      <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                    </div>
                  </div>

                  <label for="">Email</label>
                  <input type="Email" name= "email" placeholder="Email" class="form-control "> 

                  <br>

                  <label for="">Your Message</label>
                  <textarea class="form-control mb-3" name="message" id="" cols="10" rows="5"></textarea>
                  
                  <button class="btn-primary float-right mb-3" type="submit" name="submit">Submit</button>

                </form>

                <?php include 'getForm.php' ?>

                </div>
                
          
              </div>

            </div>

          </div>

        </div>

  </body>



</html>



