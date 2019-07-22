<?php
	session_start();

	// initializing variables
	// $username = "";
	$firstname    = "";
	$lastname    = "";
	$address    = "";
	$phone    = "";
	$email    = "";
	$bday    = "";
	$password = "";
	$errors = array();
	//connection to database
	$db = mysqli_connect('localhost', 'root', '', 'bitmascot');
	// if the registration button is clicked
	if (isset($_POST['register'])) {
  		$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  		$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  		$address = mysqli_real_escape_string($db, $_POST['address']);
  		$phone = mysqli_real_escape_string($db, $_POST['phone']);
  		$email = mysqli_real_escape_string($db, $_POST['email']);
  		$bday = mysqli_real_escape_string($db, $_POST['bday']);
  		$password = mysqli_real_escape_string($db, $_POST['password']);
  		// $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  		//ensure that form fields are filled properly
  		if (empty($firstname)) {
  			array_push($errors, "firstname is required");
  			}
		if (empty($lastname)) {
  			array_push($errors, "lastname is required");
  			}
  		if (empty($address)) {
  			array_push($errors, "address is required");
  			}
  		if (empty($phone)) {
  			array_push($errors, "phone is required");
  			}
		if (empty($email)) {
			array_push($errors, "Email is required");
			}
		if (empty($bday)) {
  			array_push($errors, "Birthdate is required");
  			}
		if (empty($password)) {
			array_push($errors, "Password is required");
			}
		
	  	$user_check_query = "SELECT * FROM users WHERE  firstname='$firstname' OR email='$email' LIMIT 1";
	  	$result = mysqli_query($db, $user_check_query);
	 	$user = mysqli_fetch_assoc($result);

	 	// if ($user) {
	  //   if ($user['email'] === $email) {
	  //     array_push($errors, "email already exists");
	  //   }
	  // }

	  if ($user) { // if user exists
	    if ($user['firstname'] === $firstname) {
	      array_push($errors, "Name already exists");
	    }

	    if ($user['email'] === $email) {
	      array_push($errors, "email already exists");
	    }
	  }



		//if there are no error save user to database

		if (count($errors) == 0) {
			$password = md5($password); //encrypt pass before storing to database
			$sql = "INSERT INTO users (firstname, lastname, address, phone, email, bday, password) 
  			  VALUES('$firstname', '$lastname', '$address', '$phone', '$email', '$bday', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['firstname'] = $firstname;
  		$_SESSION['success'] = "You are now logged in";
  		header('location: home.php');
		}

	}



// log user in from login page
	if (isset($_POST['login'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
  		$password = mysqli_real_escape_string($db, $_POST['password']);

  		//ensure that form fields are filled properly
  		if (empty($email)) {
  			array_push($errors, "Email is required");
  			}
		if (empty($password)) {
			array_push($errors, "Password is required");
			}

		if(count($errors) == 0 ){
			$password = md5($password);
			$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
			$result = mysqli_query($db, $sql);
			if (mysqli_num_rows($result) == 1) {
				// log iser in
				$_SESSION['firstname'] = $firstname;
  	  			$_SESSION['success'] = "You are now logged in";
  	 			header('location: home.php'); //redirect to home page
			}else{
				array_push($errors, "wrong Email / Password combination");
			}
		}
	}


// logout
	if (isset($_GET['logout'])) {
		session_distroy();
		unset($_SESSION['firstname']);
		header('location: login.php');
	}

?>