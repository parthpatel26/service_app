<?php include '../templates/header.php';
?>

<body class="layout-top-nav light-skin theme-primary fixed">

	<div class="wrapper">
		<div id="loader"></div>


		<?php include '../templates/admin-header.php' ?>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<div class="container-full">
				<!-- Main content -->
				<section class="content">
					<div class="row">
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<h5 class="mb-0">Revenue</h5>
											<h2 class="mb-0 text-danger">$25054</h2>
										</div>
										<img src="../images/icon-1.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<h5 class="mb-0">Refund</h5>
											<h2 class="mb-0 text-primary">$1874</h2>
										</div>
										<img src="../images/icon-2.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<h5 class="mb-0">Current Sales</h5>
											<h2 class="mb-0 text-success">287</h2>
										</div>
										<img src="../images/icon-3.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box pull-up">
								<div class="box-body">
									<div class="d-flex align-items-center justify-content-between">
										<div>
											<h5 class="mb-0">Recurring Sales</h5>
											<h2 class="mb-0 text-warning">$2284</h2>
										</div>
										<div class="bar" data-peity='{ "fill": ["#5949d6", "#9fb3ca", "#007eff", "#2a8853", "#ea9715", "#fb3d4e", "#bcc2c8", "#205081"], "height": 61, "width": 100, "padding":0.4 }'>10,15,8,20,18,11,7,18</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-8 col-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Revenue Statistics
									</h4>
									<div class="box-controls pull-right">
										<ul class="nav nav-pills nav-pills-sm" role="tablist">
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
													<span class="nav-text base-font">Month</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#">
													<span class="nav-text base-font">Week</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#">
													<span class="nav-text base-font">Day</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-lg-9 col-12">
											<div id="charts_widget_2_chart"></div>
										</div>
										<div class="col-lg-3 col-12">
											<div class="p-20">
												<div class="mb-40">
													<h2 class="mb-0 text-primary fw-500">$125952</h2>
													<p class="mb-0">Income</p>
													<div id="barchart1"></div>
												</div>
												<div>
													<h2 class="mb-0 text-info fw-500">$42.6%</h2>
													<p class="mb-0">Income</p>
													<div id="barchart2"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box overflow-hidden bg-primary">
								<div class="box-body p-0">
									<div class="px-30 pt-20">
										<h2 class="text-white mb-0">34,042 </h2>
										<p class="text-white-50">Customers this month</p>
									</div>
									<div id="statisticschart3"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box overflow-hidden">
								<div class="box-body p-0">
									<div class="p-15">
										<h3 class="fw-500 text-primary mb-0">$1560.75</h3>
										<h6 class="mb-0">Saving Progress</h6>
									</div>
									<div id="statisticschart4"></div>
									<div class="wed-up">
										<div class="d-flex justify-content-between align-items-center">
											<div class="d-flex align-items-center">
												<i class="fa fa-arrow-up text-primary fs-30 me-10"></i>
												<div>
													<h3 class="fw-500 text-primary mb-0">$146.45</h3>
													<h6 class="mb-0">Income</h6>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i class="fa fa-arrow-down text-danger fs-30 me-10"></i>
												<div>
													<h3 class="fw-500 text-primary mb-0">$153.24</h3>
													<h6 class="mb-0">Expenses</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-12">
							<div class="box">
								<div class="box-header">
									<h4 class="box-title">Server Status</h4>
								</div>
								<div class="box-body">
									<div style="min-height: 235px;">
										<div id="shops-trend"></div>
									</div>
								</div>
							</div>
						</div>
						<div class=" col-xl-6 col-12">
							<div class="box bg-transparent no-shadow mb-10">
								<div class="box-header no-border pb-0 pt-10">
									<h4 class="box-title">Top Selling Products</h4>
								</div>
							</div>
							<div class="box">
								<div class="box-body">
									<div class="table-responsive">
										<table class="table no-border mb-0">
											<tbody>
												<tr>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">01</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">Pocket Drone 2.5G</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">20 Nov 2019 at 06:00 PM</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$150.00</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">16 Qty</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$2800.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">02</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">DJI Phantom Pro</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">29 Nov 2019 at 09:00 PM</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$175.00</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">20 Qty</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$3250.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">03</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">Allen Rozario</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">06 Dec 2019 at 04:00 AM</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$210.00</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">22 Qty</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$1860.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">04</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">Pocket Drone 2.5G</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">18 Dec 2019 at 06:20 PM</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$220.00</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">24 Qty</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$3100.00</h6>
													</td>
												</tr>
												<tr>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">05</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">Melisa Rozario</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">28 Dec 2019 at 07:45 PM</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$210.00</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">23 Qty</h6>
													</td>
													<td>
														<h6 class="mb-0 fw-500 text-mute text-nowrap">$2460.00</h6>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div class="icon bg-primary-light rounded-circle w-60 h-60">
										<i class="text-primary me-0 fs-20 fa fa-users"></i>
									</div>
									<div>
										<h2 class="text-dark mb-0 fw-500">18.8k</h2>
										<p class="text-mute mb-0 fs-20">Total users</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue1"></div>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6 col-12">
							<div class="box overflow-hidden">
								<div class="box-body pb-0">
									<div class="icon bg-warning-light rounded-circle w-60 h-60">
										<i class="text-warning me-0 fs-20 fa fa-bullseye"></i>
									</div>
									<div>
										<h2 class="text-dark mb-0 fw-500">35.8k</h2>
										<p class="text-mute mb-0 fs-20">Average reach per post</p>
									</div>
								</div>
								<div class="box-body p-0">
									<div id="revenue2"></div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- /.content -->
			</div>
		</div>
		<!-- /.content-wrapper -->
		<?php include '../templates/admin-footer.php' ?>
	</div>
	<!-- ./wrapper -->

	<!-- Sidebar -->

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
	<!-- <script src="../js/pages/dashboard3.js"></script> -->


