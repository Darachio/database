<?php
session_start();

if($_SESSION['ingelogd']){
	echo "Dit is geheim!!";
}else{
	
	echo "Je bent niet ingelogd.";
}




?>