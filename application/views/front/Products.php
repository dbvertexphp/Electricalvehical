<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.dropdown_hover{
    color:black;
 
}
a{
  text-decoration: none;  
}
</style>
   
    <title>Login form</title>
  </head>
  <body>
   
       
        
    <br>
   

    
    
    
      <!-- footer -->
      <div class="container-fluid" style="background-color: black;">
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
    
                  <input type="email" name="submit"  value="Enter email...">submit 
            </div>  <br>
            <!-- <button style="color: white; background-color: #FFB600; ">Get The app-></button> -->
           
    
           
        </div><br>
        <div class="text-center">
        <button type="button" class="btn  " style="border-radius: 40px; background-color: #FFB600;color: white;">Get The app  <i class="fa fa-arrow-right"></i></button><br>
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




