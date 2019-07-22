<?php
	session_start();

	$mysqli = new mysqli('localhost', 'root', '', 'bitmascot') or die(mysqli_error($mysqli));

	$id = 0;
	$update = false;
	$firstname = '';
	$lastname = '';
	$address = '';
	$phone = '';
	$email = '';
	$birthdate = '';


	if (isset($_POST['save'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$birthdate = $_POST['birthdate'];

		$mysqli->query("INSERT INTO book (firstname, lastname, address, phone, email, birthdate) VALUES('$firstname', '$lastname','$address', '$phone', '$email', '$birthdate' )") or die($mysqli->error);

		$_SESSION['message'] = "Record has been saved!";
		$_SESSION['msg_type'] = "success";

		header("location: book.php");

	}

	if (isset($_GET['delete'])) {
		$id = $_GET['delete'];

		$mysqli->query("DELETE FROM book WHERE id=$id") or die($mysqli->error());

		$_SESSION['message'] = "Record has been deleted!";
		$_SESSION['msg_type'] = "danger";

		header("location: book.php");

	}

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM book WHERE id=$id") or die($mysqli->error());

		if (count($result)==1) {
			$row = $result->fetch_array();
			$firstname = $row['firstname'];
			$lastname = $row['lastname'];
			$address = $row['address'];
			$phone = $row['phone'];
			$email = $row['email'];
			$birthdate = $row['birthdate'];
		}
	}

	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address = $_POST['address'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$birthdate = $_POST['birthdate'];

		$mysqli->query("UPDATE book SET firstname='$firstname', lastname='$lastname', address='$address', phone='$phone', email='$email', birthdate='$birthdate' WHERE id='$id'") or die($mysqli->error());

		$_SESSION['message'] = "Record has been updated!";
		$_SESSION['msg_type'] = "warning";
		header("location: book.php");
		}
		
 ?>


