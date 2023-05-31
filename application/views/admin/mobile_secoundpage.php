<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Tables</title>
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

input[type=number] {
  -moz-appearance: textfield;
}

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}
</style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
		<?php include 'sidebar.php'; ?>
        <!-- End of Sidebar -->
        <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Topbar -->
    <nav class="navbar  navbar-expand navbar-light bg-white topbar mb-4 static-top shadow text-dark" style="background-color: #C7F3FF; ">

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
    <div class="container-fluid"style="font-size: 12px;">
        <div class = "row mt-0 text-dark fw-bolder">
       <h5 style="color:green;">You are Submitting information for the premium Amount. <?php echo $sum_insured;?>, policy start date <?php echo $policy_start;?>  </h5>
      </div>
     <form method = "post" name="myform" >
       
   
<fieldset class="scheduler-border">
	<legend class="scheduler-border borders w-25 border ">Customer Information </Details></legend>
	<div class="control-group General bg-white shadow-sm p-4 ">
		
	
		<div class="row ">
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;"  >Salutation <sup class="text-danger ml-1 mt-2">*</sup></lebel>
				</div>
				<div class ="col-4">
				<select class ="bank_name h-20"  id="Salutation" name="Salutation"  style=" border-opacity: 0.7; height:30px;" >
				   <option value="">None</option>
				    <option value="MR">MR</option>
					<option value="MRS">MRS</option>
					<option value="MS">MS</option>
					<option value="DR">DR</option>
					<option value="MISS">MISS</option>
				</select>
				<p id="Salutationlocation" style="color:red"></p>
			</div>
			<div class ="col-2">
			<lebel style="font-size: 15px;  color:black;">Name OF Policy Holder <sup class="text-danger ml-1 mt-2">*</sup></lebel>
				</div>
				<div class ="col-4">
				<input class ="bank_name"   value="" id="Policy_Holder" name="Policy_Holder" type="text" >
				<p id="Policy_Holderlocation" style="color:red"></p>
			</div>
			</div>
			<div class="row mt-3">
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Gender<sup class="text-danger ml-1 mt-2">*</sup></lebel> 
				</div>
				<div class ="col-4">
				<select class ="bank_name h-20"  id="Gender" name="Gender"  style=" border-opacity: 0.7; height:30px;" >
				     <option value="">None</option>
				     <option value="MALE">MALE</option>
					<option value="FEMALE ">FEMALE </option>
					<option value="TRANSGENDER MALE ">TRANSGENDER MALE </option>
					<option value="TRANSGENDER FEMALE ">TRANSGENDER FEMALE </option>
				</select>
				<p id="Genderlocation" style="color:red"></p>
			</div>
			<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Date OF Birth<sup class="text-danger ml-1 mt-2">*</sup></lebel> 
				</div>
				<div class ="col-4">
				<input class ="bank_name" name="Date_Birth" id="Date_Birth" type="date"  >
				<p id="Date_Birthlocation" style="color:red"></p>
			</div>
			</div>
			<!-- <div class="row mt-3">
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Customer ID  <sup class="text-danger ml-1 mt-2">*</sup></lebel>  
				</div>
				<div class ="col-4">
				<input class ="bank_name" value="" name="Customer_iD" type="text" >
			</div>
			</div> -->


		
	
	
		</div>  
	</fieldset>

	 <fieldset class="scheduler-border">
		<legend class="scheduler-border borders w-25 border ">Communication Address </Details></legend> 
		<div class="control-group General bg-white shadow-sm p-4  ">
		   
			<div class="row ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Address Line 1<sup class="text-danger ml-1 mt-2">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Address_Line_1" id="Address_Line_1" value="" type="text"  >
					<p id="Address_Line_1location" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Address Line 2<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Address_Line_2" id="Address_Line_2" value="" type="text" >
					<p id="Address_Line_2location" style="color:red"></p>
				</div>
				</div>
				<div class="row mt-3 ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Pincode<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Pincode" id="Pincode" type="text"  >
					<p id="Pincodelocation" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">State <sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<select class ="bank_name h-20"  id="State" name="State"  style=" border-opacity: 0.7; height:30px;" >
                    <option value="">None</option>
					<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Puducherry">Puducherry</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Odisha">Odisha</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Uttarakhand">Uttarakhand</option>
				<option value="West Bengal">West Bengal</option>
				</select>
				<p id="Statelocation" style="color:red"></p>
				</div>
				</div>
				<div class="row  mt-3 ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">City <sup class="text-danger ml-1 mt-2">*</sup></lebel>

					</div>
					<div class ="col-4">
					<input class ="bank_name" name="City" id="City" type="text"  >
					<p id="Citylocation" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Mobile Number<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Mobile" id="Mobile" maxlength="10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" value="" type="number" >
					<p id="Mobilelocation" style="color:red"></p>
				</div>
				</div>
				<div class="row  mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Email<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Email" type="email" id="email" >
					<p id="Emaillocation" style="color:red"></p>
				</div>
				</div>
		   
			</div>
	
	 </fieldset>

	 <fieldset class="scheduler-border">
		<legend class="scheduler-border borders w-50 border ">Risk Details To Be Mobile Maker And Dealils</Details></Details></legend>
		<div class="control-group General bg-white shadow-sm p-4 ">
		   
			<div class="row ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Make<sup class="text-danger ">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Make"  value="" id="Make" type="text" >
					<p id="Makelocation" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Model <sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Model" value=""  id="Model" type="text"  >
					<p id="Modellocation" style="color:red"></p>
				</div>
				</div>

				<div class="row mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Tear Of Manufacturing<sup class="text-danger">*</sup></lebel> 
					</div> 
					<div class ="col-4">
					<input class ="bank_name" name="Tear_Manufacturing"   id="Tear_Manufacturing" value="" type="text" >
					<p id="Tear_Manufacturinglocation" style="color:red"></p>
				</div>
				
				
					
				<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">IMEI No <sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Battery_No" id="Battery_No" value="" type="text" >
					<p id="Battery_Nolocation" style="color:red"></p>
				</div>
				</div>   
				<div class="row mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Model No<sup class="text-danger">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" value=""  name="Chassis_No" id="Chassis_No" type="text" >
					<p id="Chassis_Nolocation" style="color:red"></p>
				    </div>
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Serial KW<sup class="text-danger">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" value=""   id="Battery_kw" name="Battery_kw" type="text" >
					<p id="Battery_kwlocation" style="color:red"></p>
				    </div>
				</div>
		   
			</div>
	 </fieldset>


	 <fieldset class="scheduler-border">
		<legend class="scheduler-border borders w-25 border ">Mobile Location Address</legend>
		<div class="control-group General bg-white shadow-sm p-4 ">
           <input type="checkbox" id="same" name="same" onchange="billingFunction()" style=" width:15px; height:15px;" />
                    <label for="same" style=" color:black;">Is the communication here the same as the address?</label>
			  <div class="row ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Address Line 1<sup class="text-danger ">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name"  name="Addresss_Line_1" id="Addresss_Line_1" value="" type="text" >
					<p id="Addresss_Line_1location" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Address Line 2<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" name="Addresss_Line_2" id="Addresss_Line_2"  value="" type="text">
					<p id="Addresss_Line_2location" style="color:red"></p>
				</div>
				</div>
				<div class="row mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Pincode <sup class="text-danger">*</sup></lebel> 
					</div> 
					<div class ="col-4">
					<input class ="bank_name" value="" name="Pincodes" id="Pincodes" type="number" >
					<p id="Pincodeslocation" style="color:red"></p>
				</div>
				<div class ="col-2">
					<lebel style="font-size: 14px; color:black;"  for="States">State<sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
            <div class ="col-4">
             <select class ="bank_name h-20"  id="States" name="States"  style=" border-opacity: 0.7; height:30px;" >
			    <option value="">None</option>
				<option value="Andhra Pradesh">Andhra Pradesh</option>
				<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
				<option value="Arunachal Pradesh">Arunachal Pradesh</option>
				<option value="Assam">Assam</option>
				<option value="Bihar">Bihar</option>
				<option value="Chandigarh">Chandigarh</option>
				<option value="Chhattisgarh">Chhattisgarh</option>
				<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
				<option value="Daman and Diu">Daman and Diu</option>
				<option value="Delhi">Delhi</option>
				<option value="Lakshadweep">Lakshadweep</option>
				<option value="Puducherry">Puducherry</option>
				<option value="Goa">Goa</option>
				<option value="Gujarat">Gujarat</option>
				<option value="Haryana">Haryana</option>
				<option value="Himachal Pradesh">Himachal Pradesh</option>
				<option value="Jammu and Kashmir">Jammu and Kashmir</option>
				<option value="Jharkhand">Jharkhand</option>
				<option value="Karnataka">Karnataka</option>
				<option value="Kerala">Kerala</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
				<option value="Maharashtra">Maharashtra</option>
				<option value="Manipur">Manipur</option>
				<option value="Meghalaya">Meghalaya</option>
				<option value="Mizoram">Mizoram</option>
				<option value="Nagaland">Nagaland</option>
				<option value="Odisha">Odisha</option>
				<option value="Punjab">Punjab</option>
				<option value="Rajasthan">Rajasthan</option>
				<option value="Sikkim">Sikkim</option>
				<option value="Tamil Nadu">Tamil Nadu</option>
				<option value="Telangana">Telangana</option>
				<option value="Tripura">Tripura</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Uttarakhand">Uttarakhand</option>
				<option value="West Bengal">West Bengal</option>
				</select>
				<p id="Stateslocation" style="color:red"></p>
				</div>
				</div>
				<div class="row mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">City<sup class="text-danger">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" id="Citys" name="Citys" value="" >
					<p id="Cityslocation" style="color:red"></p>
				</div>
				</div>
			
		   
			</div>
	 </fieldset>

	 
	 
	 <fieldset class="scheduler-border">
		<legend class="scheduler-border borders w-25 border ">Financer Details</legend>
		<div class="control-group General bg-white shadow-sm p-4 ">
		   
			<div class="row ">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Financer Name<sup class="text-danger ">*</sup></lebel> 
					</div>
					<div class ="col-4">
					<input class ="bank_name" id="Financer_Name" name="Financer_Name" value="" type="text" >
					<p id="Financer_Namelocation" style="color:red"></p>
				</div>
				<div class ="col-2">
				<lebel style="font-size: 14px; color:black;">Address <sup class="text-danger ml-1 mt-2">*</sup></lebel>
					</div>
					<div class ="col-4">
					<input class ="bank_name" id="Address" name="Address" value="" type="text" >
					<p id="Addresslocation" style="color:red"></p>
				</div>
				</div>
				<div class="row mt-3">
					<div class ="col-2">
					<lebel style="font-size: 14px; color:black;">Financer Type<sup class="text-danger">*</sup></lebel> 
					</div> 
					<div class ="col-4">
					<select class ="bank_name h-20"  id="Financer_Type" name="Financer_Type"  style=" border-opacity: 0.7; height:30px;" >
					    <option value="">None</option>
					    <option value="HYPOTHECATED">HYPOTHECATED</option>
						<option value="NOT HYPOTHECATED">NOT HYPOTHECATED </option>					  
					</select>
					<p id="Financer_Typelocation" style="color:red"></p>
				</div>
				</div>
			  
		   
			</div>
	  </fieldset>

	 <center>
	 <button  class="bg-gradient-primary Calculate Next mr-3"  style="width:150px; font-size:15px" ><a  class ="text-white" href="<?php echo site_url("Welcome/mobile_product");?>">previous</a></button>
	 <button class ="Calculate bg-gradient-primary" id="submit"  style=" font-size:15px">submit</button>            
	 </center> 
