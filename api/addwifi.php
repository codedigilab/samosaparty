
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        include 'include/head.php';
        require __DIR__ . '/database/wifipassword.php';

        $user =
    [
        'id' => '',
        'picture' => '',
        'outletname' => '',
        'location' => '',
        'wifiname' => '',
        'password' => '',
    ];



$errors = [
        'outletname' => '',
        'location' => '',
        'wifiname' => '',
        'password' => '',
];

$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);
        uploadImage($_FILES['picture'], $user);
        header("Location: wifipass.php");
    }
}
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
            <div class="content">
                <div class="page-header">
                    <div class="add-item d-flex" style="visibility: hidden;">
                        <div class="page-title">
                            <h4>New Employee</h4>
                            <h6>Create new Employee</h6>
                        </div>
                    </div>
                    <ul class="table-top-head">
                        <li>
                            <div class="page-btn">
                                <a href="wifipass.php" class="btn btn-secondary"><i data-feather="arrow-left"
                                        class="me-2"></i>Back to Password List</a>
                            </div>
                        </li>
                        <li>
                            <a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i
                                    data-feather="chevron-up" class="feather-chevron-up"></i></a>
                        </li>
                    </ul>
                </div>
                <h3>
                    <?php if ($user['id']) : ?>
                    Update User : <b><?php echo $user['outletname'] ?></b>
                    <?php else : ?>
                    Create new user
                    <?php endif ?>
                </h3>
                <!-- /product list -->
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="card">
                        <div class="card-body">
                            <div class="new-employee-field">
                                <div class="card-title-head">
                                    <h6><span><i data-feather="info" class="feather-edit"></i></span>Add Wifi Password
                                    </h6>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Outlet Name</label>
                                            <input name="outletname" value="<?php echo $user['outletname'] ?>"
                                                class="form-control <?php echo $errors['outletname'] ? 'is-invalid' : '' ?>">
                                            <div class="invalid-feedback">
                                                <?php echo  $errors['outletname'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Location</label>
                                            <input name="location" value="<?php echo $user['location'] ?>"
                                                class="form-control <?php echo $errors['location'] ? 'is-invalid' : '' ?>">
                                            <div class="invalid-feedback">
                                                <?php echo  $errors['location'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Wi-Fi  Name </label>
                                            <input name="wifiname" value="<?php echo $user['wifiname'] ?>"
                                                class="form-control  <?php echo $errors['wifiname'] ? 'is-invalid' : '' ?>">
                                            <div class="invalid-feedback">
                                                <?php echo  $errors['wifiname'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input name="password" value="<?php echo $user['password'] ?>"
                                                class="form-control  <?php echo $errors['password'] ? 'is-invalid' : '' ?>">
                                            <div class="invalid-feedback">
                                                <?php echo  $errors['password'] ?>
                                            </div>
                                        </div>
                                    </div>
                                    <input name="picture" type="hidden" class="form-control-file ">
                                </div>
                            </div>
                            <div class="text-end mb-3">
                                <button type="button" class="btn btn-cancel me-2">Cancel</button>
                                <button type="submit" class="btn btn-submit">Save Product</button>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- /product list -->


            </form>
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

    <!-- Datetimepicker JS -->
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>


    <!-- Select2 JS -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <!-- Sweetalert 2 -->
    <script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <!-- Custom JS -->


    <script src="assets/js/theme-script.js"></script>
    <script src="assets/js/script.js"></script>

</body>

</html>