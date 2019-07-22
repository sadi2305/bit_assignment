<!DOCTYPE html>
<html>
<head>
	<title>user page</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
  	<style type="text/css">
  		
  		.dropbtn {
		  background-color: #3498DB;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
		  cursor: pointer;
		}

		.dropbtn:hover, .dropbtn:focus {
		  background-color: #2980B9;
		}

		.dropdown {
		  position: relative;
		  display: inline-block;
		}

		.dropdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f1f1f1;
		  min-width: 160px;
		  overflow: auto;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dropdown-content a {
		  color: black;
		  padding: 12px 16px;
		  text-decoration: none;
		  display: block;
		}

		.dropdown a:hover {background-color: #ddd;}

		.show {display: block;}

		.dropdown-content>a{
			text-align: left;
		}


  	</style>
</head>
<body>

	<div class="container" style="border: 2px solid black;">
		
		<div class="row">
			<div class="col-md-6">
				<h3>Navigation</h3>
			</div>
			<div class="col-md-6" style="text-align: right;">
				<div class="dropdown">
				  <button onclick="myFunction()" class="dropbtn">Username</button>
				  <div id="myDropdown" class="dropdown-content">
				    <a href="#home">Home</a>
				    <a href="#about">About</a>
				    <a href="#contact">Contact</a>
				  </div>
				</div>
			</div>
		</div>
		


		<div class="row" style="border-top: 2px solid black;">
			<div class="col-md-3" style="border-right: 2px solid black;">
				<ul class="nav flex-column">
				  <li class="nav-item">
				    <a class="nav-link active" href="#">Profile Page</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link" href="#">Change Password</a>
				  </li>
				  <!-- <li class="nav-item">
				    <a class="nav-link" href="#">Link</a>
				  </li>
				  <li class="nav-item">
				    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
				  </li> -->
				</ul>
			</div>
			<div class="col-md-9">
				<div>
					<table>
						<tr>
							<td style="padding: 10px;"><label>Previous Password</label></td>
							<td><input type="text" name="olapass" value="<?php echo $olapass; ?>"></td>
						</tr>
						<tr>
							<td style="padding: 10px;"><label>New Password</label></td>
							<td><input type="text" name="password_1" value="<?php echo $password_1; ?>"></td>
						</tr>
						<tr>
							<td style="padding: 10px;"><label>Confirm Password</label></td>
							<td><input type="text" name="Password_2" value="<?php echo $Password_2; ?>"></td>
						</tr>

					</table>
				</div>
			</div>
		</div>
		
	</div>


	<script>
		/* When the user clicks on the button, 
		toggle between hiding and showing the dropdown content */
		function myFunction() {
		  document.getElementById("myDropdown").classList.toggle("show");
		}

		// Close the dropdown if the user clicks outside of it
		window.onclick = function(event) {
		  if (!event.target.matches('.dropbtn')) {
		    var dropdowns = document.getElementsByClassName("dropdown-content");
		    var i;
		    for (i = 0; i < dropdowns.length; i++) {
		      var openDropdown = dropdowns[i];
		      if (openDropdown.classList.contains('show')) {
		        openDropdown.classList.remove('show');
		      }
		    }
		  }
		}
		</script>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->

</body>
</html>