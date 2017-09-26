<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">    
		<title>Barracuda Test Project | Checkout</title>
		
		
		<!-- Main style sheet -->
		<link href="css/style1.css" rel="stylesheet">    

		<!-- Google Font -->
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	  
		<!-- Header Footer -->
		 <link rel="stylesheet" href="css/style.css">
		 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		 <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

</head>

<body id="checkout-page">

		<!-- Header -->
		<header class="header-fixed">

			<div class="header-limiter">

				<h1><a href="#"><img src="images/logo.png" alt="" height=50px width=200px;/></a></h1>
				
				<!-- Navigation links to various pages of the website -->
				<nav>
					<a href="#">Home</a>
					<a href="#">About</a>
					<a href="barracuda.html" class="selected">Purchasing</a>
					<a href="#">Faq</a>
					<a href="form.html">Contact</a>
				</nav>

			</div>

		</header>

		<!-- You need this element to prevent the content of the page from jumping up -->
		<div class="header-fixed-placeholder"></div>

		<br/><br/><br/>
		
		<!-- Tab links to select products and checkout page -->
		<div class="tab">
		  <a href="barracuda.html"><button class="tablinks">Select Products</button></a>
		  <a href="checkout.php"><button class="tablinks">Contact and Billing</button></a>
		</div>


		<div id="site">
			<div id="content">
				
				 <!-- Creating a form asking for billing details of the user -->
				 <!-- Validations included in the js file -->
				 <form action="#" method="post" id="checkout-order-form">
					<h2 style="font-color:#57C5A0; text-align:center;">Your Details</h2>
					
					<fieldset id="fieldset-billing">
						<legend>Billing</legend>
						<div>
							<label for="name">Name</label>
							<input type="text" name="name" id="name" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="email">Email</label>
							<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
						</div>
						<div>
							<label for="city">City</label>
							<input type="text" name="city" id="city" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="address">Address</label>
							<input type="text" name="address" id="address" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="zip">ZIP Code</label>
							<input type="text" name="zip" id="zip" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="country">Country</label>
							<select name="country" id="country" data-type="string" data-message="This field cannot be empty">
								<option value="">Select</option>
								<option value="US">USA</option>
								
							</select>
						</div>
					</fieldset>
					
					<!-- Checkbox to select if billing and shipping address are the same and user need not enter details twice -->
					<div id="shipping-same">Same as Billing <input type="checkbox" id="same-as-billing" value=""/></div>
					
					<!-- Creating a form asking for shipping details of the user -->
					<fieldset id="fieldset-shipping">
						
						<legend>Shipping</legend>
						
						<div>
							<label for="sname">Name</label>
							<input type="text" name="sname" id="sname" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="semail">Email</label>
							<input type="text" name="semail" id="semail" data-type="expression" data-message="Not a valid email address" />
						</div>
						<div>
							<label for="scity">City</label>
							<input type="text" name="scity" id="scity" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="saddress">Address</label>
							<input type="text" name="saddress" id="saddress" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="szip">ZIP Code</label>
							<input type="text" name="szip" id="szip" data-type="string" data-message="This field cannot be empty" />
						</div>
						<div>
							<label for="scountry">Country</label>
							<select name="scountry" id="scountry" data-type="string" data-message="This field cannot be empty">
								<option value="">Select</option>
								<option value="US">USA</option>
								
							</select>
						</div>
					</fieldset>
					
					
					<!-- Button to Place the order -->
					<p><input type="submit" id="submit-order" value="Update Personal Details"  /></p>
					
					
				 </form>
				 
				 <!--Creating a form asking for payment details of the user -->
				 <form action="" id="checkout-order-form"">
                    <h2>Payment details</h2>
                          <fieldset id="fieldset-billing">
							<legend >Payment Details</legend>
							<div>
								<label for="Cname"> Name</label>
								<input type="text" name="Cname" id="Cname" data-type="string" data-message="This field cannot be empty"  required/>
							</div>
							<div>
								<label for="Cnumber">Card Number</label>
								<input type="text" name="Cnumber" id="Cnumber" data-type="string" data-message="Not a valid email address" onkeypress='validate(event)' required />
								
							</div>
							<div>
								<label for="cvv">Card CVV</label>
								<input type="text" name="cvv" id="cvv" data-type="string" data-message="This field cannot be empty" onkeypress='validate(event)'required />
							</div>
							<div>
								<label for="expiry">Card Expiry</label>
								<input type="text" name="expiry" id="expiry" data-type="string" data-message="This field cannot be empty" required />
							</div>
							
						</fieldset> 
                          
                     <button id="submit_data" type="submit">Place Order!</button>   
					 <br/><br/>

					<!-- Link to navigate to customer support contact form -->
					<a href="form.html" style="color: blue; text-decoration:underline;">Customer Support Contact Form</a>
                       
		 
		  </form>
	
				 
				 
			</div>
			
		</div>

		<!-- Footer -->

		<footer class="footer-distributed">

			<div class="footer-left">

				<h3><img src="images/logo.png" alt="" height=50px width=200px;/></h3>
				
				<!-- Navigaation links to various pages of the website -->
				<p class="footer-links">
					<a href="#">Home</a>
					·
					<a href="#">About</a>
					·
					<a href="barracuda.html">Purchasing</a>
					·
					<a href="#">Faq</a>
					·
					<a href="form.html">Contact</a>
				</p>

				<p class="footer-company-name">Barracuda Networks &copy; 2017</p>
			</div>
			<!--Contact details of the company -->
			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>3175 Winchester Blvd</span> Campbell, CA 95008</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+1 408 342-5400</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@company.com">support@barracuda.com</a></p>
				</div>

			</div>
			
			<!--About the company details -->
			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
					Barracuda Networks, Inc. offers industry-leading solutions designed to solve mainstream IT problems – efficiently and cost effectively – while maintaining a level of customer support and satisfaction second to none.
					</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>


  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Checkout Jquery -->
  <script type="text/javascript" src="js/jquery.shop.js"></script>  
 

  </body>
</html>