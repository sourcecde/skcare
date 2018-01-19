<head>
	<meta charset="UTF-8">
	<title>Senior Safety || Responsive HTML 5 Template</title> 
	
	<!-- mobile responsive meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="fonts/flaticon.css" />

	<!--favicon-->
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

</head>

<body>
	<div class="boxed_wrapper">
		<div class="header-top">
			<div class="container clearfix">
				<!--Top Left-->
				<div class="top-left pull-left">
					<ul class="links-nav clearfix">
						<li><a href="#"><span class="fa fa-phone"></span> Call:  123 4561 5523 </a></li>
						<li><a href="#"><span class="fa fa-envelope"></span>Email:  info@templatepath.com</a></li>
					</ul>
				</div>
				<!--Top Right-->
                    <div class="top-right pull-right">
					<div class="social-links clearfix">
						<a href="#"><span class="fa fa-facebook-f"></span></a>
						<a href="#"><span class="fa fa-twitter"></span></a>
						<a href="#"><span class="fa fa-linkedin"></span></a>
						<a href="#"><span class="fa fa-instagram"></span></a>
						<a href="#"><span class="fa fa-pinterest-p"></span></a>
					</div>
				</div>
			</div>
		</div><!-- Header Top End -->

		<section class="mainmenu-area stricky">
		    <div class="container">
		    	<div class="row">
		    		<div class="col-md-4">
						<div class="main-logo">
							<a href="index.php"><img src="images/logo/logo.png" alt=""></a>
						</div>
					</div>
					<div class="col-md-6 menu-column">
						<nav class="main-menu">
				            <div class="navbar-header">     
				                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                    <span class="icon-bar"></span>
				                </button>
				            </div>
				            <div class="navbar-collapse collapse clearfix">
				                <ul class="navigation clearfix">

				                	<?php
				                		$page_name = basename($_SERVER['PHP_SELF']);
				                	?>

				                    <li class="<?php if($page_name=='index.php') echo 'current'; ?>"><a href="index.php">Home</a></li>

									<li class="<?php if($page_name=='about.php') echo 'current'; ?>"><a href="about.php">About</a></li>

									<li class="dropdown <?php if($page_name=='service.php') echo 'current'; ?>"><a href="service.php">Services</a>
										<ul>
											<li><a href="#">Dementia</a></li>
											<li><a href="#">Learning Disabilities</a></li>
											<li><a href="#">Mental Health Condition</a></li>
											<li><a href="personal.php">Personal Care</a></li>
											<li><a href="#">Physical Disabilities</a></li>
											<li><a href="#">Sensory Impairments</a></li>
											<li><a href="#">Caring for Adults Under 65 Years</a></li>
											<li><a href="#">Caring for Adults Over 65 Years</a></li>

										 </ul>
									</li>
									

									<li class="<?php if($page_name=='contact.php') echo 'current'; ?>"><a href="contact.php">Contact</a></li>
								</ul>

				                <ul class="mobile-menu clearfix">

				                    <li><a href="index-2.html">Home</a></li>

									<li><a href="about.html">About</a></li>

									<li class="dropdown"><a href="#">Services</a>
									<ul>
											<li><a href="service.html">Services</a></li>
											<li><a href="single-service-1.html">Elderly Medical Care</a></li>
											<li><a href="single-service-2.html">Skilled Nursing</a></li>
											<li><a href="single-service-3.html">24h/7days Support</a></li>
											<li><a href="single-service-4.html">Ensure Family Care</a></li>
											<li><a href="single-service-5.html">Continue Care</a></li>
											<li><a href="single-service-6.html">Assisted Living</a></li>

										 </ul>
									</li>

					                <li class="dropdown"><a href="#">Pages</a>
										<ul>
											<li><a href="gallery.html">Gallery</a></li>
											<li><a href="gallery-two.html">Gallery Two</a></li>
											<li><a href="team.html">Our Experts</a></li>
											<li><a href="expart-details.html">Expert Details </a></li>
											<li><a href="faq.html">Faq</a></li>
											<li><a href="error.html">Error</a></li>
											
										 </ul>
									</li>

									<li class="dropdown"><a href="#">Blog</a>
										<ul>
											<li><a href="blog-grid.html">Blog Grid</a></li>
											<li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</li>
			
									<li><a href="contact.html">Contact</a></li>

				                </ul>
				            </div>
				        </nav>
					</div>
					<div class="col-md-2">
						<div class="right-area">
						   <div class="link_btn float_right">
							   <a href="#" class="thm-btn donate-box-btn">appointment</a>
						   </div>
						</div>	
					</div>
		    	</div>
		        
		    </div>
		</section>