<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login - BOOKING PORTAL</title>
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
							<li><a href="login.php">Login</a></li>

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
	
   <div class="row">
   	<br>
   	<br>
   	<br>
   	   
   	<div class="col-md-5 col-md-push-1 animate-box">
   							<h2 class="text-center">Login</h2>
                        <form action="verify.php" method="post">
                        	 <?php
                       	if(isset($_GET['lg'])){
                        	if($_GET['lg'] == 'false'){
                       ?> 	
                      <p style="color:red">Please check your Email and  Passsword</p>
                        <?php 
                           }
                        }  ?>

					<div class="row">
						
						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required name="email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required name="pass">
							</div>
													<input type="hidden" name="cf" value="true">

						</div>
						<div class="col-md-12" style="margin-top:5px;margin-bottom:5px;">
							<div id="recaptcha" class="g-recaptcha" data-sitekey="6Ldf9dQpAAAAAOLJu2h3CFWtWNl6eIucPnz48R5V"        data-callback="vcc"></div>
             <span class="msg-error"></span>
						</div>

						<div class="col-md-12">
							
							<div class="form-group">
								<input type="submit" id="sbt" value="Submit" class="btn btn-primary btn-modify" >
							</div>
						</div>
					</div>
				</form>
				</div>
	<div class="col-md-5 col-md-push-1 animate-box">
   							<h2 class="text-center">Register</h2>
                        <form action="verify.php" method="post">

                       <?php
                       	if(isset($_GET['res'])){
                        	if($_GET['res'] == 'false'){
                       ?> 	
                      <p style="color:red">Please check your password and confirm passsword</p>
                        <?php } 
                        if($_GET['res'] == 'true'){
                        ?>
                      <p style="color:green">Your Account is successfully created</p>
    
                        <?php
                           }
                        }  ?>

					<div class="row">

						<div class="col-md-12">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email" required name="email">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Password" required name="pass">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input type="password" class="form-control" placeholder="Confirm Password" required name="cpass">
							</div>
						</div>
						<input type="hidden" name="vf" value="true">


						<div class="col-md-12">
							<div class="form-group">
								<input type="submit" id="sbt_2" value="Submit" class="btn btn-primary btn-modify">
							</div>
						</div>
					</div>
				</form>

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

	<script src="https://www.google.com/recaptcha/api.js"></script>
<script>
var vcc = function(g_recaptcha_response) {
var $captcha = $( '#recaptcha' );

$( '.msg-error' ).text('');
  $captcha.removeClass( "error" );
};
$(document).ready(function(){
		$('#sbt').click(function(){
    	$captcha = $( '#recaptcha' );
      response = grecaptcha.getResponse();

  if (response.length === 0) {
    $('.msg-error').text( "Please complete recaptcha" );
    if( !$captcha.hasClass( "error" ) ){
      $captcha.addClass( "error" );
    }
    return false;

  } else {
    $( '.msg-error' ).text('');
    $captcha.removeClass( "error" );
    // form submit return true
   	 return true;
  }
	});
 });
</script>
<style type="text/css">
	.msg-error {
  color: red;
 }
</style>

	</body>
</html>

