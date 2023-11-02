<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Answers Infinte | Contact us</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.css">
		<!-- Fonts -->
		<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&subset=devanagari,latin-ext" rel="stylesheet">  -->
		<link rel="stylesheet" href="fonts/linearicon/style.css">
		<link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
		<!-- Mobile Menu -->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<!-- OWL CAROUSEL
			================================================== --> 
		<link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Main Style -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="css/dark.css">
		
		
		<!-- Favicons
			================================================== -->
		<link rel="shortcut icon" href="images/favicon.png">
	</head>
	<body class="royal_loader">
		<!-- royal_loader -->
		<div id="page" >
			<!-- Mobile Menu -->
			<?php require("master/header.php") ?>
			<!-- /End Header 1 Warp -->
			
			<section class="boxed no-padding bg-img " style="background-image: url(images/assets/poly-nodes.png)">
				<div class="sub-header depen-on-img">
					<img src="images/assets/poly-nodes.png" class="img-responsive" alt="Image">
					<div class="sub-header-inner center-center">
						<h2>CONTACT US</h2>
						<ol class="breadcrumb">
							<li>
								<a href="#">HOME</a>
							</li>
							<li class="active">CONTACT</li>
						</ol>
					</div>
				</div>
			</section>
			<!-- /subheader -->

			<section class="pdb-0">
				<div class="container">
					<div class="row">
						<div class="text-center">
							<h4>Contact us Today to Get Your Business Back On Track</h4>
						</div>
						<div class="mgt-60">
							<div class="col-md-4">
								<div class="icon-box-center">
									<div class="box-icon">
										<img src="images/icon/email-icon.svg"  class="img-responsive big_svg" alt="Image">
									</div>
									<h5>E-MAIL</h5>
									<a href="mailto:josh@answersinfinite.com">josh@answersinfinite.com</a>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box-center">
									<div class="box-icon">
										<img src="images/icon/phone-icon.svg" class="img-responsive big_svg" alt="Image">
									</div>
									<h5>PHONE</h5>
									Phone +1 : <a href="tel:+19154792232">(915) 479-2232</a><br>
								</div>
							</div>
							<div class="col-md-4">
								<div class="icon-box-center">
									<div class="box-icon">
										<img src="images/icon/location-icon.svg" class="img-responsive big_svg" alt="Image">
									</div>
									<h5>ADDRESS</h5>
									<p>El Paso, Texas</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<section class="boxed">
				<div id="map-canvas" class="map-warp" style="height: 480px;"></div>
			</section>

			<section >
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="comments-area">
							<h2>SEND US A MESSAGE</h2>
							<form method="post" action="mail.php" class=" on-dark">
								<div class="col-md-4 col-sm-6">
									<input class="contact-input" type="text" required="required" placeholder="Name" name="name">
									<input class="contact-input" type="text" required="required" placeholder="Phone Number" name="phone">
								</div>
								<div class="col-md-4 col-sm-6">
									<input class="contact-input" type="email" required="required" placeholder="E-Mail" name="email">
									<input class="contact-input" type="text" required="required" placeholder="Topic" name="topic">
								</div>
								<div class="col-md-4 col-sm-6">
									<textarea class="textarea-contact" rows="4" required="required" placeholder="Message" name="message"></textarea>
								</div>
								<div class="clearfix"></div>
								<div class="col-md-4 ">
									<button type="submit" class="ot-btn border-theme btn-contact">Send Message</button>
								</div>
							</form>
							</div>
						</div>
					</div>
				</div>
				<div class="line-top-right w-680"></div>
			</section>
			<!-- /contact form -->

			<?php require("master/footer.php")?>
			<!-- /Footer home 1 -->

		</div>
		<!-- /page -->
		<a id="to-the-top" class="fixbtt bg-hover-theme"><i class="fa fa-chevron-up"></i></a> 

		
		<!-- SCRIPT -->
		<script src="js/vendor/jquery.min.js"></script>
		<script src="js/vendor/bootstrap.js"></script>
		<script src="js/plugins/jquery.sticky-kit.min.js"></script>
		<script src="js/plugins/jquery.waypoints.min.js"></script>
		
		<!-- Mobile Menu
			================================================== -->
		<script type="text/javascript" src="js/plugins/jquery.mmenu.all.min.js"></script>
		<script type="text/javascript" src="js/plugins/mobilemenu.js"></script>
		
		<!-- Map -->
		<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyANlSTSBRnELnslVzys2IoxtP2hnB_TTqs&sensor=false&extension=.js'></script>  
	    <script src="js/plugins/contact.js"></script> 
		<!-- PreLoad
			================================================== --> 
		<script type="text/javascript" src="js/plugins/royal_preloader.js"></script>
		
		<!-- Global Js
			================================================== --> 
		<script src="js/plugins/template.js"></script> 


	</body>
</html>

