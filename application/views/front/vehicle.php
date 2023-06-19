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

    <title>MOBILE</title>

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



    .embed-responsive-item {

        width: 576px;

        height: 337px;

        border-radius: 28px;

    }



    @media screen and (max-width: 1200px) {

        .embed-responsive-item {

            width: 420px;

            height: 237px;

            border-radius: 10px;

        }

    }



    @media screen and (max-width: 500px) {

        .embed-responsive-item {

            width: 250px;

            height: 137px;

            border-radius: 10px;

        }

    }



    .why_choose {

        line-height: 23px;

        font-weight: 600;

        letter-spacing: 1px;

        font-size: 20px;

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

        top: 50px;

        /* Adjust the desired position based on your needs */

        width: 200px;

        /* Adjust the width of the fixed image */

        height: auto;

    }

    .cardItem {

  

  margin-top: 100px;

  margin-right: 20px;

  padding: 20px;

  text-align: center;

  transition: all 500ms ease-in-out;

  background-color: #eee;

  background: var(--white-color);

  border-radius: 5%;

}

.cardItem:hover {

  margin-top: 92px;

  cursor: pointer;

  background: var(--white-color);

  border-radius: 5%;

  box-shadow: 0 1rem 3rem rgba(0, 0, 0, .175);

  transition: all 800ms cubic-bezier(0.19, 1, 0.22, 1);

}



.cardItem:hover .icon_images {

  width: 60px;

  height: 60px;

}

.cardLabel {

  

  width: 100%;

  font-size: 20px;

  display: block;

}

.material-icons {

  font-size: 64px;

  margin-top: 24px;

  color: #1ab5ad;

}

.text_card{

    color: var(--p-color);

    font-size: var(--p-font-size);

    font-weight: var(--font-weight-light);

}

.cardLabel{

    color: #FFB600;

    margin-top: 20px;

    transition: all 0.5s;

}

.icon_images{

    width:70px;

    height:70px;

}

.Comprehensive_Cover{

    font-size: max(1.5vw, 10px);

}

.cardItem:hover .icon_images_screen {

  width: 60px;

  height: 60px;

}

.icon_images_screen{

    width:82px;

    height:82px;

}



.pulse {

  animation: pulse 2s infinite ease-in-out alternate;

}

@keyframes pulse {

  from { transform: scale(1.0); }

  to { transform: scale(1.1); }

}

    </style>



</head>



