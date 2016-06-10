<?php
include("connection.php");
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password'";

$result = $link->query($query);

$count = mysqli_num_rows($result);

if($count == 1)
{
	echo "U bent ingelogen!";
	$_SESSION['ingelogd'] = 1;
	
}else{
	echo "De door uw ingevoerde gegevens bestaan niet in onze database, neem contact met onze administrator of ga lekker weekend vieren.";
	
}



?>