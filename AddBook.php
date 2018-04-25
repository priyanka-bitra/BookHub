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
	<meta http-equiv="Post book page" content="text/html; charset=ISO-8859-1"/>
	<style type="text/css">
	h1 {color:blue}
	</style>
	<meta name="description" content="Welcome to BookHub, we trade your used books" />
	<meta name="keywords" content="Books">
	<meta name="authors" content="Priyanka, Jahnavi, Manpreet, Amar" />
  <link rel="stylesheet" type="text/css" href="style.css">
	<center><h1><a href="index.php" style="color: blue;">BookHub</a></h1></center>
	<title>Sell A Book</title>
	</head>
<body>
	
<form action="http://localhost/~amarbat/Internal/P3/BookAdded.php">
  Enter the details of the book you would like to sell!<br>
  <label>Book name:</label><br>
  <input type="text" name="bookName">
  <br>
  <label>Author name:</label><br>
  <input type="text" name="Author">
  <br>
  <label>Book Edition:</label><br>
  <input type="text" edition="BookEd">
  <br>

  <input type="submit" name="addBook" value="Submit">
</form> 
</body>
</html>


