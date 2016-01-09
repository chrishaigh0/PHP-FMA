<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>About</title>
    </head>
	
    <body>
		<?php	
		$PageTitle = "About";
		include "page constants\Header.php"; //Header;
	
		print	"
				<br/>
				<p>
				This is the about page for this website. It is open to the public and serves to give users an understanding
				of the purpose of this website.
				</p>
				
				<p>
				This is a website developed for a school project to demonstrate simple user account control. There are 3 pages.
				The home page, an about page, which you're currently reading, as well as a locked page. The locked page will
				display an access denied message if you attempt to open it without logging in.
				</p>
				<p>
				You can log in using the link in the bottom left of the page. If you're already logged in, you will see your
				name along with an explanation message in place of the login link.
				</p>
				<p>
				Be careful, if you leave you computer
				someone else may use your computer and see the contents of the locked page. With security in mind, please use
				the logout button, that you will see next to your username at all time.
				</p>
				<p>
				This isn't a very secure site, afterall, I had to leave something to talk about in the learning blog.
				</p>
				<br/>
				";
		
		include "page constants\Footer.php"//Footer;
		?>
    </body>
</html> 