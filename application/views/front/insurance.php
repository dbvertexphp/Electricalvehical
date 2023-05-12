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
    <!-- link for card -->
    <link href="<?php echo base_url();?>asstes/homepage/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>asstes/homepage/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- link for arrow -> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Option 1: Include in HTML -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <style>
    html,
    body {
        max-width: 100%;
        overflow-x: hidden;
    }

    .col-3 {
        text-align: center;
    }

    #one {
        max-width: 80%;
        height: auto;
    }
    </style>



    <style>
    #contain {
        position: relative;
        text-align: center;
        color: white;
        padding: 0%;

    }


    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    </style>
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
    .embed-responsive-item{
        width: 576px;
        height: 337px;
        border-radius: 28px;
    }
    @media screen and (max-width: 1200px) {
        .embed-responsive-item{
        width: 420px;
        height: 237px;
        border-radius: 10px;
    }
    }
    @media screen and (max-width: 500px) {
        .embed-responsive-item{
        width: 250px;
        height: 137px;
        border-radius: 10px;
    }
    }
   .why_choose{
    line-height: 23px;
    font-weight:900;
    letter-spacing: 1px;
   }
   .scroll-then-fix {
  position: relative;
}

.scroll-then-fix img {
  width: 100%;
  height: auto;
}

.scroll-then-fix.fixed {
  position: fixed;
  top: 50px; /* Adjust the desired position based on your needs */
  width: 200px; /* Adjust the width of the fixed image */
  height: auto;
}
  
    </style>

</head>

<body>



    <br>

    <div class="container ">
        <div class="row ">
            <div class="col-lg-6">
                <h1><b>DO THE DIGITAL INSURANCE</b></h1><br>
                <p style="color: #707070;">Pack your luggage and pick your destination, we will provide you <br>
                    the flight ticket, hotel booking and best guides</p><br>

                <p>
                    <a class="btn shadow rounded-pill" data-bs-toggle="collapse" href="#collapseExample" role="button"
                        aria-expanded="false" aria-controls="collapseExample"
                        style="background-color: #FFB600; color: white;">
                        <img src="image/Vector-1.png" alt="" id="one"> &nbsp Mobile
                    </a>

                    &nbsp &nbsp
                    <a class="btn shadow   bg-white rounded-pill" data-bs-toggle="collapse" href="#collapseExample"
                        role="button" aria-expanded="false" aria-controls="collapseExample" style="color: #FFB600;">
                        <img src="image/Vector.png" alt="" id="one"> Low speed Electric Vehicle
                    </a>
                </p>
                <div class="collapse" id="collapseExample">

                    <div class="card card-body">
                        <div class="hstack gap-3 ">

                            <div>Make</div>
                            <div class="vr"></div>
                            <div>Model No.</div>

                            <div class="input-group-append">
                                <span style=" background-color: #FFB600" class="input-group-text" id="basic-addon2">View
                                    Price</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Make     |     Model No."
                        aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span style=" background-color: #FFB600" class="input-group-text" id="basic-addon2">View
                            Price</span>
                    </div>
                </div>
            </div><br>

            <div class="col-lg-6 text-center">
                <img src="image/img1.png" class="mx-auto d-block" alt="" id="one">
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid stats_section_fluid">
        <div class="container">

            <div class="row " style="padding-top:15%; padding-bottom:15%">
                <div class="col-lg-6" style="color: white;">
                    <h1><b>Who Are We ?</b></h1><br>
                    <p>We are a team of dedicated professionals who understand the importance of protecting your valuable mobile devices. Our mission is to provide you with the best mobile protection plan coverage possible, giving you peace of mind and protection against any unexpected events like accidental damages, water damaged and theft.</p>
                </div>
                <div class="col-lg-6 text-center">

                    <div class="embed-responsive embed-responsive-16by8">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <br>
    <div class="container">
    <div class="scroll-then-fix">
  <img src="<?php echo base_url();?>asstes/homepage/mobile_work/images/mobile_phototribe.png" alt="Image 1">
</div>

<div class="scroll-then-fix">
  <img src="<?php echo base_url();?>asstes/homepage/images/h1bq_layout.png" alt="Image 2">