<body>







    <br>



    <div class="container ">

        <div class="row ">

            <div class="col-lg-6" style="align-self: center;">

                <div class="row">

                <h1><b>PROTECT THE VEHICLE</b></h1><br>

                <p class="fs-4">Buy Vehicle protection plan that fits your pocket. our plans are affordable and easy to understand, so you won't be blindsided by hidden fees.</p>

                <div class="col-3">

                <a class=" header_option products active" aria-current="page"

                    href="<?php echo base_url();?>Fornt/Vehicle_buy_Premium">

                    <div class="input-group-append w-100">

                        <span style=" background-color: #FFB600; place-content: center;"

                            class="input-group-text text-white" id="basic-addon2">Buy Product

                        </span>

                    </div>

                </a>

                </div>

                <div class="col-6">

                <a class=" header_option products active mt-5" aria-current="page"

                    href="<?php echo base_url();?>Fornt/vehicle_Calculator/2">

                    <div class="input-group-append w-50">

                        <span style=" background-color: #FFB600; place-content: center;"

                            class="input-group-text text-white" id="basic-addon2">Calculator

                        </span>

                    </div>

                </a>

                </div>

                </div>

            </div><br>



            <div class="col-lg-6 text-center">

                <img src="<?php echo base_url();?>image/home_hading.png" class="mx-auto d-block pulse" alt="home_hading" id="one">

            </div>

        </div>

    </div>

    <br>



    <div class="container text-center my-3">

        <h1 class="" style="font-weight: var(--font-weight-semibold);letter-spacing: -1px; color:#313131"><b>Repair and Replacement guarantee for </b></h1>

    </div><br>



    <div class="container text-center ">

        <div class="row justify-content-center">

            <div class="col-sm-6 col-md-4">

            <div class="cardItem"><img class="mb-3 icon_images_screen" src="<?php echo base_url();?>image/Artboard 12.png" alt="cardItem"><span class="cardLabel"><strong>Screen Damages</strong></span>

            <p class="mt-3 text_card">Our guarantee covers screen damages. We will repair or replace the subject's screen at no additional cost during the guarantee period.</p>

            </div> 

            </div>

            <div class="col-sm-6 col-md-4">

            <div class="cardItem"><img class="mb-3 icon_images" src="<?php echo base_url();?>image/Artboard 12 copy.png" alt="cardItem"><span class="cardLabel"><strong>Water/Liquid Damages</strong></span>

            <p class="mt-3 text_card">Our repair and replacement guarantee covers water/liquid damages for the specified subject. If your device sustains water/liquid damage during the guarantee period, we will repair or replace it at no additional cost.</p>

            </div> 

            </div>

            <div class="col-sm-6 col-md-4">

            <div class="cardItem"><img class="mb-3 icon_images" src="<?php echo base_url();?>image/Artboard 12 copy 2.png" alt="cardItem"><span class="cardLabel"><strong>Hardware / Software Damages</strong></span>

            <p class="mt-3 text_card">Our guarantee covers hardware and software damages. We offer repair or replacement services for the subject at no additional cost during the guarantee period.</p>

            </div> 

              

            </div>



            <div class="col-sm-6 col-md-4">

            <div class="cardItem"><img class="mb-3 icon_images" src="<?php echo base_url();?>image/Artboard 12 copy 3.png" alt="cardItem"><span class="cardLabel"><strong>Free Pick-up and Drop</strong></span>

            <p class="mt-3 text_card">Our repair and replacement guarantee includes free pick-up and drop-off services for the specified subject, ensuring a convenient and hassle-free experience during the guarantee period.</p>

            </div> 

              

            </div>

            <div class="col-sm-6 col-md-4">

            <div class="cardItem"><img class="mb-3 icon_images" src="<?php echo base_url();?>image/Artboard 12 copy 4.png" alt="cardItem"><span class="cardLabel"><strong>Brand Authorized Repairs</strong></span>

            <p class="mt-3 text_card">Our repair and replacement guarantee ensures that all repairs for the specified subject are conducted by authorized technicians, maintaining the brand's standards and quality during the guarantee period.</p>

            </div> 

            

            </div>

        </div>

    </div>

    <br>







    <div class="container-fluid" id="contain">

        <img src="<?php echo base_url();?>image/limg.png" alt="Snow" style="width:100%;">



        <div class="centered">

            <h1 style="font-size:4vw;">Hassel Free Service – Convenience + Peace of Mind</h1>

        </div>

    </div><br>



    <div class="container">

        <div class="w3-container">

            <div class="w3-panel w3-card">

                <div class="card" style="border: none;">

                    <div class="container">

                        <div class="row" style="color: #FFB600;">

                            <div class="col-6">

                                <h3><b class="Comprehensive_Cover" style="">Comprehensive Cover</b></h3>

                            </div>

                            <div class="col-3">

                                <h3><b class="Comprehensive_Cover" style="">Under Mobi Protect</b></h3>

                            </div>

                            <div class="col-3">

                                <h3><b  class="Comprehensive_Cover" style="">Under Brand</b></h3>

                            </div>

                        </div><br>



                        <div class="row">

                            <div class="col-6" style="color: #707070;">Repair/Replace Broken Screen</div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>



                        <div class="row">

                            <div class="col-6" style="color: #707070;">Repair / Replace Water Damage</div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>



                        <div class="row">

                            <div class="col-6" style="color: #707070;">Repair for Hardware/Software Issues</div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>



                        <div class="row">

                            <div class="col-6" style="color: #707070;">Replace/Recover for Theft </div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>



                        <div class="row">

                            <div class="col-6" style="color: #707070;">Cash Payout option for Self-Repairs</div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>

                        <div class="row">

                            <div class="col-6" style="color: #707070;">Free Doorstep Pick-up and Drop</div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

                        </div><br>

                        <div class="row">

                            <div class="col-6" style="color: #707070;">User Friendly Support </div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid" width="20" height="20"></div>

                            <div class="col-3"><img  src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid" width="20" height="20"></div>

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