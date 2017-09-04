<?PHP
$email = $_POST["email"];
$name = $_POST["name"];
$pname = $_POST["pName"];
$phone = $_POST["phone"];
$age = $_POST["age"];
$grade = $_POST["grade"];
$prof = $_POST["proflev"];
$staff = $_POST["Staff"];
$day = $_POST["Day"];
$why = $_POST["why"];
$future = $_POST["future"];
$canHandle = $_POST["canHandle"];
$school = $_POST["school"];
$sites = $_POST["sites"];
$courses = $_POST["courses"];
$agree = $_POST["agree"];

$staffs = "";
foreach ($staff as $value) {
    $staffs.=$value." ";
}
$days = "";
foreach ($day as $value1) {
    $days.=$value1." ";
}
$to = "arvind@geofortomorrow.org";
$subject = "New GFT Joinee";
$headers = "From: join@geofortomorrow.org";
$message = "Another person wants to join Geography for Tomorrow!\n
Name: $name
Parent's name: $pname
Email address: $email
Phone number: $phone
Age: $age
Grade level: $grade
School: $school
Proficiency level in geography: $prof
Wants to join: $staffs
Days available: $days
Can handle it: $canHandle
Sites wants to teach at: $sites
Courses wants to teach: $courses
Why he/she wants to join: $why
Vision for the future: $future
Has read volunteer agreement form: $agree";
mail($to,$subject,$message,$headers);
$my_subject = "Thank you for applying to volunteer for GFT";
$message2 = "Dear $name,\n\nThank you for filling out Geography for Tomorow's Volunteer Application. We have processed all of your responses and will get back to you with a decision shortly.\n\nSincerely yours,\nGeography for Tomorrow Staff";
mail($email,$my_subject,$message2,$headers);

	/*function mail_attachment($filename, $path, $mailto, $from_mail, $from_name, $replyto, $subject, $message) {
	
	    $file = $path.$filename;
	    $file_size = filesize($file);
	    $handle = fopen($file, "r");
	    $content = fread($handle, $file_size);
	    fclose($handle);
	    $content = chunk_split(base64_encode($content));
	    
	    $uid = md5(uniqid(time()));
	    
	    $header = "From: ".$from_name." <".$from_mail.">\r\n";
	    $header .= "Reply-To: ".$replyto."\r\n";
	    $header .= "MIME-Version: 1.0\r\n";
	    $header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
	    $header .= "This is a multi-part message in MIME format.\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-type:text/plain; charset=iso-8859-1\r\n";
	    $header .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
	    $header .= $message."\r\n\r\n";
	    $header .= "--".$uid."\r\n";
	    $header .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
	    $header .= "Content-Transfer-Encoding: base64\r\n";
	    $header .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
	    $header .= $content."\r\n\r\n";
	    $header .= "--".$uid."--";
	    
	    // Messages for testing only, nobody will see them unless this script URL is visited manually
	    if (mail($mailto, $subject, "", $header)) {
	        echo "Message sent!";
	    } else {
	        echo "ERROR sending message.";
	    }
	    
	}
		
	// Only accept POSTs from authenticated source
	if ($_POST['HandshakeKey'] != 'secret-handshake-key') {
	  echo "<h1>Thank you, your application has been received</h1>";
		die();
	}
	
	
	
	// EDIT FROM HERE DOWN TO 
	// CUSTOMIZE EMAIL
	
	
	
	// File to attach
	$my_file = "volAgreement.pdf";
	$my_path = "http://dev.geofortomorrow.org/volAgForm.pdf";
	
	// Who email is FROM
	$my_name    = "Geography for Tomorrow";
	$my_mail    = "join@geofortomorrow.org";
	$my_replyto = "join@geofortomorrow.org";
	
	// Whe email is going TO
	$to_email   = "$email";
	
	// Subject line of email
	$my_subject = "Thank you for applying to volunteer for GFT";
	
	// Content of email message (Text only)
	$message     = "Dear $name,\n Thank you for fililng out Geography for Tomorow's Online Volunteer Application. Please fill out our volunteer agreement form, attached to this email, and reply to this email with a completed form.";
	
	// Call function to send email
	mail_attachment($my_file, $my_path, $to_email, $my_mail, $my_name, $my_replyto, $my_subject, $message);*/
?>

<html>
	<head>
		<LINK REL="SHORTCUT ICON" HREF="images/gftLogo.ico">
		<title>Join Geography for Tomorrow</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
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
											<li><a href="start.html">Start a Session</a></li>
											<li><a href="volunteering.html">Volunteering</a></li>
                                            <li> <a href="locations.html">Locations</a></li>
                                            <li> <a href="media.html">Media and Blog</a></li>
                                            <li> <a href="photos.html">Photos and Videos</a></li>
                                            <li> <a href="resources.html">Resources</a></li>
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
                                <h2>Volunteer for Geography for Tomorrow</h2>
                            </div>
                        </header>
                        
						<section id="one" class="wrapper style1 special">
                            <div class="rowInputs adjustedOrient2 wideDivElement2"><p>Thank you for applying to become a Geography for Tomorrow volunteer! Our staff will process your form responses and get back to you shortly.</p></div>
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