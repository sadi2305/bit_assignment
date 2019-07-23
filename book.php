<!DOCTYPE html>
<html>
<head>
	<title>Bit Assignment</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="css/all.min.css">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
	
		<?php require_once 'process.php'; ?>

		<?php

		if (isset($_SESSION['message'])): ?>

			<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				?>
			</div>
		<?php endif ?>
		<div class="container">
		<?php 
			$mysqli = new mysqli('localhost', 'root', '', 'bitmascot') or die(mysqli_error($mysqli));
			$result = $mysqli->query("SELECT * FROM book") or die($mysqli->error);
			//pre_r($result);

		?>
			<div class="row container">
				<table class="table">
					<thead>
						<tr>
							<th>Firstname</th>
							<th>Lastname</th>
							<th>Address</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Birth Date</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
					<?php
						while($row = $result->fetch_assoc()):
					?>
					<tr>
						<td><?php echo $row['firstname'] ?></td>
						<td><?php echo $row['lastname'] ?></td>
						<td><?php echo $row['address'] ?></td>
						<td><?php echo $row['phone'] ?></td>
						<td><?php echo $row['email'] ?></td>
						<td><?php echo $row['birthdate'] ?></td>
						<td>
							<a href="book.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
							<a href="process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php endwhile; ?>
				</table>
			</div>
			

		
		<?php
			function pre_r($array){
				echo '<pre>';
				print_r($array);
				echo '</pre>';
			};
		 ?>


		<div class="container">
			<div class="row">
				
					<form action="process.php" method="POST" style="width: 35%; margin: 0px auto; padding: 20px;">
						<input type="hidden" name="id" value="<?php echo $id ?>">
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="firstname" class="form-control" value="<?php echo $firstname; ?>" placeholder="Enter Your First Name">
						</div>
						<div class="form-group">
							<label>Last Name</label>
							<input type="text" name="lastname" class="form-control" value="<?php echo $lastname; ?>" placeholder="Enter Your Last Name">
						</div>
						<div class="form-group">
							<label>address</label>
							<input type="text" name="address" class="form-control" value="<?php echo $address; ?>" placeholder="Enter address">
						</div>
						<div class="form-group">
							<label>phone</label>
							<input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" placeholder="Enter phone Number">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" value="<?php echo $email; ?>" placeholder="Enter Email address">
						</div>
						<div class="form-group">
							<label>Birth Date</label>
							<input type="date" name="birthdate" class="form-control" value="<?php echo $birthdate; ?>" placeholder="Enter Your Birth Date">
						</div>
						<div class="form-group">
							<?php
								if ($update == true):
							?>
							<button type="submit" class="btn btn-info" name="update">Update</button>
							<?php else: ?>
							<button type="submit" class="btn btn-primary" name="save">Save</button>
							<?php endif ?>
						</div>
					</form>
				
				
			
			</div>
			<div>
				<a href="home.php" style="text-align: left;">GO BACK</a>
				<!-- <p style="text-align: center;"> <a href="home.php?logout='1'" style="color: red;">logout</a> </p> -->
			</div>
		</div>
	</div>



	
	<!---->
	<script type="text/javascript" src="js\jquery.min.js"></script>
	<script type="text/javascript" src="js\bootstrap.min.js"></script>
	<!---->
</body>
</html>
