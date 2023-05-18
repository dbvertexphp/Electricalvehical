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
    <style>
    .header_option {
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

    .logo {
        font-family: 'Plus Jakarta Sans';
        font-style: normal;
        font-weight: 700;
        font-size: 30.03px;
        line-height: 34px;
        color: #FFB600;
        text-decoration: none;
    }

    .uplode_img {}

    .view_img {
        border-radius: 50%;
        object-fit: cover;
    }
    </style>

</head>

<body>




    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-1" style="padding-right: 85px;">
                <form class="needs-validation" method="post" action="<?php echo base_url();?>Fornt/editprofile"
                    novalidate>

                    <h5>My Profile</h5>
                    <?php  if($error=$this->session->flashdata('edit_profile')){  ?>
                    <div class="row  text-center" style="justify-content: center;">
                        <div class="col-lg-12">
                            <div class="alert alert-success ">
                                <?= $error; 

                               unset($_SESSION['edit_profile']);
                                 ?>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"
                                    style="float:right;"></button>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <?php
                    $id = $this->session->userdata('vehical'); 
                   $user =   get_user($id); 
                

                   ?>
                    <div class="mb-3 mt-3" style="text-align: center;">
                        <div class="row justify-content-center">

                            <div class="col-2">
                                <img class="view_img"
                                    src="<?php echo base_url();?>uplode/profile/<?php echo $user->profile_images;?>"
                                    alt="Profile Image" alt="Girl in a jacket" width="150" height="150" id="ImgPreview"
                                    src="" class="preview1">
                                <input type="file" class="form-control-file" id="cover_images" name="profile_img[]"
                                    style="visibility:hidden;" accept="image/*" required>
                            </div>
                            <div class="col-2">

                                <p data-toggle="modal" data-target="#exampleModal"> <img class="uplode_img"
                                        src="<?php echo base_url();?>uplode/profile/Group 451.png"
                                        alt="Girl in a jacket" width="40" height="40"></>

                            </div>

                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" placeholder="Type your email address here" class="form-control" id="email"
                            name="email" aria-describedby="emailHelp" value="<?php print_r($user->email);?>" required>
                        <div class="invalid-feedback">
                            Valid Email is required.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Full Name</label>
                        <input type="text" placeholder="Type your full name here" class="form-control" id="username"
                            name="name" aria-describedby="emailHelp" value="<?php print_r($user->name);?>" required>
                        <div class="invalid-feedback">
                            Valid Name is required.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Mobile</label>
                        <input type="tel" placeholder="Type your Mobile Number" class="form-control" id="Mobile"
                            maxlength="10" value="<?php print_r($user->mobile);?>"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            required pattern="[0-9]{10}" name="Mobile" required>
                        <div class="invalid-feedback">
                            Valid Mobile is required.
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col ">
                            <!-- Checkbox -->

                        </div>


                    </div>

                    <div class="d-grid gap-2 col-5 mx-auto">
                        <button class="btn" type="submit" style="background-color: #ffb600;color:white">Submit</button>

                    </div>

                </form><br>
            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url();?>image/regimg.png" class="img-fluid" alt=""
                    style="padding: 35px;background-color: #ffb600;">
            </div>
        </div>
    </div>




           <!-- Modal -->
           <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Profile Picture</h5>
                                  
                                </div>
                                <div class="modal-body">
                                    <form id="cover_img" enctype="multipart/form-data"
                                        action="<?php echo base_url();?>Fornt/uploadprofileimg" method="POST">
                                        <input type="hidden" name="user_id" value="<?php echo $user->id ?>">
                                        <div class="modal-body">
                                            <div class="form-group">

                                                <label>Image </label>
                                                <input type="file" class="form-control" id="cover_image"
                                                    name="profile_img" accept="image/*">
                                                <span id="cover_err" style="color:red;"></span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn-change btn btn-secondary pull-left"
                                                data-dismiss="modal">Cancel</button>
                                            <button type="button" style="background-color:#13C571; color:#fff;
                                                   border-radius:0.20rem;" class="btn-change btn btn-rounded"
                                                onclick="return checkcoverimage();">Upload</button>
                                        </div>
                                    </form>
                                </div>
                             
                            </div>
                        </div>
                    </div>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <script>
        function checkcoverimage(event) {
var image =$('#cover_image').val();
if (image == "" ) {
    $("#cover_err").text("Please upload image");
    event.preventDefault()
    event.stopPropagation()
} else {
    $("#cover_img").submit();
}

}</script>



    <!-- footer -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                var passwordInput = document.getElementById('password');
                var passwordValue = passwordInput.value;
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                if (!/[A-Z]/.test(passwordValue)) {
                    console.log('[A-Z]');
                    passwordInput.setCustomValidity(
                        "Password must contain at least one uppercase letter.");
                    event.preventDefault()
                    event.stopPropagation()
                } else if (!/[a-z]/.test(passwordValue)) {
                    console.log('[a-z]');
                    passwordInput.setCustomValidity(
                        "Password must contain at least one lowercase letter.");
                    event.preventDefault()
                    event.stopPropagation()
                } else if (!/^(?=.*[!@#$%^&*])(?=.*\d{1}).*$/.test(passwordValue)) {
                    console.log('[0-9a-zA-Z]');
                    passwordInput.setCustomValidity(
                        "Password must contain at least one unique number.");
                    event.preventDefault()
                    event.stopPropagation()
                } else {

                    passwordInput.setCustomValidity("");
                }
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>

</body>

</html>