	<!DOCTYPE html>
	<?php include 'config.php' ?>
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
		<!-- Site Title -->
		<title>Startup Tour</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
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
				<li><a href="#About">About the Tour</a></li>
				<li><a href="#Startups">Visited Startups</a></li>
				<li><a href="#Team">Team</a></li>
				<li><a href="#Sponsors">Sponsors</a></li>
				 <li><a href="https://pioniergarage.de/">Pioniergarage Homepage</a></li>
				<?php
					if ($ContactEmail != "" ) {
						echo "<li><a href='mailto:$ContactEmail'>Contact</a></li>";
					}
				?>
		        </ul>
		      </nav><!-- #nav-menu-container -->
	    	</div>
	    </div>
	  </header><!-- #header -->

	  <!-- start banner Area -->
	  <section class="banner-area relative blog-home-banner" id="About">
	  	<div class="overlay overlay-bg"></div>
	  	<div class="container">
	  		<div class="row d-flex align-items-center justify-content-center">
	  			<div class="about-content blog-header-content col-lg-12">
					<h4 class="text-white">Startuptour</h4>
					<h1 class="text-white"><?php echo($Location)?></h1><br>
					<h6 class="text-white">
						<b><?php echo($AboutTourText)?></b>
					</h6>
	  				<!-- <a href="blog-single.html" class="primary-btn">View More</a> -->
	  			</div>
	  		</div>
	  	</div>
	</section>
	<!-- End banner Area -->

	<!-- Start home-about Area -->
	<section class="home-about-area pt-120">
		<div class="container">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6 col-md-6 home-about-left">
					<img class="img-fluid" src="img/LogoMitNameUndSlogan.png" alt="">
				</div>
				<div class="col-lg-5 col-md-6 home-about-right">
					<h6>Organized by</h6>
					<h1 class="text-uppercase">the PionierGarage</h1>
					<p>
						<?php echo($AboutThePGText); ?>
					</p>
					<a href="#" class="primary-btn text-uppercase">View Full Details</a>
				</div>
			</div>
		</div>
	</section><br><br><br><br>
	<!-- End home-about Area -->

	<!-- Start timeline Area -->
	<section class="timeline pb-120" id="Startups">
		<div class="text-center">
			<div class="menu-content pb-70">
				<div class="title text-center">
					<h1 class="mb-10">Visited startups</h1>
					<p>During Our Tour</p>
				</div>
			</div>
		</div>
		  <ul>
			<?php
			foreach($VisitedStartups AS $Startup) {
			   echo "<li>
	     			      <div class='content'>
				      	<img class='img-fluid mx-auto d-block mb-30' src='img/StartupLogos/$Startup.png' alt=''>
	       				<h4>
	       					<time>$Startup</time>
	       				</h4>
	       				<p>
						<b>Montag</b>
					</p>
   	     			      </div>
	     			    </li>";
			}
			?>
		  </ul>
	</section>
	<!-- End timeline Area -->


	<!-- Start Youtube Area -->
	<?php
	if ($YoutubeLink != "") {
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


	<!-- Team Area -->
	<section class="services-area section-gap" id="Team">
		<div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content  col-lg-7">
                    <div class="title text-center">
                        <h1 class="mb-10">Our Team</h1>
                        <p>BlaBla Text Test Test</p>
                    </div>
                </div>
            </div>
			<div class="row">
				<?php
				foreach($TeamMember AS $Member) {
				   echo "<div class='col-lg-4 col-md-6'>
						<div class='single-services'>
							<img width='120px' src='img/Team/".$Member['ImgName']."' style='border-radius: 15px'>
							<a href='#'><h4>".$Member['Name']." </h4></a>
							<p>".$Member['Text']."</p>
						</div>
					</div>";
				}
				?>
			</div>
		</div>
	</section>
	<!-- End Team Area -->

	<!-- Sponsors -->
	<section class="services-area section-gap" id="Sponsors">
		<div class="container">
	    <div class="row d-flex justify-content-center">
		<div class="menu-content  col-lg-7">
		    <div class="title text-center">
			<h1 class="mb-10">Sponsors</h1>
			<!-- <p>BlaBla Text Test Test</p> -->
		    </div>
		</div>
	    </div>
			<div class="row">
				<?php
				foreach($Sponsors AS $Sponsor) {
				   echo "<div class='col-lg-4 col-md-6'>
						<div class='single-services'>
							<a href='".$Sponsor['Link']."' target='blank>
								<img width='240px' src='img/Sponsors/".$Sponsor['ImgName']."'>
							</a>
						</div>
					</div>";
				}
				?>
			</div>
		</div>
	</section>
	<!-- End Sponsors Area -->


    	<!-- start footer Area -->
	    <footer class="footer-area section-gap">
	        <div class="container">
	            <div class="row">
	                <div class="col-lg-5 col-md-6 col-sm-6">
	                    <div class="single-footer-widget">
	                        <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
				<p class="footer-text">
					<a href="https://pioniergarage.de/impressum/">Impressum</a>
				</p>
	                    </div>
	                </div>
	                <div class="col-lg-5 col-md-6 col-sm-6">
	                    <div class="single-footer-widget">
	                        <h4>Newsletter</h4>
	                        <p>Stay updated with our latest trends</p>
				<div class="" id="mc_embed_signup">
					 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
					  <div class="input-group">
					    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit">
					        <span class="lnr lnr-arrow-right"></span>
					      </button>
					    </div>
					    	<div class="info"></div>
					  </div>
					</form>
				</div>
	                    </div>
	                </div>
	                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
	                    <div class="single-footer-widget">
	                        <h4>Follow Me</h4>
	                        <p>Let us be social</p>
	                        <div class="footer-social d-flex align-items-center">
	                            <a href="#"><i class="fa fa-facebook"></i></a>
	                            <a href="#"><i class="fa fa-twitter"></i></a>
	                            <a href="#"><i class="fa fa-dribbble"></i></a>
	                            <a href="#"><i class="fa fa-behance"></i></a>
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
	<script src="js/mail-script.js"></script>
	<script src="js/main.js"></script>
	</body>
</html>
