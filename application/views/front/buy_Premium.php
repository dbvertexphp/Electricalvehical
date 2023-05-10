<!doctype html>
<html lang="en" data-bs-theme="auto">
<link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/checkout/">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>
.container {
    max-width: 960px;
}

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
</style>


<!-- Custom styles for this template -->
<link href="checkout.css" rel="stylesheet">
</head>

<body class="">
    <div class="container">
        <main>
            <div class="row g-5">
                <div class="col-md-12 col-lg-12">
                    <h4 class="mb-3">Policy Form</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            <div class="col-sm-4">
                                <label for="firstName" class="form-label">Shop name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid Shop  name is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Barnch Code</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="CG10" disabled>
                                <div class="invalid-feedback">
                                    Valid Barnch Code is required.
                                </div>
                            </div>

                            
                            <div class="col-sm-4">
                                <label for="state" class="form-label">Business Type</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Choose...</option>
                                    <option value="NEW BUSINESS ">NEW</option>
                                    <option value="RENEWAL">RENEWAL</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Business Type.
                                </div>
                            </div>
                            
                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Policy Start Date</label>
                                <input  type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid Policy Start Date is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Policy Tenure</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="1"  disabled>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Master Policy Number</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="92029222932000001" disabled>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <label for="state" class="form-label">Mobile Type</label>
                                <select class="form-select" id="state" required>
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
                                <input type="text" class="form-control" id="lastName" placeholder="" value="MOBILE" disabled>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Price</label>
                                <input type="Number" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid Price is required.
                                </div>
                            </div>
                              <p>Personal information</p>
                            <div class="col-sm-3">
                                <label for="state" class="form-label">Salutation</label>
                                <select class="form-select" id="state" required>
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
                                <input type="text" class="form-control" id="lastName" placeholder="Name OF Policy Holder " value="" required>
                                <div class="invalid-feedback">
                                    Valid Policy Holder is required.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="state" class="form-label">Gender</label>
                                <select class="form-select" id="state" required>
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
                                <input type="date" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Address Line 1*</label>
                                <textarea type="text" class="form-control" id="lastName" placeholder="Address" row="10" colume="50" value="" required></textarea>
                                <div class="invalid-feedback">
                                    Valid  Address is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Address Line 2*</label>
                                <textarea type="text" class="form-control" id="lastName" placeholder="Address" row="10" colume="50" value="" required></textarea>
                                <div class="invalid-feedback">
                                    Valid  Address is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Pincode" value="" required>
                                <div class="invalid-feedback">
                                    Valid Pincode is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" required>
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
                                <input type="text" class="form-control" id="lastName" placeholder="City" value="" required>
                                <div class="invalid-feedback">
                                    Valid City is required.
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="lastName" placeholder="Mobile Number"  value=""  maxlength="10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                <div class="invalid-feedback">
                                    Valid Mobile Number is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Email</label>
                                <input type="email" class="form-control" id="lastName" placeholder="Email"  value="" required>
                                <div class="invalid-feedback">
                                    Valid Email is required.
                                </div>
                            </div>



                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Make</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Make" value="" required>
                                <div class="invalid-feedback">
                                    Valid Make is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Model</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Model " value="" required>
                                <div class="invalid-feedback">
                                    Valid Model is required.
                                </div>
                            </div>

                            

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Year Of Manufacturing*</label>
                                <input type="Number" class="form-control" id="lastName" placeholder="Manufacturing" value="" required>
                                <div class="invalid-feedback">
                                    Valid Manufacturing is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">IMEI No</label>
                                <input type="text" class="form-control" id="lastName" placeholder="IMEI No" value="" required>
                                <div class="invalid-feedback">
                                    Valid IMEI No is required.
                                </div>
                            </div>

                            
                          
                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Model No</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Model No" value="" required>
                                <div class="invalid-feedback">
                                    Valid Model No is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Serial KW</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Serial KW" value="" required>
                                <div class="invalid-feedback">
                                    Valid Serial KW is required.
                                </div>
                            </div>

                            
                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Address Line 1*</label>
                                <textarea type="text" class="form-control" id="lastName" placeholder="Address" row="10" colume="50" value="" required></textarea>
                                <div class="invalid-feedback">
                                    Valid  Address is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Address Line 2*</label>
                                <textarea type="text" class="form-control" id="lastName" placeholder="Address" row="10" colume="50" value="" required></textarea>
                                <div class="invalid-feedback">
                                    Valid  Address is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="lastName" class="form-label">Pincode</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Pincode" value="" required>
                                <div class="invalid-feedback">
                                    Valid Pincode is required.
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" required>
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
                                <input type="text" class="form-control" id="lastName" placeholder="City" value="" required>
                                <div class="invalid-feedback">
                                    Valid City is required.
                                </div>
                            </div>


                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Mobile Number</label>
                                <input type="number" class="form-control" id="lastName" placeholder="Mobile Number"  value=""  maxlength="10"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                                <div class="invalid-feedback">
                                    Valid Mobile Number is required.
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <label for="lastName" class="form-label">Email</label>
                                <input type="email" class="form-control" id="lastName" placeholder="Email"  value="" required>
                                <div class="invalid-feedback">
                                    Valid Email is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="state" class="form-label">Financer Type*</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Choose...</option>
                                    <option value="HYPOTHECATED">HYPOTHECATED</option>
					              	<option value="NOT HYPOTHECATED">NOT HYPOTHECATED </option>			
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid Financer Type*.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Financer Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Financer Name" value="" required>
                                <div class="invalid-feedback">
                                    Valid Financer Name is required.
                                </div>
                            </div>

                            
                            <div class="col-sm-12">
                                <label for="lastName" class="form-label">Address</label>
                                <textarea type="text" class="form-control" id="lastName" placeholder="Address" row="10" colume="50" value="" required></textarea>
                                <div class="invalid-feedback">
                                    Valid  Address is required.
                                </div>
                            </div>





                            

                        
                            
                        </div>

                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Continue to checkout</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-5 pt-5 text-body-secondary text-center text-small">
            <p class="mb-1">&copy; 2017–2023 Company Name</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>

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
</body>

</html>