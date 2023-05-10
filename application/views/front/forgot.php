<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Forgot Password</title>
  </head>
  <body>
     
        
    
        
    <br>
    <div class="container">
        <div class="row">
          <div class="col-md-6 mb-1" style="padding-right: 85px;">
            <form class="pure-form" method="post" action="<?php echo base_url();?>Fornt/forgot_password_verify_otp">
                <fieldset>
                <h3><b>Mobile</b></h3><br>
                <h5>Forgot Password</h5>
                <?php  if($error=$this->session->flashdata('otp_verify_message')){  ?>
                        <div class="row  text-center" style="justify-content: center;">
                            <div class="col-lg-6">
                                <div class="alert alert-danger ">
                                    <?= $error; 

                               unset($_SESSION['otp_verify_message']);
                                 ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float:right;"></button>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
               <?php  $otp =  $this->session->userdata('randCode'); 
               echo "Otp-:".$otp;
               ?>
                 <div class="mb-3">
                  <label for="password" class="form-label">Enter Otp</label>
                  <input type="number" placeholder="Otp" class="form-control" id="Otp" name="otp" autocomplete="off" required>
                 
                </div>
                
                <div class="mb-3">
                  <label for="password" class="form-label">Enter New Passwords</label>
                  <input type="password" placeholder="Password" class="form-control" id="password" name="Password" autocomplete="off" required>
                 
                </div>

                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Passwords</label>
                    <input type="password" placeholder="Confirm Password" class="form-control" id="confirm_password" autocomplete="off" required>
                   
                   
                  </div>
                
                 
                
                <div class="d-grid gap-2 col-5 mx-auto">
                    <button class="btn" type="submit" class="pure-button pure-button-primary"  style="background-color: #ffb600;color:white">Change </button>
                  
                  </div>
                </fieldset>
              </form><br>
          </div>
          <div class="col-md-6" >
            <img src="<?php echo base_url();?>image/forimg.png" class="img-fluid" alt="" style="padding: 35px;background-color: #ffb600;">
          </div>
        </div>
      </div><br>

       <!-- footer -->
       <div class="container-fluid" style="background-color: black;">
        <div class="container" style="padding: 25px 25px;">
        <div class="row" style="color: white;">
            <div class="col">
                <h3>Company</h3>
                <p style="font-size: 13px;">Mobi Protect Pvt Ltd. <br>
                  Near old arpa bridge, Pratap chowk, <br>
                   Bilaspur, Chhattisgarh-495001 .</p>
            </div>
            <div class="col">
                <p>About Us</p> 
                <p style="font-size: 13px;">Terms &
                    Condition <br>
                  Media & Low</p>
            </div>
            <div class="col">
                <p>Products</p>
                <p style="font-size: 13px;">Mobile Protection<br>
                    Speed 
                   Electric Vehicle
                </p>
            </div>
            <div class="col">
               <p> Contact Us</p>
                <p style="font-size: 13px;">Help / Support</p>
            </div>
            <div class="col">
                <p> Get Email Notifications</p>
                <p style="font-size: 13px;">Generate outside the box thinking with
                    the possibility to targtet the low</p>
    
                  <input type="email" name="submit"  value="Enter email...">submit 
            </div>  <br>
            <!-- <button style="color: white; background-color: #FFB600; ">Get The app-></button> -->
           
    
           
        </div><br>
        <div class="text-center">
        <button type="button" class="btn  " style="border-radius: 40px; background-color: #FFB600;color: white;">Get The app  <i class="fa fa-arrow-right"></i></button><br>
    </div><br>
       <p style="color: white; font-size: 13px;"> © 2023 Mobile. All Rights Reserved.</p>
     </div>
    </div>
    
  </body>


  <!-- for confirm password validation -->
  <script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
  </script>
</html>