</form>
</div>

        <!-- Content Row -->      
        <!-- Content R-- /.container-fluid -->
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
			var Salutation=  document.myform.Salutation.value;  
var Policy_Holder= document.myform.Policy_Holder.value;
var Gender=  document.myform.Gender.value;  
var Date_Birth= document.myform.Date_Birth.value;  
var Address_Line_1=  document.myform.Address_Line_1.value; 
var Address_Line_2=  document.myform.Address_Line_2.value;
var Pincode=  document.myform.Pincode.value;  
var State= document.myform.State.value;
var City=  document.myform.City.value;  
var Mobile= document.myform.Mobile.value;  
var Email=  document.myform.Email.value; 
var Make=  document.myform.Make.value;
var Model=  document.myform.Model.value;  
var Tear_Manufacturing= document.myform.Tear_Manufacturing.value;

var Battery_No=  document.myform.Battery_No.value; 
var Chassis_No=  document.myform.Chassis_No.value;
var Battery_kw=  document.myform.Battery_kw.value; 
var Addresss_Line_1=  document.myform.Addresss_Line_1.value; 
var Addresss_Line_2=  document.myform.Addresss_Line_2.value;
var Pincodes=  document.myform.Pincodes.value;  
var States= document.myform.States.value;
var Citys=  document.myform.Citys.value; 
var Financer_Name=  document.myform.Financer_Name.value;  
var Address= document.myform.Address.value;
var Financer_Type=  document.myform.Financer_Type.value;   
  
