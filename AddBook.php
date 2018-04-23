<?php
session_start();
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
	
<form action="http://localhost/~amarbat/Internal/P2/BookAdded.php">
  Enter the details of the book you would like to sell!<br>
  <label>Book name:</label><br>
  <input type="text" name="bookName" value=" ">
  <br>
  <label>Author name:</label><br>
  <input type="text" name="Author" value=" ">
  <br>
  <label>Book Edition:</label><br>
  <input type="text" edition="BookEd" value=" ">
  <br>

  <input type="submit" name="submit" value="Submit">
</form> 
</body>
</html>


