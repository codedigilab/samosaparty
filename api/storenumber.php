<!DOCTYPE html>
<html lang="en">

<head>
<?php

include 'include/head.php';
require __DIR__ . '/database/storenumber.php';
$users = getUsers();
$i = 0;

?>
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
                                                
                                                <th>Store Name</th>
                                                <th>Incharge Name</th>
                                                <th>Incharge Number</th>
                                                <th>AM Name</th>
                                                <th>AM Number</th>
                                                <th>Traner Adil</th>
                                                <th>IT Khalid</th>
                                                <th>Supply Chain Prabhat</th>
                                                
                                                

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if (is_array($users) || is_object($users)) foreach ($users as $i) : ?>
											<tr>
                                                <td><?php echo $i['storename'] ?></td>
                                                <td><?php echo $i['StoreInchargeName'] ?></td>
                                                <td><?php echo $i['StoreInchargeNumber'] ?></td>
                                                <td><?php echo $i['AMName'] ?></td>
                                                <td><?php echo $i['AMNamenumber'] ?></td>
                                                <td><?php echo $i['Tranernumber'] ?></td>
                                                <td><?php echo $i['ITPersonnumber'] ?></td>
                                                <td><?php echo $i['SupplyChainnumber'] ?></td>
                                                
                                               
                                            </tr>
                                            <?php endforeach ?>

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