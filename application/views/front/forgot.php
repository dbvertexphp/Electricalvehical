<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title>Forgot Password</title>
</head>

<body>




    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1" style="padding-right: 85px; align-self: center;">
                <form class="needs-validation" novalidate class="pure-form" method="post" action="<?php echo base_url();?>Fornt/forgot_password_verify_otp">
                    <fieldset>
                     
                        <h5>Forgot Password</h5>
                        <?php  if($error=$this->session->flashdata('otp_verify_message')){  ?>
                        <div class="row  text-center" style="justify-content: center;">
                            <div class="col-lg-6">
                                <div class="alert alert-danger ">
                                    <?= $error; 

                               unset($_SESSION['otp_verify_message']);
                                 ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                        style="float:right;"></button>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        <?php  
                        // $otp =  $this->session->userdata('randCode'); 
                    // echo "Otp-:".$otp;
                   ?>
                        <div class="mb-3">
                            <label for="password" class="form-label">Otp</label>
                            <input type="tel" placeholder="Otp" class="form-control" id="Otp" name="otp"
                                autocomplete="off" maxlength="4"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required pattern="[0-9]{4}" required>
                                <div class="invalid-feedback">
                                Valid Otp is required
                        </div>

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Passwords</label>
                            <input type="password" placeholder="Password" class="form-control" id="password"
                                name="Password" autocomplete="off" required>
                                <div class="invalid-feedback">
                            Your password must be at least 7 characters long, with 1 uppercase and 1 lowercase character, 1 number, and a minimum of 1 special character.
                        </div> 
                        </div>

                        <div class="mb-3">
                            <label for="confirm_password" class="form-label">Passwords</label>
                            <input type="password" placeholder="Confirm Password" class="form-control"
                                id="confirm_password" autocomplete="off" required>
                                <div class="invalid-feedback">
                            Enter Confirm Password is required.
                        </div>


                        </div>



                        <div class="d-grid gap-2 col-5 mx-auto">
                            <button class="btn" type="submit" class="pure-button pure-button-primary"
                                style="background-color: #ffb600;color:white">Change </button>

                        </div>
                    </fieldset>
                </form><br>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>image/forimg.png" class="img-fluid" alt=""
                    style="padding: 35px;background-color: #ffb600;">
            </div>
        </div>
    </div><br>

    <!-- footer -->
    

</body>


<!-- for confirm password validation -->
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                var passwordInput = document.getElementById('password');
            var passwordValue = passwordInput.value;
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                
            if (!/[A-Z]/.test(passwordValue)) {
                console.log('[A-Z]');
              passwordInput.setCustomValidity("Password must contain at least one uppercase letter.");
            } else if (!/[a-z]/.test(passwordValue)) {
                console.log('[a-z]');
              passwordInput.setCustomValidity("Password must contain at least one lowercase letter.");
            } else if (!/^(?=.*[!@#$%^&*])(?=.*\d{1}).*$/.test(passwordValue)) {
                console.log('[0-9a-zA-Z]');
              passwordInput.setCustomValidity("Password must contain at least one unique number.");
            }
             else {
                
              passwordInput.setCustomValidity("");
            }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
  var passwordInput = document.getElementById('password');
  var confirmPasswordInput = document.getElementById('confirm_password');
  
  function checkPasswords() {
    if (passwordInput.value !== confirmPasswordInput.value) {
        confirmPasswordInput.setCustomValidity("Passwords do not match");
    } else {
        confirmPasswordInput.setCustomValidity("");
    }
  }
  
  passwordInput.addEventListener('change', checkPasswords);
  confirmPasswordInput.addEventListener('keyup', checkPasswords);
});
        </script>
</html>