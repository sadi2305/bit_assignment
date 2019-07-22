
<?php

include('server.php');
session_start();
$email = $_SESSION['email'];
?>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Navigation</a>
		</div>
		<div class="dropdown navbar-right" id="right">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php echo $email;?>
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
  	<!-- <li><a href="account.php">Change Password</a></li> -->
    <li><a href="home.php?logout='1'" style="color: red;">logout</a></li>
  </ul>
</div>
	</div>
</nav>