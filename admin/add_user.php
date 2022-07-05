<?php include '../templates/header.php' ?>

<body class="layout-top-nav light-skin theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>

		<?php include '../templates/admin-header.php' ?>


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Content Header (Page header) -->
				<div class="content-header">
					<div class="d-flex align-items-center">
						<div class="me-auto">
							<h3 class="page-title">Add User</h3>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Sample Page</li>
										<li class="breadcrumb-item active" aria-current="page">Blank page</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-lg-12 col-12">
							<div class="box">

								<!-- /.box-header -->
								<form class="form">
									<div class="box-body">
										<h4 class="box-title text-info mb-0"><i class="ti-user me-15"></i> Personal Info</h4>
										<hr class="my-15">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">First Name</label>
													<input type="text" class="form-control" placeholder="First Name" name="first_name">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Last Name</label>
													<input type="text" class="form-control" placeholder="Last Name" name="last_name">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">E-mail</label>
													<input type="text" class="form-control" placeholder="E-mail" name="email">
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Password</label>
													<input type="text" class="form-control" placeholder="Password" name="password">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="form-label">Role</label>
													<select class="form-select" name="role">
														<option value="3">Client</option>
														<option value="2">Customer</option>
														<option value="1">Admin</option>
													</select>
												</div>
											</div>
										</div>

										<!-- /.box-body -->
										<div class="box-footer">
											<button type="button" class="btn btn-warning me-1">
												<i class="ti-trash"></i> Cancel
											</button>
											<button type="submit" class="btn btn-primary">
												<i class="ti-save-alt"></i> Save
											</button>
										</div>
								</form>
							</div>
							<!-- /.box -->
						</div>

						<!-- /.box-body -->
						<div class="box-footer">
							<!-- /.content-wrapper -->
							<?php include '../templates/admin-footer.php' ?>
						</div>
						<!-- /.box-footer-->
					</div>
			</div>
		</div>
		</section>
		<!-- /.content -->
	</div>
	</div>

	</div>
	<!-- ./wrapper -->

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="../js/vendors.min.js"></script>
	<script src="../js/pages/chat-popup.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>

	<!-- Florence Admin App -->
	<script src="../js/jquery.smartmenus.js"></script>
	<script src="../js/menus.js"></script>
	<script src="../js/template.js"></script>



</body>

<!-- Mirrored from florence-admin-template.multipurposethemes.com/bs5/main-horizontal/sample_blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 08:06:18 GMT -->

</html>