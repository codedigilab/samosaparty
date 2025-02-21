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



        <?php include 'include/header.php'; ?>
        <?php include 'include/sidebar.php'; ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="add-item d-flex">
                        <div class="page-title">
                            <h4>Store List</h4>
                            <h6>Manage your Store</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Pdf"><img src="assets/img/icons/pdf.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Excel"><img src="assets/img/icons/excel.svg" alt="img"></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Print"><i data-feather="printer" class="feather-rotate-ccw"></i></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Refresh"><i data-feather="rotate-ccw" class="feather-rotate-ccw"></i></a>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>
                    <div class="page-btn">
                        <a href="add-store.php" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add New Product</a>
                    </div>

                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">

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