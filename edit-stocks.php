<!DOCTYPE html>
<html lang="en">

<head>
	
<?php  
include 'include/head.php';
require __DIR__ . '/database/newstock.php';

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
	    'ProductName' => '',
        'ModelNumber' => '',
        'SerialNo' => '',
        'Remark' => '',
		'Status' => '',
		'Transfer' => '',
		'Date' => '',
		'Remark' => '',
];

$isValid = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $user = array_merge($user, $_POST);
    $isValid = validateUser($user, $errors);
    uploadImage($_FILES['picture'], $user);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        header("Location: manage-stocks.php");
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
                <?php if ($user['id']) : ?>
                Update User : <b><?php echo $user['ProductName'] ?></b>
                <?php else : ?>
                Create new user
                <?php endif ?>
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
                                                        <label class="form-label">Product Name</label>
                                                        <input name="ProductName"
                                                            value="<?php echo $user['ProductName'] ?>"
                                                            class="form-control <?php echo $errors['ProductName'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['ProductName'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Model Number</label>
                                                        <input name="ModelNumber"
                                                            value="<?php echo $user['ModelNumber'] ?>"
                                                            class="form-control <?php echo $errors['ModelNumber'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['ModelNumber'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Serial No</label>
                                                        <input name="SerialNo"
                                                            value="<?php echo $user['SerialNo'] ?>"
                                                            class="form-control <?php echo $errors['SerialNo'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['SerialNo'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                        <label class="form-label">Date</label>
                                                        <input type="text" name="Date" value="<?php echo date("d/m/Y") ?>" class="form-control" placeholder="Date" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="mb-3 add-product">
                                                    <label class="form-label">Status</label>
                                                        <select name="Status" class="select">
                                                            <option>Choose</option>
                                                            <option value="Available">Available</option>
                                                            <option value="Not Available">Not Available</option>
                                                        </select>
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['Status'] ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-6 col-12">
                                                    <div class="input-blocks add-product list">
                                                        <label>Transfer</label>
                                                        <input name="Transfer"
                                                            value="<?php echo $user['Transfer'] ?>"
                                                            class="form-control <?php echo $errors['Transfer'] ? 'is-invalid' : '' ?>">
                                                        <div class="invalid-feedback">
                                                            <?php echo  $errors['Transfer'] ?>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                           

                                         


                                            <!-- Editor -->
                                            <div class="col-lg-12">
                                                <div class="input-blocks summer-description-box transfer mb-3">
                                                    <label>Remark</label>
                                                    <textarea name="Remark" value="<?php echo $user['Remark'] ?>" class="form-control h-100" rows="5"><?php echo $user['Remark'] ?></textarea>
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
                <!-- /add -->

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