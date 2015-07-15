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
<!--DOCTYPE html-->
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

	 <link rel="stylesheet" href="css/demo.css">
  


     <!-- Prettyphoto -->
	<link rel="stylesheet" href="css/prettyPhoto.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Line icon font -->
    <link rel="stylesheet" href="css/line-icons.min.css">
	<!---SLIDER-->
	<link rel="stylesheet" href="css/slider.css">
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
	<style>
	
</style>
  </head>
  <body>
    
    <!-- main coding strat -->
    <header id="header" >
    	<nav class="navbar navbar-default navbar-fixed-top" id="tf-menu">
    	<div class="container">
    		<div class="row">
    			<div class="navbar-header ">
    				<button class="navbar-toggle collapsed" data-target="#bs-example-navbar-collapse-1" data-toggle="collapse">
    					<span class="sr-only"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    					<span class="icon-bar"></span>
    				</button>
    				<a href="index.php#home" class="navbar-brand page-scroll"><img class="" src="img/logo.png" alt="logo"></a>
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
			  	<li data-target="#main-slide" data-slide-to="1" class="active"></li>
			    <li data-target="#main-slide" data-slide-to="2"></li>
			    <li data-target="#main-slide" data-slide-to="3"></li>
				<li data-target="#main-slide" data-slide-to="4"></li>
           	    <li data-target="#main-slide" data-slide-to="5"></li>

			</ol><!--/ Indicators end-->
			
			<!-- Carousel inner -->
			<div class="carousel-inner">
			    <div class="item active">
			    	<img class="img-responsive" src="images/slider/1.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
                
				<div class="item ">
			    	<img class="img-responsive" src="images/slider/2.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
				
				<div class="item ">
			    	<img class="img-responsive" src="images/slider/3.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
				
         		<div class="item">
			    	<img class="img-responsive" src="images/slider/4.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
                 <div class="item">
			    	<img class="img-responsive" src="images/slider/5.jpg" alt="slider">
                    <div class="slider-content">
                    	<div class="col-md-12">
                    	</div>
                    </div>
			    </div><!--/ Carousel item end -->
	

			    </div><!--/ Carousel item end -->
			</div><!-- Carousel inner end-->
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
			<br/>
			<div class="row">
			<div class="col-md-12 wow fadeInLeft" data-wow-delay=".2s">
				<div class="col-md-5 col-xs-12 col-lg-5 text-center">
				 <img class="img-responsive" src="img/profil.png" alt="profil">
			</div>
			
				<div class="service-content">
				<div class="col-md-7 ">
					<h3> WHO WE ARE </h3>
				</div>
				
							<p style="text-align:justify;">NORAS NUSANTARA is a geological and mining services company that dedicated to provide high quality geological and mining services in Indonesia.
							
							The company’s strategy is to build value through the acquisition, exploration and development of coal, precious and base metal properties with excellent values potential to the point where they become attractive acquisitions or joint venture targets.
							
							The company was founded in 2011 by a group of professionals who had many experiences in exploration and development process of coal and minerals especially in Indonesia. PT. NORAS NUSANTARA has built an impressive team to implement this strategy. They include Exploration Team, Mining Team, and Geotechnical Environmental Team.</p>
                    
                        </div>
						<div class="col-md-2 col-xs-12 col-lg-2 text-center">
								<a href="aboutus.php#about" target="_blank"><img class="btn img-responsive" src="img/w1.png" alt="icon"></a>
							<p>Who We Are</p>
						</div>
						<div class="col-md-2 col-xs-12 col-lg-2 text-center">
							<a href="aboutus.php#mission"><img class="btn img-responsive" src="img/w2.png" alt="icon"></a>
							<p>Our Mission</p>
						</div>
						<div class="col-md-2 col-xs-12 col-lg-2 text-center">
							<a href="aboutus.php#choose"><img class="btn img-responsive" src="img/w3.png" alt="icon"></a>
							<p>Why choose <br> Noras Nusantara?</p>
						</div>

						
					
                    </div>
                    </div>
                    </div>
			
	</section>
	<!-- Work process start -->
	
	<section id="testimonial" class="parallax2">
		
			<div class="parallax-overlay2"></div>
			
			<div class="col-md-12">
					<div class="sub-heading text-center">
						<h4 style="color:white;">New Tecnology</h4>
					</div>
			</div>						
				<div class="row-fluid">
					<div class="container-fluid ">
				<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="col-md-4">
                        <a class="btn" href="technology.php#pst"><img src="images/btn1.png"></a>
                        </div>
                        <div class="col-md-4">
                        <a class="btn" href="technology.php#sg"><img src="images/btn2.png"></a>
                        </div>
						</div>
						</div>

					</div>
				</div>

	</section>
	<!-- Work process end -->
	
	
