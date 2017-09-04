<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<LINK REL="SHORTCUT ICON" HREF="images/gftLogo.ico">
		<title>Geography for Tomorrow - Register</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <style type="text/css">
            html, body {
                max-width: 100%;
            }
        </style>
        <script type="text/javascript">
        $(document).ready(function(){
            var validCharactersRegex = /^[A-Z][a-z]+[ ][A-Z][a-z]+/i;
            function fullname_valid(value) {
                return validCharactersRegex.test(value);
            }
            $.validator.addMethod("NumbersOnly", function(value, element) {
                return this.optional(element) || /^[0-9\-\+\(\)\ ]+$/i.test(value);
            }, "Phone must contain only numbers, spaces, (), + and -");
            $.validator.addMethod("ProperEmail", function(email) {
              var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
              return regex.test(email);
            }, "This is not a valid Email address");
            $.validator.addMethod("FullName", function(value, element) {
		    return fullname_valid(value);}, "Please enter full name");
            $("#application").validate();
        });
        </script>
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">
            <script type=text/javascript>
            function scrollTo(hash) {
                location.hash = "#" + hash;
            }
            </script>

				<!-- Header -->
				    <header id="header"> 
                        <h1><a href="index.html">Geography for Tomorrow</h1>
                        <h1><img src="images/GFT%20Logo.png" href="index.html" /></h1>
						<nav id="nav">
							<ul>
                                <li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>
											<li><a href="about.html">About</a></li>
											<li><a href="courses.html">Programs and Courses</a></li>
                                            <li><a href="studentregistration.php">Register for a Session</a></li>
											<li><a href="join.html">Join Us: Start a Chapter</a></li>
											<li><a href="volunteer.html">Volunteer for GFT</a></li>
                                            <li> <a href="locations.html">Locations</a></li>
                                            <li> <a href="media.html">Media and Blog</a></li>
                                            <li> <a href="photos.html">Photos and Videos</a></li>
                                            <li> <a href="resources.html">Resources</a></li>
                                            <li> <a href="newsview/" target="_blank">NewsView</a></li>
                                            <li><a href="http://geoday.eventbrite.com">GeoDay</a></li>
                                            <li><a href="login.html">Log In</a></li>
										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>	

				<!-- Main -->
					<article id="main">
                        <header>
                            <div class = "boxTitle3">
                                <h2>Register for a GFT Session</h2>
                            </div>
                        </header>
                        
						<section id="one" class="wrapper style1 special">
                            <div class="infoBlock infoBlock2 centerVertically wideDivElement3">
                                <div class="smallSectiontxt leftSpace topItem lessSpaceB">
                                <h2 class=blue>Expand your worldview and gain knowledge in the geographical sciences</h2>
                                <p class="blue biggerP">
                                Learn with your peers through fun activities and videos. Cultivate and apply your critical thinking skills to understanding global phenomena. Explore the reaches of space and discover new places on the map. No prior knowledge is needed; you will be amazed at how much you learn! Check out the <a href="courses.html" target="_blank">programs we offer</a> and our <a href="locations.html" target="_blank">locations</a>.</p>  
                                </div>
                                <div class="smallSectionimg">
                                    <img src="images/SFriends2.jpg" alt="Sunday Friends Session">
                                    </img>
                                </div>   
                            </div>
                            
                            <div class="rowInputs adjustedOrient wideDivElement2"><p><b>Register for a Geography for Tomorrow session today!</b></p></div>
                            <form action="studentReg.php" method=post name="register" id="register">
                                
                                <div class="rowInputs">
                                    <div class="inputItems addSpaceFormBelow firstItemInForm"><label>What is your (parent's) full name?</label>
                                    <input class="FullName" type="textField" name="pName" id="pName" placeholder="Full Parent Name" required /></div>
                                    <div class="inputItems addSpaceFormBelow"><label>What is your student's full name?</label>
                                    <input class="FullName" type="textField" name="sName" id="sName" placeholder="Full Student Name" required /></div>
                                    <div class="inputItems lastItem"><label>City, state, and country of residence</label>
                                    <input type="textField" name="address" id="address" placeholder="City, State, and Country" required /></div>
                                </div>
                               
                                <div class="rowInputs">
                                    <div class="inputItems wider2 addSpaceFormBelow"><label>What is your (parent's) email address?</label>
                                    <input class="textField" type="email" name="email" id="email" placeholder="Email Address" required /></div>
                                    <div class="inputItems"><label>Student's school name</label>
                                    <input type="textField" name="school" id="school" placeholder="School Name" required/></div>
                                </div>
                                
                                <div class="rowInputs">
                                    <div class="inputItems addSpaceFormBelow"><label>Student's grade level</label>
                                    <select class="textField required" name="grade" form="register">
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                    </select></div>
                                    <div class="inputItems wider2 addSpaceFormBelow"><label>What program are you interested in attending?</label>
                                    <select class="textField required" name="program" form="register">
                                        <?php
                                            include_once("config.php");

                                            $conn = new mysqli($servername, $username, $password, $dbname);

                                            if ($conn->connect_error) {
                                                die("Connection failed: " . $conn->connect_error);
                                            }

                                            $sql = "SELECT * FROM `Sessions`";
                                            if(!$result = $conn->query($sql)){
                                                die('There was an error running the query [' . $conn->error . ']');
                                            }

                                            while ($row = $result->fetch_assoc()) {
                                                $code = $row['Session Code'];
                                                $disc = $row['Session Name'];
                                                echo "<option value='$code'>$disc</option>";
                                            }
                                          ?>
                                    </select></div>
                                </div>
                                
                                <div class="rowInputs">
                                    <div class="inputItems wider4"><label>Comments (optional)</label>
                                    <textarea name="comments" placeholder="Any Additional Comments (Course/Location Preference, etc.)"></textarea></div>
                                </div>
                                
                                <button class="button special buttonBlue submitForm makeSureButtonGood" type=submit form=register />Register</button>
                            
                            </form>
                        
                        </section>
					</article>

				<!-- Footer -->
					<footer id="footer">
						<ul class="icons">
							<li><a href="https://twitter.com/geofortomorrow" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="https://www.facebook.com/geofortomorrow" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="https://instagram.com/geofortomorrow/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a class="icon fa-wordpress" href="https://geofortomorrow.wordpress.com/"target="_blank"><span class="label">Wordpress</span></a></li>
                            <li><a class="icon fa-google-plus" href="https://plus.google.com/b/112338697611267195985/+GeofortomorrowOrg2013/posts"target="_blank"><span class="label">Google+</span></a></li>
                            <li><a class="icon fa-youtube" href="https://www.youtube.com/channel/UCDxEG3lYqkKxw8CqAgBXsCw/feed"target="_blank"><span class="label">YouTube+</span></a></li>
						</ul>
						<p>Geography for Tomorrow is a 501(c)3 nonprofit organization <br> EIN: 47-4670501 <br> <a href="mailto:contact@geofortomorrow.org" style="border: none;">contact@geofortomorrow.org</a></p>
                        <ul class="copyright">
							<li>&copy; 2016 Geography for Tomorrow</li>
                            <li>Web Design/Maintenance: <a href="http://www.arvindpsridhar.com" target="_blank">Arvind Sridhar</a></li>
						</ul>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>