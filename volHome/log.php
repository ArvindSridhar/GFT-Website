<!DOCTYPE HTML>

<head>
	<title>GFT Volunteer Portal</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link rel="stylesheet" type="text/css" href="login.css">
	<!--<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
	<div class="headPage">	
		<div class="centerE">	    
		
			<img src="images/GFT Logo.png" alt="Logo"></img>  
		        <div class="textRow">
				<h1 class="special">Geography for Tomorrow Volunteer Portal</h1>
			</div>
			
		</div>
	</div>
	
	<nav class="navbar navbar-inverse navbar-fixed-top yellowBack">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html">GFT Volunteer Portal</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li><a href="index.html">Sign Up to Volunteer</a></li>
                <li class="active"><a href="log.html">Log Hours</a></li>
                <li><a href="help.php">Help</a></li>
              </ul>
              <p class="navbar-text navbar-right">Signed in as Arvind Sridhar (<a href= browse.php class="navbar-link">Sign Out</a>)</p>

            </div><!--/.nav-collapse -->
          </div>
        </nav>
	
	
	<h2 class="text-center">Log Your Hours</h2>
	
	
	<div class="container">
		<h3>Pick the event you want to log hours for:</h3>
		<div class="table-responsive">
		<table class="table" id="table">
			<thead>
			      <tr>
			        <th>Site Name</th>
			        <th>Date Signed Up</th>
			        <th>Coordinator</th>
			        <th>Action</th>
			      </tr>
			</thead>
			<tbody>
			      <tr>
			        <td>Sacred Heart Nativity</td>
			        <td>11/30</td>
			        <td>Lorraine Shepherd</td>
			   	<td><button class="btn btn-danger btn-xs">Remove</button></td>
			      </tr>
			      <tr>
			        <td>Clyde Fischer Middle School</td>
			        <td>12/01</td>
			        <td>James Rumohr</td>
			        <td><button class="btn btn-danger btn-xs">Remove</button></td>
			      </tr>
			      <tr>
			        <td>Miscellaneous</td>
			        <td>(None)</td>
			        <td>Arvind Sridhar</td>
			        <td><button class="btn btn-danger btn-xs">Remove</button></td>
			      </tr>
			</tbody>
		</table>
		<!--<label style="text-align:right;"><a href="#">Past sessions</a></label>-->
		</div>
		<h3 class="text-success" id="picked">Event picked: </h3>
		<script>
		$("#table tr").click(function(){
		   $(this).addClass('selected').siblings().removeClass('selected');    
		   var value1=$(this).find('td:first').html();
		   var date=" (".concat(($(this).find('td:nth-child(2)').html()).concat(')'));
		   var value=value1.concat(date);
		   var str1="Event picked: ";
		   var message=str1.concat(value);
		   $("#picked").empty();
		   $("#picked").append(message);
		   $("#hidden").show();
		});
		</script>
	</div>
	
	<div class="container hidden1" id="hidden">
		<h3>Log your hours</h3>
		<!--<form method="POST" name="logHours" id="logHours">-->
			<div class="formEl">
				<label>Direct Hours Spent:</label>
				<select name="dHours">
					<option value="0">0</option>
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
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
				</select> hour(s) and 
				<select name="dMins">
					<option value="00">00</option>
					<option value="15">15</option>
					<option value="30">30</option>
					<option value="45">45</option>
				</select> minutes
			</div>
			<div class="formEl">
				<label>Did you take any time to prepare before the session? (Includes revising and practicing curriculum, coordinating, preparing materials)</label>
				<input type="radio" name="radioName" value="yes" /> Yes
				<input type="radio" name="radioName" value="no" /> No 
			</div>
			<script>
			$('#logHours input').on('change', function() {
			   var value = $('input[name=radioName]:checked', '#logHours').val();
			   if (value=="yes") {
			   	$("#hidden2").show();
			   }
			   if (value=="no") {
			   	$("#hidden2").hide();
			   }
			});
			</script>
			<div class="formEl hidden1" id="hidden2" style="margin-left:5em;">
				<label>Hours Spent:</label>
				<select name="pHours">
					<option value="0">0</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select> hour(s) and 
				<select name="pMins">
					<option value="00">00</option>
					<option value="15">15</option>
					<option value="30">30</option>
					<option value="45">45</option>
				</select> minutes
				<br/>
				<label class="text-warning">Be prepared to provide evidence for your preparation time</label>
			</div>
			<div class="formEl">
				<label>What did you cover in this session?</label>
				<input type="text"/>
			</div>
			<div class="formEl">
				<label>How many students attended this session?</label>
				<input type="text"/>
			</div>
			<div class="formEl">
				<label>How many volunteer teachers came to this session?</label>
				<input type="text"/>
			</div>
			<div class="formEl">
				<label>What were some of the best moments from this session?</label>
				<input type="text"/>
			</div>
			<div class="formEl">
				<label>What can be done in the future to improve this session?</label>
				<input type="text"/>
			</div>
		<!--</form>-->
		<button class="btn btn-info" id="send">Submit</button>
		<script>
			$("#send").click(function () {
			    $.ajax({
			        type: 'post',
			        url: 'logSub.php',
			        data: {
			            source1: "hello";
			        },
			        success: function( data ) {
			            console.log( data );
			        }
			    });
			});
		</script>
	</div>
	
</body>
</html>