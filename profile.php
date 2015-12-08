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
	<body class="right-sidebar">
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
							<div id="nav">
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
							</div>

					</header>
				</div>

			<!-- Main -->
			<?php
			/*
			 * @author: Jia Li, Girish Ramkumar, Steve Tubhongnee, Sophia Raji
			 * @since 9/20/2015
			 * @license html5up.net/license
			 */
date_default_timezone_set('America/Denver');
$servername = "localhost";
$username = "root";	//@var username
$password = "root";	//@var password
$dbname = "pet_finder";
$con = mysql_connect($servername, $username , $password);
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
 
 $db_select = mysql_select_db($dbname, $con);
if (!$db_select) {
	die("Database selection also failed miserably: " . mysql_error());
}
$date_field = date('Y-m-d', strtotime($_POST['dob']));

$sql = "INSERT INTO user (username, password, firstname, lastname, birth, phone, email, address)
VALUES
('$_POST[username]','$_POST[password]','$_POST[firstname]','$_POST[lastname]', '$date_field','$_POST[phone]','$_POST[email]','$_POST[address]')";
 
if (!mysql_query($sql, $con))
{
	die('Error: ' . mysql_error());
}
// $username = $_POST[username]
// echo $username
// echo "Welcome $_POST[username]!";
 
mysql_close($con)
?>
				<div id="main-wrapper">
					<div class="container">
						<div class="row 200%">
							<div class="8u 12u$(medium)">
								<div id="content">

									<!-- Content -->
										<article>

											<h2>Welcome back, <?php echo $_POST[username] ?></h2>

											<p>General Summary</p>	
											<h3>Your Info</h3>
											<p>Name: <?php echo $_POST[username] ?></p>
											<p>Address: <?php echo $_POST[address] ?></p>
											<ul><p>Contacts:</p>
												<li>Phone: <?php echo $_POST[phone] ?></li>
												<li>Email: <?php echo $_POST[email] ?></li>
											</ul>
											<h3>Your Pet</h3>
											<p></p> 
											
											<h3>Your Contracts</h3>
											<ul class="style2">
												<li><a href="#"><?php echo $_POST[email] ?></a></li>


											</ul>
										</article>

								</div>
							</div>
							<div class="4u 12u$(medium)">
								<div id="sidebar">

									<!-- Sidebar -->
										<section>
											<h3>Hello, <?php echo $_POST[username] ?></h3>
											<p></p>
											
											<footer>
												<a href="#" class="button icon fa-info-circle">Edit Account</a>
											</footer>
										</section>

										<section>
											<h3>More</h3>
											<ul class="style2">
												<li><a href="#">Your Info</a></li>
												<li><a href="#">Your Pet</a></li>
												<li><a href="#">Your contract</a></li>
												<!--<li><a href="#"></a></li>
												<li><a href="#">Amet ornare in hendrerit in lectus</a></li>
												<li><a href="#">Semper mod quisturpis nisi</a></li>-->
											</ul>
										</section>

								</div>
							</div>
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
