<?php 
session_start();
if(!isset($_SESSION['user_id'])){
    header('Location: index.php');
    die;
}
include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Helping Hands</title>
<!-- meta-tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wacky Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta-tags -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/w_style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<!--//web-fonts-->
</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
<div class="agileinfo-dot">
<div class="container">
		<!-- header -->
		<header>
			<!-- navigation -->
			<div class="w3_navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.html"><span>H</span>elping <span>H</span>ands</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-4" id="cl-effect-4">
						<ul class="nav navbar-nav menu__list">
							<li><a href="index.html">Home</a></li>
							<li><a href="#about" class=" scroll">About</a></li>
							<li><a href="#team" class=" scroll">Team</a></li>
							<li><a href="#gallery" class=" scroll">Our Work</a></li>
							<li><a href="#contact" class=" scroll">Contact</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
	</div>
	<div class="clearfix"></div>
		<!-- //navigation -->
		</header>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<h2>“be the sun in someone’s dark sky”</h2>

			<div class="book-form" id="register">
			   <form action="" method="post">
					<div class="col-md-3 form-time-w3layouts">
							<label>Donors Name</label>
							<select class="form-control" name = "username">
								<?php 
								$sql = "SELECT * FROM users";
								$result = mysqli_query($con, $sql);
								while($row = mysqli_fetch_assoc($result))
								{
								?>
								<option> <?php echo $row['name']; ?> </option>
								<?php
								}
								?> 
							</select>
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						        <label>Donation Amount</label>
									<input name="amount" type="text" value="300" onfocus="this.value = '';" required="">
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						        <label>Date</label>
									<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="col-md-3 form-left-agileits-submit">
						  <input type="submit" name="submit" value="SUBMIT">
					</div>
				</form>

				<div class="col-md-4 button-agileits">
					<a href="logout.php" class="hvr-ripple-out">LOGOUT</a>
				</div>

			</div>
				
				
				<?php
					if(!isset($_POST)){
						die;
					}
					$username = $_POST['username'];
					$amount = $_POST['amount'];
					$date = $_POST['Text'];

					$sql = "INSERT INTO details (username, amount, date) VALUES ('$username', '$amount', '$date')";
					if (!mysqli_query($con, $sql))
					{
						echo"Not inserted!!";
					}
					else{
						//echo"Inserted";
						$retrive_sql = "SELECT * FROM details";
						$result = mysqli_query($con, $retrive_sql);
					}
				?>
			

				
			  <!-- form ending div --> 

				


			<!-- <div class="banner-btm-agileits">
				
				<!-- <div class="col-md-4 button-agileits">
					<a href="#contact" class="hvr-ripple-out scroll">Get in touch</a>
				</div> -->
			<!-- </div> -->
		</div>
	</div>
</div>
</div>
<!-- //banner -->

<div id="table_div">
	<table>
		<tr>
			<th colspan="3" bgcolor="#ffa200"><center><h3>Donors Details</h3></center></th>
		</tr>
		<tr>
			<th>Name</th>
			<th>Amount</th>
			<th>Date</th>
		</tr>
		<?php
			while( $row = mysqli_fetch_assoc($result))
			{
		?>	
			<tr>
				<td> <?php echo $row['username']; ?> </td>
				<td> <?php echo $row['amount']; ?>
				<td> <?php echo $row['date']; ?> </td>
			</tr>
		<?php
			}
		?>
	</table>
</div>
<!-- about -->
<!-- banner-bottom -->
	<!-- <div class="about" id="about">
			<div class="col-md-6 banner_bottom_right">
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth color1-w3">
							<div class="agile_text_box">
								<h3>More Than 7M Visitors Each Month</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="col-md-6 banner_bottom_right_grid one-w3ls">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid two-w3ls">
					</div>
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth color2-w3">
							<div class="agile_text_box">
								<h3>Fast and Reliable Ticket Booking</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 banner_bottom_left">
				<h3 class="title-agileits-w3layouts white-w3ls">Welcome to Wacky Trip</h3>
				<h4>A few words about us</h4>
				<p class="para-w3l">Quis nostrum exercitationem ullam corporis suscipit 
					laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
					reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, 
					vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
				<div class="button-agileits">
					<a href="#register" class="hvr-ripple-out destination-w3ls scroll">Register</a>
					<a href="#" class="hvr-ripple-out" data-toggle="modal" data-target="#myModal2">Read More</a>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div> -->
<!-- banner-bottom -->
<!-- Modal2 -->
						<!-- <div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
							<div class="modal-dialog"> -->
							<!-- Modal content-->
								<!-- <div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Wacky Trip</h4>
										<img src="images/banner.jpg" alt=" " class="img-responsive">
										<h5>More Than 7M Visitors Each Month</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div> -->
