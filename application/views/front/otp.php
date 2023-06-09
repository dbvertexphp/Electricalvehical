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

    .otp-input {

        display: flex;

        justify-content: space-between;

        width: 200px;

    }



    .otp-input input {

        width: 40px;

        height: 40px;

        font-size: 24px;

        text-align: center;

        border: 1px solid #ccc;

        border-radius: 4px;

    }

    </style>

</head>



<body>







    <br>

    <div class="container">

        <div class="row">

            <div class="col-md-6 mb-1">

                <h3><b>OTP</b></h3> <br> <br> <br> <br></br>

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



                <div class="row text-center">

                

                    <p style="font-size: 12px;color:#b9b8b8">
                    Your registration OTP mail has been sent to <span style="color:black"><?php 

              $number =  $this->session->userdata('email');

            //    $otp =  $this->session->userdata('randCode');

              

             echo str_pad(substr($number, -15), strlen($number), '*', STR_PAD_LEFT);

            

            ?></span> <br>

           If you don't see the mail in your inbox please check spam folder  </p>

                    <?php // echo "OTP-".$otp; ?>

                    <form method="post" action="<?php echo base_url();?>Fornt/verify_otp">

                        <div class="input-container d-flex flex-row justify-content-center mt-2 mb-3">

                            <div class="otp-input">

                                <input type="text" id="otp-1" name="otp-1" maxlength="1" pattern="\d" autocomplete="off"

                                    required>

                                <input type="text" id="otp-2" name="otp-2" maxlength="1" pattern="\d" autocomplete="off"

                                    required>

                                <input type="text" id="otp-3" name="otp-3" maxlength="1" pattern="\d" autocomplete="off"

                                    required>

                                <input type="text" id="otp-4" name="otp-4" maxlength="1" pattern="\d" autocomplete="off"

                                    required>

                            </div>

                        </div>



                        <a href="<?php echo base_url();?>Fornt/resend_otp"

                            style="text-decoration: none;color:#ffb600">Resend</a>



                        <!-- <div class="d-grid gap-2 col-5 mx-auto">

                            <button class="btn " type="submit"

                                style="background-color: #ffb600;color:white">Submit</button>

                        </div> -->

                    </form>

                </div>



            </div>

            <div class="col-md-6">

                <img src="<?php echo base_url();?>image/otpimg.png" class="img-fluid" alt=""

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

</body>



</html>