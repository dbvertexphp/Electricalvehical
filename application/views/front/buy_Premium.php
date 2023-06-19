<!doctype html>
<html lang="en" data-bs-theme="auto">
<meta charset="utf-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="<?php echo base_url();?>image/MOBI PROTECT (4).png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>
<link href="<?php echo base_url();?>asstes/homepage/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url();?>asstes/homepage/css/style.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- link for arrow -> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
}
@media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
    }
}
.b-example-divider {
    width: 100%;
    height: 3rem;
    background-color: rgba(0, 0, 0, .1);
    border: solid rgba(0, 0, 0, .15);
    border-width: 1px 0;
    box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}
.b-example-vr {
    flex-shrink: 0;
    width: 1.5rem;
    height: 100vh;
}
.bi {
    vertical-align: -.125em;
    fill: currentColor;
}
.nav-scroller {
    position: relative;
    z-index: 2;
    height: 2.75rem;
    overflow-y: hidden;
}
.nav-scroller .nav {
    display: flex;
    flex-wrap: nowrap;
    padding-bottom: 1rem;
    margin-top: -1px;
    overflow-x: auto;
    text-align: center;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}
.btn-bd-primary {
    --bd-violet-bg: #712cf9;
    --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
    --bs-btn-font-weight: 600;
    --bs-btn-color: var(--bs-white);
    --bs-btn-bg: var(--bd-violet-bg);
    --bs-btn-border-color: var(--bd-violet-bg);
    --bs-btn-hover-color: var(--bs-white);
    --bs-btn-hover-bg: #6528e0;
    --bs-btn-hover-border-color: #6528e0;
    --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
    --bs-btn-active-color: var(--bs-btn-hover-color);
    --bs-btn-active-bg: #5a23c8;
    --bs-btn-active-border-color: #5a23c8;
}
.bd-mode-toggle {
    z-index: 1500;
}
.Policy_Form {
    font-style: normal;
    font-weight: 700;
    font-size: 27.03px;
    line-height: 34px;
    color: #FFB600;
}
legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    border: none;
    width: 100px;
    border-radius: 7px;
    color: white;
}
.borders {
    background-color: #FFB600;
    border-radius: 10px;
    padding-left: 10px;
}
.policy_submit_button{
    background-color: #ffb600;
    color: white;
    font-size: 19px;
    font-weight: bold;
    width: 200px;
    border-radius: 22px;
    border: 2px solid white;
}
.policy_submit_button:hover {
    background-color: #ffb600;
    color: white;
    border-radius: 22px;
    border: 2px solid white;
}
.products {
    color: #FFB600;
    border-bottom: 6px solid #FFB600;
    padding-bottom: 3px;
}
.no-spinners::-webkit-inner-spin-button,
  .no-spinners::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  .no-spinners {
    -moz-appearance: textfield;
  }
  #hidden{
    display: none;
  }
  #hidden_Address{
    display: none;
  }
