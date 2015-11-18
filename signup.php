<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>PetFinder</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="main.php">PetFinder</a></h1>
								<span></span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li><a href="main.php">Home</a></li>
									<!--<li>
										<a href="#">Dropdown</a>
										<ul>
											<li><a href="#">Lorem ipsum dolor</a></li>
											<li><a href="#">Magna phasellus</a></li>
											<li>
												<a href="#">Phasellus consequat</a>
												<ul>
													<li><a href="#">Lorem ipsum dolor</a></li>
													<li><a href="#">Phasellus consequat</a></li>
													<li><a href="#">Magna phasellus</a></li>
													<li><a href="#">Etiam dolore nisl</a></li>
												</ul>
											</li>
											<li><a href="#">Veroeros feugiat</a></li>
										</ul>
									</li>
									<li><a href="left-sidebar.html">Left Sidebar</a></li>
									<li><a href="right-sidebar.html">Right Sidebar</a></li>-->
									<li class="current"><a href="profile.php">Profile</a>
                                                                                <ul>
                                                                                        <li><a href="signup.php">Sign up</a></li>
                                                                                        <li><a href="profile.php">My Account</a></li>
										</ul>
									</li>
								</ul>
							</nav>

					</header>
				</div>

			<!-- Main -->
				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Registration -->
							<form action="profile.php" method="post">
							<li><p>Username:<input name="username"></p></li>
							<li><p>Password:<input name="password" type="password"></p></li>
							<li><p>First Name:<input name="firstname"> Last Name:<input name="lastname"></p></li>
							<li><p>Birthday(month/day/year):<input name="dob"></p></li>
							<!-- <li><p>Occupation:<input id="occupation"></p></li> -->
							<li><p>Phone:<input name="phone"></p></li>
							<!-- <li><p>Work Phone:<input id="workphone"></p></li> -->
							<li><p>Email:<input name="email"></p></li>
							<li><p>Address:<input name="address"></p></li>

							<input type="submit" />
							</form>
						</div>
					</div>
				</div>

<!--Footer -->
                                <div id="footer-wrapper">
                                        <footer id="footer" class="container">
                                                <div class="row">
                                                        <div class="3u 6u(medium) 12u$(small)">

                                                                <!-- Links -->
                                                                        <section class="widget links">
                                                                                <h3>PetFinder</h3>
                                                                                <ul class="style2">
                                                                                        <li><a href="#">Quick Search</a></li>
                                                                                        <li><a href="#">Optimized Search</a></li>
                                                                                        <li><a href="#">Local Hosts</a></li>
                                                                                        <li><a href="#"></a></li>
                                                                                        <li><a href="#"></a></li>
                                                                                </ul>
                                                                        </section>

                                                        </div>
                                                        <div class="3u 6u$(medium) 12u$(small)">

                                                                <!-- Links -->
                                                                        <section class="widget links">
                                                                                <h3>Let us tell you</h3>
                                                                                <ul class="style2">
                                                                                        <li><a href="#">About us</a></li>
                                                                                        <li><a href="#">Get Started</a></li>
                                                                                        <li><a href="#">Contracts</a></li>
                                                                                        <li><a href="#">Policies</a></li>
                                                                                        <li><a href="#"></a></li>
                                                                                </ul>
                                                                        </section>

                                                        </div>
                                                        <div class="3u 6u(medium) 12u$(small)">

                                                                <!-- Links -->
                                                                        <section class="widget links">
                                                                                <h3>Let us help you</h3>
                                                                                <ul class="style2">
                                                                                        <li><a href="profile.php">Your Account</a></li>
                                                                                        <li><a href="#">Your contracts</a></li>
                                                                                        <li><a href="#">Customer Service</a></li>
                                                                                        <li><a href="#"></a></li>
                                                                                        <li><a href="#"></a></li>
                                                                                </ul>
                                                                        </section>

                                                        </div>
                                                        <div class="3u 6u$(medium) 12u$(small)">
                                                                <!-- Contact -->
                                                                        <section class="widget contact last">
                                                                                <h3>Contact Us</h3>
                                                                                <ul>
                                                                                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                                                                                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                                                                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                                                                                        <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                                                                        <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                                                                                </ul>
                                                                                <p>University of Colorado at Boulder<br />
                                                                                Boulder, CO 803XX<br />
                                                                                (303) xxx - xxxx</p>
                                                                        </section>

                                                        </div>
                                                </div>
                                                <div class="row">
                                                        <div class="12u">
                                                                <div id="copyright">
                                                                        <ul class="menu">
                                                                                <li>&copy; PetFinder. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </footer>
                                </div>

                        </div>



		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
