<?php
include("connection.php");

$query = "SELECT * FROM users";
$result = $link->query($query);

while($row = $result->fetch_array()){
	echo $row[0] . "<BR>";
	echo $row[1] . "<BR>";
}

?>