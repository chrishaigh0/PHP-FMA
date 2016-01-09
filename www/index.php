<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>index</title>
    </head>

    <body>
		<?php
		$PageTitle = "Home";
		include "Page constants\Header.php"; //Header
		
        session_start();
		if(isset($_SESSION['name'])) // If the user is logged in, welcome them with their username.
		{
			print "<h2>Welcome " . $_SESSION['name'] . "</h2>";
			print "<br/>";
		}
		print "<p>This is the home page.</p>";		
		print "<p> We hope you enjoy your stay. See <a href=\"\about.php\">the about page</a> 
				for more information about this site.</P>";
		
		include "Page constants\Footer.php"//Footer
		?>
    </body>
</html> 