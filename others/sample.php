<?php 


	$db_host = "localhost"; 
	$db_username = "root";   
	$db_pass = "";  
	$db_name = "StayBeautiful"; 
	 
	$conn=mysqli_connect("$db_host","$db_username","$db_pass") or die ("could not connect to mysql");
	mysqli_select_db($conn,"$db_name") or die ("no database");

	
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Daily Shop | Contact</title>
    
    <!-- Font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">   
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="css/jquery.simpleLens.css">    
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="css/theme-color/default-theme.css" rel="stylesheet">
    

    <!-- Main style sheet -->
    <link href="css/style.css" rel="stylesheet">    

    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    

    <link href="css1/indexstyle.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
	<!--- start-mmmenu-script---->
	<script src="js1/jquery.min.js" type="text/javascript"></script>
	<link type="text/css" rel="stylesheet" href="css1/jquery.mmenu.all.css" />
	<script type="text/javascript" src="js1/jquery.mmenu.js"></script>
		<script type="text/javascript">
			//	The menu on the left
			$(function() {
				$('nav#menu-left').mmenu();
			});
		</script>
		
		
		


  </head>
  <body> 
  
  <form id="dropdowns">
			
			<label>Country:</label>
				<select id="country" name="country">
					<option value="000">-Select Country-</option>
				</select>
			
			<br />
			
			<label>State:</label>
				<select id="state" name="network">
					<option value="000">-Select State-</option>
				</select>
			
			<br />
			
			<label>City:</label>
				<select id="model" name="model">
					<option value="000">-Select City-</option>
				</select>
			
			<br />
				
		</form>
<h1></h1>


  <!-- jQuery library -->
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  
  
   <script src="populate.js"></script>
  

  </body>
</html>