<!--section id="testimonial" class="parallax1">
		
			<div class="parallax-overlay2"></div>
			
			<div class="col-md-12">
					<div class="sub-heading text-center">
						<h4 style="color:white;">New Tecnology</h4>
					</div>
			</div>						
				<div class="row-fluid">
					<div class="container-fluid">
						<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">

							<figure class="effect-oscar wowload fadeInUp">
							<img class="img-responsive" src="img/h5.jpg" alt="techno">
								<figcaption>
								<p style="color:white;">PASSIVE SEISMICTOMOGRAPHY (PST)
							TECHNOLOGY</p>
								<a class="btn btn-default btn-xs" href="technology.php#pst" >View more</a>
							</figcaption>
							</figure>
                        </div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
							<figure class="effect-oscar wowload fadeInUp">
							<img class="img-responsive"src="img/h5.jpg" alt="techno">
								<figcaption>
								<p style="color:white;">SURFACE GEOCHEMICAL
							TECHNOLOGY</p>
								<a class="btn btn-default btn-xs" href="technology.php#sg" >View more</a>
							</figcaption>
							</figure>
                        </div>
					</div>
				</div>

	</section>
	<!-- Work process end -->
	
	
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
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Oil and Gas industry</h4>
							   <ul>
							   
							   <li>Surface Geological Mapping </li>
							   <li>Geophysical Survey </li>
							   <li>Surface Geochemistry </li>
							   <li>Subsurface Data Analysis and Modeling</li>
							   <li>Integrated Basin Study</li>
							   <li>Resource and Reserve Estimation</li>
							   
							   </ul>
						</div>
					</div>
					<div class="col-md-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-desc">
							<img src="img/2.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Mining Industry</h4>
							<ul>
							<li>Industry </li>
							<li>Surface Geological mapping</li>
							<li>Geodetical Survey </li>
							<li>Drilling and Geophysical Logging</li>
								<li>Surface Geophysical Survey</li>
								<li>Resource and Reserve Estimation</li>
								<li>Environmental Study</li>
								<li>Feasibility Study</li>
								<li>Mine Planing and Design</li>
                           </ul>
						</div>
					</div>
					<div class="col-md-1 wow fadeInUp" data-wow-delay=".2s">
						<div class="blog-desc">
							<img src="img/1.png" alt="" class="img-responsive">
						</div>
					</div>
					<div class="col-md-3">
						<div class="blog-content">
							<h4 class="blog-title">Water and Geotechnical <br>industry</h4>
							<ul>
								<li>Geotechnical Investigation</li>
								<li>Slope Stability Analysis</li>
								<li>Open Pit Design</li>
								<li>Solid Foundation Analysis</li>
								<li>Hydrology and Hydrogeology Analysis</li>
                           </ul>
						</div>
					</div>
			</div><!-- row end -->
            <div class="m40"></div>
            <p> Our approach is straightforward. The best people, combined with the innovative application of leading edge ideas and technology. Noras nusantara provides a unique range of services and activities, mostly in Indonesia, these are organized in two divisions of each business segments: Geoscience and Survey.</p>
			<div class="container-fluid">
				<div class="col-md-12">
						<div class="col-md-1"></div>
						<div class="col-md-4">
                        <a class="btn" href="servicespage.php#sur"><img src="images/btn3.png"></a>
                        </div>
                        <div class="col-md-4">
                        <a class="btn" href="servicespage.php#geo"><img src="images/btn4.png"></a>
                        </div>
						</div>
						</div>
						<div class="m40"></div>
		</div> <!-- container end -->
        
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
	
	<!-- section work start -->
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
						
									<div id="myModal" class="modal fade" role="dialog">
										<div class="modal-dialog">

										<div class="modal-content col-md-12">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h4 class="modal-title">Documentation</h4>
													</div>
										<div class="modal-body">
											<div class="ask">
											<input type="radio" name="slidebnm" class="radio-nav" id="nav-1" checked/>
											<input type="radio" name="slidebnm" class="radio-nav" id="nav-2"/>
											<input type="radio" name="slidebnm" class="radio-nav" id="nav-3"/>
											<input type="radio" name="slidebnm" class="radio-nav" id="nav-4"/>
											<input type="radio" name="slidebnm" class="radio-nav" id="nav-5"/>
												<ul class="slidebnm img-responsive">
		
												</ul>

												<div class="nav-arrow nav-next">
													<label class="nav-1" for="nav-1">></label>
													<label class="nav-2" for="nav-2">></label>
													<label class="nav-3" for="nav-3">></label>
													<label class="nav-4" for="nav-4">></label>
													<label class="nav-5" for="nav-5">></label>

												</div>
												<div class="nav-arrow nav-prev">
													<label class="nav-5" for="nav-5"><</label>
													<label class="nav-4" for="nav-4"><</label>
													<label class="nav-3" for="nav-3"><</label>
													<label class="nav-2" for="nav-2">></label>
													<label class="nav-1" for="nav-1">></label>
													
													
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
										</div>

								</div>
								</div>
				</div>
				</div>
			</div><!--/ Main row end -->
		</div><!--/ Container end -->
	</section>

	
	<div class="m40"></div>
	
	

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
	<section id="map-wrapper" class="no-padding ">
		<div class="row ">
			<div class="contact-info-inner wow fadeInUp col-md-12">
    			<h4>Contact Info</h4>
	    		<div><i class="fa fa-map-marker pull-left hidden-xs"></i>  
	    			<p><strong>Address Head Office</strong>GREENHUB @ 88KASABLANKA Level 38, Tower A, Kota Kasablanka Jl. Casablanca Raya Kav 88 Jakarta, 12870</p>

	    		</div>
				<div><i class="fa fa-map-marker pull-left "></i>
									<p><strong>Workstation</strong>
