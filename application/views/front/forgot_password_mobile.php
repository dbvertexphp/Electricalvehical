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
    <title>Otp</title>
    <style>

    </style>
</head>

<body>



    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1">
                <h3><b>Mobile</b></h3> <br> <br> <br> <br></br>
                <?php  if($error=$this->session->flashdata('forgot_password_otp')){  ?>
                <div class="row  text-center" style="justify-content: center;">
                    <div class="col-lg-6">
                        <div class="alert alert-danger ">
                            <?= $error; 

                               unset($_SESSION['forgot_password_otp']);
                                 ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                style="float:right;"></button>
                        </div>
                    </div>
                </div>

                <?php } ?>

                <div class="row text-center">
                    <h4>Forgot Password</h4>


                    <form class="needs-validation" method="post" action="<?php echo base_url();?>Fornt/forgot_password_otp" novalidate>
                        <div class="input-container d-flex flex-row justify-content-center mt-2">
                            <div class="mb-3">
                                <label for="password" class="form-label">Mobile</label>
                                <input type="tel" placeholder="Type your Mobile Number" class="form-control"
                                    id="Mobile" name="Mobile" maxlength="10"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required pattern="[0-9]{10}" required>
                            <div class="invalid-feedback">
                            Valid Mobile is required.
                        </div>
                            </div>
                        </div>


                        <div class="d-grid gap-2 col-4 mx-auto">
                            <button class="btn " type="submit"
                                style="background-color: #ffb600;color:white">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>image/regimg.png" class="img-fluid" alt=""
                    style="padding: 35px;background-color: #ffb600;">
            </div>
        </div>
    </div><br>

    <!-- footer -->
    


    <script>
    const otpInputs = document.querySelectorAll('.otp-input input');
    for (let i = 0; i < otpInputs.length; i++) {
        otpInputs[i].addEventListener('input', function() {
            if (this.value.length === this.maxLength) {
                if (i === otpInputs.length - 1) {
                    // Last OTP input field, submit the form
                    this.form.submit();
                } else {
                    // Move focus to the next OTP input field
                    otpInputs[i + 1].focus();
                }
            }
        });
    }
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