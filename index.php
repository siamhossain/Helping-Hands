<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Basic Login Form A Flat Responsive Widget Template  :: w3layouts</title>
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/log_style.css" rel='stylesheet' type='text/css'/><!-- style.css --> 
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Basic Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<script src="js/jquery.min.js"></script>
		<script>$(document).ready(function(c) {
		$('.alert-close').on('click', function(c){
			$('.main-agile').fadeOut('slow', function(c){
				$('.main-agile').remove();
			});
		});	  
	});
	</script>
</head>
<body>
	<h1>Helping Hands</h1>
	<div class="main-agile">
		<div class="alert-close"> </div>
		<div class="content-wthree">
		<div class="circle-w3layouts"></div>
			<h2>Login</h2>
			<form action="login.php" method="post">
								<div class="inputs-w3ls">
									<i class="fa fa-user" aria-hidden="true"></i>
									<input type="text" name="Username" placeholder="Username" required=""/>
								</div>
								<div class="inputs-w3ls">
									<i class="fa fa-key" aria-hidden="true"></i>
									<input type="password" name="Password" placeholder="Password" required=""/>
								</div>
									<input type="submit" name = "log" value="LOGIN">
                                    <input type="submit" name = "reg" value="REGISTER">
									<div class="wthree-text"> 
										<ul> 
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
									</div>  
								</form>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; All Rights Reserved | Design by Siam Hossain</p>
	</div>
</body>
</html>