Jl.Tebet Timur III B No.17
Jakarta Selatan, 12820</p>
</div>
				<div class="container-fluid hidden-xs">
				
	    		<div><i class="fa fa-phone pull-left"></i>  
	    			<p  class="col-md-4 col-xs-12"><strong>Phone</strong>(+62) 21 829 0480 </p>
	    		</div>
				<div ><i class="fa fa-fax pull-left "></i>
					<p  class="col-md-4 col-xs-12" ><strong>Fax</strong>(+62) 21 829 0480 </p>
				</div>
				</div>
				
				<div class="visible-xs"><i class="fa fa-phone pull-left"></i>  
	    			<p ><strong>Phone</strong>(+62) 21 829 0480 </p>
	    		</div>
				<div class="visible-xs"><i class="fa fa-fax pull-left "></i>
					<p ><strong>Fax</strong>(+62) 21 829 0480 </p>
				</div>

				
	    		<div><i class="fa fa-envelope-o pull-left "></i>  
	    			<p><strong>Email</strong>noras@norasnusantara.com</p>
	    		</div>

			</div>
	   <div class="m10" id="map"></div>
		<div class=".Flexible-container">
      	<iframe class="hidden-xs" id="i1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.218345476125!2d106.842568!3d-6.22351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xaf54cb631563acce!2sKota+Kasablanka!5e0!3m2!1sen!2sus!4v1436879856142" width="600" height="450" frameborder="0" style="border:0" allowfullscreen" >
		</iframe>

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
							<li><a href="http://fb.com/norasnusantara/"><i class="fa fa-facebook wow fadeInLeft" data-wow-delay=".2s"></i></a></li>
							<li><a href="https://twitter.com/norasnusantara/"><i class="fa fa-twitter wow fadeInLeft" data-wow-delay=".4s"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus wow fadeInLeft" data-wow-delay=".6s"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin wow fadeInLeft" data-wow-delay=".8s"></i></a></li>
						</ul>
					</div>
				</div>
			</div><!-- row end -->
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="copyright-info m20">
         			 &copy; Copyright 2015 Kenji. <span>Designed &amp; developed by- <a href="https://sikenji.com" target="_blank">Kenji Studio</a></span>
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
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<!--<script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />-->
  <script src="js/responsiveslides.min.js"></script>
  
  <!-- Map-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/proj4js/2.2.2/proj4.js"></script>
	<script src="js/highmaps.js"></script>
	<script src="js/indonesia.js"></script>
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
  <script>
