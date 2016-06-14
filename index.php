<?php

$msg ="";
if (isset($_POST['submit'])) {
	$msg = 'coming soon';
}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Validator</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/metro.min.css">
	<link rel="stylesheet" type="text/css" href="css/metro-icons.min.css">
	<link rel="stylesheet" type="text/css" href="css/metro.min.css">	
	<link rel="stylesheet" type="text/css" href="css/indexstyle.css">

	<style type="text/css">
	body {
		background-image: none;
	}
	</style>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3  validator-center">
				<div class="title-bar">
					<div class="logo"></div>
					<h1>FDA Product Authenticator</h1>
				</div>
				<div role="form" id="form" method="post">
				  <div class="form-group">
						<div class="input-control modern text iconic" data-role="input">
					    <input type="text" id="product-name">
					    <span class="label">Product Name</span>
					    <span class="informer">Please enter the Product Name</span>
					    <span class="placeholder">Input Product Name</span>
					    <span class="icon mif-profile"></span>
					</div>
				  </div>

				  <div class="form-group">
					<div class="input-control modern text iconic" data-role="input">
					    <input type="text" id="fda-id">
					    <span class="label">FDA ID</span>
					    <span class="informer">Please enter the FDA ID</span>
					    <span class="placeholder">Input FDA ID</span>
					    <span class="icon mif-keyboard"></span>
					</div>
				  </div>
				  <button type="submit" id="submit" name="submit" class="btn btn-default">Submit</button>
				</div>					
			</div>
		</div>

		<div class="row">
			<div class="col-md-6 col-md-offset-3 validator-center">
				<div role="form">
					<textarea id="result" name="result" class="form-control" rows="3" readonly><?php echo $msg; ?></textarea>
				</div>
			</div>
		</div>	

		<div class="row" id="footer">
			<div class="col-md-10 col-md-offset-1">
					
				<div class="col-md-3" id="fus">

					<a href="http://www.fb.com" target="_blank"><i class="fa fa-facebook"></i></a>
					<a href="http://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a>
					<a href="http://www.instagram.com" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="http://www.plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a>
				</div>
				<div class="col-md-6 col-md-offset-3 copy">COPYRIGHT &COPY; 2015</div>		
			</div>
		</div>			
	</div>

<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="js/metro.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
</body>
</html>