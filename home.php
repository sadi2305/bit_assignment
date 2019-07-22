<?php

error_reporting(0);

  session_start(); 
  if (!isset($_SESSION['firstname'])) {
  header('location: login.php');
}
// if a user is not logged in they cannot access this page

  // if (empty($_SESSION['firstname'])) {
  //   header('location: login.php');
  // }

  if (!isset($_SESSION['firstname'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['firstname']);
    header("location: login.php");
  }
?>
<?php 
include('header.php');
include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>

<div class="Container header">
  <h2>Home Page</h2>
</div>
<div class="container content">

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



    <div>
      <?php  if (isset($_SESSION['firstname'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['firstname']; ?></strong></p>
      
      
      <?php endif ?>
    </div>
    <div>
      <?php include('book.php'); ?>
    </div>
</div>
    
</body>
</html>