README.txt:
This is a description of all the files in the system


To access data in the database from users, we had to create a new database user that
can modify, add information. user:"studentweb' password:'turtledove'

login.php:
This php file serves as a sign in page that internally checks if the username and
password are indeed are in the database.
Also it redirects the user to the register.php file.
The file includes the server.php file.


register.php:
This file represents the register user page. It is only accesible from login.php page.
The user enters the desired username, password and the gmu email.
The system checks if the username and the email already exist in the system
It includes server.php.


server.php:
It serves as a server session start to track the logged in users throughout the system.
The file is included in both register.php and login.php. All the data from the afore
mentioned two files are checked to ensure the correctness of format of filled information
by the user.
If no errors are encountered, the new user is registered in the BookHub database 'user'
table with a hashed password. Hashed password is for security reasons.
When login.php or register.php forms succeed, the user is transferred to the index.php
page.


errors.php:
Used to display errors.


index.php:
Checks if the user is logged in, if not, they are redirected to login.php
The page serves as the home page of BookHub, where users have four options:
1.Sell a Book
2.Account
3.Buy A Book
4.Logout
Sell A Book redirects the user to the AddBook.php
Account -> account.php
Buy A Book-> Buy.php
Logout reinitializes the username and transfers the user back to sign in page

style.css:
The website outlook design page, where instances of the web app are formatted in
certain ways. Those instances include:
the body of the html page
header
forms
input-group label -  the implementer would normally use the 'label' type to create prompts
input-group input
btn- button modifications
error - the error messages
success - success messages

AddBook.php:
A php page, the main purpose of which is to add a book to the database along with the id
of the adder, so that it is easier to manage the account of users.
This page is consistent of a form that takes information about books:
Book name,
Author Name,
Book Edition,
and transfers those information to the BookAdded.php page, by clicking the submit button.

BookAdded.php
Takes the information from AddBook.php and adds them to the database.
If one of the required fields is empty, the user is prompted to input the information again.
If the Book adding was successful it displays a "book successfully added" message

account.php
Here the user can see their username and change password, as well as books added by them.
The user can modify the availability of the book in the account so that other users can see.
The password change button redirects the user to passwordChange.php.

passwordChange.php
This is a representation of a password change page, where the user is prompted to enter old
password and the new password.
The old password is matched with the password that is in the database, if it matches,
the password is changed to the newpassword.

Buy.php:
Lets the user see which books are available to trade. And if interested, the email of
the seller is listed.

Database.txt
It is a brief representation and creation of the database in mysql

