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
                            <h3 class="page-title">Internet Data Delhi NCR </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Internet Data Delhi NCR</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table  datanew ">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Store</th>
                                                <th>Contact No.</th>
                                                <th>Account No.</th>
                                                <th>Due Date</th>
                                                <th>Bill Generate</th>
                                                <th>Next Due</th>
                                                <th>Valid</th>
                                                <th>Plan</th>
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Indirapuram</td>
                                                <td>6366560276</td>
                                                <td>012019510263_wifi</td>
                                                <td><?php echo "06/$datemonth/2025" ?></td>
                                                <td><?php echo $indirapuram  ?></td>
                                                <td><?php echo "06/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>

                                            <tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Sushant Lok</td>
                                                <td>6366560276</td>
                                                <td>012419695389_wifi</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $sushantlokbill  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td><?php echo "15/08/2025" ?></td>
                                                <td><?php echo $six ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Sector 141</td>
                                                <td>6366560276</td>
                                                <td>012021372365_wifi</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $sector141  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td><?php echo "13/04/2025" ?></td>
                                                <td><?php echo $four ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Central Kitchen Gurgaon</td>
                                                <td>6366560276</td>
                                                <td>012411733888_dsl</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $centralkitchengurgaon  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Janak Puri</td>
                                                <td>6366560276</td>
                                                <td>01116855233_wifi</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $janakpuri  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Eeast Patel Nagar</td>
                                                <td>6366560276</td>
                                                <td>01117459032_wifi</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $janakpuri  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Defence Colony</td>
                                                <td>6366560276</td>
                                                <td>01117539851_wifi</td>
                                                <td><?php echo "03/$datemonth/2025" ?></td>
                                                <td><?php echo $defencecolony  ?></td>
                                                <td><?php echo "03/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
											<tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Sarita Vihar</td>
                                                <td>6366560276</td>
                                                <td>01117917622_wifi</td>
                                                <td><?php echo "06/$datemonth/2025" ?></td>
                                                <td><?php echo $saritavihar  ?></td>
                                                <td><?php echo "06/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
                                                <td><span class="badge bg-success">Completed</span></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo ++$i;?></td>
                                                <td>Sohna Road</td>
                                                <td>6366560276</td>
                                                <td>012416530146_wifi</td>
                                                <td><?php echo "22/$datemonth/2025" ?></td>
                                                <td><?php echo $janakpuri  ?></td>
                                                <td><?php echo "22/$nextdue/2025" ?></td>
                                                <td></td>
                                                <td><?php echo $month ?></td>
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