</body>
<script>
	var categories = []
	var rev = []

	var options = {
		series: [{
			name: "Profit",
			data: rev
		}],
		chart: {
			foreColor: "#333333",
			height: 290,
			type: 'area',
			zoom: {
				enabled: false
			}
		},
		colors: ['#ea9715'],
		dataLabels: {
			enabled: false,
		},
		stroke: {
			show: true,
			curve: 'straight',
			lineCap: 'butt',
			colors: undefined,
			width: 4,
			dashArray: 0,
		},
		markers: {
			size: 5,
			colors: '#ffffff',
			strokeColors: '#ea9715',
			strokeWidth: 4,
			strokeOpacity: 0.9,
			strokeDashArray: 0,
			fillOpacity: 1,
			discrete: [],
			shape: "circle",
			radius: 5,
			offsetX: 0,
			offsetY: 0,
			onClick: undefined,
			onDblClick: undefined,
			hover: {
				size: undefined,
				sizeOffset: 3
			}
		},
		grid: {
			borderColor: '#f7f7f7',
			row: {
				colors: ['transparent'], // takes an array which will be repeated on columns
				opacity: 0
			},
			yaxis: {
				lines: {
					show: true,
				},

			},
		},
		fill: {
			type: "gradient",
			gradient: {
				shadeIntensity: 1,
				opacityFrom: 0.01,
				opacityTo: 1,
				stops: [0, 90, 100]
			}
		},
		xaxis: {
			categories: categories,
			labels: {
				show: true,
			},
			axisBorder: {
				show: true
			},
			axisTicks: {
				show: true
			},
			tooltip: {
				enabled: true,
			},
		},
		yaxis: {
			labels: {
				show: false,
				formatter: function(val) {
					return val + "K";
				}
			}

		},
	};
	$(document).ready(function() {
		$.ajax({
			url: '../action/charts.php',
			type: "POST",
			data: {
				action: 'count_user'
			},
			success: function(data) {
				const result = JSON.parse(data);
				for (var key in result) {
					categories.push(result[key][1]);
					rev.push(result[key][2]);
				}
				var chart = new ApexCharts(document.querySelector("#charts_widget_2_chart"), options);
				console.log(options.xaxis.categories);
				chart.render();

			},

		});

	})
</script>

</html>