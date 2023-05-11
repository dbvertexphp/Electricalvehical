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
        width: 70%;
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
        font-size: 17.1648px;
        line-height: 23px;
        display: flex;
        align-items: center;
        color: #000000;
    }

    .tablehead_text_content {
        text-align: center;
        margin-top: 10px;
        font-family: 'Open Sans';
        font-style: normal;
        font-weight: 400;
        font-size: 17.1648px;
        line-height: 23px;
        display: flex;
        align-items: center;

        color: #000000;
    }

    .container_pocliy {
        text-align: -webkit-center;
        margin-top: 2rem;

    }

    .bodyhead {
        width: 70%;
        height: 37.45px;
        margin-top: 1rem;
        margin-bottom: 1rem;
        margin-bottom: 1rem;
        justify-content: center;
        background: #F8FBFF;
        box-shadow: 0px 0px 12.4835px rgba(0, 0, 0, 0.25);
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: red;
        color: white;
        text-align: center;
    }
    .no_found {
  display: flex;
  justify-content: center;
}

.no_found img {
  max-width: 15%;
  max-height: 15%;
}
.Policy{
    color:#FFB600;
    border-bottom:6px solid #FFB600;
    padding-bottom:3px;
}
    </style>

    <title>Login form</title>
</head>

<body>

    <?php  if($error=$this->session->flashdata('policy_form')){  ?>
    <div class="row  text-center" style="justify-content: center;">
        <div class="col-lg-6">
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
        $datas = get_user_policy_count($user_id); 
      if($datas !== NULL){
    ?>
    <div class="container">
        <div class="my-policy_div">
            <div class="my-policy">My Policy</div>
        </div>

        <div class="container container_pocliy">
            <div class="row tablehead">
                <div class="col-2">
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
            </div>
            <div class="mt-4"></div>
            <?php
                $user_id = $this->session->userdata('vehical'); 
                
                    $data = get_user_policy($user_id); 
            
                $counter = 1;
                foreach($data as $user){
                ?>
            <div class="row bodyhead">
                <div class="col-2">
                    <p class="tablehead_text_content"><?php echo $counter ?></p>
                </div>
                <div class="col-3">
                    <p class="tablehead_text_content"><?php echo $user->customer_id ?></p>
                </div>
                <div class="col-2">
                    <p class="tablehead_text_content"><?php echo $user->policy_start ?></p>
                </div>
                <div class="col-2">
                    <p class="tablehead_text_content"><?php echo $user->exprie_date ?></p>
                </div>
                <div class="col-2">
                    <p class="tablehead_text_content" style="place-content: center;">
                    <a  href="<?php echo site_url("Fornt/website_mobile_pdf/".$user->id);?>">
                     <img src="<?php echo base_url();?>/image/download-pdf.png" class="img-fluid" alt="" width="20"  height="20"></p>
                </a>
                    </div>
            </div>
            <?php   $counter++; } ?>
        </div>
    </div>
  <?php } else { ?> 
    <div class="my-policy_div">
            <div class="my-policy">My Policy</div>
        </div>
        <div class="container no_found">
        <img src="<?php echo base_url();?>/image/no-product-found.jpg" class="img-fluid" alt="" >
        </div>

  <?php } ?>











    <!-- footer -->
    <div class="container-fluid footer" style="background-color: black;">
        <div class="container" style="padding: 25px 25px;">
            <div class="row" style="color: white;">
                <div class="col">
                    <h3>Company</h3>
                    <p style="font-size: 13px;">Mobi Protect Pvt Ltd. <br>
                        Near old arpa bridge, Pratap chowk, <br>
                        Bilaspur, Chhattisgarh-495001 .</p>
                </div>
                <div class="col">
                    <p>About Us</p>
                    <p style="font-size: 13px;">Terms &
                        Condition <br>
                        Media & Low</p>
                </div>
                <div class="col">
                    <p>Products</p>
                    <p style="font-size: 13px;">Mobile Protection<br>
                        Speed
                        Electric Vehicle
                    </p>
                </div>
                <div class="col">
                    <p> Contact Us</p>
                    <p style="font-size: 13px;">Help / Support</p>
                </div>
                <div class="col">
                    <p> Get Email Notifications</p>
                    <p style="font-size: 13px;">Generate outside the box thinking with
                        the possibility to targtet the low</p>

                    <input type="email" name="submit" value="Enter email...">submit
                </div> <br>
                <!-- <button style="color: white; background-color: #FFB600; ">Get The app-></button> -->



            </div><br>
            <div class="text-center">
                <button type="button" class="btn  "
                    style="border-radius: 40px; background-color: #FFB600;color: white;">Get The app <i
                        class="fa fa-arrow-right"></i></button><br>
            </div><br>
            <p style="color: white; font-size: 13px;"> © 2023 Mobile. All Rights Reserved.</p>
        </div>
    </div>
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