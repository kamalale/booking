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

	</head>
	<body>
		
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
						    <li ><a href="media_list.php">Shop All</a></li>

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
							
                           <li>

                           </li>
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
					<h2>Search result for : "<strong><?php
                    					if(isset($_POST['s'])){

					 echo $_POST['s']; }?></strong>"</h2>
			</div>		
			<div class="row">

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
					if(isset($_POST['s'])){
					$sql = "SELECT * FROM media_listings WHERE data LIKE '%".$_POST['s']."%%'";
				     }
				     else{
				     $sql = "SELECT * FROM media_listings WHERE data LIKE '%cnsdbchsbchj%%'";
				     }
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
					$main_data = unserialize($row["data"]);
					echo '<div class="col-md-4 text-center animate-box">
					<a href="media_booking.php?id='.$row['id'].'" class="work"  style="background-image: url('.$main_data['img_path'].');">
						<div class="desc" style="background:none;">
				      <button class="btn btn-primary btn-modify" >View</button>

						</div>
					</a>
				</div>';
					}
					}
					else{
						echo '<div class="col-md-4"></div><div class="col-md-4 text-center animate-box"><strong>No result found</stron></div><div class="col-md-4"></div>';
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

	</body>
</html>

