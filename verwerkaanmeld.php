<?php
include('menu.php');

$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

$query = "INSERT INTO users (`email`, `password`, `status`) VALUES 
('$email', '$password', 0)";
if ($link->query($query)){
	echo "gelukt!";
}else{
	echo "Er is iets misgegaan<BR>";
	echo $query;
}
?>