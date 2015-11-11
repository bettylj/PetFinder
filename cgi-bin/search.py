#!/usr/bin/env python

import MySQLdb
import cgitb

cgitb.enable()
db = MySQLdb.connect( host="localhost",
                        user="root",
                        passwd="Stv17091994.",
                        db="shirts4mike")
print "Content-type: text/html"
print
print "<html>"
print """
 <head>
                <title>PetFinder</title>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <link rel="stylesheet" href="../assets/css/main.css" />
 </head>
"""
print """
      <body class="homepage">
        <div id="page-wrapper">

                        <!-- Header -->
                                <div id="header-wrapper">
                                        <header id="header" class="container">

                                                <!-- Logo -->
                                                        <div id="logo">
                                                                <h1><a href="../main.html">PetFinder</a></h1>
                                                                <span></span>
                                                        </div>
                                                <!-- Search -->
                                                        <div id="inputbar">
                                                        <form id="search">
                                                                <input id="input">
                                                        </form>
                                                        </div>
                                                        <div id="searchbutton" onclick="/cgi-bin/search.py">
                                                                <a href="search.py"><img id="searchicon" src="http://s7.postimg.org/716v6z5wn/search_icon.png"></a>
                                                        </div>

                                                <!-- Nav -->
                                                        <nav id="nav">
                                                                <ul>

                                                                        <li class="current"><a href="../main.html">Home</a></li>

                                                                        <!--<li>
                                                                                <a href="#">Getting Started</a>
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
                                                                        <li><a href="left-sidebar.html">Pet Repo</a></li>
                                                                        <li><a href="right-sidebar.html">Helpful Websites</a></li>
                                                                        -->
	                                                               <li><a href="../profile.html">Profile</a>
                                                                                <ul>
                                                                                        <li><a href="../profile.html">Sign in</a></li>
                                                                                        <li><a href="../profile.html">My Account</a></li>
											<li><a href="../main.html">Sign out</a></li>
                                                                                </ul>
                                                                        </li>
 
								</ul>
                                                        </nav>
				</div>


 <!-- banner -->
                                <div id="banner-wrapper">
                                        <div id="banner" class="box container">
                                                <div class="row">
                                                        <div class="7u 12u(medium)">
                                                                <h2>Welcome to PetFinder</h2>
                                                                <p>Come and Give Your Future Companion a Home!</p>
                                                        </div>
                                                        <div class="5u 12u(medium)">
                                                                <!--<ul>
                                                                        <li><a href="#" class="button big icon fa-arrow-circle-right">Ok let's go</a></li>
                                                                        <li><a href="#" class="button alt big icon fa-question-circle">More info</a></li>
                                                                </ul>-->
                                                                <img id="dogbanner" src="../images/dogbanner.gif">
                                                        </div>
                                                </div>
                                        </div>
                                </div>



"""
print """
 <div id="main-wrapper">
 	<div class="container">
	<div class="row 200%">
 	<div class="8u 12u$(medium)">
"""


cur = db.cursor()
cur.execute("SELECT * FROM products")
print "<table border=1>"
print """
<tr>
<th>ID</th>
<td>Items</td>
</tr>
"""
#print all the first cell of the rows
for row in cur.fetchall():
	print "<tr>"
	print "<th>"
	print row[0]
	print "</th>"
	print "<td>"
	print row[1]
	print "</td>"
	print "</tr>"
print "</table>"
print """
 	</div>
	</div>
	</div>
 </div>
"""
print """
 <!-- Footer -->
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
                                                                                        <li><a href="#">Your Account</a></li>
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

                        <script src="../assets/js/jquery.min.js"></script>
                        <script src="../assets/js/jquery.dropotron.min.js"></script>
                        <script src="../assets/js/skel.min.js"></script>
                        <script src="../assets/js/util.js"></script>
                        <!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
                        <script src="../assets/js/main.js"></script>

        </body>

"""
















print "</html>"
