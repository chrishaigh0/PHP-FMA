<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Registration</title>
    </head>

    <body>
		
		<?php
		$PageTitle = "Registration";
		include "..\page constants\Header.php"; //Header;
		?>
		
        <p>Please fill in the following form.</p>
		<form action="..\scripts\script_userregistration.php" method="post">
		
			Full name: <input type="text" name="fname"> <br> <br>
			E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="email"> <br> <br>
			Username: <input type="text" name="uname"> <br> <br>
			Password:&nbsp; <input type="password" name="pswd"> <br> <br>
			<input type="submit" value="Submit my details"
		</form>
		
		
		
		<hr>
		<p>
			| <a href="login.php">Login</a> | <a href="logout.php">Logout</a> |
		</p>
		<hr>
		
    </body>
</html> 