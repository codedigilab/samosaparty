<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'include/head.php';?>
    <?php include 'include/internetdata.php';?>
</head>

<body>
    <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div>
    <!-- Main Wrapper -->

    <div class="main-wrapper">



        <?php include 'include/header.php';?>
        <?php include 'include/sidebar.php';?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- Page Header -->
                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Store Details </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Store Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                                <div class="card-header">
									<h4 class="card-title badge bg-success" ><a href="addstoredetails.php" > Add Store Details </a></h4>
								</div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table  datanew ">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Store Name</th>
                                                <th>Incharge Name</th>
                                                <th>Incharge Number</th>
                                                <th>AM Name</th>
                                                <th>Customer Number</th>
                                                <th>Action</th>
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                            
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Sarita Vihar</td>
                                                <td>6366560276</td>
                                                <td>01117917622_wifi</td>
                                                <td><?php echo "06/$datemonth/2025" ?></td>
                                                <td><?php echo $saritavihar  ?></td>
                                                
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /Main Wrapper -->
    <div class="customizer-links" id="setdata">
        <ul class="sticky-sidebar">
            <li class="sidebar-icons">
                <a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
                    data-bs-original-title="Theme">
                    <i data-feather="settings" class="feather-five"></i>
                </a>
            </li>
        </ul>
    </div>

    <!-- jQuery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- Feather Icon JS -->
    <script src="assets/js/feather.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/js/jquery.slimscroll.min.js"></script>

    <!-- Datatable JS -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap5.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>


</body>

</html>