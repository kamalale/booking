<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BOOKING PORTAL</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Oxygen:300,400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
		<style type="text/css">
			
.selectdiv {
  position: relative;
  /*Don't really need this just for demo styling*/
  
  float: left;
  min-width: 200px;/*
  margin: 50px 33%;*/
}

/* IE11 hide native button (thanks Matt!) */
select::-ms-expand {
display: none;
}

.selectdiv:after {
  font: 17px "Consolas", monospace;
  color: #333;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
  right: 11px;
  /*Adjust for position however you want*/
  top: 18px;
  padding: 0 0 2px;
  border-bottom: 1px solid #999;
  /*left line */
  
  position: absolute;
  pointer-events: none;
}

.selectdiv select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /* Add some styling */
  
  display: block;
  width: 100%;
  max-width: 320px;
  height: 50px;
  float: right;
  margin: 5px 0px;
  padding: 0px 24px;
  font-size: 16px;
  line-height: 1.75;
  color: #333;
  background-color: #ffffff;
  background-image: none;
  border: 1px solid #cccccc;
  -ms-word-break: normal;
  word-break: normal;
}
		</style>

	</head>
	<body>
		
<?php

					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "booking";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
?>		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container-wrap">
			<div class="top-menu">
				<div class="row">
					<div class="col-xs-3">
						<div id="fh5co-logo"><a href="/booking">Booking Portal</a></div>
					</div>
					<div class="col-xs-7 text-right menu-1">
						<ul>
							<li class="active"><a href="/booking">Home</a></li>
							<?php
                              if(isset($_SESSION['usrlgn'])){
						    ?>		
						    <li class="has-dropdown">
								<a href="javascript:void(0)">Account</a>
								<ul class="dropdown" style="width: 180px;">
									<li><a href="javascript:void(0)">
										<?php
											echo $_SESSION['usrlgn_emil'];
										?>
									</a></li>
								    <li><a href="verify.php?logout=sc">Logout</a></li>

								</ul>
							</li>
							<?php
							}
								else{
						     ?>		
							<li><a href="login.php">Login</a></li>
							<?php
							}
						    ?>		
							

						</ul>
					</div>
				</div>
				<br>
				<div class="row">
				<div class="col-md-3">
				</div>	
				<div class="col-md-6">	
				<form class="form-inline" method="post" action="search.php">
				<input name="s" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" style="
				width: 75%;
				height: 35%;
				">
				<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
				</div>
				<div class="col-md-3">
				</div>
				</div>
			</div>
		</div>
	</nav>
	<div class="container-wrap">

		<div id="fh5co-work" class="fh5co-light-grey">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>MEDIA LISTINGS</h2>
				</div>
			</div>	
			<div class="row animate-box all_filters">
				<div class="col-md-4">

				<div class="selectdiv">
									<p>State</p>	

				<label>
                 <?php
					$sql = "SELECT * FROM media_listings";
					$result = $conn->query($sql);
                    $new_array =array(); 
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$main_data = unserialize($row["data"]);
					 $new_array[]=$main_data['state'];
					}
					}
					?>
				
				<select>
				<?php
				$newars = array_unique($new_array);
                foreach ($newars as $key => $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
                }
				?>
				</select>
				</label>
				</div>

			    </div>
			    <div class="col-md-4">
			    	
               	<div class="selectdiv">
									<p>City</p>	

				<label>
                 <?php
					$sql = "SELECT * FROM media_listings";
					$result = $conn->query($sql);
                    $new_array =array(); 
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$main_data = unserialize($row["data"]);
					 $new_array[]=$main_data['city'];
					}
					}
					?>
				
				<select>

				<?php
				$newars = array_unique($new_array);
                foreach ($newars as $key => $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
                }
				?>
				</select>
				</label>
				</div>

			    </div>
			    <div class="col-md-4">
			    
                	<div class="selectdiv">
									<p>Postcode</p>	

				<label>
                 <?php
					$sql = "SELECT * FROM media_listings";
					$result = $conn->query($sql);
                    $new_array =array(); 
					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$main_data = unserialize($row["data"]);
					 $new_array[]=$main_data['postcode'];
					}
					}
					?>
				
				<select>

				<?php
				$newars = array_unique($new_array);
                foreach ($newars as $key => $value) {
                echo '<option value="'.$value.'">'.$value.'</option>';
                }
				?>
				</select>
				</label>
				</div>

			    </div>		
			</div>	
			<div class="row all_lists">

					<?php
					$sql = "SELECT * FROM media_listings";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$main_data = unserialize($row["data"]);
					echo '<div class="col-md-4 text-center animate-box" data-city="'.$main_data['city'].'" data-state="'.$main_data['state'].'" data-postcode="'.$main_data['postcode'].'">
					<a href="media_booking.php?id='.$row['id'].'" class="work"  style="background-image: url('.$main_data['img_path'].');">
						<div class="desc" style="background:none;">
				      <button class="btn btn-primary btn-modify" >View</button>

						</div>
					</a>
				</div>';
					}
					}
					?>
							
			</div>
						    

		</div>

	
	</div><!-- END container-wrap -->

	<div class="container-wrap">
		<footer id="fh5co-footer" role="contentinfo">
			<div class="row">
				<div class="col-md-4 fh5co-widget">
				</div>
				<div class="col-md-4 fh5co-widget">
					<h4>Booking Portal</h4>
					<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				</div>
				<div class="col-md-4 fh5co-widget">
				</div>

			</div>

		</footer>
	</div><!-- END container-wrap -->
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
<script >
$(document).ready(function(){

var newarray = [];
$(".all_filters select").each(function(){
var current = $(this).val();
newarray.push(current);
});
$(".all_lists .col-md-4").each(function(){
var city = $(this).attr("data-city");
var state = $(this).attr("data-state");
var postcode = $(this).attr("data-postcode");
console.log(city+'=='+state+'=='+postcode);
var state_ar = newarray[0];
var city_ar = newarray[1];
var city_post = newarray[2];
console.log(city_ar+'=='+state_ar+'=='+city_post);

if(city == city_ar && state == state_ar && postcode == city_post){
$(this).show();
}
else{
$(this).hide();

}

});

$(".all_filters select").change(function(){
	var newarray = [];
$(".all_filters select").each(function(){
var current = $(this).val();
newarray.push(current);
});
$(".all_lists .col-md-4").each(function(){
var city = $(this).attr("data-city");
var state = $(this).attr("data-state");
var postcode = $(this).attr("data-postcode");
console.log(city+'=='+state+'=='+postcode);
var state_ar = newarray[0];
var city_ar = newarray[1];
var city_post = newarray[2];
console.log(city_ar+'=='+state_ar+'=='+city_post);

if(city == city_ar && state == state_ar && postcode == city_post){
$(this).show();
}
else{
$(this).hide();

}

});

});


});
</script>

	</body>
</html>

