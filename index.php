<?php
  session_start();
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>BookHub</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>BookHub</h2>
</div>
<div class="content">
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
   
     <p> <a href="AddBook.php?<?php echo htmlspecialchars(SID); ?>" style="color: blue;">Sell a Book</a> </p>
     <p> <a href="account.php?<?php echo htmlspecialchars(SID); ?>" style="color: blue;">Account</a> </p>
     <p> <a href="Buy.php?<?php echo htmlspecialchars(SID); ?>" style="color: blue;">Buy A Book</a> </p>
     
     <p> <a href="index.php?logout=1" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>