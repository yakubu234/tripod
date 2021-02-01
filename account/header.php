<!doctype html>
<html lang="zxx">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tripod Media Company|  </title>
	<link rel="icon" type="image/png" href="../assets/img/TRIPODMEDIALOGO.png">
	<meta name="description" content=" Admin Dashboard;"/>
	<meta name="keywords" content="keyword1, keyword2"/>
	<meta name="author" content="TripodTimes"/>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="../assets/css/animate.min.css">

	<link rel="stylesheet" href="../assets/css/meanmenu.css">

	<link rel="stylesheet" href="../assets/css/boxicons.min.css">

	<link rel="stylesheet" href="../assets/css/owl.carousel.min.css">

	<link rel="stylesheet" href="../assets/css/owl.theme.default.min.css">

	<link rel="stylesheet" href="../assets/css/magnific-popup.min.css">

	<link rel="stylesheet" href="../assets/css/nice-select.min.css">

	<link rel="stylesheet" href="../assets/css/style.css">

	<link rel="stylesheet" href="../assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../DataTables/datatables.min.css"/>
</head>
<body>
<body>

	<div class="preloader">
		<div class="loader">
			<div class="wrapper">
				<div class="circle circle-1"></div>
				<div class="circle circle-1a"></div>
				<div class="circle circle-2"></div>
				<div class="circle circle-3"></div>
			</div>
			<span>Loading...</span>
		</div>
	</div>


	<div class="navbar-area">
		<div class="main-responsive-nav">
			<div class="container">
				<div class="main-responsive-menu">
					<div class="logo">
						<a href="">
							<img src="../assets/img/TRIPODMEDIALOGO.png" height="55px;" width="50px;" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-navbar">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="">
						<img src="../assets/img/TRIPODMEDIALOGO.png" height="80px;" width="80px;" alt="image">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="dashboard.php" class="nav-link">
									Home
								</a>
							</li>
							<li class="nav-item">
								<a href="post.php" class="nav-link">
									New Post
								</a>
							</li>
							<?php
							if ($adtype == 'super') {
								echo '<li class="nav-item">
								<a href="users.php" class="nav-link">
								Users
								</a>
								</li>';
							}
							?>
							
							<li class="nav-item">
								<a data-bs-toggle="modal" data-bs-target="#staticBackdrop1"  class="nav-link">
									Profile
								</a>
							</li>
							<li class="nav-item">
								<a href="logut.php" class="nav-link">
									Logout
								</a>
							</li>							
						</ul>
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<form class="search-box">
									<input type="text" class="form-control" placeholder="Search for..">
									<button type="submit"><i class='bx bx-search'></i></button>
								</form>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
		<div class="others-option-for-responsive">
			<div class="container">
				<div class="dot-menu">
					<div class="inner">
						<div class="circle circle-one"></div>
						<div class="circle circle-two"></div>
						<div class="circle circle-three"></div>
					</div>
				</div>
				<div class="container">
					<div class="option-inner">
						<div class="others-options d-flex align-items-center">
							<div class="option-item">
								<form class="search-box">
									<input type="text" class="form-control" placeholder="Search for..">
									<button type="submit"><i class='bx bx-search'></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">Add new user</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="fetcher.php?datas=AddUser" method="POST" >
						<div class="mb-3">
							<label for="exampleFormControlInput11" class="form-label">full name</label>
							<input type="text" class="form-control" name="name" id="exampleFormControlInput11" placeholder="full name"  required="">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"  required="">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">password</label>
							<input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password"  required="">
						</div>

						<div class="mb-3">
							<label for="exampleFoarmControlInput1" class="form-label">Phone</label>
							<input type="text" class="form-control" name="phone" id="exampleFoarmControlInput1" placeholder="phone number"  required="">
						</div>
						<div class="mb-3">
							<select class="form-select form-control" name="gender" required="" >
								<option selected disabled="">gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<button type="submit" style="float: right;" class="btn btn-success">Add User</button>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- modal ended -->
	<!-- Modal profile -->
	<div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="staticBackdropLabel">User Profile</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form action="fetcher.php?datas=editUser" method="POST" >
						<div class="mb-3">
							<label for="exampleFormControlInput11" class="form-label">full name</label>
							<input type="text" class="form-control" name="name" id="exampleFormControlInput11" placeholder="full name" value="<?php echo $name; ?>"  required="">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $ademail; ?>" required="">
						</div>
						<div class="mb-3">
							<label for="exampleFormControlInput1" class="form-label">password</label>
							<input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password"  value="<?php echo $status; ?>"  required="">
						</div>
						<div class="mb-3">
							<select class="form-select form-control" name="gender" required="" >
								<option selected disabled="">gender</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
						</div>
						<input type="hidden" value="<?php echo $adId; ?>" name="stuid">
						<button type="submit" style="float: right;" class="btn btn-success">Update Information</button>
					</form>

				</div>
			</div>
		</div>
	</div>
	<!-- modal ended -->
