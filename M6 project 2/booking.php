<html>
<!--the booking is now the only route to the database and the form forms-->

<html>
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
		   	font-size: 10pt;
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
		  <li><a id="navBar" class="left active" href="#home">Reservations</a></li>
		  <li><a id="navBar" class="left" href="gallery.html"  >Gallery</a></li>
		  
		  <li class="right"><a id="navBar"  href="#contact">Contact Us</a></li>
		</ul></div>
<!-- end of div for the nav bar-->
<!--div for the form-->
		<div class=" heder " >
			<table border="0">
				<form method="POST" action="confrimation.php" onsubmit="tooStringed()"><tbody>
				<tr><td>
				 <?php 
				if (  !empty($_POST) ) {
					echo '<p><label>Check-in date:<input type="date" id="checkindate" name="checkindate"  value="'.$_POST["checkindate"].'"  required></label></p>';
				
					echo '<p><label>Check-out date:<input type="date" id="checkoutdate" name="checkoutdate"  value="'.$_POST["checkoutdate"].'"  required></label></p>';
				
					echo '<p><label>Number of Rooms:<input type="number" name="Rooms" id="Rooms" value='. $_POST["Rooms"].' "   required></label></p>';
					
					echo '<p><label>Number of Adults:<input type="number" name="Adults" value="'. $_POST["Adults"]. '"   required></label></p>';
					echo '<p><label>Number of Children:<input type="number" name="Children" value="'. $_POST["Children"].'"   required></label></p>';
					

				} else{
					echo '<p><label>Check-in date:<input type="date"  id="checkindate" name="checkindate"  placeholder="Check-in Date" required onchange="sumify();TDate();" style="color: black;"></label></p>';
					echo '<p><label>Check-out date:<input type="date"  id="checkoutdate" name="checkoutdate"  placeholder="Check-out Date" required onchange="sumify();TDate2();" style="color: black;"></label></p>';
					echo '<p><label>Number of Rooms:<input type="number" id="Rooms" name="Rooms"  min="1" required onload="roomify()" onchange="roomify()"  style="color: black;"></label></p>';
					echo '<p><label>Number of Adults:<input type="number" name="Adults"  min="1" required id="adults" style="color: black;"></label></p>';
					echo '<p><label>Number of Children:<input type="number" name="Children" min="0" required id="children" style="color: black;"></label></p>';
				}
				
	    		?>

		    	<script type="text/javascript">
		    		function TDate() {
				    var UserDate = document.getElementById("checkindate").value;
				    var ToDate = new Date();

				    if (new Date(UserDate).getTime() <= ToDate.getTime()) {
				          alert("The Check-in date must be greater than to today's date!");
				          return false;
				     }
				    return true;
				}
				function TDate2() {
				    var UserDate = document.getElementById("checkoutdate").value;
				    var ToDate = document.getElementById("checkindate").value;

				    if (new Date(UserDate).getTime() <= new Date(ToDate).getTime()) {
				          alert("The Check-out date must be greater than the Check-in date!");
				          return false;
				     }
				    return true;
				}


		    	</script>
					<p ><label>First Name: <input name="firstName" type="text" size="25" required></label></p>
					<p><label>Last Name: <input name="lastName" type="text" size="25"required></label></p>
					<p><label>E-mail Address: <input name="email" type="email"  required placeholder="name@domain.com" size="25" /></label></p>
					<p><label>Phone Number: (123) 456-7890<input name="phone" type="tel" size="25" required pattern="[\(]\d{3}[\)]\s{1}\d{3}[\-]\d{4}" 
				 		 placeholder="(123) 456-7890" /></label></p>
					<p><label>Address line 1: <input name="street" required type="text" size="25" /></label></p>
					<p><label>Address line 2: <input name="street2" required type="text" size="25" /></label></p>
					<p><label>City: <input name="city" type="text" required size="25" /></label></p>
					<p><label>State: <select name="state" required>
				    	<option value="" selected disabled hidden>Choose here</option>
				    	<option value="AL">Alabama</option>
						<option value="AK">Alaska</option>
						<option value="AZ">Arizona</option>
						<option value="AR">Arkansas</option>
						<option value="CA">California</option>
						<option value="CO">Colorado</option>
						<option value="CT">Connecticut</option>
						<option value="DE">Delaware</option>
						<option value="DC">District Of Columbia</option>
						<option value="FL">Florida</option>
						<option value="GA">Georgia</option>
						<option value="HI">Hawaii</option>
						<option value="ID">Idaho</option>
						<option value="IL">Illinois</option>
						<option value="IN">Indiana</option>
						<option value="IA">Iowa</option>
						<option value="KS">Kansas</option>
						<option value="KY">Kentucky</option>
						<option value="LA">Louisiana</option>
						<option value="ME">Maine</option>
						<option value="MD">Maryland</option>
						<option value="MA">Massachusetts</option>
						<option value="MI">Michigan</option>
						<option value="MN">Minnesota</option>
						<option value="MS">Mississippi</option>
						<option value="MO">Missouri</option>
						<option value="MT">Montana</option>
						<option value="NE">Nebraska</option>
						<option value="NV">Nevada</option>
						<option value="NH">New Hampshire</option>
						<option value="NJ">New Jersey</option>
						<option value="NM">New Mexico</option>
						<option value="NY">New York</option>
						<option value="NC">North Carolina</option>
						<option value="ND">North Dakota</option>
						<option value="OH">Ohio</option>
						<option value="OK">Oklahoma</option>
						<option value="OR">Oregon</option>
						<option value="PA">Pennsylvania</option>
						<option value="RI">Rhode Island</option>
						<option value="SC">South Carolina</option>
						<option value="SD">South Dakota</option>
						<option value="TN">Tennessee</option>
						<option value="TX">Texas</option>
						<option value="UT">Utah</option>
						<option value="VT">Vermont</option>
						<option value="VA">Virginia</option>
						<option value="WA">Washington</option>
						<option value="WV">West Virginia</option>
						<option value="WI">Wisconsin</option>
						<option value="WY">Wyoming</option>
					</select></label></p>
					<p><label>Zipcode: <input name="zip" type="text"pattern="[0-9]{5}" title="Five digit zip code" required size="25" /></label></p>
					<!--first got to put out the number of types or rooms-->
				</td><td >
					 <div class="mydiv2" ><table border="0">
			      	<tr><td class="center">-- Peasent --<br> $100 per night!<br>
			        <img src="http://www.anp.hu/uploads/articles/image/Sz%C3%A1ll%C3%A1s_%C3%A9tterem/fruktarium3.jpg" alt="rooms1" style="width:200px">
			    	</td><td class="mouthyWords">
			    		<a href="rooms.html">See our exquisite rooms!<br><i class="fa fa-external-link"></i></a>
			    	</td><td class="center">
			    		-- Barron --<br>$500 per night!<br>
			    		<img src="https://q-xx.bstatic.com/images/hotel/840x460/126/126148295.jpg" align="rooms2" style="width: 200px">
			    	</td></tr>
			    	<tr><td class="center">
			    		-- Noble Lord --<br> $2,500 per night!<br>
			    		<img src="https://i2-prod.manchestereveningnews.co.uk/incoming/article11092554.ece/ALTERNATES/s615/hotel-suites.jpg"  align="rooms3" style="width: 200px">
			    	</td><td class="center">
			    		-- King --<br>$7,000 per night!<br>
			    		<img src="https://www.thefrugalnavywife.com/wp-content/uploads/2013/02/galleryimage-1563849892-mar-7-2012-600x398.jpg" align="rooms4" style="width: 200px">
			    	</td><td class="center">
			    		-- Mr. President --<br>$15,000 per Night!<br>
			    		<img src="https://bernadettelivingston.com/13175/stunning-master-bedroom-from-our-modern-day-palace-collection.jpg"  align="rooms5" style="width: 200px">
			    	</td></tr>
			      </table></div>
					<div id="roomSelect"></div>
				</td></tr>
				<tr><td colspan="2" class="subtotal">
					<div id="subtotal" ></div>
					<input type="number" name="billin" id="billin" hidden value="">
					<input type="text" name="roomString" id="roomString" hidden value="" onsubmit=" tooStringed()">
				</td></tr>
				<tr><td colspan="2" class="submit">
					<input type="submit" value="Submit?" class="submit" />
				</td></tr>
				</tbody>
			</form>
			</table>
		</div>
	<!-- end ofdiv for the form-->


		<div class=" heder ">
			
			<img src="http://www.lanabird.com/wp-content/uploads/2013/06/DSC_0895.jpg" width="100%" alt="our comitment2"> 
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
						<td>&#174 Drumpf Hotel, 2018. All rights reserved.  <a href="mailto:1116198669m@gmail.com" target="_top">&#9993: 1116198669m@gmail.com</a>
				</tfoot>
			</table>
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
		<script type="text/javascript">	
			function roomify(){
				var i;
				var x= document.getElementById('Rooms');
				var y="";
				for (i = 0; i < x.value; i++){
					y+= "<div class='imagesRteam' id='pictureditem"+i+"'></div><br><label>Select room :"+ 
					"<datalist id='roomSelector'>"+
				    	"<option value='Peasent'>$100 per Night</option>"+
				    	"<option value='Barron'>$500 per Night</option>"+
				    	"<option value='Noble Lord'>$2250 per Night</option>"+
				    	"<option value='King'>$7,000 per Night</option>"+
				    	"<option value='Mr. President'>$15,000 per Night</option>"+
				    	"</datalist>"+
					"<input list='roomSelector' class='ohIgetit' name= 'roomSelected"+i+"' placeholder='Choose Here' id='roomSelected"+i+"'required>"+
					"</label><br>";
		      	}
		      	var lois=document.getElementById('roomSelect');
		      	 
		      	 	lois.innerHTML=y;
		      	 }
		    var i;
				var x= document.getElementById('Rooms');
				var y="";
				for (i = 0; i < x.value; i++){
					y+= "<div class='imagesRteam' id='pictureditem"+i+"'></div><br><label>Select room :"+ 
					"<datalist id='roomSelector'>"+
				    	"<option value='Peasent'>$100 per Night</option>"+
				    	"<option value='Barron'>$500 per Night</option>"+
				    	"<option value='Noble Lord'>$2250 per Night</option>"+
				    	"<option value='King'>$7,000 per Night</option>"+
				    	"<option value='Mr. President'>$15,000 per Night</option>"+
				    	"</datalist>"+
					"<input list='roomSelector' class='ohIgetit' name= 'roomSelected"+i+"' placeholder='Choose Here' id='roomSelected"+i+"'required>"+
					"</label><br>";
		      	}
		      	var lois=document.getElementById('roomSelect');
		      	 
		      	 	lois.innerHTML=y;
		 	

		 	function tooStringed(){
		 		var i;
		 		var daString="";
		 		var foobar= document.getElementsByClassName("ohIgetit");
		 		for (i = 0; i < foobar.length; i++) {
		 			daString+=foobar[i].value+", ";
		 		} 
                document.getElementById("roomString").value=daString;
               
		 	
		 	}   		 	
		     
			
		</script>
