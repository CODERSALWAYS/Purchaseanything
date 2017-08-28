<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>www.purchaseanything.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<!-- styles -->
	<link rel="stylesheet/less" type="text/css" href="themes/less/bootstrap.less">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<script src="themes/js/less/less.js" type="text/javascript"></script>

	<!-- favicon-icons -->
    <link rel="shortcut icon" href="themes/images/favicon.ico">
    
  </head>
<body>
<header class="header">
<h1 class="seo">Welcome to Purchase anything! :<em class="blink"> 50% </em> discount is available for more than <span class="blink"> 400 </span> items.</h1>
<div class="container">
<div class="row">
	<div class="offset6 span6 right-align loginArea">
		<a href="#login" role="button" data-toggle="modal"><span class="btn btn-mini"> Login  </span></a> 
		<a href="register.php"><span class="btn btn-mini btn-success"> Register  </span></a> 
		<a href="checkout.php"><span class="btn btn-mini btn-danger"> Cart [2] </span></a> 
	</div>
</div>

<!-- Login Block -->
<div id="login" class="modal hide fade in" tabindex="-1" role="dialog" aria-labelledby="login" aria-hidden="false" >
  <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	<h3>Purchase Anythings : Login Block</h3>
  </div>
  <div class="modal-body">
	<form class="form-horizontal loginFrm">
	  <div class="control-group">								
		<input type="text" id="inputEmail" placeholder="Email">
	  </div>
	  <div class="control-group">
		<input type="password" id="inputPassword" placeholder="Password">
	  </div>
	  <div class="control-group">
		<label class="checkbox">
		<input type="checkbox"> Remember me
		</label>
	  </div>
	</form>		
	<button type="submit" class="btn btn-success">Sign in</button>
	<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	<a href="register.php" type="button" class="btn btn-success">Register</a>
  </div>
</div>

<div class="navbar">
<div class="navbar-inner">
	<a class="brand" href="index.php"><img src="themes/images/new_logo.png" alt="Bootsshop"></a>
	<div class="nav-collapse">
		<ul id="topMenu" class="nav pull-right">
		 <li class="">
		 <form class="form-inline navbar-search" method="post" action="products.php" style="padding-top:5px;">
			<select class="span3" style="padding:11px 4px; height:auto">
				<option>All</option>
				<option>Clothes </option>
				<option>Women's Wear </option>
				<option>Men's Wear </option>
				<option>Kids Wear </option>
			</select> 
			<input class="span4" type="text" placeholder="eg. T-shirt" style="padding:11px 4px;">
			<button type="submit" class="btn btn-warning btn-large" style="margin-top:0"> GO </button>
		</form>
		</li>
		</ul>
	</div>
	<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
  </div>
</div>
</div>
</header>
<!-- ======================================================================================================================== -->

<section id="mainBody">
<div class="container">
<h3 class="title"><span>Registration</span></h3>
    <ul class="breadcrumb">
		<li><a href="index.php">Home</a> <span class="divider">/</span></li>
		<li class="active">Registration</li>
    </ul>
    <div class="container">
	<div class="jumbotron text-center">
	<h3>Create Account</h3>	
    </div>
    <div class="row">
    	<div class="col-sm-3"></div>
    	<div class="col-sm-6">
    		
    	</div>
    	<div class="col-sm-3"></div>
    </div>
    <div class="well">
 <form style="margin-left: 363px;" action="thanks.html" action="post" onsubmit="return vailidform();">
	<p>Your name <br> <input  data-trigger="focus" type="text" id="name"></p>
	<!-- <div class="alert alert-danger " style="display: inline-block;"> -->
	<p style="color:red;" id="name1"></p> 
	<!-- </div> -->
	<p>Mobile Number <br><input type="text" id="mobilenumber" name="mobilenumber"></p>
	<p style="color:red;" id="mob"></p>
	<p>Email <br> <input type="text" id="email" name="email"></p>
	<p  style="color:red;" id="email1"></p>
	<p  style="color:red;" id="email2"></p>
	<p>Password <br> <input type="password" id="password" name="password"></p>
	<p style="color:red;"  id="pass"></p>
	<button class="btn">submit</button>
	</form>
	</div>
