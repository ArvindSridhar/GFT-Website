<?php
	include_once("config.php");

	$name = $_POST["name"];
	$category = $_POST["category"];
	$question = $_POST["question"];
	$answer = $_POST["answer"];
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
	$sql = "INSERT INTO `Students`.`Questions` (`Name`,`Category`,`Question`,`Answer`) VALUES ('$name', '$category', '$question', '$answer')";
	
	if(!$result = $conn->query($sql)){
	    die('There was an error running the query [' . $conn->error . ']');
	}
?>

<!DOCTYPE HTML>

<html>
	<head>
		<title>Geography for Tomorrow</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
        	<script src="js/main.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		
		
		<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
	        <script>
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
			    return fullname_valid(value);
			}, "Please enter full name");
	
	            $("#application").validate();
	          });
	        </script>
	        <style>
		        .error {
		            font-family: 'Avenir', sans-serif;
		            font-weight: 400;
		            color: #ff0000;
		            font-size: 11.5pt;
		            text-transform:capitalize;
		        }
		        
		        input[type="checkbox"], input[type="radio"]
		        {
		            margin-right:6px;
		            margin-left:30px;
		        }
		        
		        input[type="date"]
		        {
		            padding-left:20px;
		            pading-top: 15px;
		            border-radius: 8px;
		        }
		        
		</style>
	</head>
	
    <body class="homepage">
    
   
    
    <main class="homepage"> 
	      <nav id="nav" class="skel-layers-fixed">
		<ul>   
                    <featured><h3 class="orgName"><a href="index.html">Geography for Tomorrow</a></h3></featured>		
		    <li> <p><a href="about.html">About</a></p> </li>
                    <li>
			<p><a href="courses.html">Programs and Courses</a></p>
			<ul>
				<li><a href="certprogs.html">Certificate Programs</a></li>
				<li><a href="#">Summer Sessions</a></li>
				<li>
					<a href="#">Special Sessions</a>
					<ul>
						<li><a href="#">Winter Break</a></li>
						<li><a href="#">Spring Break</a></li>
						<li><a href="#">Geography Bee Training</a></li>
					</ul>
				</li>
				<li>
					<a href="#">Learn Remotely</a>
					<ul>
						<li><a href="#">Apps</a></li>
						<li><a href="#">Online Course</a></li>
						<li><a href="#">Videos</a></li>
	                                </ul>
				</li>
			</ul>
		    </li>
		    <li> <p><a href="start.html">Start a Session</a></p> </li>
		    <li> <p><a href="volunteering.html">Volunteering</a></p></li>
		    <li> <p><a href="#">More</a> </p>
			    <ul>
				<li> <a href="locations.html">Locations</a></li>
				<li> <a href="media.html">Media and Blog</a></li>
				<li> <a href="photos.html">Photos and Videos</a></li>
				<li> <a href="resources.html">Resources</a></li>
			    </ul>
		    </li>		
		    <li> <p><a href="login.html">Log In</a></p></li>
		</ul>
	    </nav>

	<div id="banner-wrapper2">
		<section id="banner">
			<h2>Submit Questions to Feature on our Website</h2>
		</section>
	</div>
			
 
        <div id="main-wrapper"> <div id="main" class="container"> <div class="row 200%"> <div class="12u">
        	<div class="section">
        		<div class="smallSectiontxt_thin left">
	        		<h2>Thank you for submitting your question!</h2>
	        		<a href="submitquestions.html" class="button buttonBlue">Submit another question</a>
	        	</div>
	        	<div class="smallSectionimgUp">
	        		<img src="images/SFriends1.jpg" alt="Sunday Friends Session" />
	        		<h2 class="major"><span>Program Descriptions</span></h2>
	        		<h5 class="firstDisc">5-week Certificate Program in Geography</h5><p style="margin-top:-10px;font-size:13px;line-height:20px;">In this program, students will explore the political, physical, and cultural features of our world. Through fun activities, videos, and discussions, students will learn about topics ranging from the workings of government to the perils of climate change.</p>
	        		<h5 style="margin-top:10px;">5-week Space Science Certificate Program</h5><p style="margin-top:-10px;font-size:13px;line-height:20px;">In this program, students will explore the universe. Starting with the solar system, students will learn about what forms planets, the dynamics of stars, and the interesting orbits of asteroids and comets. Then, students will discuss the origins of our universe, the fundamental building blocks of matter, and black holes.</p>
	        		<h5 style="margin-top:10px;">5-week GeoCoding Certificate Program</h5><p style="margin-top:-10px;font-size:13px;line-height:20px;">In this program, students will learn about the fundamentals of mapping technologies, used by companies like Google Maps and Esri today. As students explore the power of maps in tracking and monitoring different phenomena, they will create their own map-based web/mobile applications.</p>
	        	</div>
	        </div>
        		
        </div> </div> </div> </div>
        
        <div id="bgFoot">
	
		<footer id="footer" class="container"> 
		<div class="row 100%">
		<div class="12u">
                        <h2>Join our Mailing List</h2>
                        <div>
                                <form method="POST" action="subscribe.php"> 
                                    <div style="width:30%;float:left;"><input id="email" name="email" placeholder="Your Email Address" /></div>
                                    <div style="float:left;margin-left:-1.3em;"><button class="joinFot" type="submit">Subscribe</button></div>
                                </form>
                        </div>
                        
                        <h2 style="clear:left;margin-top:2.8em;"><span>Get in Touch</span></h2>
				<ul class="contact" >
					<li><a class="icon fa-facebook" href="https://www.facebook.com/geofortomorrow" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a class="icon fa-twitter" href="https://twitter.com/geofortomorrow"target="_blank"><span class="label">Twitter</span></a></li>
					<li><a class="icon fa-instagram" href="https://instagram.com/geofortomorrow/"target="_blank"><span class="label">Instagram</span></a></li>
					<li><a class="icon fa-wordpress" href="https://geofortomorrow.wordpress.com/"target="_blank"><span class="label">Wordpress</span></a></li>
					<li><a class="icon fa-google-plus" href="https://plus.google.com/b/112338697611267195985/+GeofortomorrowOrg2013/posts"target="_blank"><span class="label">Google+</span></a></li>
                                	<li><a class="icon fa-youtube" href="https://www.youtube.com/channel/UCDxEG3lYqkKxw8CqAgBXsCw/feed"target="_blank"><span class="label">YouTube+</span></a></li>
				</ul>
		</div>
		</div>

	
		<div id="copyright">
			<ul class="menu">
				<li>Copyright &copy; 2015 Geography for Tomorrow. All rights reserved</li>
			</ul>
		</div>
		</footer>
        </div>  
</main>        
</body>
</html>