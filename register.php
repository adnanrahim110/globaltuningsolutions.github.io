<?php session_start(); ?>
<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register - Global Tuning Solutions</title>

	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- inject:css-->
	<link rel="stylesheet" href="user/resources/vendor/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.27.0/dist/apexcharts.min.css">

	<link rel="stylesheet" href="https://fullcalendar.io/releases/fullcalendar/3.9.0/fullcalendar.min.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css">

	<link rel="stylesheet" href="user/resources/css/style.css">
	<!-- endinject -->
	<link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.svg">
	<!-- Fonts -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@iconscout/unicons@4.0.8/css/line.min.css">

	<script>
		// Render localStorage JS:
		if (localStorage.theme) document.documentElement.setAttribute("data-theme", localStorage.theme);
		if (localStorage.layout) document.documentElement.setAttribute("data-nav", localStorage.navbar);
		if (localStorage.layout) document.documentElement.setAttribute("dir", localStorage.layout);
	</script>
</head>

<body class="geex-dashboard authentication-page">
	<main class="geex-content">
		<div class="geex-content__authentication">
			<div class="geex-content__authentication__content">
				<div class="geex-content__authentication__content__wrapper">
					<!-- <div class="geex-content__authentication__content__logo">
						<a href="index.php">
							<img class="logo-lite" src="assets/img/logo-dark.svg" alt="logo">
							<img class="logo-dark" src="assets/img/logo-lite.svg" alt="logo">
						</a>
					</div> -->
					<?php
					if (isset($_SESSION['message'])) {
						// Get message and message type
						$message = $_SESSION['message'];
						$messageType = isset($_SESSION['message_type']) ? $_SESSION['message_type'] : 'warning'; // Default to 'warning'

					?>
						<center>
							<div style="max-width: 400px;"
								class="text-center alert alert-<?= $messageType; ?> alert-dismissable fade show" role="alert">
								<strong>Hey!</strong> <?= $message; ?>.
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</center>
					<?php
						// Unset the session variables to avoid displaying the message again
						unset($_SESSION['message']);
						unset($_SESSION['message_type']);
					}
					?>
					<form id="signInForm" class="geex-content__authentication__form" action="config/auth.php" method="post">
						<h2 class="geex-content__authentication__title">Register Your Account 👋</h2>
						<div class="row">
							<div class="col-md-6">
								<div class="geex-content__authentication__form-group">
									<input type="text" id="fname" name="fname" placeholder="Your First Name" required>
									<i class="uil-user"></i>
								</div>
							</div>
							<div class="col-md-6">
								<div class="geex-content__authentication__form-group">
									<input type="text" id="lname" name="lname" placeholder="Your Last Name" required>
									<i class="uil-user"></i>
								</div>
							</div>
							<div class="col-12">
								<div class="geex-content__authentication__form-group">
									<input type="email" id="emailSignIn" name="email" placeholder="Your Email" required>
									<i class="uil-envelope"></i>
								</div>
							</div>
							<div class="col-12">
								<div class="geex-content__authentication__form-group">
									<input type="tel" id="phone" name="phone" placeholder="Your Phone Number" required>
									<i class="uil-envelope"></i>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="geex-content__authentication__form-group">
									<input type="password" id="loginPassword" name="password" placeholder="Password" required>
									<i class="uil-eye toggle-password-type"></i>
								</div>
							</div>
							<div class="col-12 col-md-6">
								<div class="geex-content__authentication__form-group">
									<input type="password" id="loginPassword" name="cpassword" placeholder="Confirm Password" required>
									<i class="uil-eye toggle-password-type"></i>
								</div>
							</div>
							<div class="geex-content__authentication__form-group custom-checkbox">
								<input type="checkbox" class="geex-content__authentication__checkbox-input" id="rememberMe">
								<label class="geex-content__authentication__checkbox-label" for="rememberMe">By creating
									a account you agree to Our <a href="#">terms & conditions Privacy Policy</a></label>
							</div>
						</div>
						<button type="submit" class="geex-content__authentication__form-submit" name="register_btn">
							Sign Up
						</button>
						<div class="geex-content__authentication__form-footer">
							already have an account? <a href="login.php">Sign In</a>
						</div>
					</form>
				</div>
			</div>
			<div class="geex-content__authentication__img">
				<img src="user/resources/img/authentication.svg" alt="">
			</div>
		</div>
	</main>

	<script src="user/resources/vendor/js/jquery/jquery-3.5.1.min.js"></script>
	<script src="user/resources/vendor/js/jquery/jquery-ui.js"></script>
	<script src="user/resources/vendor/js/bootstrap/bootstrap.min.js"></script>
	<script src="user/resources/js/main.js"></script>
</body>

</html>
