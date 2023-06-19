<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo base_url();?>image/MOBI PROTECT (4).png">
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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
        font-family: 'Montserrat', sans-serif;
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
    .appnameh1 {
        font-family: 'Roboto', sans-serif;
        font-style: normal;
        font-weight: Bold;
        font-size: 40.0801px;
        letter-spacing: 0px;
        color: #313131;
    }
    .pulse {
        animation: pulse 2s infinite ease-in-out alternate;
    }
    @keyframes pulse {
        from {
            transform: scale(1.0);
        }
        to {
            transform: scale(1.1);
        }
    }
    .Comprehensive_Cover {
        font-size: max(1.5vw, 10px);
    }
    .css-1yzzujv {
        margin-right: 14px;
        margin-bottom: 15px;
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
    .cardItem:hover .icon_images_screen {
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
    .text_card {
        color: var(--p-color);
        font-size: var(--p-font-size);
        font-weight: var(--font-weight-light);
    }
    .cardLabel {
        color: #FFB600;
        margin-top: 20px;
        transition: all 0.5s;
    }
    .icon_images {
        width: 70px;
        height: 70px;
    }
    .icon_images_screen {
        width: 82px;
        height: 82px;
    }
    .Comprehensive_Cover {
        font-size: max(1.5vw, 10px);
    }
    :root {
        --switches-bg-color: goldenrod;
        --switches-label-color: white;
        --switch-bg-color: white;
        --switch-text-color: goldenrod;
    }
    .switches-container {
        width: 16rem;
        position: relative;
        display: flex;
        padding: 0;
        position: relative;
        background: #ffb600;
        line-height: 2.5rem;
        border-radius: 3rem;
    }
    /* input (radio) for toggling. hidden - use labels for clicking on */
    .switches-container input {
        visibility: hidden;
        position: absolute;
        top: 0;
    }
    /* labels for the input (radio) boxes - something to click on */
    .switches-container label {
        width: 50%;
        padding: 0;
        margin: 0;
        text-align: center;
        cursor: pointer;
        color: var(--switches-label-color);
    }
    /* switch highlighters wrapper (sliding left / right) 
    - need wrapper to enable the even margins around the highlight box
*/
    .switch-wrapper {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 50%;
        padding: 0.15rem;
        z-index: 3;
        transition: transform .5s cubic-bezier(.77, 0, .175, 1);
        /* transition: transform 1s; */
    }
    /* switch box highlighter */
    .switch {
        border-radius: 3rem;
        background: var(--switch-bg-color);
        height: 100%;
    }
    /* switch box labels
    - default setup
    - toggle afterwards based on radio:checked status 
*/
    .switch div {
        width: 100%;
        text-align: center;
        opacity: 0;
        display: block;
        color: var(--switch-text-color);
        transition: opacity .2s cubic-bezier(.77, 0, .175, 1) .125s;
        will-change: opacity;
        position: absolute;
        top: 0;
        left: 0;
    }
    /* slide the switch box from right to left */
    .switches-container input:nth-of-type(1):checked~.switch-wrapper {
        transform: translateX(0%);
    }
    /* slide the switch box from left to right */
    .switches-container input:nth-of-type(2):checked~.switch-wrapper {
        transform: translateX(100%);
    }
    /* toggle the switch box labels - first checkbox:checked - show first switch div */
    .switches-container input:nth-of-type(1):checked~.switch-wrapper .switch div:nth-of-type(1) {
        opacity: 1;
    }
    /* toggle the switch box labels - second checkbox:checked - show second switch div */
    .switches-container input:nth-of-type(2):checked~.switch-wrapper .switch div:nth-of-type(2) {
        opacity: 1;
    }
    .home_button {
        background-color: #ffb600;
        color: white;
        font-size: 19px;
        font-weight: bold;
        width: 50%;
        border-radius: 22px;
        border: 2px solid white;
    }
    .home_button:hover {
        background-color: #ffb600;
        color: white;
        border-radius: 22px;
        border: 2px solid white;
    }
    </style>
</head>
<body>
    <br>
    <div class="container my-5">
        <div class="row ">
            <div class="col-lg-6">
                <h2><b>PROTECT THE MOBILE AND LOW SPEED ELECTRIC VEHICLE</b></h2><br>
                <p style="color: #707070;">We're here to help you protect your mobile and keep you connected to what
                    matters most.</p><br>
                <p>
                <div class="switches-container mb-4">
                    <input class="switchPlan" type="radio" id="switchMonthly" name="switchPlan" value="Mobile"
                        checked="checked" />
                    <input class="switchPlan" type="radio" id="switchYearly" name="switchPlan" value="Vehicle" />
                    <label for="switchMonthly"><img class="pe-1"src="<?php echo base_url();?>image/motorcycle _white.png" alt="">Mobile</label>
                    <label for="switchYearly"><img class="pe-1" src="<?php echo base_url();?>image/car_white.png" alt="">Vehicle</label>
                    <div class="switch-wrapper">
                        <div class="switch">
                            <div><img class="pe-1" src="<?php echo base_url();?>image/motorcycle.png" alt="">Mobile
                            </div>
                            <div><img class="pe-1" src="<?php echo base_url();?>image/car.png" alt="">Vehicle</div>
                        </div>
                    </div>
                </div>
                <div class="Mobile_calculetor_input_hide">
                    <form class="needs-validation"  action="<?php echo base_url();?>Fornt/Calculator" novalidate autocomplete="off">
                    <div class="row">
                  
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" value="" id="Make" name="Make"
                                placeholder="Make" value="" required>
                            <div class="invalid-feedback">
                                Make is required.
                            </div>
                        </div>
                        <div class="col-md-4">
                           
                            <input type="text" class="form-control" value="" id="Model" name="Model"
                                placeholder="Model" value="" required>
                            <div class="invalid-feedback">
                                Model is required.
                        </div>
                        </div>
                       
                        <div class="col-md-4" >
                            <button class=" p-1 home_button  btn-lg" id="submit" type="submit">Price</button>
                        </div>
                    </div>
                    </form>
                </div>
                <div class="Vehicle_calculetor_input_hide" style="display:none;">
                      <form class="needs-validation" action="<?php echo base_url();?>Fornt/vehicle_Calculator/2" novalidate autocomplete="off">
                    <div class="row">
                  
                        <div class="col-md-4">
                          
                            <input type="text" class="form-control" value="" id="Vehicle_Make" name="Vehicle_Make"
                                placeholder="Make" value="" required>
                            <div class="invalid-feedback">
                                Make is required.
                            </div>
                        </div>
                        <div class="col-md-4">
                         
                            <input type="text" class="form-control" value="" id="Vehicle_Model" name="Vehicle_Model"
                                placeholder="Model" value="" required>
                            <div class="invalid-feedback">
                                Model is required.
                        </div>
                        </div>
                    
                        <div class="col-md-4" >
                            <button class=" p-1  home_button  btn-lg" id="submit" type="submit">Price</button>
                        </div>
                    </div>
                    </form>
                  </div>
                </div>
            <br>
            <div class="col-lg-6 text-center">
                <img src="<?php echo base_url();?>image/home_hading.png" class="mx-auto d-block pulse" alt="home_hading"
                    id="one">
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid stats_section_fluid">
        <div class="container">
            <div class="row " style="padding-top:10%; padding-bottom:10%">
                <div class="col-lg-6" style="color: #313131;  place-self: center;">
                    <h1 style="color: #313131;"><b>Who Are We ?</b></h1><br>
                    <p class="fs-4 why_choose">We are a team of dedicated professionals who understand the importance of
                        protecting your
                        valuable mobile devices. Our mission is to provide you with the best mobile protection plan
                        coverage possible, giving you peace of mind and protection against any unexpected events like
                        accidental damages, water damaged and theft.</p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="<?php echo base_url();?>image/video.png" alt="video" class="img-fluid pulse">
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid" style="margin-top: -23px;">
        <section id="our_work_section">
            <div class="row out_work_sec_length" style="height: calc(100vh * 3);">
                <div class="col our_work_iframe">
                    <div class="our_work_section" style="background-color: #F0FFF0;">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile_project.png" width="260"
                                            height="562" alt="pahadiuncle_layout">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class=" col-10">
                                                            <h2 class="appnameh1" style=" font-weight:900;">Why choose
                                                                us?</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class="appnameh1 col-10">
                                                            <p class="why_choose"> Buy Mobile protection plan that fits
                                                                your pocket. our plans are affordable and easy to
                                                                understand, so you won't be blindsided by hidden fees.
                                                            </p>
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
                    <div class="our_work_section" style="background-color: #FAF0E6;">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile project_easy.png" width="260"
                                            height="562" alt="h1bq_layout.png">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class="appnameh1 col-10">
                                                            <h2 class="appnameh1" style="font-weight:900;">Easy to buy
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class="appnameh1 col-10">
                                                            <p class="why_choose">Just head on over to the Buy
                                                                Protection Plans section and follow the simple steps to
                                                                get started.</p>
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
                    <div class="our_work_section" style="background-color: #FFE4E1;">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile project_claim.png" width="260"
                                            height="562" alt="mobile_phototribe">
                                    </div>
                                    <div class="appdevcol col-md-6 applogodivx">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class="appnaeh1 col-10">
                                                            <h2 class="appnameh1" style="font-weight:900;">Hassle Free
                                                                claims</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">
                                                        <div class="appnameh1 col-10">
                                                            <p class="why_choose "> Claim settlement is just a call
                                                                away.
                                                                Just call on our toll-free number or drop a mail that’s
                                                                it.</p>
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
    <div class="container text-center my-3">
        <h1 class="" style="font-weight: var(--font-weight-semibold);letter-spacing: -1px; color:#313131"><b>Repair and
                Replacement guarantee for </b></h1>
    </div><br>
    <div class="container text-center ">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-md-4">
                <div class="cardItem"><img class="mb-3 icon_images_screen"
                        src="<?php echo base_url();?>image/Artboard 12.png" alt="cardItem"><span
                        class="cardLabel"><strong>Screen Damages</strong></span>
                    <p class="mt-3 text_card">Our guarantee covers screen damages. We will repair or replace the
                        subject's screen at no additional cost during the guarantee period.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="cardItem"><img class="mb-3 icon_images"
                        src="<?php echo base_url();?>image/Artboard 12 copy.png" alt="cardItem"><span
                        class="cardLabel"><strong>Water/Liquid Damages</strong></span>
                    <p class="mt-3 text_card">Our repair and replacement guarantee covers water/liquid damages for the
                        specified subject. If your device sustains water/liquid damage during the guarantee period, we
                        will repair or replace it at no additional cost.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="cardItem"><img class="mb-3 icon_images"
                        src="<?php echo base_url();?>image/Artboard 12 copy 2.png" alt="cardItem"><span
                        class="cardLabel"><strong>Hardware / Software Damages</strong></span>
                    <p class="mt-3 text_card">Our guarantee covers hardware and software damages. We offer repair or
                        replacement services for the subject at no additional cost during the guarantee period.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="cardItem"><img class="mb-3 icon_images"
                        src="<?php echo base_url();?>image/Artboard 12 copy 3.png" alt="cardItem"><span
                        class="cardLabel"><strong>Free Pick-up and Drop</strong></span>
                    <p class="mt-3 text_card">Our repair and replacement guarantee includes free pick-up and drop-off
                        services for the specified subject, ensuring a convenient and hassle-free experience during the
                        guarantee period.</p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="cardItem"><img class="mb-3 icon_images"
                        src="<?php echo base_url();?>image/Artboard 12 copy 4.png" alt="cardItem"><span
                        class="cardLabel"><strong>Brand Authorized Repairs</strong></span>
                    <p class="mt-3 text_card">Our repair and replacement guarantee ensures that all repairs for the
                        specified subject are conducted by authorized technicians, maintaining the brand's standards and
                        quality during the guarantee period.</p>
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
                                <h3><b class="Comprehensive_Cover" style="">Under Brand</b></h3>
                            </div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Repair/Replace Broken Screen</div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Repair / Replace Water Damage</div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Repair for Hardware/Software Issues</div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Replace/Recover for Theft </div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Cash Payout option for Self-Repairs</div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">Free Doorstep Pick-up and Drop</div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                        <div class="row">
                            <div class="col-6" style="color: #707070;">User Friendly Support </div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (2).png" class="img-fluid"
                                    width="20" height="20"></div>
                            <div class="col-3"><img src="<?php echo base_url();?>image/Vector (3).png" class="img-fluid"
                                    width="20" height="20"></div>
                        </div><br>
                    </div>
                </div>
            </div>
        </div>
    </div> <br><br>
    <script>
    $(document).ready(function() {
        $('.switchPlan').change(function() {
            var selectedValue = $(this).val();
            if (selectedValue === 'Mobile') {
                $('.Mobile_calculetor_input_hide').show();
                $('.Vehicle_calculetor_input_hide').hide();
            } else if (selectedValue === 'Vehicle') {
                $('.Mobile_calculetor_input_hide').hide();
                $('.Vehicle_calculetor_input_hide').show();
            }
        });
    });
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