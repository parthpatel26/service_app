<?php include '../includes/header.php' ?>

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
							<h3 class="page-title">Tickets</h3>
							<div class="d-inline-block align-items-center">
								<nav>
									<ol class="breadcrumb">
										<li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
										<li class="breadcrumb-item" aria-current="page">Extra</li>
										<li class="breadcrumb-item active" aria-current="page">Tickets</li>
									</ol>
								</nav>
							</div>
						</div>

					</div>
				</div>

				<!-- Main content -->
				<section class="content">

					<div class="row">
						<div class="col-lg-4 col-12">
							<div class="row">
								<div class="col-6">
									<a class="box box-link-shadow text-center" href="javascript:void(0)">
										<div class="box-body">
											<div class="fs-24">+264</div>
											<span>Total Tickets</span>
										</div>
										<div class="box-body bg-info btsr-0 bter-0">
											<p>
												<span class="mdi mdi-ticket-confirmation fs-30"></span>
											</p>
										</div>
									</a>
									<a class="box box-link-shadow text-center" href="javascript:void(0)">
										<div class="box-body">
											<div class="fs-24">110</div>
											<span>Resolve</span>
										</div>
										<div class="box-body bg-success btsr-0 bter-0">
											<p>
												<span class="mdi mdi-thumb-up-outline fs-30"></span>
											</p>
										</div>
									</a>
								</div>
								<div class="col-6">
									<a class="box box-link-shadow text-center" href="javascript:void(0)">
										<div class="box-body">
											<div class="fs-24">175</div>
											<span>Responded</span>
										</div>
										<div class="box-body bg-warning btsr-0 bter-0">
											<p>
												<span class="mdi mdi-message-reply-text fs-30"></span>
											</p>
										</div>
									</a>
									<a class="box box-link-shadow text-center" href="javascript:void(0)">
										<div class="box-body">
											<div class="fs-24">59</div>
											<span>Pending</span>
										</div>
										<div class="box-body bg-danger btsr-0 bter-0">
											<p>
												<span class="mdi mdi-ticket fs-30"></span>
											</p>
										</div>
									</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h5 class="box-title">Tickets share per category</h5>
									<div class="box-tools pull-right">
										<ul class="card-controls">
											<li class="dropdown">
												<a data-bs-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item active" href="#">Today</a>
													<a class="dropdown-item" href="#">Yesterday</a>
													<a class="dropdown-item" href="#">Last week</a>
													<a class="dropdown-item" href="#">Last month</a>
												</div>
											</li>
											<li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
										</ul>
									</div>
								</div>

								<div class="box-body">
									<div class="text-center pb-25">
										<div class="donut" data-peity='{ "fill": ["#fc4b6c", "#ffb22b", "#398bf7"], "radius": 86, "innerRadius": 50  }'>9,6,5</div>
									</div>

									<ul class="list-inline">
										<li class="flexbox mb-5">
											<div>
												<span class="badge badge-dot badge-lg me-1" style="background-color: #fc4b6c"></span>
												<span>Technical</span>
											</div>
											<div>8952</div>
										</li>

										<li class="flexbox mb-5">
											<div>
												<span class="badge badge-dot badge-lg me-1" style="background-color: #ffb22b"></span>
												<span>Accounts</span>
											</div>
											<div>7458</div>
										</li>

										<li class="flexbox">
											<div>
												<span class="badge badge-dot badge-lg me-1" style="background-color: #398bf7"></span>
												<span>Other</span>
											</div>
											<div>3254</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-12">
							<div class="box">
								<div class="box-header with-border">
									<h5 class="box-title">Tickets share per agent</h5>

									<div class="box-tools pull-right">
										<ul class="card-controls">
											<li class="dropdown">
												<a data-bs-toggle="dropdown" href="#"><i class="ion-android-more-vertical"></i></a>
												<div class="dropdown-menu dropdown-menu-end">
													<a class="dropdown-item active" href="#">Today</a>
													<a class="dropdown-item" href="#">Yesterday</a>
													<a class="dropdown-item" href="#">Last week</a>
													<a class="dropdown-item" href="#">Last month</a>
												</div>
											</li>
											<li><a href="#" class="link card-btn-reload" data-bs-toggle="tooltip" title="" data-bs-original-title="Refresh"><i class="fa fa-circle-thin"></i></a></li>
										</ul>
									</div>
								</div>

								<div class="box-body">
									<div class="flexbox mt-10">
										<div class="bar" data-peity='{ "fill": ["#666EE8", "#1E9FF2", "#28D094", "#FF4961", "#FF9149"], "height": 268, "width": 120, "padding":0.2 }'>952,558,1254,427,784</div>
										<ul class="list-inline align-self-end text-muted text-end mb-0">
											<li>Andrew <span class="badge badge-primary ms-2">154</span></li>
											<li>Benjamin <span class="badge badge-info ms-2">154</span></li>
											<li>Elijah <span class="badge badge-success ms-2">254</span></li>
											<li>Chloe <span class="badge badge-danger ms-2">854</span></li>
											<li>Daniel <span class="badge badge-warning ms-2">215</span></li>
										</ul>
									</div>

								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="box">
								<div class="box-header with-border">
									<h4 class="box-title">Support Ticket List</h4>
									<h6 class="box-subtitle">List of ticket opend by customers</h6>
								</div>
								<div class="box-body p-15">
									<div class="table-responsive">
										<table id="tickets" class="table mt-0 table-hover no-wrap" data-page-size="10">
											<thead>
												<tr>
													<th>ID</th>
													<th>Ope. by</th>
													<th>Cust. Email</th>
													<th>Sbuject</th>
													<th>Status</th>
													<th>Ass. to</th>
													<th>Date</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1011</td>
													<td>
														<a href="javascript:void(0)">Sophia</a>
													</td>
													<td>sophia@gmail.com</td>
													<td>How to customize the template?</td>
													<td><span class="badge badge-warning">New</span> </td>
													<td>Elijah</td>
													<td>14-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1224</td>
													<td>
														<a href="javascript:void(0)">William</a>
													</td>
													<td>william@gmail.com</td>
													<td>How to change colors</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Benjamin</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1024</td>
													<td>
														<a href="javascript:void(0)">Jayden</a>
													</td>
													<td>jayden@gmail.com</td>
													<td>How to set Horizontal nav</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>2124</td>
													<td>
														<a href="javascript:void(0)">Ethan</a>
													</td>
													<td>ethan@gmail.com</td>
													<td>How this will connect with ethan</td>
													<td><span class="badge badge-danger">Pending</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>3124</td>
													<td>
														<a href="javascript:void(0)">Noah</a>
													</td>
													<td>noah@gmail.com</td>
													<td>How to set navigation</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1611</td>
													<td>
														<a href="javascript:void(0)">Sophia</a>
													</td>
													<td>sophia@gmail.com</td>
													<td>How to customize the template?</td>
													<td><span class="badge badge-warning">New</span> </td>
													<td>Elijah</td>
													<td>14-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>4224</td>
													<td>
														<a href="javascript:void(0)">William</a>
													</td>
													<td>william@gmail.com</td>
													<td>How to change colors</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Benjamin</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>2524</td>
													<td>
														<a href="javascript:void(0)">Jayden</a>
													</td>
													<td>jayden@gmail.com</td>
													<td>How to set Horizontal nav</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>7524</td>
													<td>
														<a href="javascript:void(0)">Ethan</a>
													</td>
													<td>ethan@gmail.com</td>
													<td>How this will connect with ethan</td>
													<td><span class="badge badge-danger">Pending</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>4124</td>
													<td>
														<a href="javascript:void(0)">Noah</a>
													</td>
													<td>noah@gmail.com</td>
													<td>How to set navigation</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1011</td>
													<td>
														<a href="javascript:void(0)">Mia</a>
													</td>
													<td>sophia@gmail.com</td>
													<td>How to customize the template?</td>
													<td><span class="badge badge-warning">New</span> </td>
													<td>Elijah</td>
													<td>14-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1224</td>
													<td>
														<a href="javascript:void(0)">Chloe</a>
													</td>
													<td>william@gmail.com</td>
													<td>How to change colors</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Benjamin</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>8024</td>
													<td>
														<a href="javascript:void(0)">Chloe</a>
													</td>
													<td>jayden@gmail.com</td>
													<td>How to set Horizontal nav</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>5124</td>
													<td>
														<a href="javascript:void(0)">Ethan</a>
													</td>
													<td>ethan@gmail.com</td>
													<td>How this will connect with ethan</td>
													<td><span class="badge badge-danger">Pending</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>3144</td>
													<td>
														<a href="javascript:void(0)">Noah</a>
													</td>
													<td>noah@gmail.com</td>
													<td>How to set navigation</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>1621</td>
													<td>
														<a href="javascript:void(0)">Sophia</a>
													</td>
													<td>sophia@gmail.com</td>
													<td>How to customize the template?</td>
													<td><span class="badge badge-warning">New</span> </td>
													<td>Elijah</td>
													<td>14-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>4724</td>
													<td>
														<a href="javascript:void(0)">William</a>
													</td>
													<td>william@gmail.com</td>
													<td>How to change colors</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Benjamin</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>2594</td>
													<td>
														<a href="javascript:void(0)">Jayden</a>
													</td>
													<td>jayden@gmail.com</td>
													<td>How to set Horizontal nav</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>13-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>7524</td>
													<td>
														<a href="javascript:void(0)">Ethan</a>
													</td>
													<td>ethan@gmail.com</td>
													<td>How this will connect with ethan</td>
													<td><span class="badge badge-danger">Pending</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
												<tr>
													<td>4124</td>
													<td>
														<a href="javascript:void(0)">Noah</a>
													</td>
													<td>noah@gmail.com</td>
													<td>How to set navigation</td>
													<td><span class="badge badge-success">Complete</span> </td>
													<td>Andrew</td>
													<td>12-10-2018</td>
													<td>
														<a href="javascript:void(0)" class="text-danger" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="ti-trash" aria-hidden="true"></i></a>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /.row -->

				</section>
				<!-- /.content -->
			</div>
		</div>
		<!-- /.content-wrapper -->
		<?php include '../templates/admin-footer.php' ?>

	</div>

	<!-- Page Content overlay -->


	<!-- Vendor JS -->
	<script src="../js/vendors.min.js"></script>
	<script src="../js/pages/chat-popup.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>

	<script src="../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js"></script>
	<script src="../assets/vendor_components/jquery.peity/jquery.peity.js"></script>

	<!-- Florence Admin App -->
	<script src="../js/jquery.smartmenus.js"></script>
	<script src="../js/menus.js"></script>
	<script src="../js/template.js"></script>
	<script src="../js/pages/dashboard3.js"></script>

</body>


</html>