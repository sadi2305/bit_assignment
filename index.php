<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="Custom.css"> -->
</head>
<body style="text-align: center;">
	<div class="header">
		<img style="width: 5%;" src="images/address-book-solid.svg">
		<h2>Registration Panel</h2>
	</div>

	<form method="post" action="index.php" >

	
		<?php include('errors.php') ?>



		<div class="input-group" style="border: 3px solid black; border: 3px solid black; width: 39%; margin-left: 366px;">
			
			<table style="margin-top: 15px; margin-left: 135px;">
				<tr>
					<td style="padding: 10px;"><label>Firstname</label></td>
					<td><input type="text" name="firstname" value="<?php echo $firstname; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Lastname</label></td>
					<td><input type="text" name="lastname" value="<?php echo $lastname; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Address</label></td>
					<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Phone</label></td>
					<td><input type="text" name="phone" value="<?php echo $phone; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Email</label></td>
					<td><input type="text" name="email" value="<?php echo $email; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Birth Date</label></td>
					<td><input type="date" name="bday" value="<?php echo $bday; ?>"></td>
				</tr>
				<tr>
					<td style="padding: 10px;"><label>Password</label></td>
					<td><input type="password" name="password"></td>
				</tr>
			</table>

			
			<!-- <div class="input-group">
				<label>Confirm Password</label>
				<input type="password" name="password_2">
			</div> -->
			<div class="input-group">
				<button type="submit" name="register" class="btn">Register</button>
			</div>

			<p><a href="login.php">Login</a></p>
		</div>

	</form>

</body>
</html>