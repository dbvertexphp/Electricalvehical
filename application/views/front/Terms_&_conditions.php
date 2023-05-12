<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXh401p5ILy+dN9+nJOZ" crossorigin="anonymous">
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
        font-weight: 400;
        font-size: 18.515px;
        line-height: 17px;
        color: #313131;
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
    </style>
</head>

<body>




    <br>
    <div class="container clam_handing_container">
        <div class="row">
            <div class="col-md-12 mb-1" style="align-self: center;">
                <h2 class="clam_handing">Terms and Conditions</h2>
                <p class="clam_handing_text mt-3">Thank you for considering Mobi Protect Pvt Ltd company for your Mobile
                    protection needs. Please read the following terms and conditions carefully before purchasing our
                    insurance coverage:</p>

                <h4>Coverage:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Our protection plan coverage applies to mobile devices such as
                    smartphones and tablets. The coverage includes protection against accidental damage, water damage,
                    and theft if purchased theft protection with the plan. However, we do not cover any damages caused
                    by intentional acts, acts of war or terrorism, or natural disasters.</p>

                <h4>Eligibility:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> To be eligible for our insurance coverage, you must be the owner of
                    the mobile device and have a valid proof of purchase. The device must also be in good working
                    condition at the time of enrollment.</p>

                <h4>Enrollment:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> To enroll for our insurance coverage, you must provide accurate and
                    complete information about yourself and your mobile device. Any false information provided may
                    result in the cancellation of your coverage.</p>

                <h4>Premiums:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Premiums are due on a monthly or annual basis, depending on the
                    payment plan you choose. Failure to pay premiums may result in the cancellation of your coverage.
                </p>

                <h4>Deductibles:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Deductibles apply to each claim made under our protection plan
                    coverage. The amount of the deductible varies depending on the type of claim being made.</p>

                <h4>Claims:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> To make a claim under our protection plan coverage, you must notify us
                    within 24 hours of the incident. You must also provide all necessary documentation and cooperate
                    with our claims investigation. We reserve the right to deny any claims that do not meet our
                    eligibility requirements.</p>

                <h4>Renewal:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Our protection plan coverage is renewable on an annual basis. We will
                    notify you in advance of the renewal date and provide you with options for continuing or canceling
                    your coverage.</p>

                <h4>Cancellation:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> You may cancel your coverage at any time by notifying us in writing.
                    We reserve the right to cancel your coverage for any reason, including non-payment of premiums or
                    fraudulent activities.</p>

                <h4>Governing Law:</h4>
                <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> These terms and conditions shall be governed by and interpreted in
                    accordance with the laws of India. Any disputes arising from these terms and conditions shall be
                    resolved in the courts of India.</p>


            </div>

        </div>
    </div><br>




    <!-- footer -->

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