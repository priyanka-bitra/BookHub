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
<?php
if(isset($_POST['addBook'])){
$dbc = mysqli_connect('localhost', 'studentweb', 'turtledove', 'BookHub');
/*
	if(isset($_POST['submit'])){
		$data_missing=array();
		
		if(empty($_POST['bookName'])){
			$data_missing[]='Book Name';
		}
		else {
			$b_name=trim($POST['bookName']);
		}
		
		if(empty($_POST['Author'])){
			$data_missing[]='Author';
		}
		else {
			$author=trim($POST['Author']);
		}
		
		if(empty($_POST['BookEd'])){
			$data_missing[]='Book Edition';
		}
		else {
			$b_e=trim($POST['BookEd']);
		}
		*/
	$errors = array();
	$b_name = mysqli_real_escape_string($dbc, $_POST['bookName']);
  $author = mysqli_real_escape_string($dbc, $_POST['Author']);
	$b_e = mysqli_real_escape_string($dbc, $_POST['BookEd']);

  if (empty($b_name)) {
  	array_push($errors, "Book Name is required");
  }
  if (empty($author)) {
  	array_push($errors, "Author name is required");
  }
	if (empty($b_e)) {
  	array_push($errors, "Book edition is required. If Not available, put 0");
  }

  if (count($errors) == 0) {
			$username=$_SESSION['username'];
      $StudentId=$_SESSION['student_id'];
			$availability='Y';
			
			$query="INSERT INTO Books (Name, Author, Available, BookEd, StudentId, BookId)
							VALUES('$b_name','$author','$availability,'$b_e','$StudentId')";
			mysqli_query($dbc, $query);
			$_SESSION['success'] = "Book Successfully added";
	
		header('location:http://localhost/~amarbat/Internal/P3/index.php');
		}
}
?>
<html>
<head>
	<style type="text/css">
	h1 {color:blue}
	</style>
	<title>AddBook</title>
		 <center>
	<h1><a href="index.php" style="color: blue;">BookHub</a></h1>
	</center>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<form method="post" action="http://localhost/~amarbat/Internal/P3/BookAdded.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Book name:</label>
  		<input type="text" name="bookName" >
  	</div>
  	<div class="input-group">
  		<label>Author name:</label>
  		<input type="text" name="Author">
  	</div>
		<div class="input-group">
  		<label>Book Edition:</label>
  		<input type="number" name="BookEd">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="addBook">List Book</button>
  	</div>
</form>
</body>
</html>