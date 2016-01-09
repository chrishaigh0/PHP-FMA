<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login</title>
    </head>

    <body>
		<?php	
		$PageTitle = "Login";
		include "..\page constants\Header.php"; //Header;
		?>
		
		
        <form action="..\scripts\script_userauthentication.php" method="post">
		
			Username: <input type="text" name="uname"> <br> <br>
			Password:&nbsp; <input type="password" name="pswd"> <br> <br>
			<input type="submit" value="Submit my details"
			
		</form>
		
		<p>Don't have an account yet? <a href="\uac\register.php">register here</a> . </p>
	
		<hr>
    </body>
</html> 