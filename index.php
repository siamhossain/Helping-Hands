<?php include 'config.php' ?>
<!DOCTYPE html>
<html>
<head>
<title>Helping Hands</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="stylish Sign in and Sign up Form A Flat Responsive widget, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--online_fonts-->
	<link href="//fonts.googleapis.com/css?family=Sansita:400,400i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
<!--//online_fonts-->
	<link href="css/style.css" rel='stylesheet' type='text/css' media="all" /><!--stylesheet-->

<script>
function validateForm() {
    var errormsg="";
    var x = document.forms["sign_in"]["Username"].value;
    var y = document.forms["sign_in"]["Password"].value;
    if (x == "") {
        errormsg += "Enter your username\n";
    }
    if (y == "") {
        errormsg += "Enter your password\n";
    }
    if(errormsg != ""){
       alert(errormsg);
       return false;    
    }    
}
</script>



</head>
<body>
<h1>Helping Hands</h1>
<div class="form-w3ls">
	<div class="form-head-w3l">
		<h2>HH</h2>
	</div>
    <ul class="tab-group cl-effect-4">
        <li class="tab active"><a href="#signin-agile">Sign In</a></li>
		<li class="tab"><a href="#signup-agile">Sign Up</a></li>        
    </ul>
    <div class="tab-content">
        <div id="signin-agile">   
			<form name="sign_in" action="login.php" method="post">
				
			<p class="header">User Name</p>
				<input type="text" name="Username" placeholder="User Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'User Name';}" required="required">
				
				<p class="header">Password</p>
				<input type="password" name="Password" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<input type="checkbox" id="brand" value="">
				<label for="brand"><span></span> Remember me?</label>
				
				<input type="submit" class="sign-in" value="Sign In">
			</form>
		</div>
		<div id="signup-agile">   
			<form name="sign_up" action="insert.php" method="post">
				
				<p class="header">User Name</p>
				<input type="text" name="Name" placeholder="Your Full Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Full Name';}" required="required">
				
				<p class="header">Email Address</p>
				<input type="email" name="Email" placeholder="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				
				<p class="header">Phone Number</p>
				<input type="text" name="Phone" placeholder="phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="required">
				

				<p class="header">Password</p>
				<input type="password" name="Pass" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="required">
				
				<!-- <p class="header">Confirm Password</p>
				<input type="password" name="password" placeholder="Confirm Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Confirm Password';}" required="required"> -->
				
				<input type="submit" class="register" value="Sign up">
			</form>
		</div> 
    </div><!-- tab-content -->
</div> <!-- /form -->	  
<p class="copyright">&copy; 2018 All Rights Reserved | Design by Siam Hossain</p>
<!-- js files -->
<script src='js/jquery.min.js'></script>
<script src="js/index.js"></script>
<!-- /js files -->
</body>
</html>
