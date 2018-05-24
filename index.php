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
			        <a href="index.html"><img width="200px" src="img/LogoMitName.png" alt="" title="" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
					<li><a href="index.html">Home</a></li>
					<li><a href="services.html">About the Tour</a></li>
					<li><a href="price.html">Sponsors</a></li>
					<li><a href="about.html">Past Tours</a></li>
					 <li><a href="portfolio.html">Pioniergarage Homepage</a></li>
					<li><a href="contact.html">Contact</a></li>
			        </ul>
			      </nav><!-- #nav-menu-container -->
		    	</div>
		    </div>
		  </header><!-- #header -->

		  <!-- start banner Area -->
		  <section class="banner-area relative blog-home-banner" id="home">
		  	<div class="overlay overlay-bg"></div>
		  	<div class="container">
		  		<div class="row d-flex align-items-center justify-content-center">
		  			<div class="about-content blog-header-content col-lg-12">
						<h6 class="text-white">Startuptour</h6>
						<h1 class="text-white"><?php echo($Location)?></h1>
						<p class="text-white">
							<b><?php echo($AboutTourText)?></b>
						</p>
		  				<a href="blog-single.html" class="primary-btn">View More</a>
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
			<section class="timeline pb-120">
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

		<!-- Start services Area -->
			<section class="services-area section-gap">
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
			<!-- End services Area -->

			<!-- Start fact Area
			<section class="facts-area section-gap" id="facts-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2536</h1>
							<p>Projects Completed</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">6784</h1>
							<p>Happy Clients</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">2239</h1>
							<p>Cups of Coffee</p>
						</div>
						<div class="col-lg-3 col-md-6 single-fact">
							<h1 class="counter">435</h1>
							<p>Real Professionals</p>
						</div>
					</div>
				</div>
			</section>
			end fact Area -->

			<!-- Start portfolio-area Area
            <section class="portfolio-area section-gap" id="portfolio">
                <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Our Latest Featured Projects</h1>
		                        <p>Who are in extremely love with eco friendly system.</p>
		                    </div>
		                </div>
		            </div>

                    <div class="filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".vector">Vector</li>
                            <li data-filter=".raster">Raster</li>
                            <li data-filter=".ui">UI/UX</li>
                            <li data-filter=".printing">Printing</li>
                        </ul>
                    </div>

                    <div class="filters-content">
                        <div class="row grid">
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p1.jpg" alt="">
	                            	</div>
									<a href="img/p1.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p2.jpg" alt="">
	                            	</div>
									<a href="img/p2.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
								</a>
                            	</div>
								<div class="p-inner">
								    <h4>2D Vinyl Design</h4>
									<div class="cat">vector</div>
								</div>
                            </div>
                            <div class="single-portfolio col-sm-4 all ui">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p3.jpg" alt="">
	                            	</div>
									<a href="img/p3.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>

	                           	</div>
                                <div class="p-inner">
                                    <h4>Creative Poster Design</h4>
                                    <div class="cat">Agency</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all printing">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p4.jpg" alt="">
	                            	</div>
									<a href="img/p4.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>
                            	</div>y

                                <div class="p-inner">
                                    <h4>Embosed Logo Design</h4>
                                    <div class="cat">Portal</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all vector">
                            	<div class="relative">
                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p5.jpg" alt="">
	                            	</div>
									<a href="img/p5.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>
                            	</div>
                                <div class="p-inner">
                                    <h4>3D Helmet Design</h4>
                                    <div class="cat">vector</div>
                                </div>
                            </div>
                            <div class="single-portfolio col-sm-4 all raster">
                            	<div class="relative">
	                            	<div class="thumb">
	                            		<div class="overlay overlay-bg"></div>
	                            		 <img class="image img-fluid" src="img/p6.jpg" alt="">
	                            	</div>
									<a href="img/p6.jpg" class="img-pop-up">
									  <div class="middle">
									    <div class="text align-self-center d-flex"><img src="img/preview.png" alt=""></div>
									  </div>
									</a>
                            	</div>
                                <div class="p-inner">
                                    <h4>2D Vinyl Design</h4>
                                    <div class="cat">raster</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
 End portfolio-area Area -->


			<!-- Start testimonial Area
		    <section class="testimonial-area section-gap">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
		                    <div class="title text-center">
		                        <h1 class="mb-10">Client’s Feedback About Me</h1>
		                        <p>It is very easy to start smoking but it is an uphill task to quit it. Ask any chain smoker or even a person.</p>
		                    </div>
		                </div>
		            </div>
		            <div class="row">
		                <div class="active-testimonial">
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user1.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                Do you want to be even more successful? Learn to love learning and growth. The more effort you put into improving your skills, the bigger the payoff you.
		                            </p>
		                            <h4>Harriet Maxwell</h4>
		                            <p>CEO at Google</p>
		                        </div>
		                    </div>
		                    <div class="single-testimonial item d-flex flex-row">
		                        <div class="thumb">
		                            <img class="img-fluid" src="img/elements/user2.png" alt="">
		                        </div>
		                        <div class="desc">
		                            <p>
		                                A purpose is the eternal condition for success. Every former smoker can tell you just how hard it is to stop smoking cigarettes. However.
		                            </p>
		                            <h4>Carolyn Craig</h4>
		                            <p>CEO at Facebook</p>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    End testimonial Area -->

			<!-- Start price Area
			<section class="price-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Choose Your Plan</h1>
								<p>When someone does something that they know that they shouldn’t do, did they.</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">01</h1>
								<h4>Economy</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£199.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">02</h1>
								<h4>Business</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£299.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">03</h1>
								<h4>Premium</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£399.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 single-price">
							<div class="top-part">
								<h1 class="package-no">04</h1>
								<h4>Exclusive</h4>
								<p class="mt-10">For the individuals</p>
							</div>
							<div class="package-list">
								<ul>
									<li>Secure Online Transfer</li>
									<li>Unlimited Styles for interface</li>
									<li>Reliable Customer Service</li>
								</ul>
							</div>
							<div class="bottom-part">
								<h1>£499.00</h1>
								<a class="price-btn text-uppercase" href="#">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
			 End price Area -->

			<!-- Start recent-blog Area
			<section class="recent-blog-area section-gap">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1>Latest posts from our blog</h1>
							<p>
								You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving and expanding the business
							</p>
						</div>
					</div>
					<div class="row">
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b1.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Break Through Self Doubt
								And Fear</h4>
							</a>
							<p>
								Dream interpretation has many forms; it can be done be done for the sake of fun, hobby or can be taken up as a serious career.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b2.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Portable Fashion for
								young women</h4>
							</a>
							<p>
								You may be a skillful, effective employer but if you don’t trust your personnel and the opposite, then the chances of improving.
							</p>
						</div>
						<div class="single-recent-blog col-lg-4 col-md-4">
							<div class="thumb">
								<img class="f-img img-fluid mx-auto" src="img/b3.jpg" alt="">
							</div>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="img/user.png" alt="">
									<a href="#"><span>Mark Wiens</span></a>
								</div>
								<div class="meta">
									13th Dec
									<span class="lnr lnr-heart"></span> 15
									<span class="lnr lnr-bubble"></span> 04
								</div>
							</div>
							<a href="#">
								<h4>Do Dreams Serve As
								A Premonition</h4>
							</a>
							<p>
								So many of us are demotivated to achieve anything. Such people are not enthusiastic about anything. They don’t want to work involved.
							</p>
						</div>


					</div>
				</div>
			</section>
			end recent-blog Area -->

		    <!-- Start brands Area -
		    <section class="brands-area">
		        <div class="container">
		            <div class="brand-wrap">
		                <div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l1.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l2.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l3.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l4.png" alt=""></a>
		                    </div>
		                    <div class="col single-brand">
		                        <a href="#"><img class="mx-auto" src="img/l5.png" alt=""></a>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </section>
		    End brands Area -->

            <!-- start footer Area -->
            <footer class="footer-area section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-sm-6">
                            <div class="single-footer-widget">
				    <!--
                                <h4>About Me</h4>
                                <p>
                                    We have tested a number of registry fix and clean utilities and present our top 3 list on our site for your convenience.
                                </p>
			-->
                                <p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

				<p class="footer-text">
					<a href="https://pioniergarage.de/impressum/">Impressum</a>
				</p>


                            </div>
                        </div>
			<!--
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
                        </div>-->
                    </div>
                </div>
            </footer>
            <!-- End footer Area -->

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
