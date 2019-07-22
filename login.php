<?php 
error_reporting(0);
session_start();
if (isset($_SESSION['firstname'])) {
	header('location: home.php');
}
include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="Custom.css"> -->

	<style type="text/css">
		.box1{
			margin-top: 50px;
		}

		form{
			border: 3px solid black;
			width: 30%;
			margin-left: 35%;
		}

		.fbx{
			margin: 35px;
		}
		.btn1{
			padding: 20px;
		}

	</style>

</head>
<body style="text-align: center;">
	<div class="box1">
		<div class="header">
			<img style="width: 5%;" src="images/address-book-solid.svg">
			<h2>Login Pannel</h2>
		</div>

		<form method="post" action="login.php">
			<!--display validation error-->
			<div class="fbx">
				<?php include('errors.php') ?>
				<div class="input-group" style="padding: 10px;">
					<label>Email</label><br><br>
					<input type="email" name="email">
				</div>
				
				<div class="input-group" style="padding: 10px;">
					<label>Password</label><br><br>
					<input type="password" name="password">
				</div>
				
				<div class="input-group btn1">
					<button type="submit" name="login" class="btn">Login</button>
				</div>

				<p>Are you new here? <a href="index.php">Sign Up</a></p>
			</div>

		</form>
	</div>

</body>
</html>