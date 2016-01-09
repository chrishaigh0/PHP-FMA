<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Secure page</title>
    </head>

	
    <body>
		<?php
		
		$PageTitle = "Secure page";
		include "Page constants\Header.php"; //Header;
		session_start();
		if(isset($_SESSION['name']))// If the user is logged in display the secure data
		{
			print "<p> This is where sensitive data would be displayed if this was a live system. If you see this you have successfully logged in. </p>";
		}
		else //Otherwise tell the user they need to log in.
		{
			print "<h1 style=\"color:red\">ACCESS DENIED</h1>" . "This is a secure page. You need to <a href=\"\uac\login.php\">log in</a> before you can view it's contents.";
		}
		
		include "Page constants\Footer.php"//Footer;
		?>
		
    </body>
</html> 