<!-- //Modal2 -->
<!-- //about -->
<!-- services -->
<!-- <div class="services" id="services">
	<div class="container">
	<h3 class="title-agileits-w3layouts">How to find the path to your dream trip</h3>
	<div class="col-md-5 services-left-agileinfo">
		<div class="profile-pic-w3ls">
		<div class="pic-w3layouts">
			<img src="images/prof1.jpg" alt="Image">
		</div>
			<h5>Jack anderson<span>Co-Founder</span></h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
		</div>
		<div class="profile-btm-w3l profile-pic-w3ls">
			<i class="fa fa-quote-right" aria-hidden="true"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
			<h6>Nicholas Rodriguez</h6>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="col-md-7 services-right-agileits">
		<div class="services-services">
			<div class="services-grids">
				<h6>Hotel Booking</h6>
			</div>
			<div class="services-grids">
				<h6>Air flights</h6>
			</div>
			<div class="services-grids">
				<h6>Car rentals</h6>
			</div>
			<div class="services-grids">
				<h6>Travel guides</h6>
			</div>
			<div class="services-grids">
				<h6>travel insurance</h6>
			</div>
			<div class="services-grids">
				<h6>destinations</h6>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="profile-pic-w3ls">
		<div class="pic-w3layouts">
			<img src="images/prof2.jpg" alt="Image">
		</div>
			<h5>Margaret Lucas<span>Travel Advisor</span></h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
		</div>
	</div>
	</div>
</div> -->
<!-- //services -->
<!--team-->
<div class="team" id="team">
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="title-agileits-w3layouts white-w3ls">Meet Our Team</h3>
			<div class="spldishes-agileinfo">
				<div class="spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
						<div class="item g1">
							<img class="lazyOwl" src="images/siam.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Md. Siam Hossain </h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/imran.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Md. Imran Hossain</h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/shakil.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Abul Hasnat Nayeem</h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/alamgir.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Alamgir Hossain</h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/hasive.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Hasive Ahmed</h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div> 
						<div class="item g1">
							<img class="lazyOwl" src="images/mahin.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Mahin Alam</h4>
								<p>Founding Member</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//team-->
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">  
			<h3 class="title-agileits-w3layouts">Winter blanket distribution</h3>
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img"> 
						<a class="example-image-link w3-agilepic" href="images/a1.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a1.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>  
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/a2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a2.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/a3.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a3.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14"> 
						<a class="example-image-link w3-agilepic" href="images/a4.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a4.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a>
					</div>  
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/a5.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a5.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
						<a class="example-image-link w3-agilepic" href="images/a6.jpg" data-lightbox="example-set" data-title="">
						<img class="example-image img-responsive" src="images/a6.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>  
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/a7.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a7.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/a8.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/a8.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Helping Hands</h4>
							</div> 
						</a>
					</div>	
					<div class="clearfix"> </div>	
				</div> 
			</div> 
		</div>
	</div>
	<!-- //gallery -->  

<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">
		<h3 class="title-agileits-w3layouts white-w3ls">Trusted Customers</h3>
			<div class="w3_testimonials_grids">
				<section class="slider_test_monials">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test1.jpg" alt=" " class="img-responsive" />
								</div>
								
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test2.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test3.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test4.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
				</div>
				</div>
	</div>
<!-- //testimonials -->	
<div class="contact" id="contact">
	<div class="container">  
	<h3 class="title-agileits-w3layouts">Contact Us</h3>
					<form action="#" method="post">
					<div class="col-md-6">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Name</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="styled-input textarea-w3ls">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</div>
					</form>
					<div class="clearfix"> </div>	
</div>
</div>
<div class="map-w3-agile">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1401095.1797624144!2d7.051648809385445!3d46.695591802572785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa7f454717f6d%3A0x452444bf73cbc87a!2sBest+of+Switzerland+Tours+AG!5e0!3m2!1sen!2sin!4v1494325075835"></iframe>
</div>
	<div class="col-md-4 subscribe-grid">
		<h5>Subscribe for our latest updates</h5>
		<p>Get <span>10%</span> off on booking</p>
					<form action="#" method="post">
						<input type="email" placeholder="Subscribe" name="Subscribe" required="">
						<button class="btn1"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
					</form>
				</div>
<div class="col-md-8 footer-w3layouts">
		<div class="footer-top-agile">
		<h6><a href="index.html"><span>H</span>elping <span>H</span>ands</a></h6>
		<div class="footer-contact-w3ls">
			<ul>
				<li><i class="fa fa-globe" aria-hidden="true"></i>55, 8134 Adliswil, Switzerland</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>012 345 6789</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<ul class="top-links">
									<li><a href="https://www.facebook.com/hhands2016/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
		<div class="clearfix"></div>
		</div>
		<div class="footer-bottom-wthree">
			<div class="copyright-wthree">
				<p>&copy; 2018 All Rights Reserved | Design by Siam Hossain</p>
				<a href="#home" class="scroll bt-icon"><i class="fa fa-upload" aria-hidden="true"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
<!-- //Footer -->
<script src="js/jquery-2.2.3.min.js"></script> 

					<script src="js/lightbox-plus-jquery.min.js"></script>	
			<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 4,
				lazyLoad : true,
				autoPlay : true,
				pagination : true,
			});
		});
	</script>
	<!-- //Owl-Carousel-JavaScript -->  
	<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
				<!-- //flexSlider -->
 <!-- Move-top-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- Move-top-scrolling -->
<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
<!--js for bootstrap working-->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>