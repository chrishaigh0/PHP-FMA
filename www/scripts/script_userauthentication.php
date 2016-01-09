<?php
// This script is responsible for comparing the login form data to the "UserDetails" text database and deciding if the user should be granted access or not.
//---------------------------------------------------------------------------------------------------------------------------

// Retieving data from login form 
$AUTHuname = $_POST['uname'];
$AUTHpswd = $_POST['pswd'];

// Opening the "UserDetails" text database
$fileHandle = fopen("..\data\UserDetails", 'r');

if (!$fileHandle) // If the file isn't present or it is empty display an error
{
	print "Installation corrupt: The UserDetails file is missing or has not been correctly initialised.";
}
else 
{
	$theData = file("..\data\UserDetails"); // Assign the text file's data to a new variable called "theData"
	fclose ($fileHandle); 
	
	foreach($theData as $line) // Loop for each line of data in the file
	{
		list($STORuname, $STORpswd)= explode("\t", $line); // assign the values from current database row/line to a list we only use the first two collumns (username and password).
		if (($AUTHuname == $STORuname) && ($AUTHpswd == $AUTHpswd))
		{		
			session_start(); // start a session for this user with the following values:
			$_SESSION['name'] = $AUTHuname;
			header("Location: ..\index.php"); 
		}
	}
}
//---------------------------------------------------------------------------------------------------------------------------
?>