var status=false;  
var mailformat = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

if(Salutation ==""){  
document.getElementById("Salutationlocation").innerHTML=  
"Please select your Salutation";  
status=false;
}else{  
document.getElementById("Salutationlocation").innerHTML=" ";  
status=true;
}  
  
if(Policy_Holder == ""){  
document.getElementById("Policy_Holderlocation").innerHTML=  
"Please enter policy holder";  
status=false; 
}else{  
document.getElementById("Policy_Holderlocation").innerHTML=" ";  
status=true;
}  

if(Gender == ""){  
document.getElementById("Genderlocation").innerHTML=  
"Please select gender";  
status=false;
}else{  
document.getElementById("Genderlocation").innerHTML=" ";  
status=true;
} 

if(Date_Birth == ""){  
document.getElementById("Date_Birthlocation").innerHTML=  
"Please select your Date Birth";  
status=false;
}else{  
document.getElementById("Date_Birthlocation").innerHTML=" ";  
status=true;
}  

if(Address_Line_1 == ""){  
document.getElementById("Address_Line_1location").innerHTML=  
"Please enter your address line 1";  
status=false;
}else{  
document.getElementById("Address_Line_1location").innerHTML=" ";  
status=true;
}  

if(Address_Line_2 == ""){  
document.getElementById("Address_Line_2location").innerHTML=  
"Please enter your address line 2";  
status=false;
}else{  
document.getElementById("Address_Line_2location").innerHTML=" ";  
status=true;
}  
if(Pincode == ""){  
document.getElementById("Pincodelocation").innerHTML=  
"Please enter your pincode";  
status=false;
}else{  
document.getElementById("Pincodelocation").innerHTML=" ";  
status=true;
}  
if(State == ""){  
document.getElementById("Statelocation").innerHTML=  
"Please select your state";  
status=false;
}else{  
document.getElementById("Statelocation").innerHTML=" ";  
status=true;
}  
if(City == ""){  
document.getElementById("Citylocation").innerHTML=  
"Please enter your city";  
status=false;
}else{  
document.getElementById("Citylocation").innerHTML=" ";  
status=true;
}  
if(Mobile == ""){  
document.getElementById("Mobilelocation").innerHTML=  
"Please enter your mobile";  
status=false;
}
else if(Mobile.length != 10){
document.getElementById("Mobilelocation").innerHTML=  
"Please enter valid number";  
status=false	
}
else{  
document.getElementById("Mobilelocation").innerHTML=" ";  
status=true;
}  
if(Email == ""){  
document.getElementById("Emaillocation").innerHTML=  
"Please enter your email";  
status=false;
}
// else if(Email.value.match(mailformat)){  
// document.getElementById("Emaillocation").innerHTML=  
// "Please enter valid email";  
// status=false;
// }
else{  
document.getElementById("Emaillocation").innerHTML=" ";  
status=true;
}  
if(Make ==""){  
document.getElementById("Makelocation").innerHTML=  
"Please enter your make";  
status=false;
}else{  
document.getElementById("Makelocation").innerHTML=" ";  
status=true;
}  
  
