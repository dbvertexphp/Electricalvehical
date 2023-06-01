<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul class="navbar-nav sidebar bg-gradient-primary sidebar-dark accordion text-dark" id="accordionSidebar"
        style="background-color: #C7F3FF;">

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
                <span class=""> Dashboard</span></a>
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
                    <a class="collapse-item " href="<?php echo site_url("Welcome/product");?>"> <i
                            class="fa fa-motorcycle  pr-2"></i>TWO WHEELER</a>

                    <a class="collapse-item " href="<?php echo site_url("Welcome/mobile_product");?>"><i
                            class="fa fa-mobile pr-2" aria-hidden="true"></i>MOBILE PROTECTION</a>
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

                    <a class="collapse-item  " href="<?php echo site_url("Welcome/report");?>"><i
                            class="fa fa-motorcycle  pr-1"></i> BIKE REPORT</a>

                    <a class="collapse-item " href="<?php echo site_url("Welcome/mobile_report");?>"><i
                            class="fa fa-mobile pr-2" aria-hidden="true"></i>MOBILE REPORT</a>

                </div>
            </div>
        </li>



        <li class="nav-item">
            <a class="nav-link   collapsed" href="#" data-toggle="collapse" data-target="#user_list"
                aria-expanded="true" aria-controls="user_list">
                <i class="fa fa-user"></i>
                <span>User</span>
            </a>
            <div id="user_list" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white collapse-inner rounded">

                    <a class="collapse-item  " href="<?php echo site_url("Welcome/user_list");?>"><i
                            class="fa fa-user  pr-1"></i>USER</a>

                    <a class="collapse-item " href="<?php echo site_url("Welcome/user_report");?>"><i
                            class="fa fa-mobile pr-2" aria-hidden="true"></i>USER REPORT</a>

                </div>
            </div>
        </li>


        <li class="nav-item">
            <a class="nav-link   collapsed" href="#" data-toggle="collapse" data-target="#agent_list"
                aria-expanded="true" aria-controls="user_list">
                <i class="fa fa-users"></i>
                <span>Agent</span>
            </a>
            <div id="agent_list" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white collapse-inner rounded">

                    <a class="collapse-item  " href="<?php echo site_url("Welcome/add_agent");?>"><i
                            class="fa fa-user  pr-1"></i> ADD AGENT</a>

                    <a class="collapse-item " href="<?php echo site_url("Welcome/agent_list");?>"><i
                            class="fa fa-user pr-2" aria-hidden="true"></i>AGENT LIST</a>


                     <a class="collapse-item " href="<?php echo site_url("Welcome/agent_mobile_report");?>"><i
                            class="fa-sharp fa-solid fa-bookmark pr-2" aria-hidden="true"></i>POLICY REPORT</a>

                </div>
            </div>
        </li>



        <!-- Divider -->
        <hr class="sidebar-divider">


    </ul>
</body>

</html>