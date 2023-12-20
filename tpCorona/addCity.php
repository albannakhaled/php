<?php
include_once ('initSession.php');


$msgerr = "";
if (isset($_POST['submit'])){
	
	if (!empty($_POST['city'])){
		
		$city = new City($_POST['city']);
		$cityCorona->listCity[] = $city;
		
	}
	else 
		$msgerr = "You have to enter a city";
			
}

if (isset($_POST['back'])) 
{
	header("location:menu.php ");
}
include_once ("formCity.php");

?> 