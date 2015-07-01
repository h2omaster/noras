<?php
/*
include_once 'admin/config/class.php';

// instance objek db dan user
$counter = new counter();
$db = new Database();

// koneksi ke MySQL via method
$db->connectMySQL();
$counter->initCounter();
*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>NORAS NUSANTARA</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
     <link href="assets/css/bootstrap.css" rel="stylesheet">
     <!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Line icon font -->
    <link rel="stylesheet" href="css/line-icons.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- styles-->
    <link rel="stylesheet" href="css/style.css">
    <!-- color style -->
    <link rel="stylesheet" href="css/presets/maincolor.css">
    <!-- Responsive styles-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- circle counter -->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- circle counter -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- main coding strat -->
    <header id="header" >
    	<nav class="navbar navbar-default navbar-fixed-top"  id="tf-menu">
    	<div class="container">
    		<div class="row">
    			<div class="navbar-header ">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
    					<span class="sr-only"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a href="#" class="navbar-brand page-scroll"><img class="" src="img/logo.png" alt="logo"></a>
    			</div> <!-- navabr-header -->

    			<div class="collapse navbar-collapse clearfix" id="bs-example-navbar-collapse-1" role="navigation">
    				<ul class="nav navbar-nav navbar-right">
    					<li><a class="page-scroll" href="#header"> Home</a></li>
    					<li><a class="page-scroll" href="#about">About Us</a></li>
    					<li><a class="page-scroll" href="#work">Work</a></li>
    					<li><a class="page-scroll" href="#sevices">Services</a></li>
    					<li><a class="page-scroll" href="#contact" >Contact</a></li>
    				</ul>
    			</div>
    		</div> <!-- row end -->
    	</div> <!-- container end -->
    	</nav> <!-- nav end -->
    </header>

	<!-- main slider start -->
	<section id="slider" class="slider">
		<div class="overlay"></div>
		<div id="main-slide" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators visible-lg visible-md">
			  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
			    <li data-target="#main-slide" data-slide-to="1"></li>
			    <li data-target="#main-slide" data-slide-to="2"></li>
			</ol><!--/ Indicators end-->
			
			<!-- Carousel inner -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12 text-center">
                    		<div class="slider-text">
	                        	<h2 class="animated2">Welcome to Noras Nusantara </h2>
	                        	<h3 class="animated3">We are your ultimate choice to lead a way</h3>
	                        	<h5 class="animated6">lets introduce</h5>
	                        	<a href="#service" class="animated4 page-scroll" ><i class="fa fa-angle-down"></i></a>
                        	</div>
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->

			    <div class="item">
			    	<img class="img-responsive" src="images/slider/bg42.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h2 class="animated4"> We are Noras Nusantara</h2>
                            <h3 class="animated5">About continous Help</h3>	
                            <h5 class="animated2">lets introduce</h5>
                            <a href="#service" class="animated6 page-scroll"><i class="fa fa-angle-down"> </i></a>     
                        </div>
                    </div>
			    </div><!--/ Carousel item end -->
			    
			    <div class="item">
			    	<img class="img-responsive" src="images/slider/bg23.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    		<div class="slider-text">
	                        	<h2 class="animated7">We Offer our Clients</h2>
	                        	<h3 class="animated7">An Expert level service</h3>
                        	</div>
	                        <div class="slider-smalltext animated4">
	                        	<div class="slider-small-text-content">
	                        		<h4 class="wow animated slideInRight" data-wow-delay=".5s">
	                        			A Fresh Approch /
	                        		</h4>
		                        	<h4 class="wow animated slideInRight" data-wow-delay=".7s">
		                        		 Proper Value of Money /
		                        	</h4>
		                        	<h4 class="wow animated slideInRight" data-wow-delay="1.1s">
		                        		 Right Solution /
		                        	</h4>
		                        	<h4 class="wow animated slideInRight" data-wow-delay="1.3s">
		                        		Taking Time to Care
		                        	</h4>
	                        	</div>
	                        </div>
	                       <a href="#service" class="animated6 page-scroll"><i class="fa fa-angle-down"> </i></a>	
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
			</div><!-- Carousel inner end-->
			
			<!-- Controllers -->
			<a class="left carousel-control" href="#main-slide" data-slide="prev">
		    	<span><i class="fa fa-angle-left"></i></span>
			</a>
			<a class="right carousel-control" href="#main-slide" data-slide="next">
		    	<span><i class="fa fa-angle-right"></i></span>
			</a>
		</div><!--/ Carousel end --> 

	</section>
	<!-- main slider end -->

	<!-- Service section Start -->

	<section id="about" class="service">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
						<div class="header-content">
							<h3 class="big-title">About US</h3>
						</div>
				</div>
			</div>

			<div class="row text-center">
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".2s">
					<div class="service-desc">
						<div class="icon-box">
							<img src="img/w1.png" alt="icon">
                            <h3> Who We Are <br>  <br></h3>
						</div>
                    <div class="wow bounceInLeft" data-wow-delay=".5s">
                    <img src="img/profil.png" alt="profil">
						<div class="service-content ">
							<p>Noras Nusantara, was founded in Bandung, Indonesia in 2011 by a group of professionals who had many experiences in exploration and development process of natural resources especially in Indonesia. </p>
							<a href="#"><p><i><u>Read more</u></i></p></a>
                        </div>
					</div>
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".5s">
					<div class="service-desc">
						<div class="icon-box ">
                        <img src="img/w3.png" alt="icon">
                            <h3> Why Choose <br>Noras Nusantara ? </h3>
						</div>
                          <div class="wow bounceInLeft" data-wow-delay=".5s">
                    <img src="img/profil.png" alt="profil">
						<div class="service-content">
							<p>We develop optimal organization structure to achieve company objective.</p>
                            <br>
                            <a href="#"><p><i><u>Read more</u></i></p></a>
						</div>
					</div>
                    </div>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-12 wow fadeInLeft" data-wow-delay=".8s">
					<div class="service-desc">
						<div class="icon-box">
                        <img src="img/w2.png" alt="icon">
                            <h3> Our Mission <br><br> </h3>
                          <div class="wow bounceInLeft" data-wow-delay=".5s">
                    	<img src="img/profil.png" alt="profil">
						<div class="service-content">
							<p>Our mission is to be the world’s leading service provider for the collection and interpretation of data relating to the earth’s surface and sub-surface and for associated services</p>
							<a href="#"><p><i><u>Read more</u></i></p></a>

                        </div>
					</div>
                    </div>
				</div>
						
			</div> <!-- row end -->
		</div> <!-- container end -->
       </div>
	</section>
	<!-- Service section End -->
	
	<!-- Work process start -->

	<section id="process" class="process parallax2">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="sub-heading text-center">
						<h4 >Our working process</h4>
						<div class="line"></div>
						<p>simply we follow these process</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="process-desc">
						<div class="process-timeline"></div>
						<div class="process-none text-center">
							<div >
								<i class="fa fa-lightbulb-o"></i>
							</div>
							<h4>langkah 1</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-pencil"></i>
							</div>
							<h4>langkah 2</h4>
						</div>

						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-lightbulb-o"></i>
							</div>
							<h4>langkah 3</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-code"></i>
							</div>
							<h4>langkah 4</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-flask"></i>
							</div>
							<h4>langkah 5</h4>
						</div>
						<div class="single-process text-center">
							<div class="process-icon">
								<i class="fa fa-rocket"></i>
							</div>
							<h4>langkah 6</h4>
						</div>
					</div>
				</div>
			</div> <!-- row end -->
		</div>
	</section>
	<!-- Work process end -->
	
	
	
	<!-- Section work start -->
	<section id="work">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="header-desc text-center">
							<div class="header-content">
								<h3 class="big-title">projects</h3>
								<span>creative work sample</span>
							</div>
							<div id="containerx" ></div>
						</div>
					</div>
				
			</div><!--/ Main row end -->
		</div><!--/ Container end -->
	</section>
	




	<!-- Section testimonial start -->
	<section id="testimonial" class="parallax1">
		<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
						<!-- Indicators -->
						<ol class="carousel-indicators visible-lg visible-md">
						  	<li data-target="#testimonial-carousel" data-slide-to="0" class="active"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="1"></li>
						    <li data-target="#testimonial-carousel" data-slide-to="2"></li>
						</ol><!--/ Indicators end-->

						<div class="carousel-inner">
							<div class="item active text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team1.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>Officiis blanditiis, tempore, distinctio assumenda fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.Fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.</p>
											<h3>Jimmi jabrik</h3>
											<span>company name</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team2.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>Officiis blanditiis, tempore, distinctio assumenda fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.Fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.</p>
											<h3>Jimmi jabrik</h3>
											<span>company name</span>
										</div>
									</div>
								</div>
							</div>

							<div class="item text-center">
								<div class="row">
									<div class="col-md-12">
										<div class="testimonial-thumb">
										<img src="images/team/team1.jpg" alt="" class="img-responsive">
										</div>
										<div class="testimonial-content">
											<p>Officiis blanditiis, tempore, distinctio assumenda fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.Fugiat quaerat ea a rem est debitis quo harum corporis, labore eligendi natus quidem. Non, illum, ipsa.</p>
											<h3>Jimmi jabrik</h3>
											<span>company name</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div> <!-- testimonial-carousel end -->
				</div> <!-- row end -->
			</div> <!-- container end -->
	</section>
	<!-- Section testimonial end -->
	
	<!-- section blog start -->
	<section id="sevices">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-justify">
						<div class="header-content">
							<h3 class="big-title text-center">Services</h3>
						</div>
						<p>Noras Nusantara provides the people, equipment, expertise, and technology that support the exploration and development of the world’s natural resources. Services are mostly provided locally that involved in the early exploration and development phase of potential projects and are supported by a global knowledge base and resource pool of experienced personnel. The services are often offered in combination in order to achieve the optimum results for the clients.

We collects, processes, and interprets data related to the earth’s surface and the soils and rocks beneath and provides advices based on the results to clients in water, geotechnical, mining, and also oil & gas industry. </p>
					</div>
				</div>
			</div> <!-- 1st row end -->

            <div class="container-fluid">
					<div class="col-md-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-desc">
							<img src="img/3.png" alt="" class="img-responsive">
							<div class="blog-overlay">
								<a class="blink" href="#"><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Oil and Gas industry</h4>
							<p>- Surface Geological Mapping <br>
							   - Geophysical Survey <br>
							   - Surface Geochemistry <br>
							   - Subsurface Data Analysis and Modeling <br>
							   - Integrated Basin Study <br>
							   - Resource and Reserve Estimation</p>
						</div>
					</div>
					<div class="col-md-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-desc">
							<img src="img/2.png" alt="" class="img-responsive">
							<div class="blog-overlay">
								<a class="blink" href="#"><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Mining Industry</h4>
							
							<p>	- Industry <br>
								- Surface Geological mapping<br>
								- Geodetical Survey<br>
								- Drilling and Geophysical Logging<br>
								- Surface Geophysical Survey<br>
								- Resource and Reserve Estimation<br>
								- Environmental Study<br>
								- Feasibility Study<br>
								- Mine Planing and Design<br>
                           </p>
						</div>
					</div>
					<div class="col-md-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-desc">
							<img src="img/1.png" alt="" class="img-responsive">
							<div class="blog-overlay">
								<a class="blink" href="#"><i class="fa fa-link"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Water and Geotechnical <br>industry</h4>
							<p>	- Geotechnical Investigation<br>
								- Slope Stability Analysis<br>
								- Open Pit Design<br>
								- Solid Foundation Analysis<br>
								- Hydrology and Hydrogeology Analysis<br>
                           </p>
						</div>
					</div>
			</div><!-- row end -->
            <div class="m40"></div>
            <p> Our approach is straightforward. The best people, combined with the innovative application of leading edge ideas and technology. Noras nusantara provides a unique range of services and activities, mostly in Indonesia, these are organized in two divisions of each business segments: Geoscience and Survey.</p>
		</div> <!-- container end -->
        
	</section>
	<!-- section blog end --><div class="m40"></div>
	
	

	<!-- section contact start -->

	<section id="contact" class="contact parallax4">
		<div class="parallax-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="header-desc text-center">
						<div class="header-content">
							<h3 class="big-title">contact</h3>
							<span>my online dairy</span>
						</div>
					</div>
				</div>
			</div> <!-- 1st row end -->

			<div class="row">
				<div class="col-md-12">
					<div class="contact-desc">
						<form method="post" role="form" id="contact-form">
							<div class="row">
								<div class="col-md-4 wow fadeInLeft" data-wow-delay=".2s">
									<div class="form-group">
										<label> Name</label>
										<input class="form-control" name="name" placeholder="name" type="text" required>
									</div>
								</div>

								<div class="col-md-4 wow fadeInDown" data-wow-delay=".5s">
									<div class="form-group">
										<label> Email</label>
										<input class="form-control" name="name" placeholder="email" type="text" required>
									</div>
								</div>

								<div class="col-md-4 wow fadeInRight" data-wow-delay=".8s">
									<div class="form-group">
										<label>Subject</label>
										<input class="form-control" name="name" placeholder="subject" type="text">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12 wow fadeInUp" data-wow-delay="1.1s">
									<div class="form-group">
										<label > Message</label>
										<textarea cols="30" rows="10" class="form-control"  placeholder="message"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
							<div class="col-md-12 wow fadeInUp" data-wow-delay="1.1s">
								<div class="form-group">
							<div class="g-recaptcha" data-sitekey="6LcKxAgTAAAAAFdKT6_IJuxzTIREBAin16PFV-ni"></div>
								</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 wow fadeInUp" data-wow-delay="1.3s">
									<div class="text-left  m20">
										<button class="btn btn-white">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div> <!-- col-md-6 end -->
			</div> <!-- row end -->
		</div> <!-- container end -->
	</section>
	<!-- section contact end -->
	
	<!-- Map start here -->
	<section id="map-wrapper" class="no-padding">
		<div class="container">
			<div class="contact-info-inner wow fadeInUp">
    			<h3>Contact Info</h3>
	    		<div><i class="fa fa-map-marker pull-left"></i>  
	    			<p><strong>Address</strong>lebak bulus</p>
	    		</div>
	    		<div><i class="fa fa-phone pull-left"></i>  
	    			<p><strong>Phone</strong>+(785) 238-4131</p>
	    		</div>
	    		<div><i class="fa fa-envelope-o pull-left"></i>  
	    			<p><strong>Email</strong>info@norasnusantara.com</p>
	    		</div>
	    		<div><i class="fa fa-compass pull-left"></i>  
	    			<p><strong>Office Hours</strong>Mon - Friday, 9:00 - 5:00</p>
	    		</div>

			</div>
	   <div class="m20" id="map"></div>
		<div class="col-lg-6 img-responsive" >
      	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d247.85946621153676!2d106.789348!3d-6.296357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s53+Jl.+Lebak+Bulus+Raya+I!5e0!3m2!1sid!2s!4v1426960795778" width="900" height="350" frameborder="0" style="border:0"></iframe>
      </div>
      </div>
	</section><!--/ Map end here -->
	<!-- footer start -->

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-desc text-center">
						<div class="logo wow fadeInDown">Noras Nusantara</div>
						<ul class="socail-list list-inline">
							<li><a href="#"><i class="fa fa-facebook wow fadeInLeft" data-wow-delay=".2s"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter wow fadeInLeft" data-wow-delay=".4s"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus wow fadeInLeft" data-wow-delay=".6s"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin wow fadeInLeft" data-wow-delay=".8s"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble wow fadeInLeft" data-wow-delay="1s"></i></a></li>
							<li><a href="#"><i class="fa fa-rss wow fadeInLeft" data-wow-delay="1.1s"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!-- row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info m20">
         			 &copy; Copyright 2015 Kenji. <span>Designed &amp; developed by- <a href="https://github.com/gunawan92" target="_blank">Front Gun</a></span>
        			</div>
				</div>
			</div><!--/ Row end -->

			<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
			 	<a href="#slider" class="page-scroll">
					<button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
				</a>
			</div>
		</div><!-- container end -->
	</footer>
	<!-- footer end -->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	
	<script src="http://cdnjs.cloudflare.com/ajax/libs/proj4js/2.2.2/proj4.js"></script>
	
	<script src="js/highmaps.js"></script>
	
	<script src="http://code.highcharts.com/maps/modules/exporting.js"></script>
	
	<script src="js/indonesia.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- initialize jQuery Library -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <!-- Wow Animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- SmoothScroll -->
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <!-- prettyphoto -->
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <!-- Eeasing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <!-- Counter -->
    <script type="text/javascript" src="js/jquery.counterup.min.js"></script>
    <!-- Waypoints -->
    <script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <!-- Google Map API Key Source -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <!-- Google Map  Source -->
    <script type="text/javascript" src="js/gmaps.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
		
  </body>
  <script type="text/javascript">
$(function () {

    // Initiate the chart
    $('#containerx').highcharts('Map', {

        title: {
            text: 'Teritorial Mining'
        },

        mapNavigation: {
            enabled: true
        },

        tooltip: {
			useHTML : true,
            headerFormat: '',
            pointFormat: '<b>{point.name}</b><br>Mining: {point.mining}, Tanah: {point.tanah}, Gambar: <img src="{point.img}" />'
        },

        series: [{
            // Use the gb-all map with no data as a basemap
            mapData: Highcharts.maps['countries/id/id-all'],
            name: 'Basemap',
            borderColor: '#A0A0A0',
            nullColor: 'rgba(94, 94, 71, 1)',
            showInLegend: false
        }, {
            name: 'Separators',
            type: 'mapline',
            data: Highcharts.geojson(Highcharts.maps['countries/id/id-all'], 'mapline'),
            color: '#FF3300',
            showInLegend: false,
            enableMouseTracking: false
        }, {
            // Specify points using lat/lon
            type: 'mappoint',
            name: 'Cities',
            color: '#FF3300',
            data: [{
                name: 'Jakarta',
                lat: -6.217,
                lon: 106.8528,
				mining : 2000,
				tanah : 'tandus',
				img : 'img/1.png'
            }]
        }]
    });
});
</script>
</html>
