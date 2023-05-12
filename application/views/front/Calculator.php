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
    <link href="<?php echo base_url();?>asstes/homepage/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>asstes/homepage/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- link for arrow -> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .post_input_lable {
        font-weight: bolder;
    }

    #final_amount {
        visibility: hidden;
    }

    .Calculator {
        color: #FFB600;
        border-bottom: 6px solid #FFB600;
        padding-bottom: 3px;
    }

    .culculetter_page {
        align-self: center;
    }
    </style>
</head>

<body>



    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6 culculetter_page">

                <form class="needs-validation" method="post" enctype="multipart/form-data" novalidate>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="Mobile_Type" class="form-label post_input_lable">Mobile Type</label>
                            <select class="form-select post_input_fild" id="mobile_type" name="mobile_type<" required>
                                <option value="">select</option>
                                <option value="New">New</option>
                                <option value="New + Theft">New + Theft</option>
                                <option value="Old">Old</option>
                            </select>
                            <div class="invalid-feedback">
                                Please provide a valid Mobile Type.
                            </div>


                        </div>
                        <div class=" col-md-6">
                            <label for="inputPassword4" class="form-label post_input_lable"><b>Model</b></label>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="Enter Model NO.">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label for="inputEmail4"><b>Make</b></label>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="New">
                        </div>

                        <div class=" col-md-6 mt-0">
                            <label for="Price" class=" post_input_lable"><b>Price</b></label>
                            <input type="text" class="form-control" id="Price" name="Price" placeholder="Enter Price"
                                required>
                            <div class="invalid-feedback">
                                Please Enter Price.
                            </div>
                        </div>
                    </div>


                    <br>

                    <div class="d-grid gap-2 col-4 mx-auto">
                        <button class="btn rounded-5" type="submit" id="submit"
                            style="background-color: #ffb600;color:white">View Price</button>

                    </div>
                </form>
                <div class="d-grid gap-2 col-6 mx-auto" style="justify-items: center; " id="final_amount">
                    <p class="mt-3 post_input_lable" style="font-size: 15px; color:black; text-align-last: center;">
                        Final Premium: - <span id="Final_Premium"></span> /- Rs</p>
                    <a href="<?php echo base_url();?>Fornt/buy_Premium"><button class="btn rounded-5" type="submit"
                            id="submit" style="background-color: #ffb600;color:white">Buy Premium</button></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>image/productimg.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid stats_section_fluid">
        <div class="container">

            <div class="row " style="padding-top:15%; padding-bottom:15%">
                <div class="col-md-6" style="color: white;">
                    <h1><b>Who Are We ?</b></h1><br>
                    <p>Pack your luggage and pick your destination, we will provide you <br>
                        the flight ticket, hotel booking and best guides</p>
                </div>
                <div class="col-md-6 text-center">

                    <div class="embed-responsive embed-responsive-16by8">
                        <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/137857207"
                            title="YouTube video" allowfullscreen></iframe>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <br>

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
                                            src="<?php echo base_url();?>image/phone.png" alt="pahadiuncle_layout">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h1>Why Choose Us ?</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h1>

                                                                Low Pricing</h1>
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
                                                            <h1>Why Choose Us ?</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h1>

                                                                Low Pricing</h1>
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
                                                            <h1>What are you doing</h1>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h1>What are you doing</h1>
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
                <img src="<?php echo base_url();?>image/ph1.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Course Screen Damage</b></h3>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url();?>image/ph2.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Course Liquid Damage</b></h3>
            </div>
        </div>
    </div>
    <br>

    <div class="container text-center ">
        <div class="row justify-content-center">
            <div class="col-sm-5 ">
                <img src="<?php echo base_url();?>image/img3.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Free Pickup & Drop</b></h3>
            </div>
            <div class="col-sm-5">
                <img src="<?php echo base_url();?>image/img4.png" class="img-fluid" alt="" style="width: 80%;">
                <h3 style="color: #707070;"><b>Repairs in Brands Authorized Service Center</b></h3>
            </div>
        </div>
    </div>
    <br>

    <div class="container-fluid" id="contain">
        <img src="<?php echo base_url();?>image/limg.png" alt="Snow" style="width:100%;">

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
    $("#submit").click(function(e) {



        num1 = document.getElementById("Price").value;
        num2 = document.getElementById("mobile_type").value;

        if (num1 !== '' && num2 !== '') {
            if (num2 == 'New' || num2 == 'Old') {
                if (num1 <= 10000) {
                    num3 = 1000;
                    num4 = 1000;

                } else if (num1 >= 10001 && num1 <= 20000) {
                    num3 = 1500;
                    num4 = 1500;

                } else if (num1 >= 20001 && num1 <= 30000) {
                    num3 = 2000;
                    num4 = 2000;

                } else if (num1 >= 30001 && num1 <= 50000) {
                    num3 = 2500;
                    num4 = 2500;

                } else if (num1 >= 50001 && num1 <= 100000) {
                    num3 = 3000;
                    num4 = 3000;

                } else if (num1 >= 100001 && num1 <= 200000) {
                    num3 = 5000;
                    num4 = 5000;
                }
                document.getElementById("Final_Premium").innerHTML = Math.round(num3);

                document.getElementById('final_amount').style.visibility = "visible";
            } else {
                if (num1 <= 10000) {
                    num3 = 1000 + 300;
                    num4 = 1000 + 300;
                } else if (num1 >= 10001 && num1 <= 20000) {
                    num3 = 1500 + 500;
                    num4 = 1500 + 500;
                } else if (num1 >= 20001 && num1 <= 30000) {
                    num3 = 2000 + 500;
                    num4 = 2000 + 500;
                } else if (num1 >= 30001 && num1 <= 50000) {
                    num3 = 2500 + 700;
                    num4 = 2500 + 700;
                } else if (num1 >= 50001 && num1 <= 100000) {
                    num3 = 3000 + 700;
                    num4 = 3000 + 700;
                } else if (num1 >= 100001 && num1 <= 200000) {
                    num3 = 5000 + 1000;
                    num4 = 5000 + 1000;
                }
                document.getElementById("Final_Premium").innerHTML = Math.round(num3);

                document.getElementById('final_amount').style.visibility = "visible";
            }
        }
    });
    </script>



    <script>
    // hello #6528e0 Example starter JavaScript for disabling form submissions if there are invalid fields
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
                event.preventDefault()
                event.stopPropagation()
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>


</body>

</html>