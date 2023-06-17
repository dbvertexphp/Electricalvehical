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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}
.dropdown:hover .dropdown-content {
  display: block;
}
.profile_img{
    border-radius: 50%;
}
.profile_name{
    font-size:18px;
}
.dropdown_hover:hover {
  color: #FFB600;
}
a:hover{
    cursor: pointer;
}
.dropdown_hover_name:hover{
    cursor: pointer;
}
.header_option{
  font-family: 'Plus Jakarta Sans';
        font-style: normal;
        font-weight: bold;
        font-size: 20.515px;
        line-height: 17px;
        color: black;
        flex: none;
        order: 1;
        flex-grow: 0;
        margin-left: 15px;
        text-decoration: none;
}
.header_option:hover{
  color: #FFB600;
}
.logo{
  font-family: 'Plus Jakarta Sans';
font-style: normal;
font-weight: 700;
font-size: 30.03px;
line-height: 34px;
color: #FFB600;
text-decoration: none;
}
.clam_handing_container{
      font-family: Arial, sans-serif;
      line-height: 1.5;
    }
    .clam_handing{
      color: #333;
      font-size: 24px;
      margin-bottom: 10px;
      text-align:center;
      color: #FFB600;
    }
    .clam_handing_text{
      color: #666;
      font-size: 16px;
      margin-bottom: 20px;
    }
    .Clam{
        color:#FFB600;
    border-bottom:6px solid #FFB600;
    padding-bottom:3px;
    }
    html, body {
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
.get_app_toll{
  width: 327.5px;
height: 46.14px;
left: 593.27px;
top: 5293.07px;
background: #FFB600;
border: 2px solid white;
border-radius: 24.7931px;
    }
    .get_app_toll:hover{
      width: 327.5px;
height: 46.14px;
left: 593.27px;
top: 5293.07px;
background: #FFB600;
border-radius: 24.7931px; 
border: 2px solid white;
    }
.get_app_toll_text{
 font-family: 'Plus Jakarta Sans';
font-style: normal;
font-weight: 600;
font-size: 16px;
line-height: 24px;
color: #FFFFFF;
    }
    </style>
</head>
<body>
    <br>
    <div class="container clam_handing_container">
        <div class="row content">
            <div class="col-md-12 mb-1" style="align-self: center;">
            <h2 class="clam_handing">How to Claim?</h2>
            <div class="text-center mt-4">
                <button type="button" class=" get_app_toll"> </span><i
                        class="bi bi-telephone-fill fs-5 text-white"></i><span class="get_app_toll_text ps-2">Toll free Number - 1800-3090-894 </button><br> 
            </div><br>
            <p class="clam_handing_text mt-3"><?php echo "&#8226;" ?> Did your mobile get damaged or stolen? Don't worry; we've got you covered! We have a very convenient process. Here's what you need to do if the situation arises:</p>
            <p class="clam_handing_text"> <?php echo "&#8226;" ?> Please inform us of the incident immediately. To do so, head over to the Claims section on our website. You'll find a toll-free number and email address where you can report the incident and file your claim. We know accidents happen, so we're here to help make the process as hassle-free as possible.</p>
            <p class="clam_handing_text"> <?php echo "&#8226;" ?> We'll swing into action once you've informed us about the incident! Within 24 hours, we'll send someone to pick up your damaged mobile and send it off for repairs. We know how much your mobile means to you, so we'll ensure it's in good hands and gets the TLC needed to get back to tip-top shape.</p>
            <p class="clam_handing_text"><?php echo "&#8226;" ?> As soon as your mobile is repaired and ready to go, we'll give you a heads-up and arrange for it to be delivered back to the same place it was picked up from. We know you're busy, so we'll do our best to make the process as convenient as possible for you.</p>
            <p class="clam_handing_text"><?php echo "&#8226;" ?> And that's it! Just head over to the Claims section on our website, follow these simple steps, and let us take care of the rest.</p>
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