</div>
</div>

          
    <div class="container-fluid" style="margin-top: -23px;">
        <section id="our_work_section">

            <div class="row out_work_sec_length" style="height: calc(100vh * 3);">
                <div class="col our_work_iframe">

         

                    <div class="our_work_section">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-6">
                                        <img class="mobile_skin" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>asstes/homepage/mobile_work/images/mobile_phototribe.png" alt="pahadiuncle_layout">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h3 style="font-weight:900;">Why choose us?</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <p class="why_choose"> Buy Mobile protection plan that fits your pocket. our plans are affordable and easy to understand, so you won't be blindsided by hidden fees.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="our_work_section py-5">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-6">
                                        <img class="mobile_skin" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>asstes/homepage/images/h1bq_layout.png"
                                            alt="h1bq_layout.png">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                        <h3 style="font-weight:900;">Easy to buy</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                        <p class="why_choose">Just head on over to the Buy Protection Plans section and follow the simple steps to get started.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="our_work_section">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-6">
                                        <img class="mobile_skin" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>asstes/homepage/mobile_work/images/mobile_phototribe.png"
                                            alt="mobile_phototribe">
                                    </div>
                                    <div class="appdevcol col-md-6 applogodivx">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                        <h3 style="font-weight:900;">Hassle Free claims</h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                        <p class="why_choose"> Claim settlement is just a call away. Just call on our toll-free number or drop a mail that’s it.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <br>
    <div class="container text-center">
        <h1><b>Read Recent Post</b></h1>
    </div><br>

    <div class="container text-center ">
        <div class="row justify-content-center">
            <div class="col-sm-5 ">
                <img src="/image/ph1.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Course Screen Damage</b></h3>
            </div>
            <div class="col-sm-5">
                <img src="/image/ph2.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Course Liquid Damage</b></h3>
            </div>
        </div>
    </div>
    <br>

    <div class="container text-center ">
        <div class="row justify-content-center">
            <div class="col-sm-5 ">
                <img src="/image/img3.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Free Pickup & Drop</b></h3>
            </div>
            <div class="col-sm-5">
                <img src="/image/img4.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Repairs in Brands Authorized Service Center</b></h3>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid" id="contain">
        <img src="image/limg.png" alt="Snow" style="width:100%;">

        <div class="centered">
            <h1 style="font-size:4vw;">Hassel Free Service Get <br>

                your mobile Repaired <br>

                in just a few clicks</h1>
        </div>
    </div><br>

    <div class="container">
        <div class="w3-container">
            <div class="w3-panel w3-card">
                <div class="card" style="border: none;">
                    <div class="container">
                        <div class="row" style="color: #FFB600;">
                            <div class="col-6">
                                <h3><b style="font-size: max(2vw, 13px);">Comprehensive Course</b></h3>
                            </div>
                            <div class="col-3">
                                <h3><b style="font-size:max(2vw, 13px);">Mobile Perfect</b></h3>
                            </div>
                            <div class="col-3">
                                <h3><b style="font-size:max(2vw, 13px);">Under Brand</b></h3>
                            </div>
                        </div><br>

                        <div class="row">
                            <div class="col-6" style="color: #707070;">Repair / Replace Broken Screen</div>
                            <div class="col-3">&#9989;</div>
                            <div class="col-3"> &#10062;</div>
                        </div><br>

                        <div class="row">
                            <div class="col-6" style="color: #707070;">Repair / Replace Water Damage</div>
                            <div class="col-3">&#9989;</div>
                            <div class="col-3"> &#10062;</div>
                        </div><br>

                        <div class="row">
                            <div class="col-6" style="color: #707070;">Free Door Step Pick-up</div>
                            <div class="col-3">&#9989;</div>
                            <div class="col-3"> &#10062;</div>
                        </div><br>

                        <div class="row">
                            <div class="col-6" style="color: #707070;">Theft Protection</div>
                            <div class="col-3">&#9989;</div>
                            <div class="col-3"> &#10062;</div>
                        </div><br>

                        <div class="row">
                            <div class="col-6" style="color: #707070;">Easy Laing Settlement</div>
                            <div class="col-3">&#9989;</div>
                            <div class="col-3"> &#10062;</div>
                        </div><br>
                    </div>

                </div>
            </div>
        </div>
    </div> <br><br>





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
        
        window.addEventListener('scroll', function() {
  var scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
  var elements = document.querySelectorAll('.scroll-then-fix');

  for (var i = 0; i < elements.length; i++) {
    var element = elements[i];

    if (scrollPosition >= 200) { // Adjust the scroll position as needed
      element.classList.add('fixed');
    } else {
      element.classList.remove('fixed');
    }
  }
}); 
   </script>

  

</body>

</html>