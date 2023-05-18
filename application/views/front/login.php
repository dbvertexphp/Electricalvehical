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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <style>
    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .header_option {
        font-family: 'Plus Jakarta Sans';
        font-style: normal;
        font-weight: bold;
        font-size: 20.515px;
        line-height: 17px;
        color: black;
        flex: none;
        order: 1;
        flex-grow: 0;
        margin-left: 15px;
        text-decoration: none;
    }
    html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
.footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 250px; /* Adjust this value to match the height of your footer */
  background-color: #f5f5f5;
  text-align: center;
}

body {
  overflow-y: scroll;
  box-sizing: border-box;
}
.content {
  min-height: 100%;
  padding-bottom: 40%; /* Adjust this value to match the height of your footer */
}
    </style>

</head>

<body>




    <br>
    <div class="container">
        <div class="row content ">
            <div class="col-md-6 mb-1" style="padding-right: 85px; align-self: center;">
                <form class="needs-validation" method="post" method="post"
                    action="<?php echo base_url();?>Fornt/userlogin" novalidate autocomplete="off">

                    <h5>Login</h5>
                    <?php  if($error=$this->session->flashdata('login_error')){  ?>
                    <div class="row  text-center" style="justify-content: center;">
                        <div class="col-lg-12">
                            <div class="alert alert-danger ">
                                <?= $error; 

                               unset($_SESSION['login_error']);
                                 ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    style="float:right;"></button>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <div class="mb-3">
                        <label for="username" class="form-label">Email</label>
                        <input type="email" placeholder="Type your email" class="form-control" id="username"
                            value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" name="email"
                            aria-describedby="emailHelp" required>
                        <div class="invalid-feedback">
                            Valid Email is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Enter your Password</label>
                        <input type="password" placeholder="Type your password here" class="form-control"
                            value="<?php if(isset($_COOKIE["userpassword"])) { echo $_COOKIE["userpassword"]; } ?>"
                            name="password" id="password" required>
                        <div class="invalid-feedback">
                            Valid Password is required.
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col ">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" name="Remember"
                                    id="form2Example31" <?php if(isset($_COOKIE["user_login"])) { ?> checked
                                    <?php } ?> />
                                <label class="form-check-label" for="form2Example31" style="color: #b9b8b8;"> Remember
                                    me? </label>
                            </div>
                        </div>

                      

                        <div class="col text-end">
                            <a href="<?php echo base_url();?>Fornt/forgot_password_mobile"
                                style="text-decoration: none;color: #b9b8b8;">Forgot password?</a>
                        </div>
                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn" type="submit" style="background-color: #ffb600;color:white">Login</button>

                    </div>

                </form><br>
                <div class="text-center">
                    <p style="text-decoration: none;color: #b9b8b8;">  Don't have account? <a  href="<?php echo base_url();?>Fornt/singup"  style="text-decoration: none;color: #b9b8b8;"> <span style="color:#ffb600">SIGN UP</span></a></p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>/image/loginimg.png" class="img-fluid" alt=""
                    style="padding: 35px;background-color: #ffb600;">
            </div>
        </div>
    </div><br>




    <script>
    $(function() {
        $('.logout').click(function(e) {
            e.preventDefault();

            Swal.fire({
                icon: 'warning',
                title: 'Logout!',
                text: 'Are you sure you want to logout?',
                showCloseButton: true,
                showCancelButton: true,
                footer: '<a href="#!" id="some-action">Some action</a>'
            }).then((result) => {

                if (result.isConfirmed) {
                    window.location.href = "<?php echo base_url();?>Fornt/logout";
                } else {
                    swal("Cancelled", "Something went wrong. Please try again.)", "error");
                }
            });
        });

        $(document).on('click', '#some-action', function(e) {
            e.preventDefault();
            console.log('Some action triggered.');
        });
    });
    </script>
<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

</body>

</html>