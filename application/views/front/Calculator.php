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
    <title>MOBILE</title>
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

    .appnameh1 {
        font-family: 'Montserrat', sans-serif;
        font-style: normal;
        font-weight: Bold;
        font-size: 40.0801px;
        letter-spacing: 0px;
        color: #313131;
    }

    .why_choose {
        line-height: 23px;
        font-weight: 600;
        letter-spacing: 1px;
        font-size: 20px;
        font-family: 'Montserrat', sans-serif;
    }
    .pulse {
  animation: pulse 2s infinite ease-in-out alternate;
}
@keyframes pulse {
  from { transform: scale(1.0); }
  to { transform: scale(1.1); }
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
    </style>
</head>

<body>



    <div class="container mb-5">
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
                            <input type="number" class="form-control no-spinners" id="Price" name="Price"
                                placeholder="Enter Price" maxlength="6"
                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
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
                <img src="<?php echo base_url();?>image/culculeter.png" class="img-fluid pulse" alt="">
            </div>
        </div>
    </div>

    <br>

    <div class="container-fluid stats_section_fluid">
        <div class="container">

            <div class="row " style="padding-top:10%; padding-bottom:10%">
                <div class="col-md-6" style="color: white;  place-self: center;">
                    <h1><b>Who Are We ?</b></h1><br>
                    <p class="fs-4">We are a team of dedicated professionals who understand the importance of protecting your
                        valuable mobile devices. Our mission is to provide you with the best mobile protection plan
                        coverage possible, giving you peace of mind and protection against any unexpected events like
                        accidental damages, water damaged and theft.</p>
                </div>
                <div class="col-md-6 text-center">

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



                    <div class="our_work_section">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile_project.png" width="260" height="562"
                                            alt="pahadiuncle_layout">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class=" col-10">
                                                            <h2 class="appnameh1" style=" font-weight:900;">Why choose us?</h2>
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



                    <div class="our_work_section">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile project_easy.png"  width="260" height="562"
                                            alt="h1bq_layout.png">
                                    </div>
                                    <div class="appdevcol col-md-6">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <h2 class="appnameh1" style="font-weight:900;">Easy to buy</h2>
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


                    <div class="our_work_section">
                        <div class="container" style="height:100vh">
                            <div class="p fixede">
                                <div class="row finxed_row">
                                    <div class="appdevcol col-md-4">
                                        <img class="img-fluid" style="filter: drop-shadow(7px 0px 10px #ccc);"
                                            src="<?php echo base_url();?>image/mobile project_claim.png" width="260" height="562"
                                            alt="mobile_phototribe">
                                    </div>
                                    <div class="appdevcol col-md-6 applogodivx">
                                        <div class="appdetaildivider">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnaeh1 col-10">
                                                            <h2 class="appnameh1" style="font-weight:900;">Hassle Free claims</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row ">

                                                        <div class="appnameh1 col-10">
                                                            <p class="why_choose "> Claim settlement is just a call away.
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
                } else if (num1 >= 200000) {
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
                } else if (num1 >= 200000) {
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