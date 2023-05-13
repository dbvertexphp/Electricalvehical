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
    .footer_optine {
        text-decoration: none;
    }
    .footer_logo_content{
    font-family: 'Plus Jakarta Sans';
    font-style: normal;
    font-weight: 400;
    font-size: 16px;
    line-height: 24px;
    color: #A5ACBA;
    }
    .get_app{
  width: 216.5px;
height: 46.14px;
left: 593.27px;
top: 5293.07px;
background: #FFB600;
border-radius: 24.7931px;
    }
    .get_app:hover{
 width: 216.5px;
height: 46.14px;
left: 593.27px;
top: 5293.07px;
background: #FFB600;
border-radius: 24.7931px; 
    }
    .get_app_text{
 font-family: 'Plus Jakarta Sans';
font-style: normal;
font-weight: 600;
font-size: 22px;
line-height: 24px;
color: #FFFFFF;
    }
    .footer_email{
 box-sizing: border-box;
flex-direction: row;
align-items: center;
gap: 8px;

height: 46px;
background: #2C3444;
border: 1px solid #2E3545;
border-radius: 6px 0px 0px 6px;
flex: none;
order: 0;
flex-grow: 1;
    }
    .footer_email_button{
display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px 18px;
gap: 6px;
width: 89px;
height: 46px;
background: #FFB600;
border-radius: 0px 6px 6px 0px;
flex: none;
order: 1;
flex-grow: 0;
    }
    .footer_email_button_text{
  font-family: 'Plus Jakarta Sans';
font-style: normal;
font-weight: 600;
font-size: 15px;
line-height: 22px;
color: #FFFFFF;
flex: none;
order: 1;
flex-grow: 0;
    }
.footer_email_button:hover{
    display: flex;
flex-direction: row;
justify-content: center;
align-items: center;
padding: 12px 18px;
gap: 6px;
width: 89px;
height: 46px;
background: #FFB600;
border-radius: 0px 6px 6px 0px;
flex: none;
order: 1;
flex-grow: 0;
    }
    </style>

</head>

<body>
    <div class="container-fluid" style="background-color: black;">
        <div class="container" style="padding: 25px 25px;">
            <div class="row" style="color: white;">
                <div class="col-sm-3">
                    <h3>Mobi Protect Pvt Ltd.</h3>
                    <p class="footer_logo_content">Near old arpa bridge, Pratap chowk  Bilaspur, Chhattisgarh-495001</p>
                </div>
                <div class="col-sm-2">
                    <a class="text-white footer_optine" href="<?php echo base_url();?>Fornt/about_us">
                        <p>About Us</p>
                    </a>
                    <a class="text-white footer_optine " href="<?php echo base_url();?>Fornt/Terms_conditions">
                        <p class="footer_logo_content">Terms &
                            Condition</p>
                    </a>
                </div>
                <div class="col-sm-2">
                    <p>Products</p>
                    <p class="footer_logo_content">Mobile<p>
                       <p class="footer_logo_content"> Low Speed
                        Electric Vehicle
                    </p>
                </div>
                <div class="col-sm-2">
                    <a class="text-white footer_optine" href="<?php echo base_url();?>Fornt/Contact_us">
                        <p> Contact Us</p>
                    </a>
                    <p class="footer_logo_content">Help / Support</p>
                </div>
                <div class="col-sm-3">
                    <p> Get Email Notifications</p>
                    <p class="footer_logo_content">Generate outside the box thinking with
                        the possibility to targtet the low</p>
                    <div class="row ">
                        <div class="col-8 pe-0 ">
                            <input type="email" class="form-control footer_email" value="Enter email...">
                        </div>
                        <div class="col-4 ps-0">
                                <button type="button" class="btn footer_email_button "><span class="footer_email_button_text">Submit</span></button>

                        </div>
                    </div>
                </div> <br>
                <!-- <button style="color: white; background-color: #FFB600; ">Get The app-></button> -->



            </div><br>
            <div class="text-center">
                <button type="button" class="btn get_app"><span class="get_app_text">Get The app </span><i
                        class="bi bi-arrow-right fs-4 text-white"></i></button><br>
            </div><br>
            <p style="color: white; font-size: 13px;"> © 2023 Mobile. All Rights Reserved.</p>
        </div>
    </div>

</body>

</html>