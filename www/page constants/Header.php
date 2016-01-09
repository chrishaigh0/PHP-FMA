<?php
	//Header file. This is the first piece of HTML for all pages
	
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
	// Title of the page
	print "<h1>" . $PageTitle . "</h1>"; 
	
	// Navigation menu
	print "<hr>";
	print "<p>| <a href=\"\index.php\">Home</a> | <a href=\"\about.php\">About</a> | <a href=\"\securepage.php\">Locked page</a> | </p>";
	print "<hr>";
	// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - 
?>