if(Model == ""){  
document.getElementById("Modellocation").innerHTML=  
"Please enter your model";  
status=false; 
}else{  
document.getElementById("Modellocation").innerHTML=" ";  
status=true;
}  

if(Tear_Manufacturing == ""){  
document.getElementById("Tear_Manufacturinglocation").innerHTML=  
"Please enter tear manufacturing";  
status=false;
}else{  
document.getElementById("Tear_Manufacturinglocation").innerHTML=" ";  
status=true;
} 




if(Battery_No == ""){  
document.getElementById("Battery_Nolocation").innerHTML=  
"Please enter your battery no";  
status=false;
}else{  
document.getElementById("Battery_Nolocation").innerHTML=" ";       
status=true;
}  
if(Chassis_No == ""){  
document.getElementById("Chassis_Nolocation").innerHTML=  
"Please enter your chassis no";  
status=false;
}else{  
document.getElementById("Chassis_Nolocation").innerHTML=" ";  
status=true;
}  
if(Battery_kw == ""){  
document.getElementById("Battery_kwlocation").innerHTML=  
"Please enter your battery kw";  
status=false;
}else{  
document.getElementById("Battery_kwlocation").innerHTML=" ";  
status=true;
}  

if(Addresss_Line_1 == ""){  
document.getElementById("Addresss_Line_1location").innerHTML=  
"Please enter your address line 1";  
status=false;
}else{  
document.getElementById("Addresss_Line_1location").innerHTML=" ";  
status=true;
}  

