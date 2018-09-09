
<!DOCTYPE html>
<html>

<head>
	<title>Transports</title>
<!-----------------------form scripts--------------------------------------------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	
<style type="text/css">
	
/*
over-ride "Weak" message, show font in dark grey
*/

.progress-bar {
    color: #333;
} 

* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
	  z-index: 2;
		}
	}

body {
	background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}

.login-form {
	margin-top: 60px;
}

form[role=login] {
	color: #5d5d5d;
/*	background: #f2f2f2;*/
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=login] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=login] input,
	form[role=login] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=login] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}
</style>

	<!--meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Transports Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }
	</script>
	<!--//meta tags ends here-->

	<!--booststrap-->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<!--//booststrap end-->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!--stylesheets-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all">
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<!-- banner text slider-->
	<!--//style sheet end here-->
	<!-- //lightbox files -->
	<link rel="stylesheet" href="css/lightbox.css">
	<!-- //lightbox files -->
	<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

</head>
<body>
	<div class="banner-w3">

		<div class="w3-agile-logo">
			<div class="container">
				<div class=" head-wl">
					<div class="headder-w3">
						<h1><a href="index.html">Transports</a></h1>
					</div>

					<div class="w3-header-top-right-text">
					<h6 class="caption">
						<!--<!--ontact Us--></h6>
						<!--<p>(111)+245 245 66</p>-->
					</div>

					<div class="email-right">
						<h6 class="caption"><!--Email Us--></h6>
						<!--<p><a href="mailto:mail@example.com" class="info"> info@example.com</a></p>-->

					</div>


					<div class="agileinfo-social-grids">
						<h6 class="caption"><!--Follow Us--></h6>
						<!--<ul>
							<li><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li><a href="#"><span class="fa fa-rss"></span></a></li>
							<li><a href="#"><span class="fa fa-vk"></span></a></li>
						</ul>-->
					</div>

					<div class="clearfix"> </div>
				</div>
			</div>
				
		</div>
				<div class="top-nav">
		<nav class="navbar navbar-default navbar-fixed-top">
	

	<!-- //header -->
	<div class="container">
			<div class="navbar-header">
	   			 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
                </button>
              </div>

				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav ">
						<li><a href="index.html" >Home</a></li>
						
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<!--<li><a href="#gallery" class="scroll">Gallery</a></li>-->
						<li><a href="#contact" class="scroll">Contact</a></li>
						<li><a href="#about" class="scroll">Tracking</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
			<div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
                   <CENTER><h3>Transport Portal<h3></CENTER>    
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"/>  
          <!--value="joestudent@gmail.com" />-->
          
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
            <a href="#">Create account</a> or <a href="#">reset password</a>
          </div>
          
        </form>
        
        <div class="caption">
          <!--<a href="#">Transport</a>-->
        </div>
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
  <br>
    <br>
    <br>
    <br>
 <br>      
 <br> 
<br>
<br>
<br>
<br
 
						<div class="contact-icons">
				<div class=" col-md-4 col-sm-5 footer_grid_left">
					<div class="icon_grid_left">
						<span class="fa fa-map-marker" aria-hidden="true"></span>
					</div>
					<h5>Address</h5>
					<p>4514,Behind Iskon Temple,<span>V.V.Nagar,Anand(Gujrat).</span></p>
				</div>
				<div class=" col-md-4 col-sm-3 footer_grid_left">

					<div class="icon_grid_left">
						<span class="fa fa-volume-control-phone" aria-hidden="true"></span>
					</div>
					<h5> Contact Us</h5>
					<p>+(91)7572810409<span>+(91)8100495413</span></p>
				</div>
				<div class=" col-md-4 col-sm-4  footer_grid_left">
					<div class="icon_grid_left">

						<span class="fa fa-envelope" aria-hidden="true"></span>
					</div>
					<h5>Email Us</h5>
					<p><a href="krplsolanki@gmail.com">krplsolanki@gmail.com</a>
						<span><a href="mailto:hiteshbhatt@gmail.com">hiteshbhatt@gmail.com</a></span></p>
				</div>
			</div>
		</div>
	</div>


	<!--//contact-->
	<footer>
		<div class="container">
			<div class="col-md-3 header-side">
				<h2><a href="index.html">Transports</a></h2>
			</div>
			<div class="col-md-7 header-side">
				<p>©2018 Transports. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">KHSWorks</a></p>
			</div>
			<div class="col-md-2 header-side">
				<div class="buttom-social-grids">

					<ul>
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-rss"></span></a></li>
						<li><a href="#"><span class="fa fa-vk"></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!--js working-->
	<script type='text/javascript' src='js/jquery-2.2.3.min.js'></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js  working-->
	<!--FlexSlider banner-->

	<script defer src="js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
	<!--End-slider-script-->
	<!-- OnScroll-Number-Increase-JavaScript -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //OnScroll-Number-Increase-JavaScript -->
	<!-- light box gallery -->
	<script src="js/lightbox-plus-jquery.min.js"></script>
	<!-- //light box gallery -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	
	<!-- //here ends scrolling icon -->
</body>

</html>