<?php
//This script is responsible for destroying the session data in order to log the user out.
session_start();
unset($_SESSION['name']); // The only element of my session is name, so it's simply being un set. That is all that is needed

PRINT "<p>You have successfully logged out of your account. We hope to see you again soon.</p>";
PRINT "<p><a href=\"\index.php\">Return to home page</a></p>";

?>