$(document).ready(function(){
	 $(".rslides").responsiveSlides({
        auto: false,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        //before: function () {
         // $('.events').append("<li>before event fired.</li>");
        //},
       // after: function () {
        //  $('#slider4').html('<li><img src="images/1.jpg"></li>'
									//+'<li><img src='+event.point.img2+'></li>'
		//							);
        //}
      });	    
 $(function () {
					  
    // Initiate the chart
    $('#containerx').highcharts('Map', {

        title: {
            text: 'Teritorial Mining'
        },

        mapNavigation: {
            enabled: false
        },
	 
		 plotOptions: {
            series: {
				events: {
                    click: function (event) {
				
					//$( "#dialog1" ).dialog({
					//	autoOpen: false
					//  });
			//  $("#opener").click(function() {
				//$("#dialog1").dialog('open');

				/*
			var d1 = document.getElementById('zxc');
d1.insertAdjacentHTML('afterend', '<img src='+event.point.img+'>'
+'<img src='+event.point.img2+'>');
*/
				
				//var ul = document.getElementById("slider4")
				
				$('#myModal').modal('show')
				//var li = document.createElement("li");
				//var span = document.createElement("li");				
				 $(".slidebnm").html('<li class="bnm-1"><img src='+event.point.img+'></li>'
								+'<li class="bnm-2"><img src='+event.point.img2+'></li>'
								+'<li class="bnm-3"><img src='+event.point.img3+'></li>'
								+'<li class="bnm-4"><img src='+event.point.img4+'></li>'
								+'<li class="bnm-5"><img src='+event.point.img5+'></li>'

								);
			/*	 var photo = '<li><img src="http://www.fordesigner.com/imguploads/Image/cjbc/zcool/png20080526/1211813364.png"></li>'
								+'<li><img src="http://www.fordesigner.com/imguploads/Image/cjbc/zcool/png20080526/1211813364.png"></li>';
								//+'<li><img src='+event.point.img2+'></li>';
     $('#myModal ul.rslides').html(photo);


				//ul.appendChild(li);					
				                     console.log(event.point.img);*/
			
			//});
			}

                          }
                }
            },
        
		tooltip: {
			enabled : false
		//	useHTML : true,
			
         //    footerFormat: '<span style="font-size: 10px">(Click for details)</span>'
          //  pointFormat: '<a href="servicespage.php" >klik</a>'
        },
		
        series: [{
            // Use the gb-all map with no data as a basemap
            mapData: Highcharts.maps['countries/id/id-all'],
            name: 'Basemap',
			useHTML : true,
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
            name: 'Location',
            color: '#FF3300',
            data: [{
                name: 'Belilas,Riau',
                lat: -0.479563,
                lon: 102.400691,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/work/ABP2014/1.jpg',
				img2 : 'images/work/ABP2014/2.jpg',
				img3 : 'images/work/ABP2014/3.jpg',
				img4 : 'images/work/ABP2014/4.jpg',
				img5 : 'images/work/ABP2014/5.jpg'

            },{
                name: 'Pendopo, Muara Enim, South Sumatera',
                lat: -3.639138,
                lon: 103.776336,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Lematang, Muara Enim, South Sumatera',
                lat: -3.646333,
                lon: 103.748184,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Cianjur, West Java',
                lat: -6.817800,
                lon: 107.118246,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Tasikmalaya, West Java',
                lat: -7.312821,
                lon: 108.222625,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Martapura, South Kalimantan',
                lat: -3.391397,
                lon: 114.867644,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Tabalong, Central Kalimantan',
                lat: -1.721902,
                lon: 115.470180,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Buntok, Central kalimantan',
                lat: -1.734298,
                lon: 114.879189,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Putussibau, West Kalimantan',
                lat: 0.852073,
                lon: 112.932233,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Kuaro, East Kalimantan',
                lat: -1.753171,
                lon: 116.135853,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Petangis, East Kalimantan',
                lat: -2.062298,
                lon: 116.059577,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Sangatta Utara, East Kalimantan',
                lat: 0.530955,
                lon: 117.543901,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Malinau, North Kalimantan',
                lat: 3.550447,
                lon: 116.617058,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'West Kalimantan',
                lat: -2.739811, 
                lon: 119.532146,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'

            },{
                name: 'Morowali, Central Sulawesi',
                lat: -2.390607, 
                lon: 121.499259,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'

            },{
                name: 'Luwuk, Central Sulawesi',
                lat: -0.942536, 
                lon: 122.788345,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'

            },{
                name: 'Kefa, NTT',
                lat: -9.445488, 
                lon: 124.460501,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'kaibobo, mauluku',
                lat: -3.210263, 
                lon: 128.173190,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Weda, Central Halmahera',
                lat: 0.341341, 
                lon: 127.847411,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Wasilei, North Halmahera',
                lat: 1.300572, 
                lon: 128.488860,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Misool, Papua',
                lat: -2.244866,  
                lon: 130.553146,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            },{
                name: 'Asmat, Papua',
                lat: -6.021159, 
                lon: 138.588283,
				mining : 2000,
				tanah : 'tandus',
				img  : 'images/1.jpg',
				img2 : 'images/2.jpg',
				img3 : 'images/3.jpg'
            }]
        }]
    });

});
});
</script>
</html>
