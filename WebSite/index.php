	<!DOCTYPE html>
	<?php

	//Definition of ordering algorithem - see uksort doku
	function cmp($a, $b) {
	    if (intval(substr($a, -4)) == intval(substr($b, -4))) {
	        return 0;
	    }
	    return (intval(substr($a, -4)) >  intval(substr($b, -4))) ? -1 : 1;
	}

	$dir    = './tours';
	$tours = scandir($dir, 1);
	$tours = array_diff($tours, array('..', '.'));
	// $tours = natsort($tours);
	usort($tours, "cmp");
	//print_r($tours);

	if(isset($_GET["conf"])){
		$PageToView = $_GET["conf"];
		if(in_array($PageToView , $tours)) {
			// echo ("./tours/$PageToView/config.php");
			include("./tours/$PageToView/config.php");
		}else {
			http_response_code(404);
		}
	}else {
		//Change here for the Standard Page
		$PageToView = "South Korea and Japan 2024";
		include("./tours/$PageToView/config.php");
	}

	// if (include("./tours/india/config.php")) {
	// 	echo "tut";
	// }

	?>


	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/LogoMitRing.ico">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">

		<!-- Meta Tags -->
		<meta property="og:url" content="https://tour.pioniergarage.de" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="PionierGarage Startup Tours" />
		<meta property="og:description" content="Discover PionierGarage's journey through past startup tours. Get insights into upcoming trips and explore the world of entrepreneurship with us." />
		<!-- <meta property="og:image" content="http://yourwebsite.com/image.jpg" /> --> <!-- You can add a preview image here -->


		<!-- Site Title -->
		<title>Startup Tour</title>
		<!--
		CSS
		============================================= -->
		<link rel="stylesheet" href="css/linearicons.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		<link rel="stylesheet" href="css/jquery-ui.css">
		<link rel="stylesheet" href="css/nice-select.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/main.css">
		</head>
	<body>
	  <header id="header">
	    <div class="container main-menu">
	    	<div class="row align-items-center justify-content-between d-flex">
		      <div id="logo">
		        <a href="index.php"><img width="200px" src="img/LogoMitName.png" alt="" title="" /></a>
		      </div>
		      <nav id="nav-menu-container">
		        <ul class="nav-menu">
				<!-- <li><a href="#About">About the Tour</a></li> -->
				<!-- <li><a href="#Startups">Visited Startups</a></li> -->
				<!-- <li><a href="#Team">Team</a></li> -->
				<!-- <li><a href="#Sponsors">Sponsors</a></li> -->

				<!-- Generate Menu from Folders-->
				<?php
					if ($tours && $tours[0]) {
						$TourUrl = urlencode($tours[0]);
						echo "<li><a href='/index.php?conf=$TourUrl'>$tours[0]</a></li>";
					}
				?>

				<li class="menu-has-children"><a href="">Previous Tours</a>
			            <ul class="pg-sub-menu">
			              <!-- <li><a href="blog-home.html">Blog Home</a></li>
						  <li><a href="blog-single.html">Blog Single</a></li> -->
						  
						  <?php
							foreach (array_slice($tours, 1) as $Tour) {							
								$TourUrl = urlencode($Tour);
								echo "<li><a href='/index.php?conf=$TourUrl'>$Tour</a></li>";
							}
							?>
				
			            </ul>
			          </li>	

				 <li><a href="https://pioniergarage.de" target="_blank">Pioniergarage Homepage</a></li>
				<?php
					if (isset($ContactEmail)) {
						echo "<li><a href='mailto:$ContactEmail'>Contact</a></li>";
					}
				?>
		        </ul>
		      </nav><!-- #nav-menu-container -->
	    	</div>
	    </div>
	  </header><!-- #header -->

	  <!-- start banner Area -->
	  <section class="banner-area relative blog-home-banner" id="About" <?php $PageToViewPath = rawurlencode($PageToView); echo("style='background: url(./tours/$PageToViewPath/Background.jpg) bottom;'"); ?>>
	  	<div class="overlay overlay-bg"></div>
	  	<div class="container">
	  		<div class="row d-flex align-items-center justify-content-center">
	  			<div class="about-content blog-header-content col-lg-12 <?php echo isset($DepartureDate) ? ' pg-about-content' : '' ?>">
					<h4 class="text-white">Startup Tour</h4>
					<h1 class="text-white"><?php echo($Location)?></h1><br>
					<!-- <h2 class="text-white">
						<b><?php //echo($AboutTourText)?></b>
					</h2> -->
					<!-- <a href="blog-single.html" class="primary-btn">View More</a> -->

					<?php if (isset($TravelPeriod) && isset($TravelPeriod['start']) && (strtotime($TravelPeriod['start']) > strtotime(date('Y-m-d')))) {
						// counter
						echo "
						<div id='clockdiv'>
							<div class='clock-digit'>
								<span class='days'></span>
								<div class='smalltext'>DAYS</div>
							</div>
							<div class='clock-digit'>
								<span class='hours'></span>
								<div class='smalltext'>HOURS</div>
							</div>
							<div class='clock-digit'>
								<span class='minutes'></span>
								<div class='smalltext'>MINS</div>
							</div>
							<div class='clock-digit'>
								<span class='seconds'></span>
								<div class='smalltext'>SECS</div>
							</div>
						</div>						
						";

						echo "	
						<script src='js/pg-countdown.min.js'></script>					
						<script>
							var deadline = new Date('" . $TravelPeriod['start']. "');				
							initializeClock('clockdiv', deadline);
						</script> 												
						";
					} ?>

					<?php if (
						isset($TravelPeriod) && 
						isset($TravelPeriod['start']) && 
						isset($TravelPeriod['end']) && 
						(strtotime($TravelPeriod['start']) < strtotime(date('Y-m-d'))) &&
						(strtotime($TravelPeriod['end']) > strtotime(date('Y-m-d')))
						) {					
						// currently on the tour header

						echo "
						<h2 class='text-white'>
							... currently exploring new ecosystems
						</h2>";
					} ?>
	  			</div>
	  		</div>
	  	</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap t-40">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-12 col-md-12">
					<h1 class="text-uppercase">Startup Tour</h1>
					<p>
						<?php echo($AboutTourText); ?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Start fact Area -->
	<section class="facts-area section-gap" style="padding: 50px;" id="facts-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter"><?php
					if (isset($MotivatedPGlers)) {
						echo $MotivatedPGlers;
					}else {
						echo(count($TeamMember));
					}
					?></h1>
					<p>Motivated pioneers</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<?php if(isset($StartupsToVisit)): ?>
						<h1 class="counter"><?php echo($StartupsToVisit); ?></h1>
						<p>Startups to visit</p>

					<?php elseif(isset($NumberOfStartups)): ?>
						<h1 class="counter"><?php echo($NumberOfStartups); ?></h1>
						<p>Startups visited</p>

					<?php elseif(count($VisitedStartups)): ?>
						<h1 class="counter"><?php echo count($VisitedStartups); ?></h1>
						<p>Startups visited</p>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<h1 class="counter"><?php echo($DaysAbroad); ?></h1>
					<p>Days abroad</p>
				</div>
				<div class="col-lg-3 col-md-6 single-fact">
					<?php if (isset($KilometersToTravel)): ?>
						<h1 class="counter"><?php echo($KilometersToTravel); ?></h1>
						<p>Kilometers to travel</p>
					<?php elseif(isset($KilometersTraveled)): ?>
						<h1 class="counter"><?php echo($KilometersTraveled); ?></h1>
						<p>Kilometers traveled</p>					
					<?php endif; ?> 
				</div>
			</div>
		</div>
	</section>
	<!-- end fact Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area section-gap t-40">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-<br>6 col-md-6 home-about-left">
					<img class="img-fluid" src="img/LogoMitNameUndSlogan.png" alt="">
				</div>
				<div class="col-lg-5 col-md-6 home-about-right">
					<h6>Organized by</h6>
					<h1 class="text-uppercase">the PionierGarage</h1>
					<p>
						<?php echo($AboutThePGText); ?>
					</p>
					<!-- <a href="#" class="primary-btn text-uppercase">View Full Details</a> -->
				</div>
			</div>
		</div>
	</section>
	<!-- End home-about Area -->

	<!-- Sponsors -->
	<?php
	if ($Sponsors != "") {
		echo "<section class='services-area section-gap' id='Sponsors'>
		<div class='container'>
	    <div class='row d-flex justify-content-center'>
		<div class='menu-content  col-lg-7'>
		    <div class='title text-center'>
			<h1 class='mb-10'>Partners</h1>
			<!-- <p>BlaBla Text Test Test</p> -->
		    </div>
		</div>
	    </div>
			<div class='row'>";
				foreach($Sponsors AS $Sponsor) {
				   echo "<div class='col-lg-4 col-md-6'>
						<div class='single-services'>
							<a href='".$Sponsor['Link']."' target='_blank'>
								<img width='240px' src='./tours/$PageToView/img/sponsors/".$Sponsor['ImgName']."'>
							</a>
						</div>
					</div>";
				}
			}
	echo "</div>
		</div>
	</section>";
	?>
	<!-- End Sponsors Area -->


	<!-- Start Youtube Area -->
	<?php if ($YoutubeLink != "") {
		// Edit Link for video embedding
		$YoutubeLink = str_replace("watch?v=", "embed/", $YoutubeLink);
		echo "<section class='services-area section-gap'>
			<div class='container' style='text-align: center;'>
				<h3 class='text-heading'>Aftermovie</h3>
				<div class='video-container'><iframe width='100%' height='100%' src='$YoutubeLink' frameborder='0' allow='autoplay; encrypted-media' allowfullscreen></iframe></div>
			</div>
		</section>";
	}
	?>
	<!-- End Youtube Area -->					


	<!-- Start timeline Area -->
	<?php if ($VisitedStartups != "" && $VisitedStartups != []) {
		echo "<section class='timeline section-gap' id='Startups'>
			<div class='text-center'>
				<div class='menu-content pb-70'>
					<div class='title text-center'>
						<h1 class='mb-10'>Our Agenda</h1>
						<p>Visited startups, companies, investors and organizations during the tour</p>
					</div>
				</div>
			</div>
			  <ul>";

		foreach($VisitedStartups AS $Startup) {
			if ($Startup['name'] != "") {
				echo "<li>
						<a href='".$Startup['url']."' target='_blank'>
							<div class='content' style='opacity: 1; border: 4px solid #B31918; border-radius:10px;'>
								<img class='img-fluid mx-auto d-block mb-30' src='./tours/$PageToView/img/startups/".$Startup['img']."' alt='".$Startup['name']." Logo' style='border-radius: 10px; max-height: 150px;'>
								<h4>".$Startup['name']."</h4>";
								
				if ($Startup['description'] != "") {
					echo "<p>
							<b>".$Startup['description']."</b>
						  </p>";
				}
						
				echo "</div></a></li>";
			} 
		}
		echo "</ul></section>";
	}
	?>
	<!-- End timeline Area -->


	<!-- Team Area -->
	<?php
	if ($TeamMember != "") {
		echo "<section class='services-area section-gap' id='Team'>
			<div class='container'>
	            <div class='row d-flex justify-content-center'>
	                <div class='menu-content  col-lg-7'>
	                    <div class='title text-center'>
	                        <h1 class='mb-10'>Our Team</h1>
	                        <p><?php echo '$TeamText'; ?></p>
	                    </div>
	                </div>
	            </div>
				<div class='row'>";
			foreach($TeamMember AS $Member) {
				echo "<div class='col-lg-4 col-md-6'>
							<div class='single-services'>";
				if($Member['ImgName'] != ""){
					if($Member['Linkedin'] != ""){
						echo "<a href='".$Member['Linkedin']."' target='_blank'>
							  	<img width='220px' src='./tours/$PageToView/img/team/".$Member['ImgName']."' style='border-radius: 15px'>
						 	  </a>";
					} else {
						echo "<img width='220px' src='./tours/$PageToView/img/team/".$Member['ImgName']."' style='border-radius: 15px'>";
					}					
				}
				echo "<h4>".$Member['Name']." </h4>";
				if ($Member['Studies'] != "") {
					echo "<h5 style='margin-bottom:5px; font-size: 14px; color:#6f6f6f;'>".$Member['Studies']."</h5>";
				}
				echo "<p>".$Member['Text']."</p>
							</div>
							</div>";
			}
			echo "</div></div></section>";
	}
	?>
	<!-- End Team Area -->




    	<!-- start footer Area -->
	    <footer class="footer-area section-gap">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-5 col-md-6 col-sm-6">
	                    <div class="single-footer-widget">
	                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
														Copyright &copy;<script>document.write(new Date().getFullYear());</script> PionierGarage e.V. - All rights reserved <br> This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
														<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
													</p>
													<p class="footer-text">
														<a href="https://pioniergarage.de/impressum/" target="_blank">Impressum</a>
														<span style="padding: 0px 5px;">|</span>
														<a href="https://pioniergarage.de/datenschutz/" target="_blank">Datenschutz</a>
													</p>
	                    </div>
	                </div>
									<div class="col-lg-5 col-md-6 col-sm-6">
									</div>
	                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
	                    <div class="single-footer-widget">
	                        <h4>Follow us</h4>
	                        <div class="footer-social d-flex align-items-center">
	                            <a href="https://www.facebook.com/pioniergarage" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a>
	                            <a href="https://twitter.com/pioniergarage" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a>
	                            <a href="https://github.com/pioniergarage" target="_blank" title="Github"><i class="fa fa-github"></i></a>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	</footer>
	<!-- End footer Area -->

	<!-- Import of JS Code -->
	<script src="js/vendor/jquery-2.2.4.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="js/easing.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.tabs.min.js"></script>
	<script src="js/jquery.nice-select.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/waypoints.min.js"></script>
	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/simple-skillbar.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<!-- <script src="js/mail-script.js"></script> -->
	<script src="js/main.js"></script>
	</body>
</html>
