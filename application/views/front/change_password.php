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
        color: black;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        padding: 12px 16px;
        z-index: 1;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown_hover {
        color: black;

    }

    a {
        text-decoration: none;
    }
    </style>

    <title>Login form</title>
</head>

<body>




    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1" style="padding-right: 85px;">
                <form method="post" action="<?php echo base_url();?>Fornt/change_password_user">
                    <h3><b>Mobile</b></h3><br>
                    <h5>Change Password</h5>
                    <?php  if($error=$this->session->flashdata('old_password')){  ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-danger ">
                                <?= $error; 

                               unset($_SESSION['old_password']);
                               ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    style="float:right;"></button>
                            </div>
                        </div>
                    </div>

                    <?php } ?>



                    <?php  if($otpsent =$this->session->flashdata('Password_change')){  ?>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-success">
                                <?= $otpsent; 
                             
                             unset($_SESSION['Password_change']);
                    ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    style="float:right;"></button>
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <div class="mb-3">
                        <label for="password" class="form-label">Enter your Old Password</label>
                        <input type="password" placeholder="Type your Old password here" class="form-control"
                            name="oldpassword" id="oldpassword" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Enter your New Password</label>
                        <input type="password" placeholder="Type your New password here" class="form-control"
                            name="password" id="password" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Enter your confirm Password</label>
                        <input type="password" placeholder="Type your confirm password here" class="form-control"
                            name="password" id="confirm_password" required>
                    </div>

                    <div class="row mb-3">
                        <div class="col ">
                            <!-- Checkbox -->

                        </div>


                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn" type="submit" style="background-color: #ffb600;color:white">Submit</button>

                    </div>

                </form><br>
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
    var password = document.getElementById("password"),
        confirm_password = document.getElementById("confirm_password");

    function validatePassword() {
        if (password.value != confirm_password.value) {
            confirm_password.setCustomValidity("Passwords Don't Match");
        } else {
            confirm_password.setCustomValidity('');
        }
    }

    password.onchange = validatePassword;
    confirm_password.onkeyup = validatePassword;
    </script>


</body>

</html>