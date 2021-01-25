<?php
include "include/fetcher.php";
$page="Home"; $og_graph = "";
include "include/og_graph.php";
include "include/header.php"; 
include "api.php";
?>



	<div class="page-title-area">
		<div class="container">
			<div class="page-title-content">
				<h2>Login</h2>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li>Login</li>
				</ul>
			</div>
		</div>
	</div>


	<section class="login-area ptb-50">
		<div class="container">
			<div class="login-form">
				<h2>Login</h2>
				<form method="post" action="include/login.php" >
					<div class="form-group">
						<label>Username</label>
						<input type="text" class="form-control" name="Username" placeholder="Username">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="text" class="form-control" name="Password" placeholder="Password">
					</div>
					<button type="submit" name="login">Login</button>
				</form>
				<div class="important-text">
					<p>Don't have an account? <a href="register.html">Register now!</a></p>
				</div>
			</div>
		</div>
	</section>


	<script src="assets/js/jquery.min.js"></script>

	<script src="assets/js/popper.min.js"></script>

	<script src="assets/js/bootstrap.min.js"></script>

	<script src="assets/js/jquery.meanmenu.js"></script>

	<script src="assets/js/owl.carousel.min.js"></script>

	<script src="assets/js/jquery.magnific-popup.min.js"></script>

	<script src="assets/js/nice-select.min.js"></script>

	<script src="assets/js/jquery.ajaxchimp.min.js"></script>

	<script src="assets/js/form-validator.min.js"></script>

	<script src="assets/js/contact-form-script.js"></script>

	<script src="assets/js/wow.min.js"></script>

	<script src="assets/js/main.js"></script>
</body>
</html>