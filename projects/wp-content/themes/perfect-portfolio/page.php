<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Perfect_Portfolio
 */
get_header(); 
perfect_portfolio_tc_wrapper_start(); ?>

<header id="header-3" class="header-area absolate-header">
		<div class="sticky-area">
			<div class="navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="logo">
								<a class="navbar-brand" href="#home3"><img src="assets/img/logo-02.svg" alt=""></a>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="main-menu">
								<nav class="navbar navbar-expand-lg">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
										<ul class="navbar-nav m-auto">
											<li class="nav-item">
												<a class="nav-link active" href="./index.html">Home
													
												</a>
												
											</li>

											<li class="nav-item">
												<a class="nav-link" href="./about.html">About
													
												</a>
												
											</li>
										   <li class="nav-item">
												<a class="nav-link" href="./projects.html">Projects
													
												</a>
												
											</li>
											<li class="nav-item">
												<a class="nav-link" href="services.html">Services
													<span class="sub-nav-toggler">
													</span>
												</a>
												<ul class="sub-menu">
													<li><a href="rental-services.html">Rental Services</a></li>
													<li><a href="asset-resale.html">Asset Resale</a></li>
													<li><a href="construction.html">Construction</a></li>
													<li><a href="facility-management.html">Facility Management</a></li>
												</ul>

											</li>

											<li class="nav-item">
												<a class="nav-link" href="./career.html">Career
													
												</a>
												
											</li>
											
										</ul>

									</div>
								</nav>
							</div>
						</div>
						<div class="col-lg-3 text-right">
							<div class="header-right-content">
								<a href="contact.html" class="header-btn main-btn">Contact US</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

 	<div class="breadcroumb-area bread-bg">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="breadcroumb-title text-center">
 						<h1>Projects</h1>
 						<h6><a href="index-2.html">Home</a> / Projects</h6>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="project-area section-padding">
 		<div class="container">
 			<div class="offset-lg-2 col-lg-8 text-center">
 				<div class="section-title">
 					<h6>Portfolio</h6>
 					<h2>Brilliant <b>Ideas</b> With
 						<br>Excellent <b>Work </b></h2>
 					<p>We are committed to provide value to customers. We believe that buildings  <br> are best when they are well-expressed.</p>
 				</div>
 			</div>
 			<div class="row">



	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			
			perfect_portfolio_entry_footer();

			/**
             * Comment Template
             * 
             * @hooked perfect_portfolio_comment
            */
            do_action( 'perfect_portfolio_after_page_content' );
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
				
				
				
				
				
				
				
				</div>
 		</div>
 	</div>

 	<!--  -->

 	<!--CTA Section-->

<div class="cta-area">
	<div class="overlay"></div>
	<div class="container">
	  <div class="row">
		<div class="col-lg-5 col-md-5 col-12">
		  <h2>Let's Get Your Project Started Today!</h2>
		</div>
		<div class="col-lg-6 offset-lg-1 col-md-6 offset-md-1 col-12">
		  <div class="contact-info">
			<div class="row">
			  <div class="col-lg-6 col-6">
				<div class="call">
				  <i class="las la-phone"></i>
				  <h5>Call Us</h5>
				  <p>0495 4852044</p>
				</div>
			  </div>
			  <div class="col-lg-6 col-6">
				<div class="mail">
				  <i class="las la-envelope"></i>
				  <h5>E-mail</h5>
				  <p>sales@dhabidevelopers.com</p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </div>

 	<!-- Footer Area -->

 	<footer class="footer-area">
 		<div class="container">
 			<div class="footer-up">
 				<div class="row">
 					<div class="col-lg-3 col-md-6 col-sm-12">
 						<div class="logo">
							<img src="assets/img/logo-02.svg" alt="dhabi-logo">
 						</div>
 						<p>We are leaders in property management and construction. Our passionate and dedicated team never give up on challenges.</p>
 						<div class="social-area">
 							<a href="#"><i class="lab la-facebook-f"></i></a>
 							<a href="#"><i class="lab la-instagram"></i></a>
 							<a href="#"><i class="lab la-twitter"></i></a>
 							<a href="#"><i class="la la-skype"></i></a>
 						</div>
 					</div>
 					<div class="col-lg-2 offset-lg-1 col-md-6 com-sm-12">
						<h5>Explore</h5>
						<ul>
							<li>
								<a href="#home3">Home</a>
								<a href="./about.html">About Us</a>
								<a href="./projects.html">Projects</a>
								<a href="./services.html">Services</a>
								<a href="./career.html">Career</a>
								<a href="./contact.html">Contact Us</a>
							</li>
						</ul>
					</div>
					 <div class="col-lg-3 col-md-6 col-sm-12">
						<h5>Services</h5>
						<ul>
							<li>
								<a href="rental-services.html">Rental Services</a>
								<a href="asset-resale.html">Asset Resale</a>
								<a href="construction.html">Construction</a>
								<a href="facility-management.html">Facility Management</a>
							</li>
						</ul>
					</div>
 					<div class="col-lg-3 col-md-6">
 						<div class="subscribe-form">
 							<h5>Newsletter</h5>
 							<p>Sign Up now for latest news update</p>
 							<form action="http://capricorn-theme.net/html/industrian/index.html">
 								<input type="email" placeholder="Your email">
 								<button class="main-btn">Subscribe</button>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>
 		</div>
 	</footer>

 	<div class="footer-bottom">
 		<div class="container">
 			<div class="row justify-content-center align-items-center">
 				<div class="col-lg-6 col-md-6 col-sm-12">
 					<p class="copyright-line">© 2020 Dustrian. All rights reserved.</p>
 				</div>
 				<div class="col-lg-6 col-md-6 col-sm-12">
 					<p class="privacy">Privacy Policy | Terms &amp; Conditions</p>
					 <p class="privacy">REG:NO: KRERA/AG/0002/2021</p>
 				</div>
 			</div>
 		</div>
 	</div>

 	<!-- Scroll Top Area -->
 	<a href="#top" class="go-top" style="display: block;"><i class="las la-angle-up"></i></a>
				
				
				
				
				
				
				
				
				
				
				
				
<?php
get_sidebar();
perfect_portfolio_tc_wrapper_ends();
get_footer();
