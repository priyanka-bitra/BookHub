<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
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

<?php
//need to take care of the variable StudentId
//here you need to make the book available
//check if the available works
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
		
		if(empty($data_missing)){
			$dbc = mysqli_connect('localhost', 'studentweb', 'turtledove', 'BookHub');
			$username=$_SESSION['username'];
      $StudentId=$_SESSION['student_id'];
			$availability='Y';
			
			$query="INSERT INTO Books (Name, Author, Available, BookEd, StudentId, BookId)
							VALUES(?,?,?,?,?,NULL)";


			$stmt=mysqli_prepare($dbc,$query);
			
			mysqli_stmt_bind_param($stmt,"sssii", $b_name, $author, $availability,
								   $b_e,$StudentId);
			mysqli_stmt_execute($stmt);
			
			$affected_rows=mysqli_stmt_affected_rows($stmt);
				if($affected_rows==1){
				echo 'Book added successfully';
				mysqli_stmt_close($stmt);
				mysqli_close($dbc);
				header('location: http://localhost/~amarbat/Internal/P2/index.php');
				}else{
					echo 'error occurred<br />';
					echo mysqli_error();
					mysqli_stmt_close($stmt);
					mysqli_close($dbs);
					}
			}
			else{
			echo 'You need to enter the following data: <br />';
				foreach($data_missing as $missing){
					echo "$missing <br/>";
				
				}
			}
	}
?>

<form action="http://localhost/~amarbat/Internal/P2/BookAdded.php">
  Enter the details of the book you would like to sell!<br>
  Book name:<br>
  <input type="text" name="bookName" value=" ">
  <br>
  Author name:<br>
  <input type="text" name="Author" value=" ">
  <br>
  Book Edition:<br>
  <input type="text" name="BookEd" value=" ">
  <br>

  <input type="submit" name="submit" value="Submit">
</form> 

</body>
</html>