<!-- Header -->
<div class="header">

<!-- Logo -->
<div class="header-left active">
	<a href="index.php" class="logo logo-normal">
		<img src="assets/img/logo.png" alt="">
	</a>
	<a href="index.php" class="logo logo-white">
		<img src="assets/img/logo-white.png" alt="">
	</a>
	<a href="index.php" class="logo-small">
		<img src="assets/img/logo-small.png" alt="">
	</a>
	<a id="toggle_btn" href="javascript:void(0);">
		<i data-feather="chevrons-left" class="feather-16"></i>
	</a>
</div>
<!-- /Logo -->

<a id="mobile_btn" class="mobile_btn" href="#sidebar">
	<span class="bar-icon">
		<span></span>
		<span></span>
		<span></span>
	</span>
</a>

<!-- Header Menu -->
<ul class="nav user-menu">

	<!-- Search -->
	<li class="nav-item nav-searchinputs">
		<div class="top-nav-search">
			<a href="javascript:void(0);" class="responsive-search">
				<i class="fa fa-search"></i>
			</a>
			<form action="#" class="dropdown">
				<div class="searchinputs dropdown-toggle" id="dropdownMenuClickable"
					data-bs-toggle="dropdown" data-bs-auto-close="false">
					<input type="text" placeholder="Search">
					<div class="search-addon">
						<span><i data-feather="x-circle" class="feather-14"></i></span>
					</div>
				</div>
				
			</form>
		</div>
	</li>
	<!-- /Search -->


	


	<li class="nav-item nav-item-box">
		<a href="javascript:void(0);" id="btnFullscreen">
			<i data-feather="maximize"></i>
		</a>
	</li>
	<li class="nav-item nav-item-box">
		<a href="index.php">
			<i data-feather="mail"></i>
			<span class="badge rounded-pill">1</span>
		</a>
	</li>
	<!-- Notifications -->
	<li class="nav-item dropdown nav-item-box">
		<a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
			<i data-feather="bell"></i><span class="badge rounded-pill">2</span>
		</a>
		
	</li>
	<!-- /Notifications -->

	<li class="nav-item nav-item-box">
		<a href="#"><i data-feather="settings"></i></a>
	</li>
	<li class="nav-item dropdown has-arrow main-drop">
		<a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
			<span class="user-info">
				<span class="user-letter">
					<img src="assets/img/profiles/1.jpg" alt="" class="img-fluid">
				</span>
				<span class="user-detail">
					<span class="user-name">MD KHALID</span>
					<span class="user-role">Super Admin</span>
				</span>
			</span>
		</a>
		<div class="dropdown-menu menu-drop-user">
			<div class="profilename">
				<div class="profileset">
					<span class="user-img"><img src="assets/img/profiles/1.jpg" alt="">
						<span class="status online"></span></span>
					<div class="profilesets">
						<h6>MD KHALID</h6>
						<h5>Super Admin</h5>
					</div>
				</div>
				<hr class="m-0">
				<a class="dropdown-item" href="#"> <i class="me-2" data-feather="user"></i> My Profile</a>
				<a class="dropdown-item" href="#"><i class="me-2" data-feather="settings"></i>Settings</a>
				<hr class="m-0">
				<a class="dropdown-item logout pb-0" href="#"><img src="assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
			</div>
		</div>
	</li>
</ul>
<!-- /Header Menu -->

<!-- Mobile Menu -->
<div class="dropdown mobile-user-menu">
	<a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
	<div class="dropdown-menu dropdown-menu-right">
		<a class="dropdown-item" href="#">My Profile</a>
		<a class="dropdown-item" href="#">Settings</a>
		<a class="dropdown-item" href="#">Logout</a>
	</div>
</div>
<!-- /Mobile Menu -->
</div>
<!-- /Header -->