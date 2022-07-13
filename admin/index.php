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
											<h2 class="mb-0 text-danger" id="revenue"></h2>
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
											<h5 class="mb-0">Incoming</h5>
											<h2 class="mb-0 text-primary" id="incoming"></h2>
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
											<h2 class="mb-0 text-success" id="current_sales"></h2>
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
											<h5 class="mb-0">Completed</h5>
											<h2 class="mb-0 text-warning" id="completed"></h2>
										</div>
										<div class="bar" data-peity="{ &quot;fill&quot;: [&quot;#5949d6&quot;, &quot;#9fb3ca&quot;, &quot;#007eff&quot;, &quot;#2a8853&quot;, &quot;#ea9715&quot;, &quot;#fb3d4e&quot;, &quot;#bcc2c8&quot;, &quot;#205081&quot;], &quot;height&quot;: 61, &quot;width&quot;: 100, &quot;padding&quot;:0.4 }" style="display: none;">
											10,15,8,20,18,11,7,18
										</div><svg class="peity" height="61" width="100">
											<rect fill="#5949d6" x="5" y="30.5" width="2.5" height="30.5"></rect>
											<rect fill="#9fb3ca" x="17.5" y="15.25" width="2.5" height="45.75"></rect>
											<rect fill="#007eff" x="30" y="36.599999999999994" width="2.5" height="24.400000000000006"></rect>
											<rect fill="#2a8853" x="42.5" y="0" width="2.5" height="61"></rect>
											<rect fill="#ea9715" x="55.00000000000001" y="6.100000000000001" width="2.499999999999986" height="54.9"></rect>
											<rect fill="#fb3d4e" x="67.5" y="27.449999999999996" width="2.5" height="33.550000000000004"></rect>
											<rect fill="#bcc2c8" x="80" y="39.650000000000006" width="2.5" height="21.349999999999994"></rect>
											<rect fill="#205081" x="92.5" y="6.100000000000001" width="2.5" height="54.9"></rect>
										</svg>
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
										<ul class="nav nav-pills nav-pills-sm chart_period" role="tablist" chart="rev_stat">
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#" name='year'>
													<span class="nav-text base-font">Year</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0" data-toggle="tab" href="#" name='month'>
													<span class="nav-text base-font">Month</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link py-2 px-4 b-0 active" data-toggle="tab" href="#" name='week'>
													<span class="nav-text base-font">Week</span>
												</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="box-body">
									<div class="row">
										<div class="col-lg-9 col-12" style="position: relative;">
											<div id="rev_stat" style="min-height: 290px;"></div>
										</div>
										<div class="col-lg-3 col-12">
											<div class="p-20">
												<div class="mb-40">
													<h2 class="mb-0 text-primary fw-500" id="rev_stat_total"></h2>
													<p class="mb-0">Income</p>
													<div id="rev_bar_chart"></div>
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
										<h2 class="text-white mb-0" id="customers_this_month"> </h2>
										<p class="text-white-50">Customers this month</p>
									</div>
									<div id="customer_chart"></div>
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
	var rev_categories = [];
	var rev_x_data = [];

	var rev_options = {
		series: [{
			name: "Profit",
			data: rev_x_data
		}],
		chart: {
			foreColor: "#333333",
			height: 290,
			type: 'area',
			zoom: {
				enabled: false,
			},

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
			categories: rev_categories,
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
				show: true,
				formatter: function(val) {
					return val + '₹';
				}
			}

		},
	};

	var cus_x_data = [];
	var customer_options = {
		series: [{
			name: 'Customers',
			data: cus_x_data
		}],
		chart: {

			foreColor: '#ffffff',
			height: 295,
			width: "100%",
			type: 'line',
			offsetY: 0,
			offsetX: 0,
			zoom: {
				enabled: false
			},
		},
		colors: ['#ffffff'],
		dataLabels: {
			enabled: false
		},
		tooltip: {
			theme: 'dark'
		},
		stroke: {
			curve: 'smooth',
		},

		markers: {
			size: 0,
		},
		yaxis: {
			axisBorder: {
				show: true
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: true,
				formatter: function(val) {
					return parseInt(val);
				}
			}

		},
		xaxis: {
			axisBorder: {
				show: true
			},
			axisTicks: {
				show: false,
			},
			labels: {
				show: true,
				formatter: function(val) {
					return parseInt(val);
				}
			}

		},
		grid: {
			show: true,
			borderColor: '#5578ed',
			strokeDashArray: 0,
			position: 'back',
			xaxis: {
				lines: {
					show: false,
				}
			},
			yaxis: {
				lines: {
					show: false
				}
			},
			row: {
				colors: undefined,
				opacity: 0.5,
			},
			column: {
				colors: undefined,
				opacity: 0.1
			},
		}
	};



	function barchart(id, option) {
		$(id).sparkline(option, {
			type: 'bar',
			height: '38',
			width: '100%',
			barWidth: 6,
			barSpacing: 4,
			barColor: '#ea9715',
		});
	}

	function getCharts() {
		rev_categories.length = 0
		rev_x_data.length = 0
		$.ajax({
			url: '../action/charts.php',
			type: "POST",
			data: ajax_data,
			success: function(data) {
				const result = JSON.parse(data);
				console.log(result);
				if (result.rev_stat) {
					$("#rev_stat").html('')
					var chart_data = result.rev_stat.chart
					for (var key in chart_data) {
						rev_categories.push(chart_data[key][0]);
						rev_x_data.push(chart_data[key][2]);
					}
					var chart1 = new ApexCharts(document.querySelector("#rev_stat"), rev_options);
					chart1.render();
					barchart('#rev_bar_chart', rev_x_data)
					$('#rev_stat_total').html('₹' + result.rev_stat.total);

				}
				if (result.customers) {
					$("#customer_chart").html('')
					var chart_data = result.customers.chart
					for (var key in chart_data) {
						cus_x_data.push(chart_data[key][1]);
					}
					var chart2 = new ApexCharts(document.querySelector("#customer_chart"), customer_options);
					chart2.render();
					$('#customers_this_month').html(result.customers.total);

				}


				if (result.stats) {
					$('#revenue').html(result.stats.revenue);
					$('#incoming').html(result.stats.incoming);
					$('#current_sales').html(result.stats.sales);
					$('#completed').html(result.stats.completed);
				}
			},
		});
	}
	var ajax_data = {}
	console.log(ajax_data);
	$(document).ready(function() {
		getCharts();


		$('.chart_period[role="tablist"] a').on('click', function() {
			var ul = $(this).closest('ul').find('a').removeClass('active')
			$(this).addClass('active');
			var chart_name = $(this).closest('ul').attr('chart')
			var period = $(this).attr('name')
			ajax_data['chart'] = chart_name
			ajax_data['period'] = period
			getCharts();
		})

	})
</script>

</html>