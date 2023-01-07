<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Perfect_Portfolio
 */
    /**
     * Doctype Hook
     * 
     * @hooked perfect_portfolio_doctype
    */
    do_action( 'perfect_portfolio_doctype' );
?>
<head itemscope itemtype="https://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked perfect_portfolio_head
    */
    do_action( 'perfect_portfolio_before_wp_head' );
    
    wp_head(); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
	
	
	<header id="header-3" class="header-area absolate-header">
		<div class="sticky-area">
			<div class="navigation">
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="logo">
								<a class="navbar-brand" href="../index.html"><img src="../assets/img/logo-02.svg" alt=""></a>
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
												<a class="nav-link active" href="../index.html">Home
													
												</a>
												
											</li>

											<li class="nav-item">
												<a class="nav-link" href="../about.html">About
													
												</a>
												
											</li>
										   <li class="nav-item">
												<a class="nav-link" href="../projects.html">Projects
													
												</a>
												
											</li>
											<li class="nav-item">
												<a class="nav-link" href="services.html">Services
													<span class="sub-nav-toggler">
													</span>
												</a>
												<ul class="sub-menu">
													<li><a href="../rental-services.html">Rental Services</a></li>
													<li><a href="../asset-resale.html">Asset Resale</a></li>
													<li><a href="../construction.html">Construction</a></li>
													<li><a href="../facility-management.html">Facility Management</a></li>
												</ul>

											</li>

											<li class="nav-item">
												<a class="nav-link" href="../career.html">Career
													
												</a>
												
											</li>
											
										</ul>

									</div>
								</nav>
							</div>
						</div>
						<div class="col-lg-3 text-right">
							<div class="header-right-content">
								<a href="../contact.html" class="header-btn main-btn">Contact US</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>


 	<!-- Breadcroumb Area -->

 	<div class="breadcroumb-area bread-bg">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-12">
 					<div class="breadcroumb-title text-center">
 						<h1>Projects</h1>
 						<h6><a href="../index.html">Home</a> / Projects</h6>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Project Section -->

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
 			<div class="portdiv">

<?php
    wp_body_open();

	
    
    /**
     * Content
     * 
     * @hooked perfect_portfolio_content_start
    */
    do_action( 'perfect_portfolio_content' );
	
	
	