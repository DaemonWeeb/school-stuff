<?php

$servername = "localhost";
$username = "brendanewing";
$password = "brendanewingpass";
$dbname = "csit101";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 




$sql = "INSERT INTO guests (firstName, lastName, eMail, phone, street, line2, city, zip, state, roomType, roomQuantity, adults, children, bill, checkIn, checkOut)
VALUES ('".
	$_POST['firstName']."', '".
	$_POST['lastName']."', '".
	$_POST['email']."', '". 
	$_POST['phone']."', '". 
	$_POST['street']."', '". 
	$_POST['street2']."', '". 
	$_POST['city']."', '". 
	$_POST['zip']."', '". 
	$_POST['state']."', '". 
	$_POST['roomString']."', '".
	$_POST['Rooms']."', '". 
	$_POST['Adults']."', '". 
	$_POST['Children']."', '".
	$_POST['billin']."', '". 
	$_POST['checkindate']."', '". 
	$_POST['checkoutdate']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<html>
<!--the booking is now the only route to the database and the form forms-->


	<head>
		<title> Drumpf Hotel</title>
		<meta name="description" content="hotel for idiots, made by an idiot">
		<meta name="author" content="Brendan Ewing">
		<meta charset="utf-8">
		<meta name="politcal veiws" content="ultra-progressive leftist"> 
		<!-- due lazieness and its free to use, i'm using w3's style sheet to do the slide show. so its done and i don't have 
			to deal with styling the stuff.-->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
		<!-- at first i was building an image carousel based on w3schools, but theres a better one and i went to that
			its bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- fa fa external link-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

		<script>
		    $(document).ready(function() {
		        function disableBack() { window.history.forward() }

		        window.onload = disableBack();
		        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
		    });
		</script>
		<style>
		/*first thing is to make a background for the page. 
		I want to do a animated one where its black and white.
		I can't simply do this with css. i'd have to either download a gif, or make one
		which is way more work than i'm willing ot put in.
		so i should probably just dl a gif???*/
		
		body {
			background-image: url("http://www.thisiscolossal.com/wp-content/uploads/2014/08/dots-new.gif");
			background-repeat: repeat;
		}
		table.center {
		    width:70%; 
		    margin-left:25%; 
		    margin-right:25%;
		  }
		.heder{/*i named it heder to not conflict with "header"*/
			background-color: #01021C; 
			align-self: center;
			position: relative;
			max-width: 1280px;
			
			left: 50%;
		    transform: translate(-50%);

		}
		* {
		  -webkit-box-sizing: border-box;
		  -moz-box-sizing: border-box;
		  box-sizing: border-box;
		  margin: 0;
		  padding: 0;
		}
		.container {
		  max-width: 100%;
		  overflow: hidden; 
		  margin: 0 auto;
		}
		.fullwidth {
		  background: black;
		  overflow: hidden; 
		}
		.imgSlidesA{
			 margin: 0;
		    position: relative;
		    top: 50%;
		    left: 50%;
		    transform: translate(-50%, -38%); /*i did transform cause it was the best way to ensure vert and horizontal alignment*/
		}
		
		.mydiv {
		 
		  min-height: 50px;
		  min-width: 100%;
		  max-height: 600px;
		  overflow: hidden; 

		}

		.mydiv2 {
		 
		  min-height: 50px;
		  min-width: 100%;
		  max-height: 600px;
		  overflow: hidden;
		  align-self: center; 

		}
		
		/*
		.mySlides {display:none}
		.w3-left, .w3-right, .w3-badge {cursor:pointer}
		.w3-badge {height:13px;width:13px;padding:0}
		*/


		ul.topnav {
		    list-style-type: none;
		    margin: 0;
		    padding: 0;
		    overflow: hidden;
		    background-color: #333;
		    position: -webkit-sticky; /* Safari */
    		position: sticky;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
		    display: block;
		    color: white;
		    text-align: center;
		    padding: 14px 16px;
		    text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #111;}

		ul.topnav li a.active {background-color: #4CAF50;}

		ul.topnav li.right {float: right;}
		ul.topnav li.left {float: left;}

		@media screen and (max-width: 600px){
		    ul.topnav li.right, 
		    ul.topnav li {float: none;}
		}

		.reserveNow{
			display: block;
			z-index: 10;
			min-height: 85px;
			float: none;
			left:250px;
			margin: 0px 0px 0px 0px;
			background: hotpink;
			text-decoration: none;
			min-width: 200px;
			overflow: auto;
			
			
			
			position: absolute;
		}
		.formBox{
			font-size: 18pt;
			color: white;
			background-color: black;
			position: relative;
			text-align: center;
			display:block;
        	margin:0px auto;
        	z-index: 10;
        	


		}
		.formheder{
			text-align: center;
			z-index: 10;
		}

		.daButton{
			color: black;
			position: relative;
			background: hotpink;
			text-align: center;
			display:block;
        	margin:0px auto;
        	z-index: 10;



		}
		td.center1{
			text-align: center;
			font-size: 18pt;
			font-family: serif;
			font:scriptina;
			min-width: 250px;
			color: white;
		}
		td.right{
			text-align: right;
			font:palatino; 
			color: white;
			margin-right: 68px;
		}
		td.center{
			text-align: center;
			font:palatino; 
			color: white;
			margin-right: 68px;
			font-size: 14pt;

		}

		.center {
		    margin: auto;
		    width: 50%;
		   
		    padding: 10px;
		}

		td.mouthyWords{
			text-align: center;
			font-size: 18pt;
			font-family: serif;
			font:scriptina;
			-width: 200px;
			color: cyan;
		}
		.collapsible {
		    background-color: hotpink;
		    color: white;
		    cursor: pointer;
		    padding: 18px;
		    width: 100%;
		    border: none;
		    text-align: left;
		    outline: none;
		    font-size: 18pt;
		}

		.active2, .collapsible:hover {
		    background-color: magenta;
		}

		.content {
		    padding: 0 18px;
		    display: none;
		    overflow: hidden;
		    background-color: black;
		}

		.subtotal{
			font-size: 26pt;
			color: cyan;
			background-color: black;
			text-align: center;
			font:palatino; 
			
			

		}
		
		.imagesRteam{


		}
		.ohIgetit{
			background-color: hotpink;
			color: black;

		}
		.submit{
			font-size: 26pt;
			color: black;
			background-color: hotpink;
			text-align: center;
			 margin: auto;
		    width: 50%;
		   
		    padding: 10px;
			

		}

		</style>
	</head>
	
	
	<body>
		<div id="home" class="heder">
		<table class="center">
			<thead>
			<!--the frist section of the webpage
				this will just have the logo, some pertainent information, and will be at the top of the page-->
				<tr>
					<td rowspan="4"> <img src="drumpfHotel.png" width="150px"></td>
					<td> Drumpf Hotel, <small><i> &#9733 &#9733 &#9733 &#9733 &#9733 &#9733 Hotel</i></small></td>
				</tr><tr>	
					<td> 236 Deans Rhode Hall Rd South Brunswick Township, New Jersey 08831</td>
					<!-- i wanted to do weather widet, but despite putting in correctly it won't load. so i scrapped it-->
				</tr><tr>
					<td> &#9742: +1 (609) 555-5555 FAX: +1 (609) 555-5556</td>
				</tr><tr>	
					<td> <span id="time"></span></td>
				</tr></thead>
		</table>
		</div>
		
		<div class="container mydiv">
		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		      <li data-target="#myCarousel" data-slide-to="4"></li>
		      <li data-target="#myCarousel" data-slide-to="5"></li>
		      <li data-target="#myCarousel" data-slide-to="6"></li>
		      <li data-target="#myCarousel" data-slide-to="7"></li>
		    </ol>
		    

		    <!-- Wrapper for slides -->
		    <div class="fullwidth mydiv">
		    			

			    <div class="carousel-inner  imgSlidesA ">
			      <div class="item active ">
			        <img src="https://www.schoenbrunn.at/fileadmin/_processed_/7/7/das-shloss.jpg" alt="PALACE ENTERANCE" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="https://www.sfpalace.com/wp-content/uploads/sites/6/2015/07/lux373lo-179287-GC-Lounge-and-The-Garden-Court.jpg" alt="lobby" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="http://www.grandhotelpalacerome.com/images/loop2015/home2.jpg" alt="dining room"  style="width:100%;">
			      </div>
			      <div class="item">
			        <img src="https://www.benalmadenapalace.com/sites/default/files/styles/page-width/public/content-images/fotosalcedo_4631_recort.jpg?itok=RdVwykh2" alt="pool" style="width:100%;">
			      </div>
			      <div class="item">
			        <img src="http://en.chateauversailles.fr/sites/default/files/gg3.jpg" alt="Grand hall" style="width:100%;">
			      </div>
			      <div class="item">
			        <img src="http://www.tattva-ts.com/wp-content/uploads/2018/02/075-The-Top-Terrace-Shiv-Niwas-Palace-Udaipur.jpg" alt="dining 2" style="width:100%;">
			      </div>
			      <div class="item">
			        <img src="https://hips.hearstapps.com/toc.h-cdn.co/assets/16/48/1600x800/landscape-1480373892-screen-shot-2016-11-28-at-55748-pm.png?resize=768:*" alt="room1" style="width:100%;">
			      </div>
			      <div class="item">
			        <img src="http://softnosis.co/wp-content/uploads/2018/05/luxury-hotel-bedroom-ideas-expensive-bedrooms-ideas-luxury-hotel-room-sumptuous-luxury-hotel-room-designs-the-royal-suite-at-the-luxury-hotel-room-design-ideas.jpg" alt="room too" style="width:100%;">
			      </div>
			    </div>

			
		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
		      <span class="glyphicon glyphicon-chevron-left"></span>
		      <span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" data-slide="next">
		      <span class="glyphicon glyphicon-chevron-right"></span>
		      <span class="sr-only">Next</span>
		    </a>
		    
		  </div></div></div>
<!--div for the nav bar-->

		<div style="position: sticky;">
		<ul id="topnav" class="topnav">
		  <li><a id="navBar" class="left "href="index.php">Home</a></li>
		  <li><a id="navBar" class="left" href="rooms.html" >Room Offerings</a></li>
		  <li><a id="navBar" class="left" href="dining.html">Dining</a></li>
		  <li><a id="navBar" class="left" href="activities.html"  >Activities</a></li>
		  <li><a id="navBar" class="left active" href="#home">Confirmation</a></li>
		  <li><a id="navBar" class="left" href="gallery.html"  >Gallery</a></li>
		  <li><a id="navBar" class="left" href="#directions"  >Directions</a></li>
		  <li class="right"><a id="navBar"  href="#contact">Contact Us</a></li>
		</ul></div>
<!-- end of div for the nav bar-->
<!--div for the form-->
		<div class=" heder " >
			<h1>Thank you for Booking with Us!</h1>
			<p>Below are a confrimation of infromation have in our system:</p>
			<ul>
				<li>You have selected your <u>check-in</u> date as: <?php echo $_POST['checkindate'];?></li>
				<li>You have selected your <u>check-in</u> out date as: <?php echo $_POST['checkoutdate'];?></li>
				<li>You have told us that you need <u><?php echo $_POST['Rooms'];?></u> Rooms<br>With the following parameters: </li>
					<ul>
				<?php
				$pizza= $_POST['roomString'];
				$pieces = explode(",", $pizza);
				for ($x = 0; $x < $_POST['Rooms']; $x++) {
					
					echo "<li>Room number <u>".($x+1)."</u> is set reserved as a ".$pieces[$x]."</li>";}
				?></ul>		
				<li>You have indicated that you will have <u><?php echo $_POST['Adults'];?> Adults</u> staying with us.</li>
				<li>You have indicated that you will have <u><?php echo $_POST['Children'];?> Children</u> staying with us.</li>
				<li>The <u>name on file</u> for the reservation 
					and billing is <strong><?php echo $_POST['firstName'];?> <?php echo $_POST['lastName'];?></strong></li>
				<li>The <u>email on file</u> is <?php echo $_POST['email'];?></li>
				<li>The <u>phone number on file</u> is <?php echo $_POST['phone'];?></li>
				<li>Your <u>address</u> is: <?php echo $_POST['street'];?>, <?php echo $_POST['street2'];?>, 
					<?php echo $_POST['city'];?>, <?php echo $_POST['state'];?> <?php echo $_POST['zip'];?></li>
				
				<li>Lastly, while we don't charge you now, you're perliminary total billed is <strong><?php echo $_POST['billin'];?></strong></li>
			</ul>
			<meta http-equiv="refresh" content="300;url=index.php" />
			<h1>Page will be redirected in 300 seconds...</h1>
		</div>
		<div class=" heder ">
			
			<img src="https://s4.reutersmedia.net/resources/r/?m=02&d=20180414&t=2&i=1251269139&r=LYNXMPEE3D01X&w=1280" width="100%" alt="our comitment2"> 
		</div>

		<div class=" heder "  id="contact">
			<table border="0" class="center" >
				<tfoot>
					<tr>
					<td rowspan="4"> <img src="drumpfHotel.png" width="150px"></td>
					<td> Drumpf Hotel, <small><i> &#9733 &#9733 &#9733 &#9733 &#9733 &#9733 Hotel</i></small></td>
					</tr><tr>	
					<td> 236 Deans Rhode Hall Rd South Brunswick Township, New Jersey 08831</td>
					<!-- i wanted to do weather widet, but despite putting in correctly it won't load. so i scrapped it-->
					</tr><tr>
					<td> &#9742: +1 (609) 555-5555 FAX: +1 (609) 555-5556</td>
					</tr><tr>
						<td>&#174 Drumpf Hotel, 2018. All rights reserved.  <a href="mailto:1116198669m@gmail.com" target="_top">&#9993: 1116198669m@gmail.com</a></td></tr>
					</tfoot></table>
				</div>
				<script type="text/javascript">
			var monthNames = new Array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
			var houraps = new Array(12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11);
			function showTime(){
			    var dateObj = new Date();
			    var day = dateObj.getDate(), month = dateObj.getMonth(), year = dateObj.getFullYear(), hour = dateObj.getHours(), minutes = (dateObj.getMinutes()<=9?'0'+dateObj.getMinutes():dateObj.getMinutes());
			    var string  = monthNames[month]+
			    ' '+day+
			    ', '+year+
			    ' '+houraps[hour]+
			    ':'+minutes+
			    ' '+(hour<=11?'am':'pm');
			    var timeDiv = document.getElementById('time');
			    if(timeDiv !== null) {
			        timeDiv.innerHTML = string;
			        timeDiv.setAttribute('datetime',year+'-'+(month+1<=9?'0'+(month+1):month+1)+'-'+day+' '+hour+':'+minutes);

			    };
			};
			setInterval(showTime,1000);
			</script>
			</body>
			</html>

