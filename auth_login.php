<?php include 'templates/header.php' ?>

<body class="hold-transition theme-primary bg-img" style="background-image: url(images/auth-bg/bg-1.jpg)">

	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">

			<div class="col-12">
				<div class="row justify-content-center g-0">
					<div class="col-lg-5 col-md-5 col-12">
						<div class="bg-white rounded10 shadow-lg">
							<div class="content-top-agile p-20 pb-0">
								<h2 class="text-primary">Let's Get Started</h2>
								<p class="mb-0">Sign in to Tricore IT Services.</p>
							</div>
							<div class="p-40">
								<form id="login" enctype="multipart/form-data" name="login">
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text bg-transparent"><i class="ti-user"></i></span>
											<input type="text" class="form-control ps-15 bg-transparent" placeholder="email" name="email">
										</div>
									</div>
									<div class="form-group">
										<div class="input-group mb-3">
											<span class="input-group-text  bg-transparent"><i class="ti-lock"></i></span>
											<input type="password" class="form-control ps-15 bg-transparent" placeholder="Password" name="password">
										</div>
									</div>
									<div class="row">
										<div class="form-group col-6">
											<label class="mb-1">
												<h6 class="mb-0 text-sm">Enter Captcha</h6>
											</label>
											<input type="text" class="form-control" name="captcha" id="captcha">
										</div>
										<div class="form-group col-6">
											<label class="mb-1">
												<h6 class="mb-0 text-sm">Captcha Code</h6>
											</label>
											<img src="<?= ROOT ?>action/captcha.php" alt="PHP Captcha">
										</div>
									</div>
									<div class="row">
										<div class="col-6">
											<div class="checkbox">
												<input type="checkbox" id="basic_checkbox_1">
												<label for="basic_checkbox_1">Remember Me</label>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-6">
											<div class="fog-pwd text-end">
												<a href="javascript:void(0)" class="hover-warning"><i class="ion ion-locked"></i> Forgot Password?</a><br>
											</div>
										</div>
										<!-- /.col -->
										<div class="col-12 text-center">
											<button type="submit" name='login' class="btn btn-danger mt-10">SIGN IN</button>
										</div>
										<!-- /.col -->
									</div>
								</form>
								<div class="text-center">
									<p class="mt-15 mb-0">Don't have an account? <a href="auth_registerphp" class="text-warning ms-5">Sign Up</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="js/vendors.min.js"></script>
	<script src="js/pages/chat-popup.js"></script>
	<script src="../assets/icons/feather-icons/feather.min.js"></script>

</body>

<script>
	$(document).ready(function() {

		$("#login").on("submit", function(ev) {
			ev.preventDefault();
			// var formData = $(this).serialize();
			var formData = new FormData(this);
			console.log(formData);
			$.ajax({
				url: 'action/login.php',
				type: "POST",
				data: formData,
				success: function(data) {
					const result = JSON.parse(data);
					console.log(result.msg);
				},
				cache: false,
				contentType: false,
				processData: false
			});
		});

		// $("form[name='login']").on("submit", function(ev) {
		// 	ev.preventDefault(); // Prevent browser default submit.
		// 	var formData = new FormData(this);
		// 	$.ajax({
		// 		url: "action/login.php",
		// 		type: "POST",
		// 		data: formData,
		// 		success: function(msg) {
		// 			console.log(msg);
		// 			var data = JSON.parse(msg);
		// 			// var error
		// 			if (data.error == 0) {
		// 				$('.products').prepend('<center><div id ="wrapper">' +
		// 					'<div class="loader">' +
		// 					' </div> </div></div></center>')
		// 				// $("form[name='insert']").trigger("reset");

		// 			}

		// 		},
		// 		cache: false,
		// 		contentType: false,
		// 		processData: false
		// 	});

		// });

	});
</script>

</html>