<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
	<title>Buy</title>
</head>

<body>

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
//here we are returning every single book available from the books database
    while($row = mysqli_fetch_array($response)){
        if ($row['Available']=='Y'){
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