<!--basic premis is to do the previous script of var i x=the input values do a comparison then array the values and then output that sum and multimple by nights-->
		<script type="text/javascript">	
		function sumify(){
        var foobar= document.getElementsByClassName("ohIgetit");
			var i;
			var monies=[];
			for (i = 0; i < foobar.length; i++) {
			
					if (foobar[i].value=="Peasent") {						
						monies[i]=100;
					}
					else if (foobar[i].value=="Barron"){
						monies[i]=500;
					}
					else if (foobar[i].value=="Noble Lord"){
						monies[i]=2250;
					}
					else if (foobar[i].value=="King"){
						monies[i]=7000;
					}
					else if (foobar[i].value=="Mr. President"){
						monies[i]=15000;
					} else{

					}

	
			}
       var sum=0;
		for (i=0;i < monies.length; i++ ) {
			sum+=monies[i];

		}
		var subby = document.getElementById("subtotal");
		/*so i got to do php to do a if/or for php vs non-php cause date is stupid*/
			
		var date1 = new Date(document.getElementById("checkindate").value);
		var date2 = new Date(document.getElementById("checkoutdate").value);
        
		var timeDiff = Math.abs(date2 - date1);
		var diffDays = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
		var total= diffDays*sum;
		
		

		subby.innerHTML="Your Subtotal is: $"+total;
		document.getElementById("billin").value=total;}
		setInterval(sumify,2000);
		
			</script>
		
			
        	
        

		


				

</script>
</body>
</html>