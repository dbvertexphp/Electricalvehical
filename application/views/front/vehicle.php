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

    .Comprehensive_Cover {
        font-size: max(1.5vw, 10px);
    }

    .cardItem:hover .icon_images_screen {
        width: 60px;
        height: 60px;
    }

    .icon_images_screen {
        width: 82px;
        height: 82px;
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

    .About_Us_Vehicle {
        font-size: 16px;
        font-weight: 500;
    }

    #showMoreBtn {
        cursor: pointer;
    }

    #showMoreBtn_Benefits {
        cursor: pointer;
    }

    .image-container {}

    .image-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(221, 167, 26, 255);
        opacity: 0.7;
        z-index: 1;
    }

    .image-container img {
        display: block;
        width: 100%;
    }

    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 2;
        text-align: center;
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
                    <p class="fs-4">Buy Vehicle protection plan that fits your pocket. our plans are affordable and easy
                        to understand, so you won't be blindsided by hidden fees.</p>
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
                <img src="<?php echo base_url();?>image/vihcle_fornt-removebg-preview.png"
                    class="mx-auto d-block pulse img-fluid" alt="home_hading" style="" id="one">
            </div>
        </div>
    </div>
    <br>

    <div class="container ">
        <div class="row ">
            <div class="col-lg-6 text-center" style="align-self: center;">
                <img src="<?php echo base_url();?>image/1 (1).png" class="mx-auto d-block pulse img-fluid" alt="home_hading"
                    id="one">
            </div><br>
            <div class="col-lg-6" style="align-self: center;">
                <div class="row">
                    <div class="text-center">
                        <h2><b>About Us Vehicle</b></h2>
                    </div>
                    <p class="About_Us_Vehicle mt-3">At MOBI PROTECT PVT LTD, we understand the needs of electric
                        two-wheeler
                        owners who are seeking comprehensive protection for their valuable vehicles. We are a dedicated
                        team of experts committed to providing hassle-free and reliable protection plan solutions
                        exclusively tailored for low-speed electric two-wheelers.</p>
                    <p>Our company was founded with the mission to address the unique requirements of electric vehicle
                        owners, particularly the lack of suitable protection coverage options. We recognized that
                        traditional insurance plans often failed to account for the specific concerns and risks
                        associated with electric two-wheelers, such as battery damage, theft of expensive components, or
                        even cyber threats. To bridge this gap, we have developed an innovative protection plan that
                        caters specifically to the needs of no registration electric two-wheeler owners.</p>
                    <p>One of the key features that sets us apart is our no registration requirement. We understand that
                        the registration process for electric two-wheelers can be complex and time-consuming, and many
                        owners may face difficulties in obtaining the necessary documentation. Therefore, we have
                        designed our protection plan to offer coverage without the need for vehicle registration. This
                        means that regardless of whether your electric two-wheeler is registered or not, you can still
                        benefit from our comprehensive protection.
                        <Span id="showMoreBtn" class="fs-5" style="color:#FFB600;" onclick="showMore()">Show
                            More...</Span>
                    </p>

                    <div id="hiddenContent" style="display: none;">
                        <p>Our protection plan covers a wide range of risks, including accidents, theft, natural
                            disasters,
                            and even damage to the battery or other crucial components. Our plans also come with
                            additional
                            benefits such as roadside assistance, towing services, and support for emergency repairs.
                        </p>
                        <p>At Mobi Protect Pvt Ltd, we prioritize customer satisfaction above all else. We strive to
                            make
                            the protection plan process as simple and convenient as possible. Our user-friendly online
                            platform allows customers to easily select and customize their protection plans, making it
                            effortless to secure coverage for their electric two-wheelers. We also provide prompt and
                            reliable customer support to address any queries or concerns that may arise.</p>
                        <p>At No Registration Electric Two Wheeler Protection Plan Company, we are proud to be at the
                            forefront of providing comprehensive and convenient insurance solutions for electric
                            two-wheelers. We are committed to ensuring the peace of mind of our customers by
                            safeguarding
                            their valuable assets and enabling them to fully enjoy the benefits of owning an electric
                            two-wheeler.</p>

                        <p>Choose us as your trusted partner in protecting your electric two-wheeler, and experience our
                            reliable and tailored insurance solutions today.</p>
                    </div>

                    <!-- "Show More" button HTML code -->



                </div>
            </div>
        </div>
    </div>
    <br>

    <div class="container ">
        <div class="row ">
            <div class="col-lg-6" style="align-self: center;">
                <div class="row">
                    <div class="text-center">
                        <h2><b>Benefits Vehicle</b></h2>
                    </div>
                    <p class="About_Us_Vehicle mt-3">
                    <h3><b>What is No-Registration Electric Vehicle Protection Plan?</b></h3>
                    <p>
                        E-bikes are becoming a trend in Indian societies as people have started accepting them and also
                        helping nature by purchasing these vehicles. Electric bikes are pollution-free bikes as they run
                        on a battery that is charged using electricity and similarly the way this electric bike saves
                        the environment, an electric bike saves it from unforeseen expenses coming after road accidents
                        that led to the loss and damage to the bike as well as the passengers.
                    </p>

                    <h3><b>Benefit of Purchasing a Vehicle Protection Plan</b></h3>
                    <p>
                        By purchasing an e-bike you are already doing your bit in saving the environment but by securing
                        it with no-registration electric vehicle protection plan you would be doing your bit in securing
                        society as well. Here are some other benefits of purchasing a vehicle protection plan.
                        <Span id="showMoreBtn_Benefits" class="fs-5" style="color:#FFB600;"
                            onclick="showMore_Benefits()">Show
                            More...</Span>
                    </p>

                    <div id="hiddenContent_Benefits" style="display: none;">
                        <ul>
                            <li>
                                <strong>Financial Security:</strong> Securing your e-bike with a no-registration
                                electric
                                vehicle protection plan can keep you financially secure. If your e-bike meets an
                                accident
                                then this protection plan will cover your repairing or replacement expenditure of that
                                part
                                of the bike.
                            </li>
                            <li>
                                <strong>Coverage Enhanced:</strong> Once you purchase a protection plan for your e-bike,
                                there is always scope of enhancing it with an add-on as you can avail it even after
                                purchasing the plan.
                            </li>
                            <li>
                                <strong>Quick Damage Recovery:</strong> There are times when you cannot afford to repair
                                or
                                replace the damaged part of the bike and keep on riding it in damaged condition. Since
                                the
                                body parts of an e-bike are costly and if you do not want to pay for the loss or damage
                                caused to the bike out of pocket, a protection plan can help you repair or replace the
                                damaged part faster and provide financial cover to the bike.
                            </li>
                            <li>
                                <strong>Mind In Peace:</strong> Purchasing a protection plan not only provides you
                                financial
                                coverage but also keeps your mind in peace as you do not have to worry about the
                                expenses
                                that might have to face after an unfortunate accident.
                            </li>
                        </ul>
                    </div>

                    <p>
                        <em><span>*</span> It is not mandatory to purchase insurance for no registration electric
                            vehicle. So, here we
                            are to provide you with Electric Vehicle Protection Plan.</em>
                    </p>
                    </p>

                </div>
            </div><br>
            <div class="col-lg-6 text-center" style="align-self: center;">
                <img src="<?php echo base_url();?>image/two-wheeler-insurance-landing-img.png" class="mx-auto d-block pulse" alt="home_hading"
                    id="one">
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="text-center">
        <a href="<?php echo base_url();?>Fornt/Terms_conditions_vehicle">
            <button type="button" class="btn get_app" style="width: max-content;"><span class="get_app_text">Terms &
                    Condition</span><i class="bi bi-arrow-right fs-4 text-white"></i></button>
        </a><br>
    </div><br>


    <div class="container-fluid" id="contain">
        <div class="image-container">
            <img src="<?php echo base_url();?>image/vehicle_img.jpeg" alt="Snow">
        </div>
        <div class="centered">
            <h1 style="font-size: 4vw;">Hassle Free Service – Convenience + Peace of Mind</h1>
        </div>
    </div>
    <br>

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
    function showMore() {
        var hiddenContent = document.getElementById("hiddenContent");
        hiddenContent.style.display = "block";
        var showMoreBtn = document.getElementById("showMoreBtn");
        showMoreBtn.style.display = "none";
    }

    function showMore_Benefits() {
        var hiddenContent = document.getElementById("hiddenContent_Benefits");
        hiddenContent.style.display = "block";
        var showMoreBtn = document.getElementById("showMoreBtn_Benefits");
        showMoreBtn.style.display = "none";
    }
    </script>
</body>

</html>