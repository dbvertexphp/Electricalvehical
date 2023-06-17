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
    </style>
</head>
<body>
    <br>
    <div class="container clam_handing_container">
        <div class="row content">
            <div class="col-md-12 mb-1" style="align-self: center;">
            <h2 class="clam_handing">Cancellation And Refund</h2>
        
  <h4>Returns and Cancellations</h4>
  <p>At MOBI PROTECT PVT LTD, we strive to provide the best mobile protection coverage and services to our valued customers. We understand that circumstances may change, and you may have questions about returns and cancellations. However, please note that our policies are designed to ensure the integrity and reliability of our insurance plans, and as such, once a policy is issued, it cannot be cancelled.</p>
  <h4>Policy Issuance</h4>
  <p>Once a policy is issued by MOBI PROTECT PVT LTD, it is considered active and in effect. At this point, the policy cannot be cancelled, and the buyer is responsible for fulfilling the terms and conditions outlined in the policy documentation.</p>
  <h4>Review and Acknowledgment</h4>
  <p>Before purchasing a mobile protection plan from MOBI PROTECT PVT LTD, we encourage all customers to carefully review the terms and conditions of the policy, including coverage details, exclusions, limitations, and any applicable deductibles. By proceeding with the purchase, you acknowledge and accept the terms of the policy.</p>
  <h4>Policy Modifications</h4>
  <p>In certain cases, amendments or modifications to an active policy may be allowed, subject to the discretion of the company. However, such modifications will be evaluated on a case-by-case basis, and additional fees or charges may apply. Please contact our customer service team for further assistance in this regard.</p>
  <h4>Customer Support</h4>
  <p>If you have any questions or concerns regarding your mobile protection plan, our dedicated customer support team is available to assist you. Please reach out to us through our designated channels, and we will do our best to address your queries in a timely manner.</p>
  <h4>Claims Process</h4>
  <p>In the event of a covered loss or damage to your mobile device, we encourage you to file a claim with MOBI PROTECT PVT LTD as soon as possible. Our claims department will guide you through the process and help you with the necessary documentation. Please note that claims will be subject to the terms and conditions outlined in your policy.</p>
  <h4>Policy Expiration and Renewal</h4>
  <p>Mobile protection plans issued by MOBI PROTECT PVT LTD typically have an expiration date. Upon reaching the expiration date, you will have the opportunity to renew your plan for continued coverage. Please ensure you review the renewal terms and conditions provided by our team.</p>
  <p>While we understand that circumstances may change, our commitment is to provide comprehensive and reliable protection plans to our customers. We appreciate your understanding of our policy that once a policy is issued, it cannot be cancelled. If you have any questions or require further clarification, please contact our customer support team, and we will be happy to assist you.</p>    </div>
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