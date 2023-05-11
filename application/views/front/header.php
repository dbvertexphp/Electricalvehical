<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<!-- link for card -->
<link href="<?php echo base_url();?>asstes/homepage/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
    html,body
    {
      max-width: 100%;
      overflow-x: hidden;
    }
.col-3{
    text-align: center;
}
         #one{
  max-width: 80%;
  height: auto;
} 
a:hover {
  color: #ffb600;
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
font-weight: 400;
font-size: 18.515px;
line-height: 17px;
color: #313131;
flex: none;
order: 1;
flex-grow: 0;
margin-left:15px
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
}
 </style>

  </head>
  <body>
      
     
    <div class="container">
      <nav class="navbar navbar-expand-lg ">
          
            <a class=" logo" style="color: #FFB600;" href="<?php echo base_url();?>">Mobile</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav m-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class=" header_option Policy active" aria-current="page" href="<?php echo base_url();?>Fornt/products">Policy</a>
                </li>
                <li class="nav-item">
                  <a class=" header_option Calculator active" aria-current="page" href="<?php echo base_url();?>Fornt/Calculator">Calculator</a>
                </li>
                <li class="nav-item">
                  <a class=" header_option  Clam active" aria-current="page" href="#">Clam</a>
                </li>
                
               </ul>
             
               <?php $id =  $this->session->userdata('vehical');
                if (isset($id)) {
                   $objectName = $id;
                  $user =  get_user($objectName); 
               
                  ?>
                <div class="dropdown">
                    <?php if($user->profile_images !== 'images (2).png'){ ?>
                    <img class= "img-fluid profile_img" src="<?php echo base_url();?>uplode/profile/<?php echo $user->profile_images ?>" alt="Girl in a jacket" width="40" height="40">
                    <?php } else{ ?>
                     <img src="<?php echo base_url();?>uplode/profile/images (2).png" alt="Girl in a jacket" width="50" height="50">
                    <?php } ?>
                  <span class="profile_name dropdown_hover_name"><?php  echo ucfirst($user->name);?>
                  <i class="bi bi-chevron-down"></i>
                  </span>
                  <div class="dropdown-content">
                  <a href="#"><p class="dropdown_hover">My Profile</p></a>
                   <a href="<?php echo base_url();?>Fornt/change_password"><p class="dropdown_hover">Change Password</p></a>
                   <a href="<?php echo base_url();?>Fornt/logout" class="logout dropdown_hover"><p>Logout</p></a>
                </div>
                 
              <?php   } 
                if($id == ''){
               ?>
              
              <a href="<?php echo base_url();?>Fornt/singup" class="btn" role="button" aria-disabled="true" style="margin-right: 10px;background-color: #FFB600; color: white;border-radius: 50px;">Sign Up</a>
            <a href="<?php echo base_url();?>Fornt/login" style="color: #FFB600;">login</a>
            
            <?php } ?>
            </div>
          </nav>
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