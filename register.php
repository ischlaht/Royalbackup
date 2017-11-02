<?php include('server.php') ?>

<?php 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: index.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: index.php");
	}

?>

<head>
<link rel="stylesheet" type="text/css" href="registration.css">
</head>



<body>
	<div class="container" id="loggedincontainer">
	<div id="loggedinheader">
		Logged in
	</div>

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> you are Logged in!</p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?>
	</div>
		
</body>


<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>

</head>
<body>
<div class="container" id="totalcontainer">
	<div class="container" id="Rheader">
		<h2>Register</h2>
	</div>
	<div class="container" id="registercontainer">
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div id="textbox">
			<label>Username:</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div id="textbox">
			<label>Phone Number:</label>
			<input type="text" name="phone_number" value="<?php echo $phone_number; ?>">
		</div>
        <div id="textbox">
            <label>First Name:</label>
            <input type="text" name="firstname" value="<?php echo $firstname; ?>">
        </div>
        <div id="textbox">
            <label>Last Name:</label>
            <input type="text" name="lastname" value="<?php echo $lastname; ?>">
        </div>
		<div id="textbox">
			<label>Password:</label>
			<input type="password" name="password_1">
		</div>
		<div id="textbox">
			<label>Confirm password:</label>
			<input type="password" name="password_2">
		</div>
		<div id="input-group">
			<button type="submit" id="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="index.php" id="signupbtn" data-toggle="tooltip" title="Click to Sign In!">Sign in</a>
		</p>
	</form>
    </div>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</div>
</body>
</html>