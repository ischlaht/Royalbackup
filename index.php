<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login "Title"</title>
<!--	<link href="style.css" rel="stylesheet" style type="text/css">-->
	<link href="structure.css" rel="stylesheet" style type="text/css">
</head>
<!-- ---------------------------------------Bootstrap---------------->
    <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<!-------------------------------------Bootstrap END---------------------------------------------------------------------------------------------------------------------------------------------------------    -->
</head>

    
<login>
<div class="container" id="totalcontainer">
    <center>Royal Backup Private Server</center>
	<div class="container" id="logincontainer">
	<div class ="container" id="loginheader">
        Login
	</div>
	
	<form method="POST" action="index.php">

		<?php include('errors.php'); ?>

		<div class="container" id="input">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="container" id="input">
			<label>Password</label>
			<input type="password" name="password">
		</div>
			<button type="submit" id="loginbtn" name="login_user">Login</button>
		<p>
			Contact the Developer! <a href="contactinfo.html" id="contactinfobtn" data-toggle="tooltip" title="Click to Sign-Up Today!">Contact</a>
		</p>
	</form>
</div>
</div>
</login>
</html>