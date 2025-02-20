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

	<!-- Add Adjustment -->
	<div class="modal fade" id="add-units">
		<div class="modal-dialog modal-dialog-centered stock-adjust-modal">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation Attribute</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="row">
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Attribute Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks">
										<label>Add Value</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<ul class="nav user-menu">
									<li class="nav-item nav-searchinputs">
										<div class="top-nav-search">
											<form action="#" class="dropdown">
												<div class="searchinputs list dropdown-toggle" id="dropdownMenuClickable2" data-bs-toggle="dropdown" data-bs-auto-close="false" >
													<input type="text" placeholder="Search">
													<i data-feather="search" class="feather-16 icon"></i>
													<div class="search-addon d-none">
														<span><i data-feather="x-circle" class="feather-14"></i></span>
													</div>
												</div>
												<div class="dropdown-menu search-dropdown idea" aria-labelledby="dropdownMenuClickable2">
													<div class="search-info">
														<p>Black </p>
														<p>Red</p>
														<p>Green</p>
														<p>S</p>
														<p>M</p>
													</div>
												</div>
											</form>
										</div>
									</li>
									</ul>
								</div>
								<div class="col-lg-6">
								<div class="modal-footer-btn popup">
									<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
									<a href="javascript:void(0);" class="btn btn-submit" data-bs-dismiss="modal">Create Attribute</a>
								</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Adjustment -->

	<!-- Add Category -->
	<div class="modal fade" id="add-units-category">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Category</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.html" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Category -->

	<!-- Add Brand -->
	<div class="modal fade" id="add-units-brand">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add New Brand</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Brand</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.html" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Brand -->

	<!-- Add Unit -->
	<div class="modal fade" id="add-unit">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Unit</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="mb-3">
								<label class="form-label">Unit</label>
								<input type="text" class="form-control">
							</div>
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.html" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /Add Unit -->

	<!-- Add Variatent -->
	<div class="modal fade" id="add-variation">
		<div class="modal-dialog modal-dialog-centered custom-modal-two">
			<div class="modal-content">
				<div class="page-wrapper-new p-0">
					<div class="content">
						<div class="modal-header border-0 custom-modal-header">
							<div class="page-title">
								<h4>Add Variation</h4>
							</div>
							<button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body custom-modal-body">
							<div class="modal-title-head people-cust-avatar">
								<h6>Variant Thumbnail</h6>
							</div>
							<div class="new-employee-field">
								<div class="profile-pic-upload">
									<div class="profile-pic">
										<span><i data-feather="plus-circle" class="plus-down-add"></i> Add Image</span>
									</div>
									<div class="mb-3">
										<div class="image-upload mb-0">
											<input type="file">
											<div class="image-uploads">
												<h4>Change Image</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Barcode Symbology</label>
										<select class="select">
											<option>Choose</option>
											<option>Code34</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<div class="input-blocks add-product list">
											<label>Item Code</label>
											<input type="text" class="form-control list" value="455454478844">
											<button type="submit" class="btn btn-primaryadd">
												Generate Code
											</button>
										</div>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="input-blocks image-upload-down">
										<div class="image-upload download">
											<input type="file">
											<div class="image-uploads">
												<img src="assets/img/download-img.png" alt="img">
												<h4>Drag and drop a <span>file to upload</span></h4>
											</div>
										</div>
									</div>
									<div class="accordion-body">
										<div class="text-editor add-list add">
											<div class="col-lg-12">
												<div class="add-choosen mb-3">
													<div class="phone-img ms-0">
														<img src="assets/img/products/phone-add-2.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
		
													<div class="phone-img">
														<img src="assets/img/products/phone-add-1.png" alt="image">
														<a href="javascript:void(0);"><i data-feather="x" class="x-square-add remove-product"></i></a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Quantity Alert</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax Type</label>
										<select class="select">
											<option>Choose</option>
											<option>Direct</option>
											<option>Indirect</option>
										</select>
									</div>
								</div>
								<div class="col-lg-6 pe-0">
									<div class="mb-3">
										<label class="form-label">Tax </label>
										<select class="select">
											<option>Choose</option>
											<option>Income Tax</option>
											<option>Service Tax</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div class="mb-3">
										<label class="form-label">Discount Type </label>
										<select class="select">
											<option>Choose</option>
											<option>Percentage</option>
											<option>Early Payment</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12 pe-0">
									<div >
										<label class="form-label">Discount Value</label>
										<input type="text" class="form-control">
									</div>
								</div>								
							</div>
							
							
							<div class="modal-footer-btn">
								<a href="javascript:void(0);" class="btn btn-cancel me-2" data-bs-dismiss="modal">Cancel</a>
								<a href="add-product.html" class="btn btn-submit">Submit</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

    
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
	<!-- /Add Variatent -->

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