</style>
<!-- Custom styles for this template -->
<link href="checkout.css" rel="stylesheet">
</head>
<body class="">
    <div class="">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-12 col-lg-12 ">
                    <h4 class="mb-3 text-center Policy_Form mt-3">Mobile Policy Form</h4>
                    <form class="needs-validation" method="post" action="<?php echo base_url();?>Fornt/policy_form"
                        novalidate autocomplete="off">
                        <div class=" g-3">
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Customer Information </legend>
                            <div class="row ">
                                <div class="col-sm-3">
                                    <label for="state" class="form-label">Salutation</label>
                                    <select class="form-select" id="Salutation" name="Salutation" required>
                                        <option value="">Choose...</option>
                                        <option value="MR">MR</option>
                                        <option value="MRS">MRS</option>
                                        <option value="MS">MS</option>
                                        <option value="DR">DR</option>
                                        <option value="MISS">MISS</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid Salutation.
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="lastName" class="form-label">Name OF Policy Holder </label>
                                    <input type="text" class="form-control" value="" id="Policy_Holder"
                                        name="Policy_Holder" placeholder="Name OF Policy Holder " value="" required>
                                    <div class="invalid-feedback">
                                        Valid Policy Holder is required.
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="state" class="form-label">Gender</label>
                                    <select class="form-select" id="Gender" name="Gender" required>
                                        <option value="">Choose...</option>
                                        <option value="MALE">MALE</option>
                                        <option value="FEMALE ">FEMALE </option>
                                        <option value="TRANSGENDER MALE ">TRANSGENDER MALE </option>
                                        <option value="TRANSGENDER FEMALE ">TRANSGENDER FEMALE </option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <label for="lastName" class="form-label">Date OF Birth</label>
                                    <input type="date" class="form-control" id="Date_Birth" name="Date_Birth"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                            <fieldset class="border rounded-3 p-3 mt-2">
                                <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                    General Details</legend>
                                <div class="row ">
                                    <div class="col-sm-4">
                                        <label for="firstName" class="form-label">Shop name</label>
                                        <input type="text" class="form-control" name="bank_name" id="bank"
                                            placeholder="Shop name" value="" required>
                                        <div class="invalid-feedback">
                                            Valid Shop name is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="lastName" class="form-label">Barnch Code</label>
                                        <input type="text" class="form-control" id="lastName" placeholder=""
                                            value="CG10" readonly>
                                        <div class="invalid-feedback">
                                            Valid Barnch Code is required.
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="state" class="form-label">Business Type</label>
                                        <select class="form-select" id="Business_Type" name="Business_Type" required>
                                            <option value="">Choose...</option>
                                            <option value="NEW BUSINESS ">NEW</option>
                                            <option value="RENEWAL">RENEWAL</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please provide a valid Business Type.
                                        </div>
                                    </div>
                                </div>
                        </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Tenure</legend>
                            <div class="row ">
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Policy Start Date</label>
                                    <input type="date" class="form-control" id="Policy_Start" name="date" value="<?php echo date('Y-m-d'); ?>" placeholder=""
                                        value="" required readonly>
                                    <div class="invalid-feedback">
                                        Valid Policy Start Date is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Policy Tenure</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="1"
                                        readonly>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                ALL RISK </legend>
                            <div class="row ">
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Master Policy Number</label>
                                    <input type="text" class="form-control" id="lastName" placeholder=""
                                        value="92029222932000001" readonly>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="state" class="form-label">Mobile Type</label>
                                    <select class="form-select" id="BUSINESS" value="" name="Business" required>
                                        <option value="">Choose...</option>
                                        <option value="New">New</option>
                                        <option value="New + Theft">New + Theft</option>
                                        <option value="Old">Old</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid Mobile Type.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Risk Covered</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="MOBILE"
                                        readonly>
                                    <div class="invalid-feedback">
                                        Valid last name is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Price</label>
                                    <input type="Number" class="form-control no-spinners" value="" id="SumInsured" name="SumInsured"
                                        placeholder="" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Price is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Policy Premium</label>
                                    <input type="Number" class="form-control no-spinners" id="results" name="premium" placeholder=""
                                        readonly>
                                    <div class="invalid-feedback">
                                        Valid Price is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Communication Address </legend>
                            <div class="row ">
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Address Line 1*</label>
                                    <textarea type="text" class="form-control" name="Address_Line_1" id="Address_Line_1"
                                        value="" placeholder="Address" row="10" colume="50" value=""
                                        required></textarea>
                                    <div class="invalid-feedback">
                                        Valid Address is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Address Line 2*</label>
                                    <textarea type="text" class="form-control" name="Address_Line_2" id="Address_Line_2"
                                        value="" placeholder="Address" row="10" colume="50" value=""
                                        required></textarea>
                                    <div class="invalid-feedback">
                                        Valid Address is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" name="Pincode" id="Pincode"
                                        placeholder="Pincode" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Pincode is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="State" name="State" required>
                                        <option value="">Choose...</option>
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
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">City</label>
                                    <input type="text" class="form-control" name="City" id="City" placeholder="City"
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid City is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Mobile Number</label>
                                    <input type="tel" class="form-control" name="Mobile" id="Mobile"
                                        placeholder="Mobile Number" value="" maxlength="10"
                                        oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                        required pattern="[0-9]{10}">
                                    <div class="invalid-feedback">
                                        Valid Mobile Number is required.
                                    </div>
                                    <p id="Mobilelocation" style="color:red"></p>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" type="email"
                                        placeholder="Email" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Email is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Risk Details To Be Mobile Maker And Dealils</legend>
                            <div class="row ">
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Make</label>
                                    <input type="text" class="form-control" name="Make" value="" id="Make"
                                        placeholder="Make" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Make is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Model</label>
                                    <input type="text" class="form-control" name="Model" value="" id="Model"
                                        placeholder="Model " value="" required>
                                    <div class="invalid-feedback">
                                        Valid Model is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Year Of Manufacturing*</label>
                                    <input type="number" class="form-control no-spinners" name="Tear_Manufacturing"
                                        id="Tear_Manufacturing" placeholder="Manufacturing" value="<?php $year = (int)date('Y');
                                        echo  $year; 
                                          ?>"  required readonly>
                                    <div class="invalid-feedback">
                                        Valid Manufacturing is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">IMEI No</label>
                                    <input type="text" class="form-control" name="Battery_No" id="Battery_No" value=""
                                        placeholder="IMEI No" value="" required>
                                    <div class="invalid-feedback">
                                        Valid IMEI No is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Model No</label>
                                    <input type="text" class="form-control" value="" name="Chassis_No" id="Chassis_No"
                                        placeholder="Model No" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Model No is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="Battery_kw" name="Battery_kw"
                                        placeholder="Serial Number" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Serial KW is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Mobile Location Address </legend>
                            <div class="row ">
                                <div class="col-sm-12">
                                    <input type="checkbox" id="same" name="same" onchange="billingFunction()"
                                        style=" width:15px; height:15px;" />
                                    <label for="same" style=" color:black;">Is the communication here the same as the
                                        address?</label>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Address Line 1*</label>
                                    <textarea type="text" class="form-control" name="Addresss_Line_1"
                                        id="Addresss_Line_1" row="10" colume="50" value="" required></textarea>
                                    <div class="invalid-feedback">
                                        Valid Address is required.
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label">Address Line 2*</label>
                                    <textarea type="text" class="form-control" name="Addresss_Line_2"
                                        id="Addresss_Line_2" placeholder="Address" row="10" colume="50" value=""
                                        required></textarea>
                                    <div class="invalid-feedback">
                                        Valid Address is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">Pincode</label>
                                    <input type="text" class="form-control" value="" name="Pincodes" id="Pincodes"
                                        placeholder="Pincode" value="" required>
                                    <div class="invalid-feedback">
                                        Valid Pincode is required.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="state" class="form-label">State</label>
                                    <select class="form-select" id="States" name="States" required>
                                        <option value="">Choose...</option>
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
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="lastName" class="form-label">City</label>
                                    <input type="text" class="form-control" id="Citys" name="Citys" placeholder="City"
                                        value="" required>
                                    <div class="invalid-feedback">
                                        Valid City is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <fieldset class="border rounded-3 p-3 mt-2">
                            <legend class="float-none w-auto px-3 scheduler-border border-2 borders  border ">
                                Financer Details </legend>
                            <div class="row ">
                                <div class="col-sm-6">
                                    <label for="state" class="form-label">Financer Type*</label>
                                    <select class="form-select" id="Financer_Type" name="Financer_Type" required>
                                        <option value="">Choose...</option>
                                        <option value="YES">YES</option>
                                        <option value="NO">NO</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid Financer Type*.
                                    </div>
                                </div>
                                <div class="col-sm-6" id="hidden">
                                    <label for="lastName" class="form-label">Financer Name</label>
                                    <input type="text" class="form-control" id="Financer_Name" name="Financer_Name"
                                        value="" placeholder="Financer Name" value="">
                                    <div class="invalid-feedback">
                                        Valid Financer Name is required.
                                    </div>
                                </div>
                                <div class="col-sm-12" id="hidden_Address">
                                    <label for="lastName" class="form-label">Address</label>
                                    <textarea type="text" class="form-control" id="Address" name="Address"
                                        placeholder="Address" row="10" colume="50" value=""></textarea>
                                    <div class="invalid-feedback">
                                        Valid Address is required.
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                </div>
                <div class="col-sm-12" style="text-align: center;">
                    <button class=" p-2  policy_submit_button  btn-lg" id="submit" type="submit">Submit</button>
                </div>
                </form>
                <div class="mb-2"></div>
            </div>
        </div>
    </div>
    </div>
  <script>
    $('#Financer_Type').on('change', function() {
  if(this.value == "YES"){
    document.getElementById("hidden").style.display = "block";
    document.getElementById("hidden_Address").style.display = "block";
    document.getElementById("Financer_Name").required = true;
    document.getElementById("Address").required = true;
  }
  else{
    document.getElementById("hidden").style.display = "none";
    document.getElementById("hidden_Address").style.display = "none";
    document.getElementById("Financer_Name").required = false;
     document.getElementById("Address").required = false;
  }
});
  </script>  
