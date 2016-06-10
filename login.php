<?php
include('menu.php');
?>

<HTML>
	<HEAD>
		<TITLE>Login
		</TITLE>
	</HEAD>
	<BODY>
	<H1>Login</H1>
		<FORM method="post" action="verwerklogin.php">
			Email: <INPUT type="text" name="email"/><br>
			Wachtwoord: 
			<INPUT type="password" name="password"/><br>
			<INPUT type="submit" value="Aanmelden"/>
		</FORM>
	</BODY>
</HTML>