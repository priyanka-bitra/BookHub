<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<body>
<h1>Your Account Information </h1>
Username:<strong>
<?php
echo $_SESSION['username'];
echo $_Session['studentId'];
?></strong> </br>
Change Password: <a href="passwordChange.php?<?php echo htmlspecialchars(SID); ?>" style="color: blue;">Click here!</a></br>

<?php
//using the studentId passed from the login page, get all the books that have that student id with them
//!!!!NEED TO ADD A BUTTON BEHIND EACH book to Update the availibility
////////////// the availability button will change the information in the database.
?>
<?php

//used to get the Available books to the screen
//loop is used to get a nice formatted available books list

// Get a connection for the database
$dbc = mysqli_connect('localhost', 'studentweb', 'turtledove', 'BookHub');

// Create a query for the database
$query = "SELECT Name, Author, Available, BookEd
	FROM Books";

// Get a response from the database by sending the connection
// and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if($response){
    echo '<table align="left"
    cellspacing="5" cellpadding="8">
    <tr><td align="left"><b>Book Name</b></td>
    <td align="left"><b>Author</b></td>
    <td align="left"><b>Book Edition</b></td>';
    
// mysqli_fetch_array will return a row of data from the query
// until no further data is available
    while($row = mysqli_fetch_array($response)){
        if ($row['StudentId']==$_SESSION['student_id']){                    //make this an array so is it more interactible
           echo '<tr><td align="left">' .
           $row['Name'] . '</td><td align="left">' .
           $row['Author'] . '</td><td align="left">' .
           $row['BookEd'] . '</td><td align="left">' ;
           echo '</tr>';
        }
    }
    echo '</table>';
} else {
    echo "Couldn't issue database query<br />";
    echo mysqli_error($dbc);
}

// Close connection to the database
mysqli_close($dbc);
?>
</body>
</html>