<script>
    $(function() {
    $( "#Tear_Manufacturing" ).datepicker({dateFormat: 'YY'});
});​
</script>
    <script>
    function billingFunction() {
        if (document.getElementById("same").checked) {
            document.getElementById("Addresss_Line_1").value = document.getElementById("Address_Line_1").value;
            document.getElementById("Addresss_Line_2").value = document.getElementById("Address_Line_2").value;
            document.getElementById("Pincodes").value = document.getElementById("Pincode").value;
            document.getElementById("States").value = document.getElementById("State").value;
            document.getElementById("Citys").value = document.getElementById("City").value;
        } else {
            document.getElementById("Addresss_Line_1").value = "";
            document.getElementById("Addresss_Line_2").value = "";
            document.getElementById("Pincodes").value = "";
            document.getElementById("States").value = "";
            document.getElementById("Citys").value = "";
        }
    }
    </script>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
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
                form.classList.add('was-validated')
            }, false)
        })
    })()
    </script>
    <script>
    $("#SumInsured, #BUSINESS").bind("change keyup", function(e) {
        num1 = document.getElementById("SumInsured").value;
        num2 = document.getElementById("BUSINESS").value;
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
                document.getElementById("results").value = Math.round(num4);
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
                document.getElementById("results").value = Math.round(num4);
            }
        }
    });
    </script>
</body>
</html>