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
									<li><a href="search.html">Adopt</a></li>
									<li class="current"><a>Profile</a>
                                                                                <ul>
                                                                                        <li><a href="signup.php">Sign up</a></li>
                                                                                        <li><a href="profile.php">My Account</a></li>
										</ul>
									</li>
								</ul>
							</nav>

					</header>
				</div>
			<br>
			<!-- Main -->

				<div id="main-wrapper">
					<div class="container">
						<div id="content">

							<!-- Registration -->
							
							<form action="profile.php" method="post" id="contactform">
							<label>Username:</label>
							<input id="username" placeholder="username" type="text" name="username" style="width:400px" required>
							<label>Password:</label>
							<input id="password" placeholder="password" type="password" name="password" style="width:400px" required>
							<label>Name:</label>
							<div style="display: block">
							<div style="float:left; padding-right:10px;">
								<input id="firstname" placeholder="first name" type="text" name="firstname" style="width:300px;"required>
							</div>
							
							<div style="float:left">
                                                        	<input id="lastname" placeholder="last name" type="text" name="lastname" style="width:300px;" required>
							</div>
							</div>
							<fieldset>
							<label>Birthday(month/day/year):</label>
								<input id="birthday" name="birthday" placeholder="10/30/1990" maxlength="10" type="text" style="width:400px" required>
							</fieldset>
							<label>Phone:</label>
							<input id="phone" placeholder="3031234567"type="text" name="phone" style="width:400px;" required>
							<label>Email:</label>
							<input id="email" placeholder="example@domain.com" type="text" name="email" style="width:600px"required>
							<label>Address:</label>
							<input id="address" placeholder="street, city, state, zipcode" type="text" name="address" style="width:600px" required>
							<br>
							<input class="buttom" name="submit" id="submit" type="submit" value="Sign up"></button>
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
                                                                                        <li><a href="search.html">Quick Search</a></li>
                                                                                        <li><a href="search.html">Optimized Search</a></li>
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
                                                                                        <li><a href="search.html">Get Started</a></li>
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
                                                                                        <li><a href="profile.html">Your Account</a></li>
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
