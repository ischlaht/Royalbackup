<?php
session_start();

// variable declaration
$username = "";
$firstname = "";
$lastname = "";
$phone_number = "";
$errors = array(); 
$_SESSION['success'] = "";

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'royalbackup');


// LOGIN USER
if (isset($_POST['login_user'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);

	if (empty($username)) {
		array_push($errors, "Username is required");
	}
	if (empty($password)) {
		array_push($errors, "Password is required");
	}
//        if (mysqli_query($db, $username) == 0) {
//            array_push($errors, "Username does not exist");
//        }

	if (count($errors) == 0) {
		$password = md5($password);
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) {
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in";
			header('location: homepage.php');
		}
        else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}


//--------------------------------------------------Register User-----
if (isset($_POST['reg_user'])) {
	// receive all input values from the form
	$username = mysqli_real_escape_string($db, $_POST['username']);
    $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
	$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
	$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

	// form validation: ensure that the form is correctly filled
	if (empty($username)) { array_push($errors, "Username is required"); }
    if (empty($firstname)) { array_push($errors, "First Name is required"); }
    if (empty($lastname)) { array_push($errors, "Last Name is required"); }
    if (empty($phone_number)) { array_push($errors, "Phone number is required"); }
	if (empty($password_1)) { array_push($errors, "Password is required"); }


	if ($password_1 != $password_2) {
		array_push($errors, "The two passwords do not match");
	}
    
	// register user if there are no errors in the form
    //Also the query selecter for sql------------
	if (count($errors) == 0) {
		$password = md5($password_1);//encrypt the password before saving in the database
		$query = "INSERT INTO users (username, firstname, lastname, phone_number, password) 
				  VALUES('$username', '$firstname', '$lastname','$phone_number', '$password')";
		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You are now logged in";
		header('location: homepage.php');
	}

}


//if (isset($_POST['submit_db'])) {
//	// receive all input values from the form
//	$code = mysqli_query($db, $_POST['code']);
//	
//
//	// form validation: ensure that the form is correctly filled
//	if (empty($code)) { array_push($errors, "File is required"); }
//
//	}
//    
//	// register user if there are no errors in the form
//    //Also the query selecter for sql------------
//	if (count($errors) == 0) {
//		
//		$query = "INSERT INTO users (code) 
//				  VALUES('$code')";
//		mysqli_query($db, $query);
//
//
//	}













































?><!--  Web Font Loader  -->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
