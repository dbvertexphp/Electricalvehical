<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom fonts for this template -->
    <!-- <link href="<?php echo base_url();?>/asstes/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/asstes/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url();?>/asstes/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<style type="text/css">

fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow:  0px 0px 0px 0px #000;
            box-shadow:  0px 0px 0px 0px #000;
            border-radius: 7px;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    border:none;
    width:100px;
    border-radius: 7px;
}
.borders{
   background-color: #C7F3FF;
   border-radius: 10px;
   padding-left:10px;
}
.bank_name{
    width:100%;
    border-radius: 7px;
    border-color:#c5c9c7;
}
.General{
    /* box-shadow: 5px 10px 18px #888888; */
    height:30%;
}
.Calculate{
    border-radius: 35px;
    padding:8px; 
    width:15%; 
    background-color:#0080ff; 
    color:white;
}
leble{
 color:black;
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar bg-gradient-primary sidebar-dark accordion text-dark" id="accordionSidebar" style="background-color: #C7F3FF;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3 ">General insurance</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active ">
            <a class="nav-link" href="<?php echo site_url("Welcome/dashbord");?>">
                    <i class="fas fa-fw fa-tachometer-alt "></i>
                    <span class="">Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
              
            </div>
    <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-brands fa-product-hunt"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                       <a class="collapse-item " href="<?php echo site_url("Welcome/product");?>"> <i class="fa fa-motorcycle  pr-2"></i>TWO WHEELER</a>
                  
                        <a class="collapse-item " href="<?php echo site_url("Welcome/mobile_product");?>"><i class="fa fa-mobile pr-2"  aria-hidden="true" ></i>MOBILE PROTECTION</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link   collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-sharp fa-solid fa-bookmark"></i>
                    <span>Report</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white collapse-inner rounded">
                 
                        <a class="collapse-item  " href="<?php echo site_url("Welcome/report");?>"><i class="fa fa-motorcycle  pr-1"></i> BIKE REPORT</a>
                        
                         <a class="collapse-item " href="<?php echo site_url("Welcome/mobile_report");?>"><i class="fa fa-mobile pr-2"  aria-hidden="true" ></i>MOBILE REPORT</a>
                     
                    </div>
                </div>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider">

         
        </ul>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow text-dark" style="background-color: #C7F3FF;">

        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Topbar Search -->
        

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                    aria-labelledby="searchDropdown">
                    <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
        
            <!-- Nav Item - Messages -->
           
            <div class="topbar-divider   d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline small text-dark">Admin</span>
                    <img class="img-profile rounded-circle"
                        src="<?php echo base_url();?>/asstes/admin/img/undraw_profile.svg">
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                    aria-labelledby="userDropdown">
                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo base_url('/Welcome/logout');?>" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>

        </ul>

    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <div class="container-fluid"  style="font-size: 12px;">
        <div class = "row mt-0 text-dark fw-bolder">
       <h4 style="color:black;">Single Entry Form -All Risk GPA Bundle</h4>
      </div>
     <form  id="createForm" name="f1" onsubmit="multiply()">
      <fieldset class="scheduler-border">
       <legend class="scheduler-border border-2 borders w-25 border ">General Details</Details></legend>
        <div class="control-group General bg-white shadow-sm p-4">
         
            <div class = "row ">
                <div class ="col-2 fs-4">
                    
                    <lebel style="font-size: 15px; color:black;">Shop / Organisation Name </lebel>
                   </div>
                   <div class="col-10">
                   <input class ="bank_name" name="bank_name" id="bank" type="text"  >
                   <p id="banklocation" style="color:red; font-size:13px;"></p>
                </div>
             </div>
             <div class="row mt-3 mb-3">
                <div class ="col-2">
                <lebel style="font-size: 15px; color:black;">Barnch Code</lebel>
                </div>
                 <div class ="col-4">
                 <input class ="bank_name" Value="CG10"  type="text" >
               </div>
               <div class ="col-2">
               <lebel style="font-size: 15px; color:black;">Business Type</lebel>
                </div>
                 <div class ="col-4">
                 <select class ="bank_name h-20"  id="Business_Type" name="Business_Type"  style=" border-opacity: 0.7; height:30px;" >
                 <option value=" ">None </option>
                   <option value="NEW BUSINESS ">NEW</option>
                    <option value="RENEWAL">RENEWAL</option>
                </select>
                <p id="Business_Typelocation" style="color:red; font-size:13px;"></p>
               </div>
             </div>
         
        </div>  
    </fieldset>


<fieldset class="scheduler-border h-50">
     <legend class="scheduler-border borders w-25 border ">Tenure</Details></legend>
    <div class="control-group General bg-white shadow-sm p-4  ">
         
         <div class="row ">
                <div class ="col-2">
                <lebel style="font-size: 15px; color:black;">Policy Start Date</lebel>
                </div>
                 <div class ="col-4">
                 <input class ="bank_name" id="Policy_Start" name="date" type="date" required >
                 <p id="datelocation" style="color:red; font-size:13px;"></p>
                </div>
              
               <div class ="col-2">
               <lebel style="font-size: 15px; color:black;">Policy Tenure</lebel>
                </div>
                 <div class ="col-4">
                 <input class ="bank_name" value="1" type="text" >
               </div>
             </div>
       
        </div>
   
</fieldset>
<fieldset class="scheduler-border">
     <legend class="scheduler-border borders w-25 border ">ALL RISK </Details></legend>
    <div class="control-group General bg-white  shadow-sm p-4  ">
       
         <div class="row ">
                <div class ="col-2">
                <lebel style="font-size: 15px; color:black;">Master Policy Number</lebel> 
                </div>
                 <div class ="col-4">
                 <input class ="bank_name"  value="92029222932000001" type="text" >
                 
               </div>
               <div class ="col-2">
               <lebel style="font-size: 15px; color:black;">Plan Name</lebel>
                </div>
                 <div class ="col-4">
                 <select class ="bank_name h-20"  id="BUSINESS" value="" name="Business"  style=" border-opacity: 0.7; height:30px;" required>
                      <option value="">None</option>
                     <option value="ALLRISK" name="ALLRISK">ALL RISK</option>
                    <option value="BATTERY" name="BATTERY">ALL RISK PLUS THEFT </option>
                </select>
                <p id="Businesslocation" style="color:red; font-size:13px;"></p>
             
               </div>
             </div>
             <div class="row mt-3">
                <div class ="col-2">
                <lebel style="font-size: 15px; color:black;">Risk Covered</lebel> 
                </div>
                 <div class ="col-4">
                 <input class ="bank_name" value="Mobile" type="text" >

               </div>
               <div class ="col-2">
                <lebel style="font-size: 15px; color:black;">Sum Insured ( IDV )</lebel>
                </div>
                 <div class ="col-4">
                 <input class ="bank_name" type="Number" value="" id ="SumInsured" name= "SumInsured" required>
                 <p id="SumInsuredlocation" style="color:red; font-size:13px;"></p>
               </div>
             </div>
             <input class ="bank_name" type="text" value="" id ="results" name= "premium" hidden>
       
        </div>
</fieldset>

    <button class ="Calculate bg-gradient-primary fs-1 rounded-pill submit" onsubmit="multiply()" onClick="multiplyBy()" style="position: absolute; margin-left:300px; font-size:15px" type="submit" id="submit">Calculate Premium</button>      
      </form>
      <center>
      <a  class ="text-white" style= "margin-left:100px; " href="<?php echo site_url("Welcome/mobile_secoundpage");?>"><button  class="bg-gradient-primary Next ml-3 Calculate  rounded-pill" style="width:150px; margin-left:100px;  font-size:15px;"> Next</button></a>
    <p class ="mt-3" style="font-size: 15px; color:black;">Final Premium: - <span id = "result"></span> /- Rs</p>
</center> 



</div>

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2021</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div>
    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
    <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <a class="btn btn-primary" href="<?php echo site_url("Welcome/logout");?>">Logout</a>
    </div>
</div>
</div>
</div>



<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


	

<script type="text/javascript">

    $("#submit").click(function(e) {
                e.preventDefault();
            var SumInsured_id = $("#SumInsured").val();
            var Business_id = $("#BUSINESS").val();
            var bank_id = $("#bank").val();
            var Business_Types = $("#Business_Type").val();
            var Policy_id = $("#Policy_Start").val();
            var premium = $("#results").val();
           
            $.ajax({
            url: "<?php echo site_url('Welcome/mobile_product'); ?>",
                type: 'POST',
                dataType: 'text',
                data: {SumInsured: SumInsured_id, Business: Business_id, bank:bank_id,
                    Business_Type:  Business_Types, Policy_Start: Policy_id, premium:premium,
                },
            success: function(data){
                if (data.code == "200"){
                        alert("Success");
                    } else {
                    
                    }

                }
                });


            });
 </script>

<script>
 function multiplyBy(){   

                num1 = document.getElementById("SumInsured").value;
                num2 = document.getElementById("BUSINESS").value;
                var bank=  document.f1.bank_name.value;  
                var Business_Type= document.f1.Business_Type.value;
                var date=  document.f1.date.value;  
                var Business= document.f1.Business.value;  
                var SumInsured=  document.f1.SumInsured.value;  

                var status=false;  
             if(bank ==""||Business_Type == " "||date == ""||SumInsured == ""||Business == ""){
                if(bank ==""){  
                    document.getElementById("banklocation").innerHTML=  
                    "Please enter your bank name";  
                    status=false;
                }else{  
                document.getElementById("banklocation").innerHTML=" ";  
                status=true;
                }  
                
                if(Business_Type == " "){  
                document.getElementById("Business_Typelocation").innerHTML=  
                "Please select your Business Type";  
                status=false; 
                }else{  
                document.getElementById("Business_Typelocation").innerHTML=" ";  
                status=true;
                }  

                if(date == ""){  
                document.getElementById("datelocation").innerHTML=  
                "Please select policy start date";  
                status=false;
                }else{  
                document.getElementById("datelocation").innerHTML=" ";  
                status=true;
                } 

                if(SumInsured == ""){  
                document.getElementById("SumInsuredlocation").innerHTML=  
                "Please enter amount";  
                status=false;
                }else{  
                document.getElementById("SumInsuredlocation").innerHTML=" ";  
                status=true;
                }  

                if(Business == ""){  
                document.getElementById("Businesslocation").innerHTML=  
                "Please select your plan name";  
                status=false;
                }else{  
                document.getElementById("Businesslocation").innerHTML=" ";  
                status=true;
                }  
             }
        
          else{
            document.getElementById("banklocation").innerHTML=" ";
            document.getElementById("Businesslocation").innerHTML=" "; 
            document.getElementById("datelocation").innerHTML=" ";
            document.getElementById("Business_Typelocation").innerHTML=" ";
            document.getElementById("SumInsuredlocation").innerHTML=" ";  
            
            if(num2  ==  'ALLRISK' ){
                if(num1 <= 10000){
                    num3 = 1000;
                    num4 = 1000;  
                   
                }
                else if(num1 >= 10001 && num1 <= 20000){
                    num3 = 1500;
                    num4 = 1500;  
                    
                }
                else if(num1 >= 20001 && num1 <= 30000){
                    num3 = 2000;
                    num4 = 2000;  
                  
                }
                else if(num1 >= 30001 && num1 <= 50000){
                    num3 = 2500;
                    num4 = 2500;  
                   
                }
                else if(num1 >= 50001 && num1 <= 100000){
                    num3 = 3000;
                    num4 = 3000;  
                  
                }
                else if(num1 >= 100001 && num1 <= 200000){
                    num3 = 5000;  
                    num4 = 5000;  
                }
                document.getElementById("result").innerHTML = Math.round(num3);
               document.getElementById("results").value = Math.round(num4);
             
            }
            else{
                if(num1 <= 10000){
                    num3 = 1000 + 300;
                    num4 = 1000 + 300;
                }
                else if(num1 >= 10001 && num1 <= 20000){
                    num3 = 1500 + 500;
                    num4 =  1500 + 500;
                }
                else if(num1 >= 20001 && num1 <= 30000){
                    num3 = 2000 + 500;
                    num4 = 2000 + 500;
                }
                else if(num1 >= 30001 && num1 <= 50000){
                    num3 = 2500 + 700;
                    num4 = 2500 + 700;
                }
                else if(num1 >= 50001 && num1 <= 100000){
                    num3 = 3000 + 700;
                    num4 =  3000 + 700;
                }
                else if(num1 >= 100001 && num1 <= 200000){
                    num3 = 5000 + 1000;
                    num4 = 5000 + 1000;
                }
                document.getElementById("result").innerHTML = Math.round(num3);
                document.getElementById("results").value = Math.round(num4);
            }

         }
        }

</script>
<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> -->
<!-- Bootstrap core JavaScript-->

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
 <!-- <script>"<?php echo base_url();?>/asstes/admin/vendor/jquery/jquery.min.js"></script> -->
<!-- <script src="<?php echo base_url();?>/asstes/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

<!-- 
<script src="<?php echo base_url();?>/asstes/admin/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>/asstes/admin/js/sb-admin-2.min.js"></script> -->

<!-- Page level plugins -->
<!-- <script src="<?php echo base_url();?>/asstes/admin/vendor/chart.js/Chart.min.js"></script> -->

<!-- Page level custom scripts -->
<!-- <script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-pie-demo.js"></script> -->


</body>
</html>