</div><!-- end of container
    <div class="row">
    	<div class="col-sm-3"></div>
         <div class="col-sm-6"></div>
    	<div class="col-sm-3"></div>	
    </div>
    	<div class="well">
    	<div class="jumbotron text-center"><h1>Create Account</h1>
    <form class="form-horizontal" action="post" onsubmit="return vailidform();">
    	
    		<div class="control-group">
    		<label class="control-label">Title <sup>*</sup></label>
    		<div class="controls">
    		<select id="title" class="span1" style="width: 80px;" name="days">
    			<option value="">Select</option>
    			<option value="1">Mr</option>
    			<option value="2">Mrs</option>
    			<option value="3">Miss</option>
    		</select>
    		</div>
    		</div>
    
    		<div class="control-group">
    			<p>Name</p>
    			<div class="controls">
    			  <input type="text" id="name" placeholder="First Name" name="name">
    			</div>
    		 </div>
    		 <div class="control-group">
    		<p>Mobile Number</p>
    			<div class="controls">
    			  <input type="text" placeholder="Mobile number" id="mobilenumber" name="mobilenumber" >
    			</div>
    		 </div>
    		<div class="control-group">
    		Email
    		<div class="controls">
    		  <input type="text" id="email" placeholder="Email" name="email">
    		</div>
    	  </div>	  
    	<div class="control-group">
    		Password
    		<div class="controls">
    		  <input type="password" id="password" placeholder="Password" name="password">
    		</div>
    	  </div>
    	 <div class="control-group">
    	 	<lable class="control-label" for="dob">Date of Birth <sup>*</sup></lable>
    	 		<div class="controls">
    	 			<input type="date" id="dob" name="dob">	 
    	 		</div>
    	 </div>
    	  <p><button class="btn" value="submit">submit</button></p>
    		<div class="control-group">
    							<label class="control-label">Date of Birth <sup>*</sup></label>
    							<div class="controls">
    							  <select class="span1" id="dob" name="days">
    									<option value="">-</option>
    										<option value="1">1&nbsp;&nbsp;</option>
    										<option value="2">2&nbsp;&nbsp;</option>
    										<option value="3">3&nbsp;&nbsp;</option>
    										<option value="4">4&nbsp;&nbsp;</option>
    										<option value="5">5&nbsp;&nbsp;</option>
    										<option value="6">6&nbsp;&nbsp;</option>
    										<option value="7">7&nbsp;&nbsp;</option>
    								</select>
    								<select class="span1" name="days">
    									<option value="">-</option>
    										<option value="1">1&nbsp;&nbsp;</option>
    										<option value="2">2&nbsp;&nbsp;</option>
    										<option value="3">3&nbsp;&nbsp;</option>
    										<option value="4">4&nbsp;&nbsp;</option>
    										<option value="5">5&nbsp;&nbsp;</option>
    										<option value="6">6&nbsp;&nbsp;</option>
    										<option value="7">7&nbsp;&nbsp;</option>
    								</select>
    								<select class="span1" name="days">
    									<option value="">-</option>
    										<option value="1">1&nbsp;&nbsp;</option>
    										<option value="2">2&nbsp;&nbsp;</option>
    										<option value="3">3&nbsp;&nbsp;</option>
    										<option value="4">4&nbsp;&nbsp;</option>
    										<option value="5">5&nbsp;&nbsp;</option>
    										<option value="6">6&nbsp;&nbsp;</option>
    										<option value="7">7&nbsp;&nbsp;</option>
    								</select>
    										</div>
    								  </div>					
    			
    					<h3>Your address</h3>
    					<div class="control-group">
    								<label class="control-label" for="inputFname">First name <sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="inputFname" placeholder="First Name">
    								</div>
    					</div>
    					<div class="control-group">
    								<label class="control-label" for="inputLname">Last name <sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="inputLname" placeholder="Last Name">
    								</div>
    					</div>
    					
    					<div class="control-group">
    								<label class="control-label" for="company">Company</label>
    								<div class="controls">
    								  <input type="text" id="company" placeholder="company">
    								</div>
    					</div>
    					
    					<div class="control-group">
    								<label class="control-label" for="address">Address<sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="address" placeholder="Adress"> <span>Street address, P.O. box, company name, c/o</span>
    								</div>
    					</div>
    					
    					<div class="control-group">
    								<label class="control-label" for="address2">Address (Line 2)<sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="address2" placeholder="Adress line 2"> <span>Apartment, suite, unit, building, floor, etc.</span>
    								</div>
    					</div>
    					<div class="control-group">
    								<label class="control-label" for="city">City<sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="city" placeholder="city"> 
    								</div>
    					</div>
    					<div class="control-group">
    								<label class="control-label" for="state">State<sup>*</sup></label>
    								<div class="controls">
    								  <select id="state">
    									<option value="">-</option>
    									<option value="1">Alabama</option><option value="2">Alaska</option><option value="3">Arizona</option><option value="4">Arkansas</option><option value="5">California</option><option value="6">Colorado</option><option value="7">Connecticut</option><option value="8">Delaware</option><option value="53">District of Columbia</option><option value="9">Florida</option><option value="10">Georgia</option><option value="11">Hawaii</option><option value="12">Idaho</option><option value="13">Illinois</option><option value="14">Indiana</option><option value="15">Iowa</option><option value="16">Kansas</option><option value="17">Kentucky</option><option value="18">Louisiana</option><option value="19">Maine</option><option value="20">Maryland</option><option value="21">Massachusetts</option><option value="22">Michigan</option><option value="23">Minnesota</option><option value="24">Mississippi</option><option value="25">Missouri</option><option value="26">Montana</option><option value="27">Nebraska</option><option value="28">Nevada</option><option value="29">New Hampshire</option><option value="30">New Jersey</option><option value="31">New Mexico</option><option value="32">New York</option><option value="33">North Carolina</option><option value="34">North Dakota</option><option value="35">Ohio</option><option value="36">Oklahoma</option><option value="37">Oregon</option><option value="38">Pennsylvania</option><option value="51">Puerto Rico</option><option value="39">Rhode Island</option><option value="40">South Carolina</option><option value="41">South Dakota</option><option value="42">Tennessee</option><option value="43">Texas</option><option value="52">US Virgin Islands</option><option value="44">Utah</option><option value="45">Vermont</option><option value="46">Virginia</option><option value="47">Washington</option><option value="48">West Virginia</option><option value="49">Wisconsin</option><option value="50">Wyoming</option></select>
    								</div>
    					</div>		
    					<div class="control-group">
    								<label class="control-label" for="postcode">Zip / Postal Code<sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" id="postcode" placeholder="Zip / Postal Code"> 
    								</div>
    					</div>
    					
    					<div class="control-group">
    								<label class="control-label" for="country">Country<sup>*</sup></label>
    								<div class="controls">
    								<select id="country">
    									<option value="">-</option>
    									<option value="1">Country</option>
    								</select>
    								</div>
    					</div>	
    					<div class="control-group">
    								<label class="control-label" for="aditionalInfo">Additional information</label>
    								<div class="controls">
    								  <textarea name="aditionalInfo" placeholder="Additional information" id="aditionalInfo" cols="26" rows="3"></textarea>
    								</div>
    					</div>
    					<div class="control-group">
    								<label class="control-label" for="phone">Home phone <sup>*</sup></label>
    								<div class="controls">
    								  <input type="text" name="phone" id="phone" placeholder="phone"> <span>You must register at least one phone number</span>
    								</div>
    					</div>
    					
    					<div class="control-group">
    								<label class="control-label" for="mobile">Mobile Phone </label>
    								<div class="controls">
    								  <input type="text" name="mobile" id="mobile" placeholder="Mobile Phone"> 
    								</div>
    					</div>
    									<div class="control-group">
    								<div class="controls">
    									<input type="hidden" name="email_create" value="1">
    									<input type="hidden" name="is_new_customer" value="1">
    									<input class="btn btn-large" type="submit" value="submit">
    								</div>
    							</div>		
    						<p class="pull-right badge badge-important">[ * ] Required field	</p>
    	
    	</form>
    
    	</div>
    	<div class="alert fade in">
    		<button type="button" class="close" data-dismiss="alert">×</button>
    		<strong>Lorem Ipsum is simply dummy</strong> text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
    	 </div>
    	 <div class="alert alert-block alert-error fade in">
    		<button type="button" class="close" data-dismiss="alert">×</button>
    		<strong>Lorem Ipsum is simply</strong> dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
    	 </div>
    		 	
    	
    </div>end of well -->

</div>

</section>
<!-- Footer
==================================================
 --><footer class="footer">
<div class="container">
<h5>Accepted Payment Methods </h5>
<p><a href="#"><img src="themes/images/payment_methods.png" alt="payment methods"/></a></p>
<hr class="soften"/>
<div class="footerMenu">
	<a href="register.php"> REGISTRATION</a> | 
	<a href="about_us.php"> ABOUT US</a> | 
	<a  href="topology.php" >TOPOLOGY</a> | 
	<a href="contact_us.php">CONTACT </a>
<p class="pull-right"><a href="#">Terms and condition.php</a> &copy; Copyright 2013 Purchase Anything. </p>
</div>
</div>
 </footer>
 <span id="toTop" style="display: none;"><span><i class="icon-angle-up"></i></span></span>
    <!--  javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="external.js"></script>
    <script src="themes/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="themes/js/smart.js"></script>
    
  </body>
</html>