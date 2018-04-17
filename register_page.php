<html>
	<head>
	<title>Add Student</title?>
	</head>
	<body>
	<?php
	
	if(isset($_POST['submit'])){ //checks if any of the fields were empty
	
		&data_missing=array();
		
		if(empty(&_POST['firstName'])){
		{
		// Adds name to array
			&data_missing[]='First Name';
		} else {
		// Trim white space from the name and store the name
			&f_name=trim(&_POST['firstName']);
			}
			
		if(empty(&_POST['lastName'])){
		{
		// Adds name to array
			&data_missing[]='Last Name';
		} else {
		// Trim white space from the name and store the name
			&l_name=trim(&_POST['lastName']);
			}
			
		if(empty(&_POST['email'])){
		{
		// Adds email to array
			&data_missing[]='email';
		} else {
		// Trim white space from the email and store the email
			&email=trim(&_POST['email']);
			}
			
		if(empty(&_POST['password'])){
		{
		// Adds name to array
			&data_missing[]='password';
		} else {
		// Trim white space from the password and store the password
			&password=trim(&_POST['password']);
			}
			
		if(empty(&_POST['passwordOne'])){
		{
		// Adds name to array
			&data_missing[]='Confirmation Password';
		}
		
		

			if(empty($data_missing)){
				if(password==passwordOne){
				
					require_once('../mysqli_connect.php');
				
					$query = "INSERT INTO students (first_name, last_name, email, password, date_entered, student_id)
					VALUES(?,?,?,?,NOW(),NULL)";
					
					$stmt = mysqli_prepare($dbc, $query);
				
					mysqli_stmt_bind_param($stmt, "ssss", $f_name, $l_name, $email, $password);
				
					mysqli_stmt_execute($stmt);
				
					$affected_rows = mysqli_stmt_affected_rows($stmt);

				if($affected_rows == 1){
					echo 'Student Entered';
					mysqli_stmt_close($stmt);
					mysqli_close($dbc);
					}		
				else{
				echo 'Passwords do not match<br \>'
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