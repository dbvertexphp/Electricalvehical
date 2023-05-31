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
    @media screen and (min-width: 280px) {

        #tex.text {

            font-size: 2px;

        }
    }

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

    .profile_img {
        border-radius: 50%;
    }

    .profile_name {
        font-size: 18px;
    }

    .dropdown_hover:hover {
        color: #FFB600;
    }

    a:hover {
        cursor: pointer;
    }

    .dropdown_hover_name:hover {
        cursor: pointer;
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

    .header_option:hover {
        color: #FFB600;
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

    .clam_handing_container {
        font-family: Arial, sans-serif;
        line-height: 1.5;
    }

    .clam_handing {
        color: #333;
        font-size: 24px;
        margin-bottom: 10px;
        text-align: center;
        color: #FFB600;
    }

    .clam_handing_text {
        color: #666;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .policy_submit_button {
        background-color: #ffb600;
        color: white;
        font-size: 19px;
        font-weight: bold;
        width: 150px;
        border-radius: 10px;
        border-color: #ffb600;
        margin-top: 20px;
    }

    .policy_submit_button:hover {
        background-color: #ffb600;
        color: white;
    }
    </style>
</head>

<body>




    <br>
    <div class="container clam_handing_container">
        <div class="row">
            <div class="col-md-12 mb-1" style="align-self: center;">
                <h2 class="clam_handing">Contact Us</h2>
                <p class="clam_handing_text mt-3"> We're always excited to hear from our customers or anyone who wants
                    to know more about our protection
                    plans. If you have any queries or concerns or want to learn more about our plans, you can contact us
                    in a few ways.</p>

                <h5>Contact Form:</h5>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> You can fill out the contact form on this
                    page, and we'll get back to you as soon as possible.</p>

                <h5>Toll-free Number:</h5>
                <p>In addition, you can call our toll-free number if you prefer to talk to someone directly.</p>

                <h5>Email:</h5>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> We're also available via email, so feel free
                    to message us at the email address listed on our
                    website.</p>

                <h5>Become a Mobile Shop Partner:</h5>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Additionally, if you're interested in becoming
                    a mobile shop partner and joining our network, we'd
                    love to hear from you! So send us a message, and we'll get back to you with all the details.</p>

                <p class="clam_handing_text mt-3"> Thanks for considering Mobi Protect as your mobile protection
                    provider - we can't wait to hear from
                    you!</p>

                <div class="row justify-content-center">
                    <div class="col-sm-8 pb-5 mt-5 align-self-center"
                        style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                        <?php  if($error=$this->session->flashdata('Contact_us_form')){  ?>
                        <div class="row justify-content-center">
                            <div class="col-lg-5 mt-3">
                                <div class="alert alert-success ">
                                    <?= $error; 

                               unset($_SESSION['Contact_us_form']);
                               ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                        style="float:right;"></button>
                                </div>
                            </div>
                        </div>

                        <?php } ?>
                        <h5 class="text-center my-5 fw-bold fs-4" style="color: #FFB600;">Contact Form</h5>
                        <form class="needs-validation" method="post"
                            action="<?php echo base_url();?>Fornt/Contact_us_form" novalidate autocomplete="off">
                            <div class="row justify-content-center">
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-sm-6 mt-2">
                                            <label for="lastName" class="form-label">Name</label>
                                            <input type="text" class="form-control" value="" id="Name" name="Name"
                                                placeholder="Name" value="" required>
                                            <div class="invalid-feedback">
                                                Valid Name is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-6 mt-2">
                                            <label for="lastName" class="form-label">Email</label>
                                            <input type="Email" class="form-control" value="" id="Policy_Holder"
                                                name="email" placeholder="Email" value="" required>
                                            <div class="invalid-feedback">
                                                Valid Email is required.
                                            </div>
                                        </div>


                                        <div class="col-sm-6 mt-5">
                                            <label for="lastName" class="form-label">Mobile Number</label>
                                            <input type="tel" class="form-control" name="Mobile" id="Mobile"
                                                placeholder="Mobile Number" value="" maxlength="10"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                required pattern="[0-9]{10}">
                                            <div class="invalid-feedback">
                                                Valid Mobile Number is required.
                                            </div>
                                        </div>


                                        <div class="col-sm-6 mt-5">
                                            <label for="lastName" class="form-label">Message</label>
                                            <input type="text" class="form-control" id="Message" name="Message"
                                                placeholder="Message" value="" required>
                                            <div class="invalid-feedback">
                                                Valid Message is required.
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-5" style="text-align: center;">
                                            <button class="  rounded-pill  policy_submit_button btn-lg" id="submit"
                                                type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>





            </div>

        </div>
    </div><br>




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
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
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


</body>

</html>