<?php
// This script is responsible for inserting the registration form data into the flat text database "UserDetails"

//Assigning the post data from the form to PHP variables
$fname = $_POST['fname'];
$email = $_POST['email'];
$uname = $_POST['uname'];
$pswd = $_POST['pswd'];

//File handling



$fileHandle = fopen("..\data\UserDetails", 'a'); //Opens the "UserDetails" file for ammendment

if (!$fileHandle) // If the file isn't present or it is empty display an error
{
	print "Installation corrupt: The UserDetails file is missing or has not been correctly initialised.";
}

fwrite($fileHandle, "$uname\t $pswd\t $fname\t $email\n"); //inserts the data to the file. Collumns seperated by tabs and a new line created at the end.
fclose($fileHandle); // closes the file

// Prints out a success message along with some direction for the user
print "<hr>";
print "Thank you for registering with us, your credentials have been saved. <br/><br/>";
print "If you would like to login straight away, proceed to the <a href=\"\uac\login.php\">login page</a>. You can also return to the <a href=\"\index.php\">home page</a>";
print "<hr>";
?>