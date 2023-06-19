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

    .dropdown_hover {
        color: black;
    }

    a {
        text-decoration: none;
    }

    .my-policy {
        font-family: 'Plus Jakarta Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 27.03px;
        line-height: 34px;
        color: #FFB600;
    }

    .my-policy_div {
        text-align: center;
        text-align: -webkit-center;
    }

    .tablehead {
        width: 100%;
        background: #F8FBFF;
        box-shadow: 0px 0px 12.4835px rgba(0, 0, 0, 0.25);
        border-radius: 7.8022px;
        justify-content: center;
    }

    .tablehead_text {
        text-align: center;
        margin-top: 1rem;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 1vw;
        line-height: 23px;
        display: flex;
        align-items: center;
        color: #000000;
        place-content: center;
    }

    .tablehead_text_content {
        text-align: center;
        margin-top: 10px;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 1vw;
        line-height: 23px;
        display: flex;
        align-items: center;
        place-content: center;
        color: #000000;
    }

    .container_pocliy {
        text-align: -webkit-center;
        margin-top: 2rem;
    }

    .bodyhead {
        width: 100%;
        height: 37.45px;
        margin-top: 1rem;
        margin-bottom: 1rem;
        margin-bottom: 1rem;
        justify-content: center;
        background: #F8FBFF;
        box-shadow: 0px 0px 12.4835px rgba(0, 0, 0, 0.25);
    }

    .no_found {
        display: flex;
        justify-content: center;
    }

    .no_found img {
        max-width: 15%;
        max-height: 15%;
    }

    .Policy {
        color: #FFB600;
        border-bottom: 6px solid #FFB600;
        padding-bottom: 3px;
    }

    html,
    body {
        height: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        overflow-y: scroll;
        box-sizing: border-box;
    }

    .content {
        min-height: 100%;
        /* Adjust this value to match the height of your footer */
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
        margin-left: auto;
        margin-right: auto;
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
    </style>
</head>

<body>
    <?php  if($error=$this->session->flashdata('policy_form')){  ?>
    <div class="row  text-center" style="justify-content: center;">
        <div class="col-lg-6 mt-4">
            <div class="alert alert-success ">
                <?= $error; 
                               unset($_SESSION['policy_form']);
                                 ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                    style="float:right;"></button>
            </div>
        </div>
    </div>
    <?php } ?>
    <br>
    <?php
    $user_id = $this->session->userdata('vehical'); 
    $checked_teg = $this->session->userdata('checked_teg'); 
        $datas = check_policy_data($user_id);?>


    <?php if($datas !== NULL){?>
    <div class="switches-container mb-3">
        <input class="switchPlan" type="radio" id="switchMonthly" name="switchPlan" value="Mobile" />
        <input class="switchPlan" type="radio" id="switchYearly" name="switchPlan" value="Vehicle"  checked="checked" />
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
    <div class="Vehicle_policy_input_hide">
        <div class="container" style="height:700px;">
            <div class="my-policy_div">
                <div class="my-policy">Vehicle Policy</div>
            </div>
            <?php 
            $vehicle_policy =  get_user_vehicle_policy_count(  $user_id);
                if($vehicle_policy !== NULL){?>
            <div class="container container_pocliy">
                <div class="row tablehead">
                    <div class="col-1">
                        <p class="tablehead_text">S. No</p>
                    </div>
                    <div class="col-3">
                        <p class="tablehead_text">Policy No.</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Start Date</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">End Date</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Download Pdf</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Status</p>
                    </div>
                </div>
                <div class="mt-4"></div>
                <?php
              $user_id = $this->session->userdata('vehical'); 
                  $data = get_user_vehicle_policy($user_id); 
              $counter = 1;
              foreach($data as $user){
              ?>
                <div class="row bodyhead">
                    <div class="col-1">
                        <p class="tablehead_text_content"><?php echo $counter ?></p>
                    </div>
                    <div class="col-3">
                        <p class="tablehead_text_content"><?php echo $user->policy_numbers ?></p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text_content"><?php 
                  $start = $user->policy_start;
                  $date=date_create($start);
                  echo date_format($date,"d-m-Y");
                  ?></p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text_content"><?php
                   $exprie = $user->exprie_date;
                   $date=date_create($exprie);
                   echo date_format($date,"d-m-Y");
               ?></p>
                    </div>
                    <div class="col-2">
                        <?php if($user->pay_type == 0){ ?>
                        <p class="mt-2">NAN</p>
                        <?php  }  else {?>
                        <p class="tablehead_text_content" style="place-content: center;">
                            <a href="<?php echo site_url("Fornt/website_vehicle_pdf/".$user->token);?>">
                                <img src="<?php echo base_url();?>/image/download-pdf.png" class="img-fluid" alt=""
                                    width="20" height="20">
                        </p>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-2">
                        <?php if($user->pay_type == 0){ ?>
                        <a href="<?php echo site_url("Fornt/Vehicle_pay/".$user->id) ?>"><button type="button"
                                class="btn btn-danger"
                                style="padding-top: 1px; padding-bottom: 1px; margin-top: 5px">Unpaid</button></a>
                        <?php  }  else {?>
                        <p class="mt-2 text-success font-weight-bold">Paid</p>
                        <?php } ?>
                    </div>
                </div>
                <?php   $counter++; } ?>
            </div>
            <?php }
            else{
                ?>
            <div class="container no_found">
                <img src="<?php echo base_url();?>/image/no-product-found.jpg" class="img-fluid" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
    
    <div class="Mobile_policy_input_hide" >
        <div class="container" style="height:700px;">
            <div class="my-policy_div">
                <div class="my-policy">Mobile Policy</div>
            </div>
            <?php
            $mobile_policy =  get_user_policy_count(  $user_id);
                if($mobile_policy !== NULL){?>
            <div class="container container_pocliy">
                <div class="row tablehead">
                    <div class="col-1">
                        <p class="tablehead_text">S. No</p>
                    </div>
                    <div class="col-3">
                        <p class="tablehead_text">Policy No.</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Start Date</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">End Date</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Download Pdf</p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text">Status</p>
                    </div>
                </div>
                <div class="mt-4"></div>
                <?php
                $user_id = $this->session->userdata('vehical'); 
                    $data = get_user_policy($user_id); 
                $counter = 1;
                foreach($data as $user){
                ?>
                <div class="row bodyhead ">
                    <div class="col-1">
                        <p class="tablehead_text_content"><?php echo $counter ?></p>
                    </div>
                    <div class="col-3">
                        <p class="tablehead_text_content"><?php echo $user->policy_numbers ?></p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text_content"><?php 
                    $start = $user->policy_start;
                    $date=date_create($start);
                    echo date_format($date,"d-m-Y");
                    ?></p>
                    </div>
                    <div class="col-2">
                        <p class="tablehead_text_content"><?php
                     $exprie = $user->exprie_date;
                     $date=date_create($exprie);
                     echo date_format($date,"d-m-Y");
                 ?></p>
                    </div>
                    <div class="col-2">
                        <?php if($user->pay_type == 0){ ?>
                        <p class="mt-2">NAN</p>
                        <?php  }  else {?>
                        <p class="tablehead_text_content" style="place-content: center;">
                            <a href="<?php echo site_url("Fornt/website_mobile_pdf/".$user->token);?>">
                                <img src="<?php echo base_url();?>/image/download-pdf.png" class="img-fluid" alt=""
                                    width="20" height="20">
                        </p>
                        </a>
                        <?php } ?>
                    </div>
                    <div class="col-2">
                        <?php if($user->pay_type == 0){ ?>
                        <a href="<?php echo site_url("Fornt/pay/".$user->id) ?>"><button type="button"
                                class="btn btn-danger"
                                style="padding-top: 1px; padding-bottom: 1px; margin-top: 5px">Unpaid</button></a>
                        <?php  }  else {?>
                        <p class="mt-2 text-success font-weight-bold">Paid</p>
                        <?php } ?>
                    </div>
                </div>
                <?php   $counter++; } ?>
            </div>
            <?php } 
            else { ?>
            <div class="container no_found">
                <img src="<?php echo base_url();?>/image/no-product-found.jpg" class="img-fluid" alt="">
            </div>
            <?php } ?>
        </div>
    </div>
   

    <?php } 
    else { ?>
    <div class="my-policy_div">
        <div class="my-policy">My Policy</div>
    </div>
    <div class="container no_found">
        <img src="<?php echo base_url();?>/image/no-product-found.jpg" class="img-fluid" alt="">
    </div>
    <?php } ?>
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

    <script>
    $(document).ready(function() {
    $('.switchPlan').change(function() {
        var selectedValue = $(this).val();

        if (selectedValue === 'Mobile') {
            $('.Mobile_policy_input_hide').show();
            $('.Vehicle_policy_input_hide').hide();
        } else if (selectedValue === 'Vehicle') {
            $('.Mobile_policy_input_hide').hide();
            $('.Vehicle_policy_input_hide').show();
        }
    });
});
    </script>


</body>


</html>