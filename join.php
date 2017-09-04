<?PHP
    include_once("config.php");

    $name = $_POST["name"];
    $title = $_POST["title"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $school = $_POST["school"];
    $why = $_POST["why"];
    
    /*$message = "Name: $name | Class: $class";
    $to = "arvind@geofortomorrow.org";
    $subject = "Joining GFT from Club Day";
    $headers = "From: join@geofortomorrow.org";
    mail($to,$subject,$message,$headers);*/
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname2);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	$sql2 = "INSERT INTO `VolunteerData`.`JoinResponses` (`Name`,`Description/Title`,`Location`,`Email Address`,`School`,`Reason Joining`) VALUES ('$name', '$title', '$address', '$email', '$school', '$why')";
	
	if(!$result2 = $conn->query($sql2)){
	    die('There was an error running the query [' . $conn->error . ']');
	}
?>


<html>
	<head>
		<LINK REL="SHORTCUT ICON" HREF="images/gftLogo.ico">
		<title>Geography for Tomorrow</title>
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
                                <h2>Join Geography for Tomorrow</h2><!--: Start a New Chapter</h2>-->
                            </div>
                        </header>
                        
						<section id="one" class="wrapper style1 special">
                            <div class="rowInputs adjustedOrient2 wideDivElement2"><p>Thank you for your interest in Geography for Tomorrow! Our staff will process your form responses and get back to you shortly.</p></div>
                            <a href="index.php" class="button special buttonBlue spaceBelowButton" />Back to GFT Home</a>
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