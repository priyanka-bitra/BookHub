<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Login page" content="text/html; charset=ISO-8859-1"/>
	<style type="text/css">
	h1 {color:green}
	</style>
	<meta name="description" content="Welcome to BookHub, we trade your used books" />
	<meta name="keywords" content="Books">
	<meta name="authors" content="Priyanka, Jahnavi, Manpreet, Amar" />
  <title>BookHub Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="header">
    <h1>BookHub</h1>
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username:</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="http://localhost/~amarbat/Internal/P2/register.php">Sign up</a>
  	</p>
  </form>
</body>
</html>