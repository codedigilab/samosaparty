<!DOCTYPE html>
<html lang="en">

<head>
	
<?php  
include 'include/head.php';
require __DIR__ . '/database/laptop.php';

if (!isset($_GET['id'])) {
    include "database/not_found.php";
    exit;
}

$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "database/not_found.php";
    exit;
}

$errors = [
	'LaptopType' => '',
	'EmployCode' => '',
	'EmployEMailId' => '',
	'EmployNumber' => '',
	'EmployName' => '',
	'Designation' => '',
	'DeviceName' => '',
	'AdopterNo' => '',
	'AdapterBrand' => '',
	'ProductId' => '',
	'LaptopModel' => '',
	'EmployStatus' => '',
	'PrinterModel' => '',
	'Remark' => '',
	'Date' => '',
];

$isValid = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);
    uploadImage($_FILES['picture'], $user);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        header("Location: laptop.php");
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
					<div class="add-item d-flex">
						<div class="page-title">
							<h4>Edit Product</h4>
						</div>
					</div>
					<ul class="table-top-head">
						<li>
							<div class="page-btn">
								<a href="product-list.html" class="btn btn-secondary"><i data-feather="arrow-left" class="me-2"></i>Back to Product</a>
							</div>
						</li>
						<li>
							<a data-bs-toggle="tooltip" data-bs-placement="top" title="Collapse" id="collapse-header"><i data-feather="chevron-up" class="feather-chevron-up"></i></a>
						</li>
					</ul>
					
				</div>
				<h3>
                <?php if ($user['id']) : ?>
					Employ Name : <b><?php echo $user['EmployName'] ?></b>
                <?php else : ?>
                Create new user
                <?php endif ?>
            </h3>
                <form method="POST" enctype="multipart/form-data" action="">
                    <div class="card">
                        <div class="card-body add-product pb-0">
                            <div class="accordion-card-one accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <div class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-controls="collapseOne">
                                            <div class="addproduct-icon">
                                                <h5><i data-feather="info" class="add-info"></i><span>Product
                                                        Information</span></h5>
                                                <a href="javascript:void(0);"><i data-feather="chevron-down"
                                                        class="chevron-down-add"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Laptop Type</label>
                                                        <select name="LaptopType" class="select">
                                                            <option>Choose</option>
                                                            <option value="Store">Store</option>
                                                            <option value="Corporate">Corporate</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Date</label>
                                                        <input type="text" value="<?php echo date("d/m/Y") ?>" class="form-control" placeholder="Date" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Employ Code</label>
                                                        <input name="EmployCode"
                                                            value="<?php echo $user['EmployCode'] ?>"
                                                            class="form-control <?php echo $errors['EmployCode'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['EmployCode'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Employ E-Mail ID</label>
                                                        <input name="EmployEMailId"
                                                            value="<?php echo $user['EmployEMailId'] ?>"
                                                            class="form-control <?php echo $errors['EmployEMailId'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['EmployEMailId'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product list">
                                                        <label>Employ Number</label>
														<input name="EmployNumber"
                                                            value="<?php echo $user['EmployNumber'] ?>"
                                                            class="form-control <?php echo $errors['EmployNumber'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['EmployNumber'] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Employ Name</label>
                                                        <input name="EmployName"
                                                            value="<?php echo $user['EmployName'] ?>"
                                                            class="form-control <?php echo $errors['EmployName'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['EmployName'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Designation</label>
                                                        <input name="Designation"
                                                            value="<?php echo $user['Designation'] ?>"
                                                            class="form-control <?php echo $errors['Designation'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['Designation'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product list">
                                                        <label>Device Name</label>
                                                        <input name="DeviceName"
                                                            value="<?php echo $user['DeviceName'] ?>"
                                                            class="form-control <?php echo $errors['DeviceName'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['DeviceName'] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Adopter No</label>
                                                        <input name="AdopterNo"
                                                            value="<?php echo $user['AdopterNo'] ?>"
                                                            class="form-control <?php echo $errors['AdopterNo'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['AdopterNo'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Adapter Brand</label>
                                                        <input name="AdapterBrand"
                                                            value="<?php echo $user['AdapterBrand'] ?>"
                                                            class="form-control <?php echo $errors['AdapterBrand'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['AdapterBrand'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product list">
                                                        <label>Product Id</label>
                                                        <input name="ProductId"
                                                            value="<?php echo $user['ProductId'] ?>"
                                                            class="form-control <?php echo $errors['ProductId'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['ProductId'] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Laptop Model</label>
                                                        <input name="LaptopModel"
                                                            value="<?php echo $user['LaptopModel'] ?>"
                                                            class="form-control <?php echo $errors['LaptopModel'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['LaptopModel'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Employ Status</label>
														<select name="EmployStatus" class="select">
                                                            <option>Choose</option>
                                                            <option value="Active">Active</option>
                                                            <option value="DeActive">DeActive</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product list">
                                                        <label>Printer Model</label>
                                                        <input name="PrinterModel"
                                                            value="<?php echo $user['PrinterModel'] ?>"
                                                            class="form-control <?php echo $errors['PrinterModel'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['PrinterModel'] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Editor -->
                                            <div class="col-lg-12">
                                                <div class="input-blocks summer-description-box transfer mb-3">
                                                    <label>Remark</label>
                                                    <textarea value="<?php echo $user['Remark'] ?>" name="Remark" class="form-control h-100" rows="5"></textarea>
                                                    <p class="mt-1">Maximum 60 Characters</p>
                                                </div>
                                            </div>
                                            <!-- /Editor -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="btn-addproduct mb-4">
                            <button type="button" class="btn btn-cancel me-2">Cancel</button>
                            <button type="submit" class="btn btn-submit">Save Product</button>
                        </div>
                    </div>
                </form>

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

	<!-- Select2 JS -->
	<script src="assets/plugins/select2/js/select2.min.js"></script>

	<!-- Datetimepicker JS -->
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>

	<!-- Bootstrap Tagsinput JS -->
	<script src="assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

	<!-- Sweetalert 2 -->
	<script src="assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
	<script src="assets/plugins/sweetalert/sweetalerts.min.js"></script>

	<!-- Custom JS -->
    
	<script src="assets/js/theme-script.js"></script>
	<script src="assets/js/script.js"></script>


</body>

</html>