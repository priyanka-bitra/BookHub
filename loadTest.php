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
		for ($i=0; $i<1000;$i++){
			$query="INSERT INTO Books (Name, Author, Available, BookEd, StudentId, BookId)
							VALUES('qwerty','keyboard','Y','1','8',NULL)";
			mysqli_query($dbc, $query);
		}
	}
	if(isset($_POST['deleteBook'])){
		$dbc = mysqli_connect('localhost', 'studentweb', 'turtledove', 'BookHub');
		for ($i=0; $i<1000;$i++){
			$query="DELETE FROM books WHERE StudentId=8";
			mysqli_query($dbc, $query);
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
			<h1><a href="../index.php" style="color: blue;">BookHub</a></h1>
		</center>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
    <form method="post" action="http://localhost/~amarbat/Internal/P3/TestFiles/loadTest.php">
  	<div class="input-group">
  		<button type="submit" class="btn" name="addBook">Add thousand books to database</button>
  	</div>
		  	<div class="input-group">
  		<button type="submit" class="btn" name="deleteBook">delete those Thousand books</button>
  	</div>
		</form>
  </body>
</html>