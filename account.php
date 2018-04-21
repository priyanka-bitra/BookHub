<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<body>
<h1>Your Account Information </h1>
Last Name: </br> <!get these stuff from database, from login page, pass in all the info>
First Name: </br>
Change Password: </br> <!make a button here>
<!need buy and sell buttons as well as, an UpDATE button at end>

<?php
//using the studentId passed from the login page, get all the books that have that student id with them
//!!!!NEED TO ADD A BUTTON BEHIND EACH book to Update the availibility
////////////// the availability button will change the information in the database.
<h2>Book Details</h2> 
<table>
  <tr>
    <th>Book Name</th>
    <th>Author</th>
    <th>Edition</th>
    <th>Availability</th>
  </tr>
  <tr>
    <td>B1</td>
    <td>A1</td>
    <td>E</td>
    <td>
    <input type="radio" name="available" value="Yes"/>Yes
    <input type="radio" name="notAvailable " value="No"/>No
    </td>
  </tr>
  <tr>
    <td>B2</td>
    <td>A2</td>
    <td>E</td>
    <td>
    <input type="radio" name="available1" value="Yes"/>Yes
    <input type="radio" name="notAvailable1" value="No"/>No
    </td>
  </tr>
  <tr>
    <td>B3</td>
    <td>A3</td>
    <td>E</td>    <td>
    <input type="radio" name="available2" value="Yes"/>Yes
    <input type="radio" name="notAvailable2" value="No"/>No
    </td>
    
  </tr>
  ?>
  
</body>
</html>
