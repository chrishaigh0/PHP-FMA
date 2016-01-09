
<?php

// Starts the session if it hasn't already been started in the page. This is, afterall, a footer.
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Checks if the user is logged in
if(isset($_SESSION['name']))
{
	Print	"<hr> <p> | Logged in as: " . $_SESSION['name'] . " | <a href=\"uac\logout.php\">Logout</a> | </p> <hr> ";
}
ELSE
{
	Print	"<hr> <p> | <a href=\"\uac\login.php\">Login</a> | </p> <hr> ";
}

?>
