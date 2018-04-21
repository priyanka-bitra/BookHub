<html>
	<head>
		<title>Login</title>
	</head>
	<body>
	<?php
		if(isset($_POST['submit'])){ //checks if any of the fields were empty
	
		$data_missing=array();
		
		if(empty($_POST['username'])){
		// Adds name to array
			$data_missing[]='First Name';
		}  else {
		// Trim white space from the name and store the name
			$username=trim($_POST['username']);
			}
			
		if(empty($_POST['password'])){
		// Adds password to array
			$data_missing[]='password';
		}  else {
		// Trim white space from the name and store the name
			$password=trim($_POST['password']);
			}
			
		//if the data_missing array is empty then proceed to check if the username and password combination exist in the database
		if(empty($data_missing)){
			require_once('../mysqli_connect.php');
		
		//check the username with all the emails that the database has
		//check the password match
		
		//if they both match, then go to accounts.php page
		
		//make sure to pass the studentID from database to the account page
		
		
		}
		
		else{
					echo 'You need to enter the following data<br />';
					foreach($data_missing as $missing){
						echo "$missing<br />";
					}
			}
	
	?>
	
	</body>
</html>