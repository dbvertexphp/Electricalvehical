<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/brands.min.css"
        integrity="sha512-+oRH6u1nDGSm3hH8poU85YFIVTdSnS2f+texdPGrURaJh8hzmhMiZrQth6l56P4ZQmxeZzd2DqVEMqQoJ8J89A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>/asstes/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/asstes/admin/css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="<?php echo base_url();?>/asstes/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<style type="text/css">
fieldset.scheduler-border {
    border: 1px groove #ddd !important;
    padding: 0 1.4em 1.4em 1.4em !important;
    margin: 0 0 1.5em 0 !important;
    -webkit-box-shadow: 0px 0px 0px 0px #000;
    box-shadow: 0px 0px 0px 0px #000;
    border-radius: 7px;
}

legend.scheduler-border {
    font-size: 1.2em !important;
    font-weight: bold !important;
    text-align: left !important;
    border: none;
    width: 100px;
    border-radius: 7px;
}

.borders {
    background-color: #C7F3FF;
    border-radius: 10px;
    padding-left: 10px;
}

.bank_name {
    width: 100%;
    border-radius: 7px;
}

.General {
    /* box-shadow: 5px 10px 18px #888888; */
    height: 30%;
}

.Calculate {
    border-radius: 35px;
    padding: 8px;
    width: 15%;
    background-color: #0080ff;
    color: white;
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
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow text-dark"
                    style="background-color: #C7F3FF;">

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
                                <a class="dropdown-item" href="<?php echo base_url('/Welcome/logout');?>"
                                    data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Agent List</h1>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>S no</th>
                                            <th>Agent Code</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>cerated</th>
                                            <th>Shop</th>
                                            <th>Shop View</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $i=0;  foreach ($report as $row) 
                                                   {  $i++;?>
                                        <tr>
                                            <td><?php echo  $i;?></td>
                                            <td><?php echo $row->agent_code;?></td>
                                            <td><?php echo $row->name;?></td>
                                            <td><?php echo $row->email;?></td>
                                            <td><?php echo $row->mobile;?></td>
                                            <td><?php echo $row->created_at;?></td>
                                            <td>
                                                <a class="" href="<?php echo site_url("Welcome/add_shop/").$row->id;?>">
                                                    <button type="button" class="btn btn-primary">Add</button>
                                                    </a>
                                            </td>
                                            <td>
                                                <a class="" href="<?php echo site_url("Welcome/shop_list/").$row->id;?>">
                                                   View
                                                    </a>
                                            </td>
                                          
                                            <td>
                                                <a href="javascript:void(0)" id="b" class="delete_product btn"
                                                    data-pid="<?php echo $row->id; ?>"><span style="color:#4e73df"> <i
                                                            class="fa fa-trash" aria-hidden="true"></i></span></a>
                                                <a class=""
                                                    href="<?php echo site_url("Welcome/edit_agent/").$row->id;?>">
                                                    <i class="fa fa-pencil ml-3" aria-hidden="true"></i></a>
                                            </td>


                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
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


    <script>
    function myFunction() {
        var input, filter, tbody, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("td");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("td")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    </script>
    <script>
    "use strict"; /* Start of use strict */
    (function() {
        function14();
    })();

    function function14() {
        $('.delete_product').on("click", function() {
            var pid = $(this).data("pid");

            swal({
                    title: " DELETE!",
                    text: "Are you sure you want to ?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",
                    closeOnConfirm: false,
                    closeOnCancel: true
                },
                function(isConfirm) {
                    if (isConfirm) {
                        $.ajax({
                            type: 'POST',
                            url: "<?php echo base_url();?>welcome/delete_agent",
                            data: {
                                pid: pid
                            },
                            success: function() {
                                location.reload();
                            },
                        });
                    } else {}
                });
        });
    }
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url();?>/asstes/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/asstes/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url();?>/asstes/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url();?>/asstes/admin/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>/asstes/admin/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-area-demo.js"></script>
    <script src="<?php echo base_url();?>/asstes/admin/js/demo/chart-pie-demo.js"></script>


    <!-- Page level plugins -->
    <script src="<?php echo base_url();?>/asstes/admin/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>/asstes/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url();?>/asstes/admin/js/demo/datatables-demo.js"></script>



</body>

</html>