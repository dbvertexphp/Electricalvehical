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
.footer {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 250px; /* Adjust this value to match the height of your footer */
  background-color: #f5f5f5;
  text-align: center;
}

body {
  overflow-y: scroll;
  box-sizing: border-box;
}
.content {
  min-height: 100%;
  padding-bottom: 300px; /* Adjust this value to match the height of your footer */
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
   .cooming_soon{
    min-width: 400px;
    min-height: 400px;
   }
 

    </style>
</head>

<body>




    <br>
    <div class="container clam_handing_container">
        <div class="row">
           
         <img src="<?php echo base_url();?>image/cooming_soon.jpg" alt="" class="img-fluid cooming_soon">
        
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