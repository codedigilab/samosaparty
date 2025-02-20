<!DOCTYPE html>
<html lang="en">

<head>
    <?php

        include 'include/head.php';
        require __DIR__ . '/database/wifipassword.php';
        $users = getUsers();


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
                            <h3 class="page-title">Wifi Password </h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="addwifi.php">Dashboard</a></li>
                                <li class="breadcrumb-item active">Wifi Password</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Page Header -->

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title badge bg-success"><a href="addwifi.php"> Add Password </a></h4>

                            </div>
                            <div class="card-body">

                                <div class="table-responsive">
                                    <table class="table  datanew ">
                                        <thead>
                                            <tr>
                                                
                                                <th>Store Name</th>
                                                <th>Location</th>
                                                <th>Wifi Name</th>
                                                <th>Password</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (is_array($users) || is_object($users)) foreach ($users as $i) : ?>
                                            <tr>
                                                
                                                <td><?php echo $i['outletname'] ?></td>
                                                <td><?php echo $i['location'] ?></td>
                                                <td><?php echo $i['wifiname'] ?></td>
                                                <td><?php echo $i['password'] ?></td>

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