if(Addresss_Line_2 == ""){  
document.getElementById("Addresss_Line_2location").innerHTML=  
"Please enter your address line 2";  
status=false;
}else{  
document.getElementById("Addresss_Line_2location").innerHTML=" ";  
status=true;
}  
if(Pincodes == ""){  
document.getElementById("Pincodeslocation").innerHTML=  
"Please enter your pincode";  
status=false;
}else{  
document.getElementById("Pincodeslocation").innerHTML=" ";  
status=true;
}  
if(States== ""){  
document.getElementById("Stateslocation").innerHTML=  
"Please select your state";  
status=false;
}else{  
document.getElementById("Stateslocation").innerHTML=" ";  
status=true;
}  
if(Citys == ""){  
document.getElementById("Cityslocation").innerHTML=  
"Please enter your city";  
status=false;
}else{  
document.getElementById("Cityslocation").innerHTML=" ";  
status=true;
}    

if(Financer_Type == "HYPOTHECATED" ){  
if(Financer_Name == ""){  
document.getElementById("Financer_Namelocation").innerHTML=  
"Please enter your financer Name";  
status=false;
}else{  
document.getElementById("Financer_Namelocation").innerHTML=" ";  
status=true;
}  
}else{  
document.getElementById("Financer_Namelocation").innerHTML=" ";  
status=true;
}  

if(Financer_Type == "HYPOTHECATED" ){  
	if(Address == ""){  
document.getElementById("Addresslocation").innerHTML=  
"Please enter your financer location";  
status=false;
}else{  
document.getElementById("Addresslocation").innerHTML=" ";  
status=true;
}  
}else{  
document.getElementById("Addresslocation").innerHTML=" ";  
status=true;
}  

