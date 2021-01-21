<link rel="stylesheet" href="assets/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/css/animate.min.css">

<link rel="stylesheet" href="assets/css/meanmenu.css">

<link rel="stylesheet" href="assets/css/boxicons.min.css">

<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">

<link rel="stylesheet" href="assets/css/magnific-popup.min.css">

<link rel="stylesheet" href="assets/css/nice-select.min.css">

<link rel="stylesheet" href="assets/css/style.css">

<link rel="stylesheet" href="assets/css/responsive.css">
</head>
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


	<div class="top-header-area bg-ffffff">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="breaking-news-content">
						<h6 class="breaking-title">
							Breaking News:
						</h6>
						<div class="breaking-news-slides owl-carousel owl-theme">

							<?php $dd = fetcher();

							foreach ($dd as $key => $value) {
								echo '
								<div class="single-breaking-news">
									<p>
										<a href="news.php?read='.$value["heading"].'&dataID='.$value["id"].'">'.substr($value["heading"], 0, 46).' ....</a>
									</p>
								</div>
								';if ($key >= 1) {break;}
							}
							 ?>							
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="top-header-others">
						<li>
							<div class="languages-list">
								<select>
									<option value="1">English</option>
									<option value="2">العربيّة</option>
									<option value="3">Deutsch</option>
									<option value="3">Português</option>
									<option value="3">简体中文</option>
								</select>
							</div>
						</li>
						<li>
							<i class='bx bx-user'></i>
							<a href="login.html">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="navbar-area">
		<div class="main-responsive-nav">
			<div class="container">
				<div class="main-responsive-menu">
					<div class="logo">
						<a href="/">
							<img src="assets/img/TRIPODMEDIALOGO.png" height="55px;" width="50px;" alt="image">
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="main-navbar">
			<div class="container">
				<nav class="navbar navbar-expand-md navbar-light">
					<a class="navbar-brand" href="/">
						<img src="assets/img/TRIPODMEDIALOGO.png" height="80px;" width="80px;" alt="image">
					</a>
					<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="index.php" class="nav-link">
									Home
								</a>
							</li>
							<li class="nav-item">
								<a href="index-3.html#" class="nav-link">
									News
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="news.php?fetchTypeLoc=Ogun State" class="nav-link">
											OGUN
										</a>
									</li>
									<li class="nav-item">
										<a href="news.php?fetchTypeLoc=Nigeria" class="nav-link">
											NIGERIA
										</a>
									</li>
									<li class="nav-item">
										<a href="news.php?fetchTypeLoc=AFRICA" class="nav-link">
											AFRICA
										</a>
									</li>
									<li class="nav-item">
										<a href="news.php?fetchTypeLoc=World" class="nav-link">
											WORLD
										</a>
									</li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="news.php?fetchTypeCat=Uncategorized" class="nav-link">
									Uncategorized
								</a>
							</li>
							<li class="nav-item">
								<a href="news.php?fetchTypeCat=Entertainment" class="nav-link">
									Entertainment
								</a>
							</li>
							<li class="nav-item">
								<a href="news.php?fetchTypeCat=Technology" class="nav-link">
									Technology
								</a>
							</li>
							<li class="nav-item">
								<a href="news.php?fetchTypeCat=Sport" class="nav-link">
									Sport
								</a>
							</li>
							<li class="nav-item">
								<a href="index-3.html#" class="nav-link">
									Programs
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="news.html" class="nav-link">
											News
										</a>
									</li>
									<li class="nav-item">
										<a href="news-right-sidebar.html" class="nav-link">
											News right sidebar
										</a>
									</li>
								</ul>
							</li>

							<li class="nav-item">
								<a href="index-3.html#" class="nav-link">
									Pages
									<i class='bx bx-chevron-down'></i>
								</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a href="about-us.html" class="nav-link">
											About us
										</a>
									</li>
									<li class="nav-item">
										<a href="index-3.html#" class="nav-link">
											Account
											<i class='bx bx-chevron-down'></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="login.html" class="nav-link">
													Login
												</a>
											</li>
											<li class="nav-item">
												<a href="register.html" class="nav-link">
													Register
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-item">
										<a href="contact.html" class="nav-link">
											Contact
										</a>
									</li>
								</ul>
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
