<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Password change</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<form method="post" action="passwordChange.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Old password:</label>
  	  <input type="password" name="OldPassword" value="<?php echo $oldPassword; ?>">
  	</div>
  	<div class="input-group">
  	  <label>New Password</label>
  	  <input type="password" name="NewPassword" value="<?php echo $newPassword; ?>">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="changePassword">change password</button>
  	</div>
  	<p>
		<a href="http://localhost/~amarbat/Internal/P2/index.php">GO back to home page</a>
  	</p>
  </form>
<?php

if (isset($_POST['changePassword'])) {
  $oldPassword = mysqli_real_escape_string($db, $_POST['OldPassword']);
  $newPassword = mysqli_real_escape_string($db, $_POST['NewPassword']);
  

  if (empty($oldPassword)) {
  	array_push($errors, "Old password is required");
  }
  if (empty($newPassword)) {
  	array_push($errors, "New password is required");
  }

  if (count($errors) == 0) {
  	$newPassword = md5($newPassword); //encryption
	
  	$query = "SELECT password FROM user WHERE username='$username' AND password='$password';";
	$query2="INSERT INTO user VALUES ($newPassword)";

	
  	$results = mysqli_query($db, $query);
	$results = mysqli_query($db, $query2);
	
   
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
      $_SESSION['student_id']=$user['student_id'];
  	  header('location: http://localhost/~amarbat/Internal/P2/index.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}

?>

</body>
</html>
