<?php
//initializes variables DB_USER, DB_password, DB_HOST, DB_NAME
DEFINE ('DB_USER', 'studentweb');
DEFINE ('DB_PASSWORD', 'turtledove');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'BookHub');

//Starts a database connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)

//if it cannot connect to the server it displays the following message
OR die('Could not connect to MySQL: ' .
    mysqli_connect_error());

?>