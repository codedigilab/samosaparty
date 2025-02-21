<!DOCTYPE html>
<html lang="en">

<head>
    <?php

    include 'include/head.php';
    require __DIR__ . '/database/camera.php';

    $userId = $_POST['id'];
    deleteUser($userId);

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
                            <h4>Camera List</h4>
                            <h6>Manage your Camera</h6>
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
                        <a href="add-camera.php" class="btn btn-added"><i data-feather="plus-circle" class="me-2"></i>Add New Product</a>
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

                                                <th>Outlet Name</th>
                                                <th>Location</th>
                                                <th>Camera</th>
                                                <th>Password</th>
                                                <th>Installation</th>
                                                <th>Camera Type</th>
                                                <th>Installed by</th>
                                                <th>Date</th>
                                                <th>Remart</th>
                                                <th class="no-sort sorting" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 120.188px;">Action</th>



                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php if (is_array($users) || is_object($users)) foreach ($users as $i) : ?>
                                                <tr>
                                                    <td><?php echo $i['OutletName'] ?></td>
                                                    <td><?php echo $i['Location'] ?></td>
                                                    <td><?php echo $i['Camera'] ?></td>
                                                    <td><?php echo $i['Password'] ?></td>
                                                    <td><?php echo $i['Installation'] ?></td>
                                                    <td><?php echo $i['CameraType'] ?></td>
                                                    <td><?php echo $i['Installedby'] ?></td>

                                                    <td><?php echo $i['Date'] ?></td>
                                                    <td><?php echo $i['Remark'] ?></td>
                                                    <td class="action-table-data">
                                                        <div class="edit-delete-action">
                                                            <a class="me-2 p-2" href="edit-camera.php?id=<?php echo $i['id'] ?>">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-edit">
                                                                    <path
                                                                        d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7">
                                                                    </path>
                                                                    <path
                                                                        d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z">
                                                                    </path>
                                                                </svg>
                                                            </a>

                                                            <form class="confirm-text p-2" method="POST" action="camera.php">
                                                                <input type="hidden" name="id" value="<?php echo $i['id'] ?>">
                                                                <button class="btn btn-sm btn-block">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        stroke="currentColor" stroke-width="2"
                                                                        stroke-linecap="round" stroke-linejoin="round"
                                                                        class="feather feather-trash-2">
                                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                                        <path
                                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                        </path>
                                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                    </svg>
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </td>


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