if(Financer_Type == ""){  
document.getElementById("Financer_Typelocation").innerHTML=  
"Please enter your financer type";  
status=false;
}else{  
document.getElementById("Financer_Typelocation").innerHTML=" ";  
status=true;
}  


          var Salutation_id = $("#Salutation").val();
          var Policy_Holder_id = $("#Policy_Holder").val();
          var Gender_id = $("#Gender").val();
          var Date_Birth_id = $("#Date_Birth").val();
          var Address_Line_1_id = $("#Address_Line_1").val();
		  var Address_Line_2_id = $("#Address_Line_2").val();
          var Pincode_id = $("#Pincode").val();
          var State_id = $("#State").val();
          var City_id = $("#City").val();
          var Mobile_id = $("#Mobile").val();
		  var email_id = $("#email").val();
          var Make_id = $("#Make").val();
          var Model_id = $("#Model").val();
          var Tear_Manufacturing_id = $("#Tear_Manufacturing").val();
          var Battery_No_id = $("#Battery_No").val();
		  
		  var Chassis_No_id = $("#Chassis_No").val();
		  var Battery_kw_id = $("#Battery_kw").val();
          var Addresss_Line_1_id = $("#Addresss_Line_1").val();
          var Addresss_Line_2_id= $("#Addresss_Line_2").val();
          var Pincodes_id = $("#Pincodes").val();
          var States_id = $("#States").val();
		  var Citys_id = $("#Citys").val();
		
          var Financer_Name_id = $("#Financer_Name").val();
		  var Address_id = $("#Address").val();
          var Financer_Type_id = $("#Financer_Type").val();
          

          
          $.ajax({
			  
            url:"<?php echo site_url();?>/Welcome/mobile_user",
            type: 'POST',
            dataType: 'text',
			 
		    data: {Salutation: Salutation_id, Policy_Holder: Policy_Holder_id, Gender:Gender_id,
                Date_Birth:  Date_Birth_id, Address_Line_1: Address_Line_1_id,
				Address_Line_2: Address_Line_2_id, Pincode: Pincode_id, State:State_id,
                City:  City_id, Mobile: Mobile_id,
				email: email_id, Make: Make_id, Model: Model_id,  Tear_Manufacturing: Tear_Manufacturing_id, Battery_No:Battery_No_id,
                Chassis_No:  Chassis_No_id, Battery_kw: Battery_kw_id,
				Addresss_Line_1: Addresss_Line_1_id, Addresss_Line_2: Addresss_Line_2_id, Pincodes:Pincodes_id,
                States:  States_id, Citys: Citys_id,
				 Financer_Name:Financer_Name_id,
                Address: Address_id, Financer_Type: Financer_Type_id,
            },
           success: function(data){
			if(data==""){
			window.location = "<?php echo site_url();?>/Welcome/Mobile_report";
			}
            }
			
            });
            console.log(status);
			return status;
          });

 </script>

<script>
       function billingFunction() {
      if (document.getElementById("same").checked) {
        document.getElementById("Addresss_Line_1").value = document.getElementById("Address_Line_1").value;
        document.getElementById("Addresss_Line_2").value = document.getElementById("Address_Line_2").value;
        document.getElementById("Pincodes").value = document.getElementById("Pincode").value;
        document.getElementById("States").value = document.getElementById("State").value;
        document.getElementById("Citys").value = document.getElementById("City").value;
       }
      
        else {
  document.getElementById("Addresss_Line_1").value = "";
  document.getElementById("Addresss_Line_2").value = "";
  document.getElementById("Pincodes").value = "";
  document.getElementById("States").value = "";
  document.getElementById("Citys").value = "";
 
      }
   }
</script>

</script>  
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<!-- Bootstrap core JavaScript-->

<!-- <script src="<?php echo base_url();?>/asstes/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/asstes/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo base_url();?>/asstes/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<script src="<?php echo base_url();?>/asstes/admin/js/sb-admin-2.min.js"></script>

<script src="<?php echo base_url();?>/asstes/admin/vendor/chart.js/Chart.min.js"></script>


<script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-area-demo.js"></script>
<script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-pie-demo.js"></script> -->


</body>
</html>
