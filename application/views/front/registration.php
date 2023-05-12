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
                <form method="post" action="<?php echo base_url();?>Fornt/registration">

                    <h5>Sing up</h5>
                    <?php  if($error=$this->session->flashdata('singup_error')){  ?>
                    <div class="row  text-center" style="justify-content: center;">
                        <div class="col-lg-6">
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
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Full Name</label>
                        <input type="text" placeholder="Type your full name here" class="form-control" id="username"
                            name="name" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" placeholder="Type your password here" class="form-control" id="password"
                            name="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mobile</label>
                        <input type="Number" placeholder="Type your Mobile Number" class="form-control" id="Mobile"
                            name="Mobile" required>
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

    <!-- footer -->
  

</body>

</html>