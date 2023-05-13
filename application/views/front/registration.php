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
    <style>
    .header_option {
        text-decoration: none;
    }

    .logo {
        font-family: 'Plus Jakarta Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 30.03px;
        line-height: 34px;
        color: #FFB600;
        text-decoration: none;
    }
    </style>

</head>

<body>




    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1" style="padding-right: 85px;">
                <form class="needs-validation" method="post" action="<?php echo base_url();?>Fornt/registration"
                    novalidate >

                    <h5>Sing up</h5>
                    <?php  if($error=$this->session->flashdata('singup_error')){  ?>
                    <div class="row  text-center" style="justify-content: center;">
                        <div class="col-lg-12">
                            <div class="alert alert-danger ">
                                <?= $error; 

                               unset($_SESSION['singup_error']);
                                 ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    style="float:right;"></button>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" placeholder="Type your email address here" class="form-control" id="email"
                            name="email" aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                            Valid Email is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Full Name</label>
                        <input type="text" placeholder="Type your full name here" class="form-control" id="username"
                            name="name" aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                            Valid Name is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" placeholder="Type your password here" class="form-control" id="password"
                            name="password"  minlength="7"
                             required  >
                            <div class="invalid-feedback">
                            Your password must be at least 7 characters long, with 1 uppercase and 1 lowercase character, 1 number, and a minimum of 1 special character.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mobile</label>
                        <input type="tel" placeholder="Type your Mobile Number" class="form-control" id="Mobile"
                            maxlength="10"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required pattern="[0-9]{10}" name="Mobile" required>
                        <div class="invalid-feedback">
                            Valid Mobile is required.
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col ">
                            <!-- Checkbox -->

                        </div>

                        <div class="col text-end">
                            <a href="<?php echo base_url();?>Fornt/forgot_password_mobile"
                                style="text-decoration: none;color: #b9b8b8;">Forgot password?</a>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn" type="submit"
                            style="background-color: #ffb600;color:white">Register</button>

                    </div>

                </form><br>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>image/regimg.png" class="img-fluid" alt=""
                    style="padding: 35px;background-color: #ffb600;">
            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- footer -->
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
              event.preventDefault()
                    event.stopPropagation()
            } else if (!/[a-z]/.test(passwordValue)) {
                console.log('[a-z]');
              passwordInput.setCustomValidity("Password must contain at least one lowercase letter.");
              event.preventDefault()
                    event.stopPropagation()
            } else if (!/^(?=.*[!@#$%^&*])(?=.*\d{1}).*$/.test(passwordValue)) {
                console.log('[0-9a-zA-Z]');
              passwordInput.setCustomValidity("Password must contain at least one unique number.");
              event.preventDefault()
                    event.stopPropagation()
            }
             else {
                
              passwordInput.setCustomValidity("");
            }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

</body>

</html>